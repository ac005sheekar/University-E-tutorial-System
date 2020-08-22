A waveform that switches representing the two states of a Boolean value (0 and 1, or low and high, or false and true) is referred to as a digital signal or logic signal or binary signal when it is interpreted in terms of only two possible digits.<br><br><br><br>

The two states are usually represented by some measurement of an electrical property: Voltage is the most common, but current is used in some logic families. A threshold is designed for each logic family. When below that threshold, the signal is low, when above high.<br><br><br>

The clock signal is a special digital signal that is used to synchronize many digital circuits. The image shown can be considered the waveform of a clock signal. Logic changes are triggered either by the rising edge or the falling edge. The rising edge is the transition from a low voltage (level 1 in the diagram) to a high voltage (level 2). The falling edge is the transition from a high voltage to a low one.<br><br><br>

Although in a highly simplified and idealized model of a digital circuit, we may wish for these transitions to occur instantaneously, no real world circuit is purely resistive and therefore no circuit can instantly change voltage levels. This means that during a short, finite transition time the output may not properly reflect the input, and will not correspond to either a logically high or low voltage.<br><br><br>

Modulation<br><br><br>
Main article: Modulation § Digital_modulation_methods<br><br><br><br>
To create a digital signal, an analog signal must be modulated with a control signal to produce it. The simplest modulation, a type of unipolar encoding, is simply to switch on and off a DC signal, so that high voltages represent a '1' and low voltages are '0'.<br><br><br><br><br>

In digital radio schemes one or more carrier waves are amplitude, frequency or phase modulated by the control signal to produce a digital signal suitable for transmission.<br><br><br>

Asymmetric Digital Subscriber Line (ADSL) over telephone wires, does not primarily use binary logic; the digital signals for individual carriers are modulated with different valued logics, depending on the Shannon capacity of the individual channel.<br><br><br>

Clocking<br><br><br>

Clocking digital signals through a clocked flip-flop<br><br><br>
Often digital signals are "sampled" by a clock signal at regular intervals by passing the signal through an "edge sensitive" flip-flop. When this is done the input is measured at those points in time, and the signal from that time is passed through to the output and the output is then held steady till the next clock.<br><br><br>

This process is the basis of synchronous logic, and the system is also used in digital signal processing.<br><br><br>

However, asynchronous logic also exists, which uses no single clock, and generally operates more quickly, and may use less power, but is significantly harder to design.<br><br><br><br>