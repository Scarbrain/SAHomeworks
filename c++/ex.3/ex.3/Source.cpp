//да се намерят квадратите на числата до n.

#include<iostream>

using namespace std;

int main() {
	int n = 0;
	cout << "enter n: " << endl;
	cin >> n;


	for (int i = 1; i <= n; i++) {
		cout << i << "\t" << i*i << endl;
	}

	system("pause");
	return 0;
}