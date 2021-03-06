<h2>Linked List </h2><br><br><br>
Like arrays, Linked List is a linear data structure. Unlike arrays, linked list elements are not stored at contiguous location; the elements are linked using pointers.<br><br><br>


Why Linked List?<br><br>
Arrays can be used to store linear data of similar types, but arrays have following limitations.<br><br>
1) The size of the arrays is fixed: So we must know the upper limit on the number of elements in advance. Also, generally, the allocated memory is equal to the upper limit irrespective of the usage.<br><br>
2) Inserting a new element in an array of elements is expensive, because room has to be created for the new elements and to create room existing elements have to shifted.<br><br>



 

For example, in a system if we maintain a sorted list of IDs in an array id[].<br><br>

id[] = [1000, 1010, 1050, 2000, 2040].<br><br>

And if we want to insert a new ID 1005, then to maintain the sorted order, we have to move all the elements after 1000 (excluding 1000).<br><br>
Deletion is also expensive with arrays until unless some special techniques are used. For example, to delete 1010 in id[], everything after 1010 has to be moved.<br><br>

Advantages over arrays<br><br>
1) Dynamic size<br><br>
2) Ease of insertion/deletion<br><br>


<br>
 

Drawbacks:<br><br>
1) Random access is not allowed. We have to access elements sequentially starting from the first node. So we cannot do binary search with linked lists efficiently with its default implementation. Read about it here.<br><br><br>
2) Extra memory space for a pointer is required with each element of the list.<br><br><br>
3) Not cache friendly. Since array elements are contiguous locations, there is locality of reference which is not there in case of linked lists.<br><br><br>

Representationv:<br><br>
A linked list is represented by a pointer to the first node of the linked list. The first node is called head. If the linked list is empty, then value of head is NULL.<br><br>
Each node in a list consists of at least two parts:<br><br>
1) data<br><br>
2) Pointer (Or Reference) to the next node<br><br>
In C, we can represent a node using structures. Below is an example of a linked list node with an integer data.<br><br>
In Java, LinkedList can be represented as a class and a Node as a separate class. The LinkedList class contains a reference of Node class type.<br><br>

// A linked list node <br><br>
struct Node <br><br>
{ <br>
  int data; <br>
  struct Node *next; <br>
}; <br><br>
First Simple Linked List in C Let us create a simple linked list with 3 nodes.<br><br>


// A simple C program to introduce <br><br>
// a linked list <br><br>
#include<stdio.h> <br>
#include<stdlib.h> <br><br>
  
struct Node  <br>
{ <br>
  int data; <br>
  struct Node *next; <br>
}; <br><br>
  
// Program to create a simple linked  <br>
// list with 3 nodes <br>
int main() <br>
{ <br>
  struct Node* head = NULL; <br>
  struct Node* second = NULL; <br>
  struct Node* third = NULL; <br>
    
  // allocate 3 nodes in the heap<br>   
  head = (struct Node*)malloc(sizeof(struct Node));  <br>
  second = (struct Node*)malloc(sizeof(struct Node)); <br>
  third = (struct Node*)malloc(sizeof(struct Node)); <br>
  
  /* Three blocks have been allocated  dynamically.  <br>
     We have pointers to these three blocks as first, <br>
     second and third      <br>
       
   # represents any random value. <br>
   Data is random because we haven’t assigned  <br>
   anything yet  */<br>
    
  head->data = 1; //assign data in first node <br>
  head->next = second; // Link first node with  <br>
                       // the second node <br>
    
  /* data has been assigned to data part of first <br><br>
     block (block pointed by head).  And next <br><br>
     pointer of first block points to second.   <br><br>
     So they both are linked. <br><br>
  
       
  // assign data to second node  <br>
  second->data = 2;  <br>
  
  // Link second node with the third node <br>
  second->next = third; <br>
    
  /* data has been assigned to data part of second <br><br>
     block (block pointed by second). And next <br><br>
     pointer of the second block points to third  <br><br>
     block. So all three blocks are linked. <br><br>
    
       
    
  third->data = 3; //assign data to third node <br><br>
  third->next = NULL; <br><br>
    
  /* data has been assigned to data part of third <br><br>
    block (block pointed by third). And next pointer <br><br>
    of the third block is made NULL to indicate <br><br>
    that the linked list is terminated here. <br><br>
  
     We have the linked list ready.   <br><br>
  
           
      
    Note that only head is sufficient to represent  <br><br>
    the whole list.  We can traverse the complete  <br><br>
    list by following next pointers.    */      <br><br>
  
  return 0; <br><br>
} <br><br>
