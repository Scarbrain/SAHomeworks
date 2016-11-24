#include<iostream>

using namespace std;

int main() {
	
	int number = 0;
	cout << "enter number: " << endl;
	cin >> number;
	int newNumber = 0;
	int  result = 0;

	while (number > 0) {

		//newNumber = number % 10;

		result = result + number%10;

		number = number / 10;
	}
	cout << result << endl;

	system("pause");
	return 0;
}