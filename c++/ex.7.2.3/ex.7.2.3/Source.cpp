//if number is prime

#include <iostream>

using namespace std;

int main()
{
	int num;
	int div;
	int res = 0;
	cin >> num;

	if (num <= 0 || num == 1) {
		cout << "N\A" << endl;
		return 0;
	}
	
	for (div = 2; div < num; div++)
	{
		if (num % div == 0)
		{
			res = 1;
			break;
		}
		
	}
	if (res == 0) {
		cout << "Yes" << endl;
	}
	else {
		cout << "No" << endl;
	}

	system("pause");
	return main();
}