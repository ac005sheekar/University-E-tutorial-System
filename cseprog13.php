<h2>Basic Concepts of Object Oriented Programming using C++</h2><br>
Object oriented programming – As the name suggests uses objects in programming. Object oriented programming aims to implement real world entities like inheritance, hiding, polymorphism etc in programming. The main aim of OOP is to bind together the data and the functions that operates on them so that no other part of code can access this data except that function.<br><br>
Let us learn about different characteristics of an Object Oriented Programming language:<br><br>
Object: Objects are basic run-time entities in an object oriented system, objects are instances of a class these are defined user defined data types.<br><br><br>

<h2>Inheritance in C++</h2><br>
The capability of a class to derive properties and characteristics from another class is called Inheritance. Inheritance is one of the most important feature of Object Oriented Programming.<br><br>
Sub Class: The class that inherits properties from another class is called Sub class or Derived Class.<br><br>
Super Class:The class whose properties are inherited by sub class is called Base Class or Super class.<br>

The article is divided into following subtopics:<br><br>

Why and when to use inheritance?<br><br>
Modes of Inheritance<br><br>
Types of Inheritance<br><br>
Why and when to use inheritance?<br><br>

Consider a group of vehicles. You need to create classes for Bus, Car and Truck. The methods fuelAmount(), capacity(), applyBrakes() will be same for all of the three classes.<br><br><br>

// C++ program to demonstrate implementation <br><br>
// of Inheritance <br><br>
   
#include <bits/stdc++.h> <br><br>
using namespace std; <br><br>
  
//Base class <br>
class Parent <br>
{ <br>
    public: <br>
      int id_p; <br>
}; <br><br>
   
// Sub class inheriting from Base Class(Parent) <br>
class Child : public Parent <br>
{ <br>
    public: <br>
      int id_c; <br>
}; <br><br>
  
//main function <br><br>
int main()  <br>
   { <br>
       
        Child obj1; <br>
           
        // An object of class child has all data members <br>
        // and member functions of class parent <br>
        obj1.id_c = 7; <br>
        obj1.id_p = 91; <br>
        cout << "Child id is " <<  obj1.id_c << endl; <br>
        cout << "Parent id is " <<  obj1.id_p << endl; <br>
          
        return 0; <br>
   }  <br><br><br>
Output:<br>

Child id is 7<br><br>
Parent id is 91<br><br>
In the above program the ‘Child’ class is publicly inherited from the ‘Parent’ class so the public data members of the class ‘Parent’ will also be inherited by the class ‘Child’.<br><br>

Modes of Inheritance<br><br>

Public mode: If we derive a sub class from a public base class. Then the public member of the base class will become public in the derived class and protected members of the base class will become protected in derived class.<br><br><br>
Protected mode: If we derive a sub class from a Protected base class. Then both public member and protected members of the base class will become protected in derived class.<br><br>
Private mode: If we derive a sub class from a Private base class. Then both public member and protected members of the base class will become Private in derived class.<br><br><br>



<h2>Polymorphism in C++</h2><br><br><br>
The word polymorphism means having many forms. In simple words, we can define polymorphism as the ability of a message to be displayed in more than one form.<br><br>
Real life example of polymorphism, a person at a same time can have different characteristic. Like a man at a same time is a father, a husband, a employee. So a same person posses have different behavior in different situations. This is called polymorphism.<br><br>
Polymorphism is considered as one of the important features of Object Oriented Programming.
In C++ polymorphism is mainly divided into two types:<br><br>

Compile time Polymorphism<br><br>
Runtime Polymorphism<br><br>
Compile time polymorphism: <br><br>This type of polymorphism is achieved by function overloading or operator overloading. <br><br>

 

Function Overloading: <br><br>When there are multiple functions with same name but different parameters then these functions are said to be overloaded. Functions can be overloaded by change in number of arguments or/and change in type of arguments.<br><br>
Rules of Function Overloading<br><br>

// C++ program for function overloading <br>
#include <bits/stdc++.h> <br><br>
  
using namespace std; <br><br>
class Geeks <br>
{ <br>
    public: <br>
      
    // function with 1 int parameter <br>
    void func(int x) <br>
    { <br>
        cout << "value of x is " << x << endl; <br>
    } <br>
      
    // function with same name but 1 double parameter <br>
    void func(double x) <br>
    { <br>
        cout << "value of x is " << x << endl; <br>
    } <br>
      
    // function with same name and 2 int parameters <br>
    void func(int x, int y) <br>
    { <br>
        cout << "value of x and y is " << x << ", " << y << endl; <br>
    } <br>
}; <br><br>
  
int main() { <br>
      
    Geeks obj1; <br>
      
    // Which function is called will depend on the parameters passed<br> 
    // The first 'func' is called  <br>
    obj1.func(7); <br>
      
    // The second 'func' is called <br>
    obj1.func(9.132); <br>
      
    // The third 'func' is called <br>
    obj1.func(85,64); <br>
    return 0; <br>
}  <br><br><br>
Output:<br><br>

value of x is 7<br>
value of x is 9.132<br>
value of x and y is 85, 64<br>
In the above example, a single function named func acts differently in three different situations which is the property of polymorphism.<br><br>

Operator Overloading: C++ also provide option to overload operators. For example, we can make the operator (‘+’) for string class to concatenate two strings. We know that this is the addition operator whose task is to add to operands. So a single operator ‘+’ when placed between integer operands , adds them and when placed between string operands, concatenates them.<br><br>
Example:<br><br>

// CPP program to illustrate <br>
// Operator Overloading <br>
#include<iostream> <br><br>
using namespace std; <br><br>
   
class Complex { <br>
private: <br>
    int real, imag; <br>
public: <br>
    Complex(int r = 0, int i =0)  {real = r;   imag = i;} <br>
       
    // This is automatically called when '+' is used with <br>
    // between two Complex objects <br>
    Complex operator + (Complex const &obj) { <br>
         Complex res; <br>
         res.real = real + obj.real; <br>
         res.imag = imag + obj.imag; <br>
         return res; <br>
    } <br><br>
    void print() { cout << real << " + i" << imag << endl; } 
	<br>
}; <br><br>
   
int main() <br>
{ <br>
    Complex c1(10, 5), c2(2, 4); <br>
    Complex c3 = c1 + c2; // An example call to "operator+" <br>
    c3.print(); <br>
} <br><br><br>
Output:<br><br>

12 + i9<br><br>
In the above example the operator ‘+’ is overloaded. The operator ‘+’ is an addition operator and can add two numbers(integers or floating point) but here the operator is made to perform addition of two imaginary or complex numbers. To learn operator overloading in details visit this link.<br><br><br>

Runtime polymorphism: This type of polymorphism is achieved by Function Overriding.<br><br>
Function overriding on the other hand occurs when a derived class has a definition for one of the member functions of the base class. That base function is said to be overridden.<br><br>

// C++ program for function overriding <br><br>
  
#include <bits/stdc++.h> <br><br>
using namespace std; <br><br>
  
class base <br>
{ <br>
public:<br> 
    virtual void print () <br>
    { cout<< "print base class" <<endl; }
   <br>
    void show () <br>
    { <br>
	cout<< "show base class" <<endl; 
	} <br>
	
}; <br><br>
   
class derived:public base <br>
{ <br>
public: <br>
    void print () //print () is already virtual function in derived class, we could also declared as virtual void print () explicitly <br>
    { cout<< "print derived class" <<endl; } <br><br>
   
    void show () <br>
    { cout<< "show derived class" <<endl; } <br>
}; <br><br>
  
//main function <br>
int main()  <br>
{ <br>
    base *bptr; <br>
    derived d; <br>
    bptr = &d; <br>
       
    //virtual function, binded at runtime (Runtime polymorphism) <br>
    bptr->print();  <br>
       
    // Non-virtual function, binded at compile time <br>
    bptr->show();  <br>
  
    return 0; <br>
}  <br>
Output:<br><br>

print derived class<br>
show base class<br>


