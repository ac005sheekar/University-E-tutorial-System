<h2>Non-inverting Operational Amplifier Configuration</h2><br><br><br><br>


In the previous Inverting Amplifier tutorial, we said that for an ideal op-amp “No current flows into the input terminal” of the amplifier and that “V1 always equals V2”. This was because the junction of the input and feedback signal ( V1 ) are at the same potential.<br><br><br>

In other words the junction is a “virtual earth” summing point. Because of this virtual earth node the resistors, Rƒ and R2 form a simple potential divider network across the non-inverting amplifier with the voltage gain of the circuit being determined by the ratios of R2 and Rƒ as shown below.<br><br><br><br>

Equivalent Potential Divider Network<br><br>
non-inverting amplifier potential divider<br><br>

Then using the formula to calculate the output voltage of a potential divider network, we can calculate the closed-loop voltage gain ( AV ) of the Non-inverting Amplifier as follows:<br><br><br>

non-inverting op-amp gain<br><br><br><br>

Then the closed loop voltage gain of a Non-inverting Operational Amplifier will be given as:<br><br><br>

non-inverting operational amplifier gain<br><br><br>
We can see from the equation above, that the overall closed-loop gain of a non-inverting amplifier will always be greater but never less than one (unity), it is positive in nature and is determined by the ratio of the values of Rƒ and R2.<br><br><br><br>

If the value of the feedback resistor Rƒ is zero, the gain of the amplifier will be exactly equal to one (unity). If resistor R2 is zero the gain will approach infinity, but in practice it will be limited to the operational amplifiers open-loop differential gain, ( AO ).<br><br><br>

We can easily convert an inverting operational amplifier configuration into a non-inverting amplifier configuration by simply changing the input connections as shown.<br><br><br>

non-inverting op-amp configuration<br><br><br>

Voltage Follower (Unity Gain Buffer)<br><br><br>
If we made the feedback resistor, Rƒ equal to zero, (Rƒ = 0), and resistor R2 equal to infinity, (R2 = ∞), then the circuit would have a fixed gain of “1” as all the output voltage would be present on the inverting input terminal (negative feedback). This would then produce a special type of the non-inverting amplifier circuit called a Voltage Follower or also called a “unity gain buffer”.<br><br><br>

As the input signal is connected directly to the non-inverting input of the amplifier the output signal is not inverted resulting in the output voltage being equal to the input voltage, Vout = Vin. This then makes the voltage follower circuit ideal as a Unity Gain Buffer circuit because of its isolation properties.<br><br><br>

The advantage of the unity gain voltage follower is that it can be used when impedance matching or circuit isolation is more important than amplification as it maintains the signal voltage. The input impedance of the voltage follower circuit is very high, typically above 1MΩ as it is equal to that of the operational amplifiers input resistance times its gain ( Rin x AO ). Also its output impedance is very low since an ideal op-amp condition is assumed.<br><br>

Non-inverting Voltage Follower<br><br><br>
non-inverting voltage follower<br><br><br>

In this non-inverting circuit configuration, the input impedance Rin has increased to infinity and the feedback impedance Rƒ reduced to zero. The output is connected directly back to the negative inverting input so the feedback is 100% and Vin is exactly equal to Vout giving it a fixed gain of 1 or unity. As the input voltage Vin is applied to the non-inverting input the gain of the amplifier is given as:<br><br><br>

unity gain buffer<br><br><br>

Since no current flows into the non-inverting input terminal the input impedance is infinite (ideal op-amp) and also no current flows through the feedback loop so any value of resistance may be placed in the feedback loop without affecting the characteristics of the circuit as no voltage is dissipated across it, zero current flows, zero voltage drop, zero power loss.<br><br><br>

As the input current is zero giving zero input power, the voltage follower can provide a large power gain. However in most real unity gain buffer circuits a low value (typically 1kΩ) resistor is required to reduce any offset input leakage currents, and also if the operational amplifier is of a current feedback type.<br><br><br>

The voltage follower or unity gain buffer is a special and very useful type of Non-inverting amplifier circuit that is commonly used in electronics to isolated circuits from each other especially in High-order state variable or Sallen-Key type active filters to separate one filter stage from the othe<br><br><br><br><br>