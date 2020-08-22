<h2>Compiler Design | Lexical Analysis</h2><br><br><br><br>



Lexical Analysis is the first phase of compiler also known as scanner. It converts the input program into a sequence of Tokens.<br><br><br>

Lexical Analysis can be implemented with the Deterministic finite Automata.<br><br><br>

What is a token?<br><br><br>
A lexical token is a sequence of characters that can be treated as a unit in the grammar of the programming languages.<br><br><br>

Example of tokens:<br><br>

Type token (id, number, real, . . . )<br><br>
Punctuation tokens (IF, void, return, . . . )<br><br>
Alphabetic tokens (keywords)<br><br>
Keywords; Examples-for, while, if etc.<br><br>
Identifier; Examples-Variable name, function name etc.<br><br>
Operators; Examples '+', '++', '-' etc.<br><br>
Separators; Examples ',' ';' etc<br><br>
Example of Non-Tokens:<br><br><br><br><br>



 

Comments, preprocessor directive, macros, blanks, tabs, newline  etc<br><br><br>
How Lexical Analyzer functions<br><br>

1. Tokenization .i.e Dividing the program into valid tokens.<br><br>
2. Remove white space characters.<br><br>
3. Remove comments.<br><br>
4. It also provides help in generating error message by providing row number and column number.<br><br>



The lexical analyzer identifies the error with the help of automation machine and the grammar of  the given language on which it is based like C , C++.<br><br><br>

Suppose we pass a statement through lexical analyzer –<br><br>

a = b + c ;---------------It will generate token sequence like this:<br><br><br>

id=id+id;-----------------Where each id reference to it’s variable in the symbol table referencing all details<br><br><br>

For example, consider the program<br><br><br>

int main()<br>
{<br>
  // 2 variables<br>
  int a, b;<br>
  a = 10;<br>
 return 0;<br>
}<br>
All the valid tokens are:<br>

'int'  'main'  '('  ')'  '{'  '}'  'int'  'a' ','  'b'  ';'<br><br>
 'a'  '='  '10'  ';' 'return'  '0'  ';'  '}'<br><br>
Above are the valid tokens.<br><br>
You can observe that we have omitted comments.<br><br>
<br>
As another example, consider below printf statement.<br><br>

There are 5 valid token in this printf statement.<br><br><br>
Exercise 1:<br><br>
Count number of tokens :<br><br>


<br><br>
 

int main()<br>
{<br>
  int a = 10, b = 20;<br>
  printf("sum is :%d",a+b);<br>
  return 0;<br>
}<br><br><br>
Answer: <br><br>Total number of token: 27.<br><br><br><br>
Exercise 2:<br><br>

Count number of tokens :<br><br>

int max(int i);<br><br>

Lexical analyzer first read int and finds it to be valid and accepts as token<br><br><br>
max is read by it and found to be valid function name after reading (<br><br>
int  is also a token , then again i as another token and finally ;<br><br>
 Answer:  Total number of tokens 7:     int, max, ( ,int, i, ), ;<br><br><br><br>