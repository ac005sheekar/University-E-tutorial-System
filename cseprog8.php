<h2>I/O Redirection in C++</h2><br><br>

In C, we could use the function freopen() to redirect an existing FILE pointer to another stream. The prototype for freopen() is given as<br><br>

FILE * freopen ( const char * filename, const char * mode, FILE * stream );<br>
For Example to redirect the stdout to say a textfile, we could write<br>

freopen ("text_file.txt", "w", stdout);<br><br>
While this method is still supported in C++, this article discusses another way to redirect I/O streams.<br><br>

C++ being an object-oriented programming language gives us the ability to not only define our own streams but also redirect standard streams. Thus in C++, a stream is an object whose behavior is defined by a class. Thus anything that behaves like a stream is also a stream.<br><br><br>

Basic Input / Output in C++
C++ comes with libraries which provides us many ways for performing input and output. In C++ input and output is performed in the form of sequence of bytes or more commonly known as streams.

Input Stream: If the direction of flow of bytes is from device(for example: Keyboard) to the main memory then this process is called input.

Output Stream: If the direction of flow of bytes is opposite, i.e. from main memory to device( display screen ) then this process is called output.



 

Header files available in C++ for Input – Output operation are:<br><br>

iostream: iostream stands for standard input output stream. This header file contains definitions to objects like cin, cout, cerr etc.<br><br>
iomanip: iomanip stands for input output manipulators. The methods declared in this files are used for manipulating streams. This file contains definitions of setw, setprecision etc.<br><br>
fstream: This header file mainly describes the file stream. This header file is used to handle the data being read from a file as input or data being written into the file as output.<br><br><br>


#include <iostream> <br>
   
using namespace std; <br><br>
   
int main( ) { <br><br>
   char sample[] = "GeeksforGeeks"; <br>
   
   cout << sample << " - A computer science portal for geeks"; 
     <br>
   return 0; <br>
} <br><br><br>
Output:<br>



 

GeeksforGeeks - A computer science portal for geeks<br><br>


standard input stream (cin): Usually the input device is the keyboard. cin is the instance of the class istream and is used to read input from the standard input device which is usually keyboard.<br><br>
The extraction operator(>>) is used along with the object cin for reading inputs. The extraction operator extracts the data from the object cin which is entered using the keboard.<br><br>

#include<iostream> <br><br>
using namespace std; <br><br>
  
int main() <br>
{ <br>
    int age; <br>
      
    cout << "Enter your age:"; 
	<br>
    cin >> age; <br>
    cout << "\nYour age is: "<<age; 
      <br>
    return 0; <br>
} <br><br><br>
Input : 18<br><br>
Output:<br><br><br>

Enter your age:<br><br>
Your age is: 18<br><br><br>


