<h1>Data Types in C</h1>
Each variable in C has an associated data type. Each data type requires different amounts of memory and has some specific operations which can be performed over it. Let us briefly describe them one by one:<br>

Following are the examples of some very common data types used in C:<br><br><br>

char: The most basic data type in C. It stores a single character and requires a single byte of memory in almost all compilers.<br><br>
int: As the name suggests, an int variable is used to store an integer.<br><br>
float: It is used to store decimal numbers (numbers with floating point value) with single precision.<br><br>
double: It is used to store decimal numbers (numbers with floating point value) with double precision.<br><br>

Different data types also have different ranges upto which they can store numbers. These ranges may vary from compiler to compiler. Below is list of ranges along with the memory requirement and format specifiers on 32 bit gcc compiler.<br><br><br><br>

Data Type----------------Memory (bytes)-----------Range---------------------Format Specifier<br>
short int-------------------2__________-32,768 to 32,767-----------------------%hd<br>
unsigned short int----------2__________ 0 to 65,535----------------------------%hu<br>
unsigned int----------------4__________ 0 to 4,294,967,295---------------------%u<br>
int-------------------------4__________-2,147,483,648 to 2,147,483,647---------%d<br>
long int--------------------4__________-2,147,483,648 to 2,147,483,647---------%ld<br>
unsigned long int-----------4__________ 0 to 4,294,967,295---------------------%lu<br>
long long int---------------8__________-(2^63) to (2^63)-1---------------------%lld<br>
unsigned long long int------8__________ 0 to 18,446,744,073,709,551,615--------%llu<br>
signed char-----------------1__________-128 to 127-----------------------------%c <br>
unsigned char---------------1__________ 0 to 255-------------------------------%c<br>
float-----------------------4--------------------------------------------------%f<br>
double----------------------8--------------------------------------------------%lf<br>
long double-----------------12-------------------------------------------------%Lf<br>

<br><br><br>

Return values of printf() and scanf() in C/C++<br>
What values do the printf() and scanf() functions return ?<br>

printf() : It returns total number of Characters Printed, Or negative value if an output error or an encoding error<br><br>
Example 1: The printf() function in the code written below returns 6. As ‘CODING’ contains 6 characters.<br><br>

#include <stdio.h> <br>
  
int main() <br>
{ <br>
    char st[] = "CODING"; <br>
  
    printf("While printing ");<br> 
    printf(", the value returned by printf() is : %d", <br>
                                    printf("%s", st)); <br>
  
    return 0; <br>
} <br><br>


Output: While printing CODING, the value returned by printf() is : 6<br><br>


scanf() : It returns total number of Inputs Scanned successfully, or EOF if input failure occurs before the first receiving argument was assigned.<br><br>
Example 1: The first scanf() function in the code written below returns 1, as it is scanning 1 item.<br><br> Similarly second scanf() returns 2 as it is scanning 2 inputs and third scanf() returns 3 as it is scanning 3 inputs.<br><br>

int main() <br>
{ <br>
    char a[100], b[100], c[100]; <br>
  
    // scanf() with one input <br>
    printf("\n First scanf() returns : %d", 
                            scanf("%s", a));<br> 
  
    // scanf() with two inputs <br>
    printf("\n Second scanf() returns : %d", 
                       scanf("%s%s", a, b)); <br>
  
    // scanf() with three inputs <br>
    printf("\n Third scanf() returns : %d",  
                  scanf("%s%s%s", a, b, c)); <br>
  
    return 0; <br>
} <br><br><br>

Input:<br>
Hey!<br>
welcome to<br>
geeks for geeks<br>
Output:<br>
 First scanf() returns : 1<br>
 Second scanf() returns : 2<br>
 Third scanf() returns : 3<br><br><br>
 
 