The memory cell is the fundamental building block of computer memory. The memory cell is an electronic circuit that stores one bit of binary information and it must be set to store a logic 1 (high voltage level) and reset to store a logic 0 (low voltage level). Its value is maintained/stored until it is changed by the set/reset process. The value in the memory cell can be accessed by reading it.<br><br><br><br>

Over the history of computing many different memory cell architectures have been used including core memory and bubble memory, but the most common ones used are flip-flops and capacitors.<br><br><br>

The SRAM, static ram memory cell is a type of flip-flop circuit, usually implemented using FETs. These require very low power to keep the stored value when not being accessed.<br><br><br>

A second type, DRAM is based around a capacitor. Charging and discharging this capacitor can store a '1' or a '0' in the cell. However, the charge in this capacitor will slowly leak away, and must be refreshed periodically. Because of this refresh process, DRAM uses more power, but can achieve greater storage densities.<br><br><br>


Storage<br><br><br>
The storage element of the DRAM memory cell is the capacitor labeled (4) in the diagram above. The charge stored in the capacitor degrades over time, so its value must be refreshed (read and rewritten) periodically. The nMOS transistor (3) acts as a gate to allow reading or writing when open or storing when closed.[11]<br><br><br><br>
Reading
For reading the Word line drives a logic 1 (voltage high) into the gate of the nMOS transistor (3) which makes it conductive and the charge stored at the capacitor (4) is then transferred to the bit line. The bit line will have a parasitic capacitance (5) that will drain part of the charge and slow the reading process. The capacitance of the bit line will determine the needed size of the storage capacitor (4). It is a trade-off. If the storage capacitor is too small, the voltage of the bit line would take too much time to raise or not even rise above the threshold needed by the amplifiers at the end of the bit line. Since the reading process degrades the charge in the storage capacitor (4) its value is rewritten after each read.<br><br><br>
Writing
The writing process is the easiest, the desired value logic 1 (high voltage) or logic 0 (low voltage) is driven into the bit line. The word line activates the nMOS transistor (3) connecting it to the storage capacitor (4). The only issue is to keep it open enough time to ensure that the capacitor is fully charged or discharged before turning off the nMOS transistor (3).<br><br><br><br>