//да се пресметне a на степен n.

#include<iostream>

using namespace std;

int main() {
	double a = 0;
	double result = 1;
	cout << "enter a: " << endl;
	cin >> a;
	int n = 0;
	cout << "enter n: " << endl;
	cin >> n;

	for (int i = 0; i < n; i++) {
		result = result * a;
	}
	cout << result << endl;
	system("pause");
}