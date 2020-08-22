<h2>Frequency-Domain C/S of LTI Systems</h2><br><br><br><br>
LTI x(n) y(n)<br><br><br>
I LTI: Linear Time-Invariant system<br><br><br>
I h(n), the impulse response of an LTI systems describes the
time domain c/s.<br><br><br>
I H(ω), the frequency response describes the frequency-domain<br><br><br>
c/s.<br><br><br>
I h(n)<br><br><br>
F<br><br><br>
←−→ H(ω)<br><br><br>
I study: system response to excitation signals that are a<br><br><br>
weighted linear combination of sinusoids or complex<br><br><br>
exponentials.<br><br><br>
2/ 25<br><br><br>
Frequency-Domain C/S of LTI Systems<br><br><br>
I Recall the response of an LTI system to input signal x(n)<br><br><br>
y(n) = X∞<br><br>
k=−∞<br><br>
h(n)x(n − k) (1)<br><br><br>

I Excite the system with a complex exponential, i.e. let<br><br>
x(n) = Aejωn<br><br><br>
, −∞ < n < ∞, −π < ω < π<br><br><br>
y(n) = X∞<br><br><br>
k=−∞<br><br>
h(k)<br><br><br>
h<br><br><br>
Aejω(n−k)<br><br><br>
i<br><br>
= A<br><br>
" X∞<br><br>
k=−∞<br><br>
h(k)e<br><br><br><br>
−jωk<br><br>
#<br><br>
e<br><br>
jωn<br><br>
= AejωnH(ω)<br><br>
(2)<br><br>
where,<br><br>
H(ω) = X∞<br><br>
k=−∞<br><br>
h(k)e<br><br>
−jωkv<br>
(3)<br><br>

Observations
I y(n) is in the form of a complex exponential with same
frequency as input, multiplied by a factor.
I The complex exponential signal x(n) is called an eigenfunction
of the system.
I H(ω) evaluated at the frequency of the input is the
corresponding eigenvalue of the system.