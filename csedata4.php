<h2>Binary Search Tree |(Search and Insertion)</h2><br><br><br><br>
The following is definition of Binary Search Tree(BST) according to Wikipedia<br><br>

Binary Search Tree, is a node-based binary tree data structure which has the following properties:<br><br>
The left subtree of a node contains only nodes with keys lesser than the node’s key.<br><br>
The right subtree of a node contains only nodes with keys greater than the node’s key.<br><br>
The left and right subtree each must also be a binary search tree.<br><br>
There must be no duplicate nodes.<br><br>


The above properties of Binary Search Tree provide an ordering among keys so that the operations like search, minimum and maximum can be done fast. If there is no ordering, then we may have to compare every key to search a given key.<br><br>



 

Searching a key<br>
To search a given key in Binary Search Tree, we first compare it with root, if the key is present at root, we return root. If key is greater than root’s key, we recur for right subtree of root node. Otherwise we recur for left subtree.<br><br>

Recommended: Please solve it on “PRACTICE” first, before moving on to the solution.<br><br>

<br><br><br>
 


// C function to search a given key in a given BST <br><br>
struct node* search(struct node* root, int key) <br>
{ <br>
    // Base Cases: root is null or key is present at root <br><br><br>
    if (root == NULL || root->key == key) <br>
       return root; <br>
     
    // Key is greater than root's key <br>
    if (root->key < key) <br>
       return search(root->right, key); <br>
  
    // Key is smaller than root's key <br>
    return search(root->left, key); <br>
} <br><br>

Illustration to search 6 in below tree:<br><br>
1. Start from root.<br><br>
2. Compare the inserting element with root, if less than root, then recurse for left, else recurse for right.<br><br>
3. If element to search is found anywhere, return true, else return false.<br><br>

 

Insertion of a key<br><br>
A new key is always inserted at leaf. We start searching a key from root till we hit a leaf node. Once a leaf node is found, the new node is added as a child of the leaf node.<br><br>

         
// C program to demonstrate insert operation in binary search tree <br><br>
#include<stdio.h> <br><br>
#include<stdlib.h> <br><br><br>
   
struct node <br>
{ <br>
    int key; <br>
    struct node *left, *right; <br>
}; <br><br>
   
// A utility function to create a new BST node <br><br>
struct node *newNode(int item) <br>
{ <br>
    struct node *temp =  (struct node *)malloc(sizeof(struct node)); <br><br>
    temp->key = item; <br><br>
    temp->left = temp->right = NULL; <br><br>
    return temp; <br><br>
} <br><br><br>
   
// A utility function to do inorder traversal of BST <br><br>
void inorder(struct node *root) <br>
{ <br>
    if (root != NULL) <br>
    { <br>
        inorder(root->left); <br>
        printf("%d \n", root->key); <br>
        inorder(root->right); <br>
    } <br><br>
} <br><br>
   
/* A utility function to insert a new node with given key in BST */<br><br>
struct node* insert(struct node* node, int key) <br>
{ <br>
    /* If the tree is empty, return a new node */<br>
    if (node == NULL) return newNode(key); <br>
  
    /* Otherwise, recur down the tree */<br>
    if (key < node->key) <br>
        node->left  = insert(node->left, key); <br>
    else if (key > node->key) <br>
        node->right = insert(node->right, key);    <br>
  
    /* return the (unchanged) node pointer */<br>
    return node; <br>
} <br><br><br>
   
// Driver Program to test above functions <br><br>
int main() <br>
{ <br>
    
    struct node *root = NULL; <br><br>
    root = insert(root, 50); <br><br>
    insert(root, 30); <br><br>
    insert(root, 20); <br><br>
    insert(root, 40); <br><br>
    insert(root, 70); <br><br>
    insert(root, 60); <br><br>
    insert(root, 80); <br><br>
   
    // print inoder traversal of the BST <br>
    inorder(root); <br><br>
   
    return 0; <br>
} <br><br><br>

Output:<br><br>
20<br><br>
30<br><br>
40<br><br>
50<br><br>
60<br><br>
70<br><br>
80<br><br>
