<h2>Functions in C/C++</h2><br><br><br>
A function is a set of statements that take inputs, do some specific computation and produces output.<br><br>

The idea is to put some commonly or repeatedly done task together and make a function, so that instead of writing the same code again and again for different inputs, we can call the function.<br><br>
 
Example: <br><br>
Below is a simple C program to demonstrate functions in C.<br><br>


#include <stdio.h> <br><br>
  
// An example function that takes two parameters 'x' and 'y' <br>
// as input and returns max of two input numbers<br><br>
int max(int x, int y) <br>
{ <br>
    if (x > y) <br>
      return x; <br>
    else<br>
      return y; <br>
} <br>
  
// main function that doesn't receive any parameter and <br>
// returns integer. <br><br><br>
int main(void) <br>
{ <br>
    int a = 10, b = 20; <br>
  
    // Calling above function to find max of 'a' and 'b' <br>
    int m = max(a, b); <br>
  
    printf("m is %d", m); <br>
    return 0; <br>
} <br><br><br>
Output:<br>

m is 20<br><br><br>


 

<h2>Function Declaration</h2><br><br>
Function declaration tells compiler about number of parameters function takes, data-types of parameters and return type of function. Putting parameter names in function declaration is optional in function declaration, but it is necessary to put them in definition. Below are example of function declarations. (parameter names are not there in below declarations)<br><br>


// A function that takes two integers as parameters <br>
// and returns an integer <br>
int max(int, int); <br><br>
  
// A function that takes a char and an int as parameters <br>
// and returns an integer <br>
int fun(char, int); <br>
It is always recommended to declare a function before it is used (See this, this and this for details)<br>

In C, we can do both declaration and definition at same place, like done in above example program.<br>

C also allows to declare and define functions separately, this is specially needed in case of library functions. The library functions are declared in header files and defined in library files. Below is an example declaration.<br><br>


