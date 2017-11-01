#include <iostream>
#include <fstream>
#include <vector>
#include <iomanip>



using namespace std;

class Deduction {
public:
    Deduction(const string &type) : type (type){}
    const string& getType() const {
        return type;
    }
    virtual float calculateDeduction(float salary) = 0;

    virtual ~Deduction(){}

private:
    string type;
};

class Calculator {
public:
    Calculator(vector<Deduction*> &deductions);
    void analyze(float salary, ostream& stream ) {

        stream<<"Gross salary /t/t/t"<<salary<<" BGN"<<endl;
        stream<<"------------------------------------------"<< endl;
        float deductionSum = 0;
        for(auto& deduction : deductions)
        {
            float currentDeduction = deduction->calculateDeduction(salary);
            deductionSum += currentDeduction;
            stream<<deduction->getType()<<"/t/t/t"<<currentDeduction<<" BGN"<<endl;

        }
        stream<<"=========================================="<<endl;
        stream<<"Net salary /t/t/t "<<salary-deductionSum<<" BGN"<<endl;

    }
private:
    vector<Deduction *> &deductions;
};

Calculator::Calculator(vector<Deduction *> &deductions):deductions(deductions) {

}


class IncomeTax: public Deduction {
public:
    IncomeTax(const string &type, float percent)
            : Deduction(type)
            ,percent(percent)
    {}
    ~IncomeTax(){}

    float calculateDeduction(float salary) override {

        return salary*percent;
    }
private:
    float percent;
};
class SocialsecurityTax: public Deduction {
public:
    SocialsecurityTax(const string &type,float percent, float upperBound)
            : Deduction(type)
            ,percent(percent)
            ,upperBound(upperBound)
    {}
    ~SocialsecurityTax(){}

    float calculateDeduction(float salary) override {
        float taxable = salary > upperBound ? upperBound:salary;
        return taxable*percent;
    }

private:
    float percent;
    float upperBound;
};

vector<Deduction*> loadDeductions(const char* fileName)
{

    ifstream file;
    file.open(fileName);
    if(!file.is_open()) {
        return vector<Deduction*> ();
    }

    vector<Deduction*> deductions;
    while (!file.eof())
    {
        string tmp;
    //    ifstream infile("config.ini");
        getline(cin, tmp);
        auto position = tmp.find(":");
        auto deductionName = tmp.substr(0,position + 1);

        if(deductionName == string("Income Tax"))
        {
            auto value = tmp.substr(position+1, tmp.size()-position);
            auto number = stof(value);

            deductions.push_back(new IncomeTax(deductionName,number));
        }
        else
        {
            auto values =  tmp.substr(position+1, tmp.size()-position);
            auto intervalPosition = values.find(' ');
            auto first = stof(values.substr(0,intervalPosition + 1));
            auto second = stof(values.substr(intervalPosition + 1,values.size()-intervalPosition));
            deductions.push_back(new SocialsecurityTax(deductionName,first,second));

        }
    }

    file.close();

    return  deductions;
}

void prepareIniFile() {
    int configLinesCount;
    cin >> configLinesCount;
    string configLine;
    getline(cin, configLine); // trailing end of line
    ofstream fout("config.ini");
    for (int i = 0; i < configLinesCount; i++) {
        getline(cin, configLine);
        fout << configLine << endl;
    }
    fout.close();
}

int main(int argc, char *argv[]) {

    prepareIniFile();

    vector<Deduction *> deductions = loadDeductions("config.ini");

    double salary;
    Calculator calc(deductions);
    while (cin >> salary) {
        calc.analyze(salary, cout);
        cout << endl;
    }

    return 0;
}