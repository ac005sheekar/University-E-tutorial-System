In signal processing, a signal is viewed as a function of time. The term “size of a signal” is used to represent “strength of the signal”. It is crucial to know the “size” of a signal used in a certain application. For example, we may be interested to know the amount of electricity needed to power a LCD monitor as opposed to a CRT monitor. Both of these applications are different and have different tolerances. Thus the amount of electricity driving these devices will also be different.<br><br><br><br>

A given signal’s size can be measured in many ways.Given a mathematical function (or a signal equivalently), it seems that the area under the curve, described by the mathematical function, is a good measure of describing the size of a signal. A signal can have both positive and negative values. This may render areas that are negative. Due to this effect, it is possible that the computed values cancel each other totally or partially, rendering incorrect result. Thus the metric function of “area under the curve” is not suitable for defining the “size” of a signal. Now, we are left with two options : either 1) computation of the area under the absolute value of the function or 2) computation of the area under the square of the function. The second choice is favored due to its mathematical tractability and its similarity to Euclidean Norm which is used in signal detection techniques (Note: Euclidean norm – otherwise called L2 norm or 2-norm[1] – is often considered in signal detection techniques – on the assumption that it provides a reasonable measure of distance between two points on signal space. It is computed as Euclidean distance in detection theory).<br><br><br>

Going by the second choice of viewing the “size” as the computation of the area under the square of the function, the energy of a continuous-time complex signal x(t) is defined as<br><br><br>




Ex=∫∞−∞<br><br><br><br>

If the signal x(t) is real, the modulus operator in the above equation does not matter.<br>

This is called “Energy” in signal processing terms. <br>This is also a measure of signal strength. This definition can be applied to any signal (or a vector) irrespective of whether it possesses actual energy (a basic quantitative property as described by physics) or not. If the signal is associated with some physical energy, then the above definition gives the energy content in the signal. If the signal is an electrical signal, then the above definition gives the total energy of the signal (in Joules) dissipated over a 1 Ohm resistor.<br>



If the signal x(t) is real, the modulus operator in the above equation does not matter.<br>

This is called “Energy” in signal processing terms. <br>This is also a measure of signal strength. This definition can be applied to any signal (or a vector) irrespective of whether it possesses actual energy (a basic quantitative property as described by physics) or not. If the signal is associated with some physical energy, then the above definition gives the energy content in the signal. If the signal is an electrical signal, then the above definition gives the total energy of the signal (in Joules) dissipated over a 1 Ohm resistor.<br>

If the signal x(t) is real, the modulus operator in the above equation does not matter.<br>

This is called “Energy” in signal processing terms. <br>This is also a measure of signal strength. This definition can be applied to any signal (or a vector) irrespective of whether it possesses actual energy (a basic quantitative property as described by physics) or not. If the signal is associated with some physical energy, then the above definition gives the energy content in the signal. If the signal is an electrical signal, then the above definition gives the total energy of the signal (in Joules) dissipated over a 1 Ohm resistor.<br>