/*
 * 20181023
 * Gabriel Cesar
 * gabrielcesar2@gmail.com
 */

#include <iostream>

using namespace std;

int main() {
	for(int i = 1; i <= 200; i++)
	{
		if (i % 6 == 0 && i % 5 == 0)
			cout << i << " Santarem" << endl;
		else if(i % 6 == 0)
			cout << i << " Santa" << endl;
		else if(i % 5 == 0)
			cout << i << " rem" << endl;
		else
			cout << i << endl;
	}

	return 0;
}
