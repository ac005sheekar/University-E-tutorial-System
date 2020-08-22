<h2>8085 program to add two 8 bit numbers</h2><br><br><br><br>

<br><br>

Problem – Write an assembly language program to add two 8 bit numbers stored at address 2050 and address 2051 in 8085 microprocessor. Starting address of program is taken as 2000.<br><br><br>

Example –<br><br><br>



Algorithm –<br><br><br>

First add contents of memory location 2050 and 2051 using “ADD” instruction and storing at 3050<br><br><br>
The carry generated is recovered using “ADC” command and is stored at memory location 3051<br><br><br>
Program –<br><br><br><br>



 

MEMORY ADDRESS	MNEMONICS	COMMENT<br><br><br>
2000----LHLD 2050---H←2051, L←2050<br><br>
2003----MOV A, L----A←L<br><br>
2004----ADD H-------A←A+H<br><br>
2005----MOV L, A----L←A<br><br>
2006----MVI A 00----A←00<br><br>
2008----ADC A-------A←A+A+carry<br><br>
2009----MOV H, A----H←A<br><br>
200A----SHLD 3050---H→3051, L→3050<br><br>
200D----HLT	<br><br>
Explanation –<br><br><br>

LHLD 2050 moves the contents of 2050 memory location (3B) in L register and contents of 2051 memory location (F9) in H register<br><br><br>
MOV A, L copies contents of L register (3B) to A (Accumulator)<br><br><br>
ADD H adds contents of A (Accumulator) and H register (F9). The result is stored in A itself. For all arithmetic instructions A is by default an operand and A stores the result as well<br><br><br>
MOV L, A copies contents of A (34) to L<br><br><br>
MVI A 00 moves immediate data (i.e., 00) to A<br><br><br>
ADC A adds contents of A(00), contents of register specified (i.e A) and carry (1). As ADC is also an arithmetic operation, A is by default an operand and A stores the result as well<br><br><br>
MOV H, A copies contents of A (01) to H<br><br>
SHLD 3050 moves the contents of L register (34) in 3050 memory location and contents of H register (01) in 3051 memory location<br><br>
HLT stops executing the program and halts any further execution<br><br><br>



