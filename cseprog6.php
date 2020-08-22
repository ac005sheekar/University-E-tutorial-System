<h1>Pointers in C and C++ | Set 1 (Introduction, Arithmetic and Array)</h1><br><br>
Pointers store address of variables or a memory location.<br><br>

// General syntax<br><br>
datatype *var_name; <br><br><br>

// An example pointer "ptr" that holds<br>
// address of an integer variable or holds<br>
// address of a memory whose value(s) can<br>
// be accessed as integer values through "ptr"<br>
int *ptr;  <br><br>
Using a Pointer:<br><br>
To use pointers in C, we must understand below two operators.<br><br>

To access address of a variable to a pointer, we use the unary operator & (ampersand) that returns the address of that variable. For example &x gives us address of variable x.<br><br><br>

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

// C program to demonstrate declaration of <br><br>
// pointer variables. <br><br>
#include <stdio.h> <br><br>
int main() <br>
{ <br>
    int x = 10; <br>
  
    // 1) Since there is * in declaration, ptr <br>
    // becomes a pointer varaible (a variable <br>
    // that stores address of another variable) <br>
    // 2) Since there is int before *, ptr is <br>
    // pointer to an integer type variable <br>
    int *ptr; <br>
  
    // & operator before x is used to get address <br>
    // of x. The address of x is assigned to ptr. <br>
    ptr = &x; <br>
  
    return 0; <br>
}<br>

<br><br><br>
 


// C program to demonstrate use of * for pointers in C <br><br>
#include <stdio.h> <br><br>
  
int main() <br>
{ <br>
    // A normal integer variable <br>
    int Var = 10; <br>
  
    // A pointer variable that holds address of var. <br>
    int *ptr = &Var; <br>
  
    // This line prints value at address stored in ptr. <br>
    // Value stored is value of variable "var" <br>
    printf("Value of Var = %d\n", *ptr); <br>
  
    // The output of this line may be different in different <br>
    // runs even on same machine. <br>
    printf("Address of Var = %p\n", ptr); <br>
  
    // We can also use ptr as lvalue (Left hand <br>
    // side of assignment) <br>
    *ptr = 20; // Value at address is now 20 <br>
  
    // This prints 20 <br>
    printf("After doing *ptr = 20, *ptr is %d\n", *ptr); <br>
  
    return 0; <br>
} <br>
Output :<br><br>

Value of Var = 10<br>
Address of Var = 0x7fffa057dd4<br>
After doing *ptr = 20, *ptr is 20<br>


