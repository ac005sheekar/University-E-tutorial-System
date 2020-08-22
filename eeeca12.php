<h2>Alternating Current</h2><br><br><br><br>
Alternating current (green curve). The horizontal axis measures time; the vertical, current or voltage.<br><br>
Part of a series of articles about<br><br>
Electromagnetism<br><br><br>
Solenoid<br><br><br>
Electricity Magnetism<br><br><br>
Electrostatics<br><br><br>
Magnetostatics<br><br><br>
Electrodynamics<br><br><br>
Electrical network<br><br><br>
Alternating current Capacitance Direct current Electric current Electric potential Electromotive force Impedance Inductance Ohm's law Parallel circuit Resistance Resonant cavities Series circuit Voltage Waveguides<br><br><br>
Covariant formulation<br><br><br>
Scientists<br><br><br>

Alternating current (AC) is an electric current which periodically reverses direction, in contrast to direct current (DC) which flows only in one direction. Alternating current is the form in which electric power is delivered to businesses and residences, and it is the form of electrical energy that consumers typically use when they plug kitchen appliances, televisions, fans and electric lamps into a wall socket. A common source of DC power is a battery cell in a flashlight. The abbreviations AC and DC are often used to mean simply alternating and direct, as when they modify current or voltage.<br><br><br>

The usual waveform of alternating current in most electric power circuits is a sine wave, whose positive half-period corresponds with positive direction of the current and vice versa. In certain applications, different waveforms are used, such as triangular or square waves. Audio and radio signals carried on electrical wires are also examples of alternating current. These types of alternating current carry information such as sound (audio) or images (video) sometimes carried by modulation of an AC carrier signal. These currents typically alternate at higher frequencies than those used in power transmission.<br><br><br>

Mathematics of AC voltages<br><br><br>

A sinusoidal alternating voltage. <br><br>
1 = Peak, also amplitude,<br><br>
2 = Peak-to-peak, <br><br>
3 = Effective value, <br><br>
4 = Period<br><br>

A sine wave, over one cycle (360°). The dashed line represents the root mean square (RMS) value at about 0.707<br><br>
Alternating currents are accompanied (or caused) by alternating voltages. An AC voltage v can be described mathematically as a function of time by the following equation:<br><br>

{\displaystyle v(t)=V_{\mathrm {peak} }\cdot \sin(\omega t)} v(t)=V_{\mathrm {peak} }\cdot \sin(\omega t),<br><br>
where<br><br>

{\displaystyle \displaystyle V_{\rm {peak}}} \displaystyle V_{\rm {peak}} is the peak voltage (unit: volt),<br><br>
{\displaystyle \displaystyle \omega } \displaystyle \omega  is the angular frequency (unit: radians per second)<br><br>
The angular frequency is related to the physical frequency, {\displaystyle \displaystyle f} \displaystyle f (unit = hertz), which represents the number of cycles per second, by the equation {\displaystyle \displaystyle \omega =2\pi f} \displaystyle \omega =2\pi f.<br><br>
{\displaystyle \displaystyle t} \displaystyle t is the time (unit: second).<br><br>
The peak-to-peak value of an AC voltage is defined as the difference between its positive peak and its negative peak. Since the maximum value of {\displaystyle \sin(x)} \sin(x) is +1 and the minimum value is −1, an AC voltage swings between {\displaystyle +V_{\rm {peak}}} +V_{\rm {peak}} and {\displaystyle -V_{\rm {peak}}} -V_{\rm {peak}}. The peak-to-peak voltage, usually written as {\displaystyle V_{\rm {pp}}} V_{\rm {pp}} or {\displaystyle V_{\rm {P-P}}} V_{\rm {P-P}}, is therefore {\displaystyle V_{\rm {peak}}-(-V_{\rm {peak}})=2V_{\rm {peak}}} V_{\rm {peak}}-(-V_{\rm {peak}})=2V_{\rm {peak}}.<br><br>

Power<br><br>


The relationship between voltage and the power delivered is<br><br>

{\displaystyle p(t)={\frac {v^{2}(t)}{R}}} p(t)={\frac {v^{2}(t)}{R}} where {\displaystyle R} R represents a load resistance.<br><br>
Rather than using instantaneous power, {\displaystyle p(t)} p(t), it is more practical to use a time averaged power (where the averaging is performed over any integer number of cycles). Therefore, AC voltage is often expressed as a root mean square (RMS) value, written as {\displaystyle V_{\rm {rms}}} V_{\rm {rms}}, because<br><br>

{\displaystyle P_{\rm {time~averaged}}={\frac {{V_{\rm {rms}}}^{2}}{R}}.} {\displaystyle P_{\rm {time~averaged}}={\frac {{V_{\rm {rms}}}^{2}}{R}}.}<br><br>
Power oscillation<br><br>
{\displaystyle v(t)=V_{\mathrm {peak} }\sin(\omega t)} v(t)=V_{\mathrm {peak} }\sin(\omega t)<br><br>
{\displaystyle i(t)={\frac {v(t)}{R}}={\frac {V_{\mathrm {peak} }}{R}}\sin(\omega t)} i(t)={\frac {v(t)}{R}}={\frac {V_{\mathrm {peak} }}{R}}\sin(\omega t)<br><br>
{\displaystyle P(t)=v(t)\ i(t)={\frac {(V_{\mathrm {peak} })^{2}}{R}}\sin ^{2}(\omega t)} P(t)=v(t)\ i(t)={\frac {(V_{\mathrm {peak} })^{2}}{R}}\sin ^{2}(\omega t)<br><br>
Root mean square voltage<br><br>
Further information: RMS amplitude<br><br>
For a broader coverage of this topic, see Root mean square voltage.<br><br>
Below it is assumed an AC waveform (with no DC component).<br><br>

The RMS voltage is the square Root of the Mean over one cycle of the Square of the instantaneous voltage.<br><br><br>

For an arbitrary periodic waveform {\displaystyle v(t)} v(t) of period {\displaystyle T} T:<br><br><br>
{\displaystyle V_{\mathrm {rms} }={\sqrt {{\frac {1}{T}}\int _{0}^{T}{[v(t)]^{2}dt}}}.} V_{\mathrm {rms} }={\sqrt {{\frac {1}{T}}\int _{0}^{T}{[v(t)]^{2}dt}}}.<br><br><br>
For a sinusoidal voltage:
{\displaystyle {\begin{aligned}V_{\mathrm {rms} }&={\sqrt {{\frac {1}{T}}\int _{0}^{T}[{V_{pk}\sin(\omega t+\phi )]^{2}dt}}}\\&=V_{pk}{\sqrt {{\frac {1}{2T}}\int _{0}^{T}[{1-\cos(2\omega t+2\phi )]dt}}}\\&=V_{pk}{\sqrt {{\frac {1}{2T}}\int _{0}^{T}{dt}}}\\&={\frac {V_{pk}}{\sqrt {2}}}\end{aligned}}} {\begin{aligned}V_{\mathrm {rms} }&={\sqrt {{\frac {1}{T}}\int _{0}^{T}[{V_{pk}\sin(\omega t+\phi )]^{2}dt}}}\\&=V_{pk}{\sqrt {{\frac {1}{2T}}\int _{0}^{T}[{1-\cos(2\omega t+2\phi )]dt}}}\\&=V_{pk}{\sqrt {{\frac {1}{2T}}\int _{0}^{T}{dt}}}\\&={\frac {V_{pk}}{\sqrt {2}}}\end{aligned}}<br><br><br>
where the trigonometric identity {\displaystyle \sin ^{2}x={\frac {1-\cos 2x}{2}}} \sin ^{2}x={\frac {1-\cos 2x}{2}} has been used and the factor {\displaystyle {\sqrt {2}}} {\sqrt {2}} is called the crest factor, which varies for different waveforms.<br><br><br>
For a triangle waveform centered about zero<br><br><br>
{\displaystyle V_{\mathrm {rms} }={\frac {V_{\mathrm {peak} }}{\sqrt {3}}}.} V_{\mathrm {rms} }={\frac {V_{\mathrm {peak} }}{\sqrt {3}}}.<br><br><br>
For a square waveform centered about zero<br><br><br>
{\displaystyle \displaystyle V_{\mathrm {rms} }=V_{\mathrm {peak} }.} \displaystyle V_{\mathrm {rms} }=V_{\mathrm {peak} }.<br><br><br>