#include <iostream>
using namespace std;


int println(basic_string<char> help) {
	cout << help;
	cout << endl;
}

int print(basic_string<char> help) {
	cout << help;
}

int findHelp(int howmuch) {
	for (int i = 0; i < howmuch; i++) {
		println("Trying to find help. None were found. RETRYING...");
	}
}


