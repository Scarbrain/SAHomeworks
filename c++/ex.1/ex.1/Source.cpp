#include<iostream>

using namespace std;

int main() {
	//int a = 0;
	//cout << "enter a: " << endl;
	//cin >> a;
	int b = 0;
	cout << "enter b:" << endl;
	cin >> b;

	for (int i = 5; i <= b; i = i + 3) {
		cout << i << endl;
	}

	system("pause");
	return 0;
}