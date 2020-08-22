<h2>Stack Data Structure (Introduction and Program)</h2><br><br><br>
Stack is a linear data structure which follows a particular order in which the operations are performed. The order may be LIFO(Last In First Out) or FILO(First In Last Out).<br><br>
Mainly the following three basic operations are performed in the stack:<br><br>

Push: Adds an item in the stack. If the stack is full, then it is said to be an Overflow condition.<br><br>
Pop: Removes an item from the stack. The items are popped in the reversed order in which they are pushed. If the stack is empty, then it is said to be an Underflow condition.<br><br>
Peek or Top: Returns top element of stack.<br><br>
isEmpty: Returns true if stack is empty, else false.<br><br>


How to understand a stack practically?<br><br>
There are many real life examples of stack. Consider the simple example of plates stacked over one another in canteen. The plate which is at the top is the first one to be removed, i.e. the plate which has been placed at the bottommost position remains in the stack for the longest period of time. So, it can be simply seen to follow LIFO/FILO order.<br><br>

Time Complexities of operations on stack:<br><br>

push(), pop(), isEmpty() and peek() all take O(1) time. We do not run any loop in any of these operations.<br><br>

Applications of stack:<br><br>

Balancing of symbols<br><br>
Infix to Postfix /Prefix conversion<br><br>
Redo-undo features at many places like editors, photoshop.<br><br>
Forward and backward feature in web browsers<br><br>
Used in many algorithms like Tower of Hanoi, tree traversals, stock span problem, histogram problem.<br><br>
Other applications can be Backtracking, Knight tour problem, rat in a maze, N queen problem and sudoku solver<br><br>
In Graph Algorithms like Topological Sorting and Strongly Connected Components<br><br>
Implementation:<br><br>
There are two ways to implement a stack:<br><br>

Using array<br><br>
Using linked list<br><br>
Implementing Stack using Arrays<br><br>

Recommended: Please solve it on “PRACTICE” first, before moving on to the solution.<br><br>


 


/* C++ program to implement basic stack <br><br>
   operations */<br><br>
#include<bits/stdc++.h> <br><br>
  
using namespace std; <br><br>
  
#define MAX 1000 <br><br>
  
class Stack <br>
{ <br>
    int top; <br>
public: <br>
    int a[MAX];    //Maximum size of Stack <br>
  
    Stack()  { top = -1; } <br>
    bool push(int x); <br>
    int pop(); <br>
    bool isEmpty(); <br>
}; <br><br>
  
bool Stack::push(int x) <br>
{ <br>
    if (top >= (MAX-1)) <br>
    { <br>
        cout << "Stack Overflow"; 
		<br>
        return false; <br>
    } <br>
    else<br>
    { <br>
        a[++top] = x; <br>
        cout<<x <<" pushed into stack\n"; 
		<br>
        return true; <br>
    } <br>
} <br>
  
int Stack::pop() <br>
{ <br>
    if (top < 0) <br>
    { <br>
        cout << "Stack Underflow"; 
		<br>
        return 0; <br>
    } <br>
    else<br>
    { <br>
        int x = a[top--]; <br>
        return x; <br>
    } <br>
} <br>
  
bool Stack::isEmpty() <br>
{ <br>
    return (top < 0); <br>
} <br>
  
// Driver program to test above functions <br>
int main() <br>
{ <br>
    struct Stack s; <br>
    s.push(10); <br>
    s.push(20); <br>
    s.push(30); <br>
    cout<<s.pop() << " Popped from stack\n"; <br><br>
  
    return 0; <br>
} <br>
Pros: Easy to implement. Memory is saved as pointers are not involved.<br>
Cons: It is not dynamic. It doesn’t grow and shrink depending on needs at runtime.<br><br><br>

Output :<br><br>

10 pushed into stack<br><br>
20 pushed into stack<br><br>
30 pushed into stack<br><br>
30 popped from stack<br><br>