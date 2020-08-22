<h2>Pointers in C and C++ | Set 1 (Introduction, Arithmetic and Array)</h2><br><br>
Pointers store address of variables or a memory location.<br>

// General syntax<br>
datatype *var_name; <br><br>

// An example pointer "ptr" that holds<br>
// address of an integer variable or holds<br>
// address of a memory whose value(s) can<br>
// be accessed as integer values through "ptr"<br>
int *ptr;  <br><br>
Using a Pointer:<br><br>
To use pointers in C, we must understand below two operators.<br><br>

To access address of a variable to a pointer, we use the unary operator & (ampersand) that returns the address of that variable. For example &x gives us address of variable x.<br><br>



// The output of this program can be different <br>
// in different runs. Note that the program <br>
// prints address of a variable and a variable <br>
// can be assigned different address in different <br>
// runs. <br>
#include <stdio.h> <br><br>
  
int main() <br>
{ <br>
    int x; <br>
  
    // Prints address of x <br>
    printf("%p", &x); <br>
  
    return 0; <br>
} <br><br>
One more operator is unary * (Asterisk) which is used for two things :<br><br>
To declare a pointer variable: When a pointer variable is declared in C/C++, there must a * before its name.<br><br>

// C program to demonstrate declaration of <br>
// pointer variables. <br>
#include <stdio.h> <br><br>
int main() <br>
{ <br>
    int x = 10; <br>
  
    // 1) Since there is * in declaration, ptr <br>
    // becomes a pointer varaible (a variable <br>
    // that stores address of another variable) <br>
    // 2) Since there is int before *, ptr is <br>
    // pointer to an integer type variable <br>
    int *ptr; <br><br>
  
    // & operator before x is used to get address <br>
    // of x. The address of x is assigned to ptr. <br>
    ptr = &x; <br>
  
    return 0; <br>
}<br><br>

