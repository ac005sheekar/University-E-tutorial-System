<h2>Stability of Digital Control System</h2><br><br><br><br>

Digital control is a branch of control theory that uses digital computers to act as system controllers. Depending on the requirements, a digital control system can take the form of a microcontroller to an ASIC to a standard desktop computer. Since a digital computer is a discrete system, the Laplace transform is replaced with the Z-transform. Also since a digital computer has finite precision (See quantization), extra care is needed to ensure the error in coefficients, A/D conversion, D/A conversion, etc. are not producing undesired or unplanned effects.<br><br><br><br><br>

The application of digital control can readily be understood in the use of feedback. Since the creation of the first digital computer in the early 1940s the price of digital computers has dropped considerably, which has made them key pieces to control systems for several reasons:<br><br><br><br>

Inexpensive: under $5 for many microcontrollers<br><br><br>
Flexible: easy to configure and reconfigure through software<br><br><br>
Scalable: programs can scale to the limits of the memory or storage space without extra costv<br><br>
Adaptable: parameters of the program can change with time (See adaptive control)<br><br>
Static operation: digital computers are much less prone to environmental conditions than capacitors, inductors, etc.<br><br><br>


A digital controller is usually cascaded with the plant in a feedback system. The rest of the system can either be digital or analog.<br><br><br>

Typically, a digital controller requires:<br><br><br><br>

A/D conversion to convert analog inputs to machine readable (digital) format<br><br><br>
D/A conversion to convert digital outputs to a form that can be input to a plant (analog)<br><br>
A program that relates the outputs to the inputs<br><br>
Output Program<br><br><br>
Outputs from the digital controller are functions of current and past input samples, as well as past output samples - this can be implemented by storing relevant values of input and output in registers. The output can then be formed by a weighted sum of these stored values.<br><br><br><br>
The programs can take numerous forms and perform many functions

A digital filter for low-pass filtering<br><br><br>
A state space model of a system to act as a state observer<br><br><br>
A telemetry system<br><br>
Stabilityv<br><br>
Although a controller may be stable when implemented as an analog controller, it could be unstable when implemented as a digital controller due to a large sampling interval. During sampling the aliasing modifies the cutoff parameters. Thus the sample rate characterizes the transient response and stability of the compensated system, and must update the values at the controller input often enough so as to not cause instability.<br><br><br><br><br>

When substituting the frequency into the z operator, regular stability criteria still apply to discrete control systems. Nyquist criteria apply to z-domain transfer functions as well as being general for complex valued functions. Bode stability criteria apply similarly. Jury criterion determines the discrete system stability about its characteristic polynomial.<br><br><br>

Design of digital controller in s-domain<br><br><br><br>
The digital controller can also be designed in the s-domain (continuous). The Tustin transformation can transform the continuous compensator to the respective digital compensator. The digital compensator will achieve an output which approaches the output of its respective analog controller as the sampling interval is decreased.<br><br><br><br>

{\displaystyle s={\frac {2(z-1)}{T(z+1)}}} s={\frac  {2(z-1)}{T(z+1)}}<br><br><br>

Tustin transformation deduction<br><br><br>
Tustin is the Padé(1,1) approximation of the exponential function {\displaystyle {\begin{aligned}z&=e^{sT}\end{aligned}}} {\begin{aligned}z&=e^{{sT}}\end{aligned}} :<br><br><br>

