#include<iostream>

using namespace std;

int main() {

	double a = 0;
	double b = 0;
	double c = 0;
	cout << "enter numbers: " << endl;
	cin >> a;
	cin >> b;
	cin >> c;

	double f = 0;

	f = (a + b + c) / 3;

	cout.setf(ios::fixed, ios::floatfield);
	cout.precision(3);

	cout << f << endl;


	system("pause");
	return 0;
}