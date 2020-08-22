
The simplest way to quantize a signal is to choose the digital amplitude value closest to the original analog amplitude. This example shows the original analog signal (green), the quantized signal (black dots), the signal reconstructed from the quantized signal (yellow) and the difference between the original signal and the reconstructed signal (red). The difference between the original signal and the reconstructed signal is the quantization error and, in this simple quantization scheme, is a deterministic function of the input signal.<br><br><br><br><br>
Quantization, in mathematics and digital signal processing, is the process of mapping input values from a large set (often a continuous set) to output values in a (countable) smaller set, often with a finite number of elements. Rounding and truncation are typical examples of quantization processes. Quantization is involved to some degree in nearly all digital signal processing, as the process of representing a signal in digital form ordinarily involves rounding. Quantization also forms the core of essentially all lossy compression algorithms.<br><br><br>

The difference between an input value and its quantized value (such as round-off error) is referred to as quantization error. A device or algorithmic function that performs quantization is called a quantizer. An analog-to-digital converter is an example of a quantizer.<br><br><br>



Because quantization is a many-to-few mapping, it is an inherently non-linear and irreversible process (i.e., because the same output value is shared by multiple input values, it is impossible, in general, to recover the exact input value when given only the output value).<br><br><br>

The set of possible input values may be infinitely large, and may possibly be continuous and therefore uncountable (such as the set of all real numbers, or all real numbers within some limited range). The set of possible output values may be finite or countably infinite. The input and output sets involved in quantization can be defined in a rather general way. For example, vector quantization is the application of quantization to multi-dimensional (vector-valued) input data.<br><br><br>

Basic types of quantization<br><br><br>

2-bit resolution with four levels of quantization compared to analog.<br><br><br>

3-bit resolution with eight levels.<br><br><br>
Analog-to-digital converter<br><br><br>
An analog-to-digital converter (ADC) can be modeled as two processes: sampling and quantization. Sampling converts a time-varying voltage signal into a discrete-time signal, a sequence of real numbers. Quantization replaces each real number with an approximation from a finite set of discrete values. Most commonly, these discrete values are represented as fixed-point words. Though any number of quantization levels is possible, common word-lengths are 8-bit (256 levels), 16-bit (65,536 levels) and 24-bit (16.8 million levels). Quantizing a sequence of numbers produces a sequence of quantization errors which is sometimes modeled as an additive random signal called quantization noise because of its stochastic behavior. The more levels a quantizer uses, the lower is its quantization noise power.<br><br><br>

Rate–distortion optimization<br><br><br>
Rate–distortion optimized quantization is encountered in source coding for lossy data compression algorithms, where the purpose is to manage distortion within the limits of the bit rate supported by a communication channel or storage medium. The analysis of quantization in this context involves studying the amount of data (typically measured in digits or bits or bit rate) that is used to represent the output of the quantizer, and studying the loss of precision that is introduced by the quantization process (which is referred to as the distortion).<br><br><br>

Rounding example<br><br><br>
As an example, rounding a real number {\displaystyle x} x to the nearest integer value forms a very basic type of quantizer – a uniform one. A typical (mid-tread) uniform quantizer with a quantization step size equal to some value {\displaystyle \Delta } \Delta  can be expressed as<br><br><br>

{\displaystyle Q(x)=\Delta \cdot \left\lfloor {\frac {x}{\Delta }}+{\frac {1}{2}}\right\rfloor =\Delta \cdot \operatorname {floor} \left({\frac {x}{\Delta }}+{\frac {1}{2}}\right)} Q(x)=\Delta \cdot \left\lfloor {\frac {x}{\Delta }}+{\frac {1}{2}}\right\rfloor =\Delta \cdot \operatorname {floor} \left({\frac {x}{\Delta }}+{\frac {1}{2}}\right),<br><br><br>
where the notation {\displaystyle \lfloor \ \rfloor } \lfloor \ \rfloor  or {\displaystyle \operatorname {floor} (\ )} \operatorname {floor} (\ ) depicts the floor function.<br><br><br>

The essential property of a quantizer is that it has a countable set of possible output values that has fewer members than the set of possible input values. The members of the set of output values may have integer, rational, or real values. For simple rounding to the nearest integer, the step size {\displaystyle \Delta } \Delta  is equal to 1. With {\displaystyle \Delta =1} \Delta =1 or with {\displaystyle \Delta } \Delta  equal to any other integer value, this quantizer has real-valued inputs and integer-valued outputs.<br><br><br>

When the quantization step size (Δ) is small relative to the variation in the signal being quantized, it is relatively simple to show that the mean squared error produced by such a rounding operation will be approximately {\displaystyle \Delta ^{2}/12} \Delta ^{2}/12.[3][4][5][6][7][8] Mean squared error is also called the quantization noise power. Adding one bit to the quantizer halves the value of Δ, which reduces the noise power by the factor ¼. In terms of decibels, the noise power change is {\displaystyle \scriptstyle 10\cdot \log _{10}\left({\tfrac {1}{4}}\right)\ \approx \ -6\ \mathrm {dB} .} {\displaystyle \scriptstyle 10\cdot \log _{10}\left({\tfrac {1}{4}}\right)\ \approx \ -6\ \mathrm {dB} .}<br><br><br>

Because the set of possible output values of a quantizer is countable, any quantizer can be decomposed into two distinct stages, which can be referred to as the classification stage (or forward quantization stage) and the reconstruction stage (or inverse quantization stage), where the classification stage maps the input value to an integer quantization index {\displaystyle k} k and the reconstruction stage maps the index {\displaystyle k} k to the reconstruction value {\displaystyle y_{k}} y_{k} that is the output approximation of the input value. For the example uniform quantizer described above, the forward quantization stage can be expressed as<br><br><br>

{\displaystyle k=\left\lfloor {\frac {x}{\Delta }}+{\frac {1}{2}}\right\rfloor } k=\left\lfloor {\frac {x}{\Delta }}+{\frac {1}{2}}\right\rfloor ,<br><br><br>
and the reconstruction stage for this example quantizer is simply<br><br><br>

{\displaystyle y_{k}=k\cdot \Delta } y_{k}=k\cdot \Delta .<br><br><br>
This decomposition is useful for the design and analysis of quantization behavior, and it illustrates how the quantized data can be communicated over a communication channel – a source encoder can perform the forward quantization stage and send the index information through a communication channel, and a decoder can perform the reconstruction stage to produce the output approximation of the original input data. In general, the forward quantization stage may use any function that maps the input data to the integer space of the quantization index data, and the inverse quantization stage can conceptually (or literally) be a table look-up operation to map each quantization index to a corresponding reconstruction value. This two-stage decomposition applies equally well to vector as well as scalar quantizers.<br><br><br><br><br><br>