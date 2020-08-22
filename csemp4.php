<h2>8086 program to add two 8 bit BCD numbers</h2><br><br><br><br>



Problem – Write a program in 8086 microprocessor to find out the addition of two 8-bit BCD numbers, where numbers are stored from starting memory address 2000 : 500 and store the result into memory address 2000 : 600 and carry at 2000 : 601.<br><br><br>

Example –<br><br>
<br><br>


Algorithm –<br><br><br>

Load data from offset 500 to register AL (first number)<br><br><br>
Load data from offset 501 to register BL (second number)<br><br>
Add these two numbers (contents of register AL and register BL)<br><br><br>
Apply DAA instruction (decimal adjust)<br><br>
Store the result (content of register AL) to offset 600<br><br><br>
Set register AL to 00<br><br>
Add contents of register AL to itself with carry<br><br><br>
Store the result (content of register AL) to offset 601<br><br>
Stop<br><br>
Program –<br><br><br><br>



 

MEMORY ADDRESS	MNEMONICS	COMMENT<br><br><br>
400	MOV AL, [500]	AL<-[500]<br><br>

404	MOV BL, [501]	BL<-[501]<br><br>
408	ADD AL, BL	AL<-AL+BL<br><br>
40A	DAA	DECIMAL ADJUST AL<br><br>
40B	MOV [600], AL	AL->[600]<br><br>
40F	MOV AL, 00	AL<-00<br><br>
411	ADC AL, AL	AL<-AL+AL+cy(prev)<br><br>
413	MOV [601], AL	AL->[601]<br><br>
417	HLT	END<br><br>
Explanation –<br><br><br>

MOV AL, [500]: load data from offset 500 to register AL<br><br>
MOV BL, [501]: load data from offset 501 to register BL<br><br>
ADD AL, BL: ADD contents of registers AL AND BL<br><br>
DAA: decimal adjust AL<br><br>
MOV [600], AL: store data from register AL to offset 600<br><br>
MOV AL, 00: set value of register AL to 00<br><br>
ADC AL, AL: add contents of register AL to AL with carry<br><br>
MOV [601], AL: store data from register AL to offset 601<br><br>
HLT: stop<br><br>
<br><br>