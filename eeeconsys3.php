<h1>Pin diagram of 8085 microprocessor</h1><br><br><br><br>



Pin diagram of 8085 microprocessor is as given below:<br><br><br>



1. Address Bus and Data Bus:<br><br><br>
The address bus is a group of sixteen lines i.e A0-A15. The address bus is unidirectional, i.e., bits flow in one direction from the microprocessor unit to the peripheral devices and uses the high order address bus.<br><br><br>

2. Control and Status Signals:<br><br><br>

ALE – It is an Address Latch Enable signal. It goes high during first T state of a machine cycle and enables the lower 8-bits of the address, if its value is 1 otherwise data bus is activated.<br><br><br>
IO/M’ – It is a status signal which determines whether the address is for input-output or memory. When it is high(1) the address on the address bus is for input-output devices. When it is low(0) the address on the address bus is for the memory.<br><br><br>
SO, S1 – These are status signals. They distinguish the various types of operations such as halt, reading, instruction fetching or writing.<br><br><br>


 <br><br>

IO/M’----S1-S0---DATA BUS STATUS<br><br>
0---1---1--------Opcode fetch<br><br>
0---1---0--------Memory read<br><br>
0---0---1--------Memory write<br><br>
1---1---0--------I/O read<br><br>
1---0---1--------I/O write<br><br>
1---1---1--------Interrupt acknowledge<br><br>
0---0---0--------Halt<br><br>
RD’ – It is a signal to control READ operation. When it is low the selected memory or input-output device is read.<br><br><br>
WR’ – It is a signal to control WRITE operation. When it goes low the data on the data bus is written into the selected memory or I/O location.<br><br><br>
READY – It senses whether a peripheral is ready to transfer data or not. If READY is high(1) the peripheral is ready. If it is low(0) the microprocessor waits till it goes high. It is useful for interfacing low speed devices.<br><br><br>
3. Power Supply and Clock Frequency:<br><br><br>
<br>
Vcc – +5v power supply<br><br>
Vss – Ground Reference<br><br>
XI, X2 – A crystal is connected at these two pins. The frequency is internally divided by two, therefore, to operate a system at 3MHZ the crystal should have frequency of 6MHZ.<br><br>
CLK (OUT) – This signal can be used as the system clock for other devices.<br><br>
4. Interrupts and Peripheral Initiated Signals:<br><br>
The 8085 has five interrupt signals that can be used to interrupt a program execution.<br><br>
<br><br>
(i) INTR<br><br>
(ii) RST 7.5<br><br>
(iii) RST 6.5<br><br>
(iv) RST 5.5<br><br>
(v) TRAP<br><br><br>

The microprocessor acknowledges Interrupt Request by INTA’ signal. In addition to Interrupts, there are three externally initiated signals namely RESET, HOLD and READY. To respond to HOLD request, it has one signal called HLDA.
<br><br><br><br>
INTR – It is an interrupt request signal.<br><br>
INTA’ – It is an interrupt acknowledgment sent by the microprocessor after INTR is received.<br><br>
5. Reset Signals:<br><br>

RESET IN’ – When the signal on this pin is low(0), the program-counter is set to zero, the buses are tristated and the microprocessor unit is reset.<br><br><br>
RESET OUT – This signal indicates that the MPU is being reset. The signal can be used to reset other devices.<br><br><br>
6. DMA Signals:<br><br>

HOLD – It indicates that another device is requesting the use of the address and data bus. Having received HOLD request the microprocessor relinquishes the use of the buses as soon as the current machine cycle is completed. Internal processing may continue. After the removal of the HOLD signal the processor regains the bus.<br><br>
HLDA – It is a signal which indicates that the hold request has been received after the removal of a HOLD request, the HLDA goes low.<br><br><br><br>
7. Serial I/O Ports:<br><br>
Serial transmission in 8085 is implemented by the two signals,<br><br>

SID and SOD – SID is a data line for serial input where as SOD is a data line for serial output.<br><br><br>
