#include<iostream>
#include<string>
#include<sstream>


using namespace std;

int main() {
	string str;
	cout << "nomer i ocenka: " << endl;
	getline(cin, str);
	int i = 0;

	while (str[i] != ' ' || str[i] != '/t') {
		i++;
		
	}
	char c = str[i + 1];
	cout << c;


	/*char c = str[i+1];
	int grade = int (c);
	cout << grade << endl;*/


	/*string str;
	cout << "nomer i ocenka: " << endl;
	getline(cin, str);
	
	for (int i = 0; i<6; i++) {
		string fn;
		fn[i] = str[i];
	}
	for (int i = 7; i<11; i++) {
		string grade[i] = str[i];

	}
	double newGrade = stod(grade);

	cout << fn << endl;
	cout << newGrade << endl;*/
	system("pause");
	return 0;
}