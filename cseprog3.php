<h2>For Versus While</h2>
Question: Is there any example for which the following two loops will not work same way?<br>



/*Program 1 --> For loop*/
for (<init-stmnt>; <boolean-expr>; <incr-stmnt>)  <br>
{ <br>
   <body-statements> <br>
} <br>
  <br><br><br>
/*Program 2 --> While loop*/<br>
<init-stmnt>; <br>
while (<boolean-expr>)  <br>
{ <br>
   <body-statements> <br>
   <incr-stmnt> <br>
} <br><br><br>
Solution:<br><br>
If the body-statements contains continue, then the two programs will work in different ways<br><br>

See the below examples: Program 1 will print “loop” 3 times but Program 2 will go in an infinite loop.<br><br>

Example for program 1<br><br>


int main() <br>
{ <br>
  int i = 0; <br>
  for(i = 0; i < 3; i++) <br>
  { <br>
    printf("loop "); <br>
    continue; <br>
  }  
  getchar(); <br>
  return 0; <br>
} <br><br>


Example for program 2<br><br>


int main() <br>
{ <br>
  int i = 0; <br>
  while(i < 3) <br>
  { 
    printf("loop"); /* printed infinite times */<br>
    continue; <br>
    i++; /*This statement is never executed*/<br>
  }  
  getchar(); <br>
  return 0; <br>
} <br><br><br>


Example for program 3<br><br>


int main() <br>
{ <br>
  int i = 0; <br>
  while(i < 3) <br>
  { 
    printf("loop"); /* printed infinite times */<br>
    continue; <br>
    i++; /*This statement is never executed*/<br>
  }  
  getchar(); <br>
  return 0; <br>
} <br><br><br>


Example for program 4<br><br>


int main() <br>
{ <br>
  int i = 0; <br>
  while(i < 3) <br>
  { 
    printf("loop"); /* printed infinite times */<br>
    continue; <br>
    i++; /*This statement is never executed*/<br>
  }  
  getchar(); <br>
  return 0; <br>
} <br><br><br>