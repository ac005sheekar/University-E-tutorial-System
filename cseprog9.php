<h2>Loops in C++</h2>
Looping in programming language is a way to execute a statement or a set of statements multiple number of times depending on the result of condition to be evaluated to execute statements. The result condition should be true to execute statements within loops.<br><br>

Loops are mainly divided into two categories:<br><br>
Entry Controlled Loops: The loops in which condition to be tested is present in beginning of loop body are known as Entry Controlled Loops. while loop and for loop are entry controlled loops.<br><br>

1. while loop The test condition is given in beginning of loop and all statements are executed till the given boolean condition satisfies, when the condition becomes false, the control will be out from the while loop.<br><br>

Syntax:<br><br>

while (boolean condition)<br>
{<br>
   loop statements...<br>
}<br><br><br>

// C# program to illustrate while loop <br>
using System; <br><br>
  
class whileLoopDemo <br>
{ <br>
    public static void Main() <br>
    { <br>
        int x = 1; <br>
   
        // Exit when x becomes greater than 4 <br>
        while (x <= 4) <br>
        { <br>
            Console.WriteLine("GeeksforGeeks"); <br>
   
            // Increment the value of x for <br>
            // next iteration <br>
            x++; <br>
        } <br>
    } <br>
} <br><br><br>
Output:<br><br>

GeeksforGeeks<br>
GeeksforGeeks<br>
GeeksforGeeks<br>
GeeksforGeeks<br><br><br>