#include<iostream>
using namespace std;
int main()
{
	string start = "\u0A85";

	while (start <= "\u0AB9")
	{
		if (start == "\u0A8E" || start == "\u0A92" || start == "\u0AA9" || start == "\u0AB1" || start == "\u0AB4")
		{

		}
		else {
			cout << start << endl;
		}

		start[start.length() - 1]++;
	}

}