#include<iostream>

using namespace std;

int main() {
	int num;
	cout << "enter number: " << endl;
	cin >> num;
	
	
	int newnum = 0;
	int res = 0;
	int smallest = 10;

	//if (num = 0) {
		//cout << num << endl;
	//}
	//else {

		while (num > 0) {

			newnum = num % 10;

			if (newnum < smallest) {
				smallest = newnum;
			}

			num = num / 10;

		}

		cout << smallest << endl;
	//}
	system("pause");
	return 0;
}