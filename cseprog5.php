<h2>Arrays in C/C++</h2>
An array is collection of items stored at continuous memory locations.<br><br><br>

Why do we need arrays?<br>
We can use normal variables (v1, v2, v3,..) when we have small number of objects, but if we want to store large number of instances, it becomes difficult to manage them with normal variables. The idea of array is to represent many instances in one variable.<br><br>

Array declaration in C/C++:<br><br>

// Array declaration by specifying size <br><br>
int arr1[10]; <br><br>
 
// With recent C/C++ versions, we can also <br>
// declare an array of user specified size <br>
int n = 10; <br>
int arr2[n]; <br>

// Array declaration by initializing elements  <br>
int arr[] = {10, 20, 30, 40} <br>
  
// Compiler creates an array of size 4.  <br><br>
// above is same as  "int arr[4] = {10, 20, 30, 40}" <br><br>

// Array declaration by specifying size and initializing  <br>
// elements  <br>
int arr[6] = {10, 20, 30, 40} <br><br>
  
// Compiler creates an array of size 6, initializes first  <br>
// 4 elements as specified by user and rest two elements as 0. <br>
// above is same as  "int arr[] = {10, 20, 30, 40, 0, 0}" <br>
Accessing Array Elements:<br><br>
Array elements are accessed by using an integer index. Array index starts with 0 and goes till size of array minus 1. Following are few examples.<br><br>


int main() <br>
{ <br>
  int arr[5]; <br>
  arr[0] = 5; <br>
  arr[2] = -10; <br>
  arr[3/2] = 2; // this is same as arr[1] = 2 <br>
  arr[3] = arr[0]; <br>
  
  printf("%d %d %d %d", arr[0], arr[1], arr[2], arr[3]); <br>
  
  return 0; <br>
} <br><br><br>
Output:<br>

5 2 -10 5<br><br><br>
No Index Out of bound Checking:<br>
There is no index out of bound checking in C, for example the following program compiles fine but may produce unexpected output when run.<br><br>


// This C program compiles fine as index out of bound <br>
// is not checked in C. <br><br><br>
int main() <br>
{ <br>
  int arr[2]; <br>
  
  printf("%d ", arr[3]); <br>
  printf("%d ", arr[-2]); <br>
  
  return 0; <br>
}<br>
Also, In C, it is not compiler error to initialize an array with more elements than specified size. For example the below program compiles fine.<br><br>
<br><br><br>

int main() <br>
{ <br>
  
  // Array declaration by initializing it with more <br>
  // elements than specified size. <br>
  int arr[2] = {10, 20, 30, 40, 50}; <br>
  
  return 0; <br>
} <br><br>

The program won’t compile in C++. If we save the above program as a .cpp, the program generates compiler error “error: too many initializers for ‘int [2]'”<br><br><br>

An Example to show that array elements are stored at contiguous locations<br><br>


// C program to demonstrate that array elements are stored <br>
// contiguous locations <br><br><br>
int main() <br>
{ <br>
  // an array of 10 integers.  If arr[0] is stored at <br>
  // address x, then arr[1] is stored at x + sizeof(int) <br>
  // arr[2] is stored at x + sizeof(int) + sizeof(int) <br>
  // and so on. <br>
  int arr[5], i; <br>
  
  printf("Size of integer in this compiler is %u\n", sizeof(int)); <br>
  
  for (i=0; i<5; i++) <br>
    // The use of '&' before a variable name, yields <br>
    // address of variable. <br>
    printf("Address arr[%d] is %u\n", i, &arr[i]); <br>
  
  return 0; <br>
} <br><br><br>
Output:<br>

Size of integer in this compiler is 4<br>
Address arr[0] is 2686728<br>
Address arr[1] is 2686732<br>
Address arr[2] is 2686736<br>
Address arr[3] is 2686740<br>
Address arr[4] is 2686744<br><br><br>
Array vs Pointers<br><br>
Arrays and pointer are two different things (we can check by applying sizeof). The confusion happens because array name indicates address of first element and arrays are always passed as pointers (even if we use square bracket). Please see Difference between pointer and array in C? for more details.<br><br>

What is vector in C++?<br><br>
Vector in C++ is a class in STL that represents an array. The advantages of vector over normal arrays are,<br><br>

We do not need pass size as an extra parameter when we pass vector.<br><br>
Vectors have many in-built function like, erasing an element, etc.<br>
Vectors support dynamic sizes, we do not have to initially specify size of a vector. We can also resize a vector.<br>
There are many other functionalities vector provide, please refer vector in C++ for more details.<br><br><br>




<h2>Strings in C</h2><br><br>
Strings are defined as an array of characters. The difference between a character array and a string is the string is terminated with a special character ‘\0’.<br><br><br>

Declaration of strings: Declaring a string is as simple as declaring a one dimensional array. Below is the basic syntax for declaring a string.<br><br><br>

char str_name[size];<br><br>
In the above syntax str_name is any name given to the string variable and size is used define the length of the string, i.e the number of characters strings will store. Please keep in mind that there is an extra terminating character which is the Null character (‘\0’) used to indicate termination of string which differs strings from normal character arrays.<br><br><br><br>

Initializing a String: A string can be initialized in different ways. We will explain this with the help of an example. Below is an example to declare a string with name as str and initialize it with “GeeksforGeeks”.<br><br>

1. char str[] = "GeeksforGeeks";<br><br>

2. char str[50] = "GeeksforGeeks";<br><br>

3. char str[] = {'G','e','e','k','s','f','o','r','G','e','e','k','s','\0'};<br><br>

4. char str[14] = {'G','e','e','k','s','f','o','r','G','e','e','k','s','\0'};<br><br>
Below is the memory representation of a string “Geeks”.<br><br><br>

// C program to illustrate strings <br>
  
#include<stdio.h> <br>
  
int main() <br>
{    <br>
    // declare and initialize string <br>
    char str[] = "Geeks"; <br>
      
    // print string <br>
    printf("%s",str); <br>
      
    return 0; <br>
} <br><br><br>
Output:<br>

Geeks<br><br><br>


