<h2>Functions in C/C++</h2>
A function is a set of statements that take inputs, do some specific computation and produces output.<br>

<p>The idea is to put some commonly or repeatedly done task together and make a function, so that instead of writing the same code again and again for different inputs, we can call the function.</p>
<br><br><br>
Example: <br>
Below is a simple C program to demonstrate functions in C.<br><br><br>


#include <stdio.h> <br>
  
// An example function that takes two parameters 'x' and 'y' <br>
// as input and returns max of two input numbers <br>
int max(int x, int y) <br>
{ <br>
    if (x > y) <br>
      return x; <br>
    else<br>
      return y; <br>
} <br><br>
  
// main function that doesn't receive any parameter and <br>
// returns integer. <br>
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


Function Declaration<br>
Function declaration tells compiler about number of parameters function takes, data-types of parameters and return type of function. Putting parameter names in function declaration is optional in function declaration, but it is necessary to put them in definition. Below are example of function declarations. (parameter names are not there in below declarations)<br><br>



// A function that takes two integers as parameters <br>
// and returns an integer <br>
int max(int, int); <br><br><br>
  
// A function that takes a char and an int as parameters <br>
// and returns an integer <br>
int fun(char, int); <br>
It is always recommended to declare a function before it is used (See this, this and this for details)<br>

In C, we can do both declaration and definition at same place, like done in above example program.<br><br>

C also allows to declare and define functions separately, this is specially needed in case of library functions. The library functions are declared in header files and defined in library files. Below is an example declaration.<br><br>

<br><br><br>
Parameter Passing to functions<br>
The parameters passed to function are called actual parameters. For example, in the above program 10 and 20 are actual parameters.<br>
The parameters received by function are called formal parameters. For example, in the above program x and y are formal parameters.<br>
There are two most popular ways to pass parameters.<br><br>

Pass by Value: In this parameter passing method, values of actual parameters are copied to function’s formal parameters and the two types of parameters are stored in different memory locations. So any changes made inside functions are not reflected in actual parameters of caller.<br><br>

Pass by Reference Both actual and formal parameters refer to same locations, so any changes made inside the function are actually reflected in actual parameters of caller.<br><br>

In C, parameters are always passed by value. Parameters are always passed by value in C. For example. in the below code, value of x is not modified using the function fun().<br><br>

#include <stdio.h> <br>
void fun(int x) <br>
{ <br>
   x = 30; <br>
} <br><br>
  
int main(void) <br>
{ <br>
    int x = 20; <br>
    fun(x); <br>
    printf("x = %d", x); <br>
    return 0; <br>
} <br>

<br><br><br>


Output:<br>

x = 20<br><br>
However, in C, we can use pointers to get the effect of pass by reference. For example, consider the below program. The function fun() expects a pointer ptr to an integer (or an address of an integer). It modifies the value at the address ptr. The dereference operator * is used to access the value at an address. In the statement ‘*ptr = 30’, value at address ptr is changed to 30. The address operator & is used to get the address of a variable of any data type. In the function call statement ‘fun(&x)’, the address of x is passed so that x can be modified using its address.<br><br><br><br>