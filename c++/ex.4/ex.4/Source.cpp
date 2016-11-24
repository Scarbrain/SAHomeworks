//числа на Фибоначи

#include<iostream>

using namespace std;

int main() {
	int a0 = 0;
	int a1 = 1;
	int n = 0;
	cin >> n;
	int an = 0;

	if (n == a0) {
		cout << "a0" << endl;
	}
	else if (n == a1) {
		cout << "a1" << endl;
	}
	else {
		for (int k = 2; k <= n; k++) {
			an = a0 + a1;
			a0 = a1;
			a1 = an;
		}
		cout << an << endl;
	}

	system("pause");
	return 0;
}