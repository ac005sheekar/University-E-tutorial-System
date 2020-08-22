<h2>DDA Line generation Algorithm in Computer Graphics</h2><br><br><br><br>
In any 2-Dimensional plane if we connect two points (x0, y0) and (x1, y1), we get a line segment. But in the case of computer graphics we can not directly join any two coordinate points, for that we should calculate intermediate point’s coordinate and put a pixel for each intermediate point, of the desired color with help of functions like putpixel(x, y, K) in C, where (x,y) is our co-ordinate and K denotes some color.<br><br>

Examples:<br><br><br>

Input: For line segment between (2, 2) and (6, 6) :<br><br>
we need (3, 3) (4, 4) and (5, 5) as our intermediate
points.<br><br>

Input: For line segment between (0, 2) and (0, 6) :<br><br>
we need (0, 3) (0, 4) and (0, 5) as our intermediate
points.<br><br><br>
For using graphics functions, our system output screen is treated as a coordinate system where the coordinate of the top-left corner is (0, 0) and as we move down our x-ordinate increases and as we move right our y-ordinate increases for any point (x, y).<br><br><br>
Now, for generating any line segment we need intermediate points and for calculating them we have can use a basic algorithm called DDA(Digital differential analyzer) line generating algorithm.<br><br>

DDA Algorithm:<br><br><br>
Consider one point of the line as (X0,Y0) and the second point of the line as (X1,Y1).<br>

// calculate dx , dy<br>
dx = X1 - X0;<br>
dy = Y1 - Y0;<br>

// Depending upon absolute value of dx & dy<br><br>
// choose number of steps to put pixel as<br><br>
// steps = abs(dx) > abs(dy) ? abs(dx) : abs(dy)<br><br>
steps = abs(dx) > abs(dy) ? abs(dx0 : abs(dy);<br><br>

// calculate increment in x & y for each steps<br><br>
Xinc = dx / (float) steps;<br><br><br>
Yinc = dy / (float) steps;<br><br><br>

// Put pixel for each step<br>
X = X0;<br><br>
Y = Y0;<br><br>
for (int i = 0; i <= steps; i++)<br>
{<br>
    putpixel (X,Y,WHITE);<br>
    X += Xinc;<br>
    Y += Yinc;<br>
}<br><br>


Bresenham’s Line Generation Algorithm<br>
Given coordinate of two points A(x1, y1) and B(x2, y2). The task to find all the intermediate points required for drawing line AB on the computer screen of pixels. Note that every pixel has integer coordinates.<br><br>

Examples:<br><br><br>

Input  : A(0,0), B(4,4)<br><br>
Output : (0,0), (1,1), (2,2), (3,3), (4,4)<br><br>

Input  : A(0,0), B(4,2)<br><br>
Output : (0,0), (1,0), (2,1), (3,1), (4,2)<br><br>
Below are some assumptions to keep algorithm simple.<br><br>



 

We draw line from left to right.<br><br>

Slope of the line is between 0 and 1. We draw a line from lower left to upper right.<br><br>
Let us understand the process by considering the naive way first.<br><br>

// A naive way of drawing line<br><br>
void naiveDrawLine(x1, x2, y1, y2)<br><br>
{<br>
   m = (y2 - y1)/(x2 - x1)<br>
   for (x  = x1; x <= x2; x++) <br>
   {    <br>
      // Assuming that the round function finds<br>
      // closest integer to a given float.<br>
      y = round(mx + c);    <br>
      print(x, y); <br>
   }<br>
}<br>
Above algorithm works, but it is slow. The idea of Bresenham’s algorithm is to avoid floating point multiplication and addition to compute mx + c, and then computing round value of (mx + c) in every step. In Bresenham’s algorithm, we move across the x-axis in unit intervals.<br><br><br>



