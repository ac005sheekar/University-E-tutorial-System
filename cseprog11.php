<h2>Arrays in C/C++</h2>
An array is collection of items stored at continuous memory locations.<br>

Why do we need arrays?<br><br>
We can use normal variables (v1, v2, v3,..) when we have small number of objects, but if we want to store large number of instances, it becomes difficult to manage them with normal variables. The idea of array is to represent many instances in one variable.<br><br>

Array declaration in C/C++:<br><br><br>



 

We can declare an array by specifying its type and size or by initializing it or by both.<br>

<br>
// Array declaration by specifying size <br>
int arr1[10]; <br>
 
// With recent C/C++ versions, we can also <br>
// declare an array of user specified size <br>
int n = 10; <br>
int arr2[n]; <br>

// Array declaration by initializing elements  <br>
int arr[] = {10, 20, 30, 40} <br>
  
// Compiler creates an array of size 4.  <br>
// above is same as  "int arr[4] = {10, 20, 30, 40}" <br>

// Array declaration by specifying size and initializing  <br>
// elements  <br>
int arr[6] = {10, 20, 30, 40} <br>
  
// Compiler creates an array of size 6, initializes first  <br>
// 4 elements as specified by user and rest two elements as 0. <br>
// above is same as  "int arr[] = {10, 20, 30, 40, 0, 0}" <br>
Accessing Array Elements:<br>
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
} <br><br>
Output:<br><br>

5 2 -10 5<br><br><br>


<h2>Array of Strings in C++ (3 Different Ways to Create)</h2><br><br><br>
Array of Strings can be created in C++, which can be quite handy. There are 3 ways to create Array of Strings.<br><br>

Using 2D array (Both C and C++): This method is useful for shuffling, comparing and accessing characters randomly.<br><br>
Syntax:<br><br>
Char “Name” [“Number of Strings”][“MaxSize of String”]<br><br><br>
Example: Char colour [4][10]<br>
// Here 4 colours can be inserted with max String size of 10.<br><br>


// C++ program to demonstrate array of strings using <br>
// 2D character array <br>
#include<bits/stdc++.h> <br><br>
using namespace std; <br><br>
  
int main() <br>
{ <br>
    // Initialize 2D array <br>
    char colour[4][10] = {"Blue", "Red", "Orange",  
                    "Yellow"};  <br>
      
    // Printing Strings stored in 2D array  <br>
    for (int i = 0; i < 4; i++)  
	<br>
        cout << colour[i] << "\n"; 
      <br>
    return 0; <br>
} <br>
Drawbacks of this method:<br>

Number of Strings and Size of String – both the values are fixed.<br><br>
A 2D array is allocated, whose second dimension is equal to maximum sized string which causes wastage of space.<br><br>
