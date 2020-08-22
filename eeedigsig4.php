Power is defined as the amount of energy consumed per unit time. This quantity is useful if the energy of the signal goes to infinity or the signal is “not-squarely-summable”. For “non-squarely-summable” signals, the power calculated by taking the snapshot of the signal over a specific interval of time as follows<br><br><br><br><br>

1) Take a snapshot of the signal over some finite time duration<br><br><br>
2) Compute the energy of the signal Ex<br><br><br>
3) Divide the energy by number of samples taken for computation N<br><br><br>
4) Extend the limit of number of samples to infinity N→∞. This gives the total power of the signal.<br><br><br><br><br>

In discrete domain, the total power of the signal is given by<br><br><br>
Px=limN→∞12N+1∑n=−Nn=+N|x(n)|2<br><br><br><br>
Following equations are different forms of the same computation found in many text books. The only difference is the number of samples taken for computation. The denominator changes according to the number of samples taken for computation.<br><br><br><br>
Px=limN→∞12N∑n=N−1n=−N|x(n)|2Px=limN→∞1N∑n=N−1n=0|x(n)|2Px=limN→∞1N1−N0+1∑n=N1n=N0|x(n)|2<br><br><br><br>
Classification of Signals:<br><br><br>
A signal can be classified based on its power or energy content. Signals having finite energy are energy signals. Power signals have finite and non-zero power.<br><br><br><br>

Energy Signal :<br><br><br>
A finite energy signal will have zero TOTAL power. Let’s investigate this statement in detail. When the energy is finite, the total power will be zero. Check out the denominator in the equation for calculating the total power. When the limit N→∞, the energy dilutes to zero over the infinite duration and hence the total power becomes zero.<br><br><br>

Power Signal:<br><br><br><br>
Signals whose total power is finite and non-zero. The energy of the power signal will be infinite. Example: Periodic sequences like sinusoid. A sinusoidal signal has finite, non-zero power but infinite energy.<br><br><br><br><br>

A signal cannot be both an energy signal and a power signal.<br><br><br><br>

Neither an Energy signal nor a Power signal:<br><br><br>
Signals can also be a cat on the wall – neither an energy signal nor a power signal. Consider a signal of increasing amplitude defined by<br><br><br><br>
x(n)=n<br><br><br><br>