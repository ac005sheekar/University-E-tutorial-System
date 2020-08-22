<h2>2D Transformation in Computer Graphics | Set 1 (Scaling of Objects)</h2><br><br><br><br>
A scaling transformation alters size of an object. In the scaling process, we either compress or expand the dimension of the object.<br><br>
Scaling operation can be achieved by multiplying each vertex coordinate (x, y) of the polygon by scaling factor sx and sy to produce the transformed coordinates as (x’, y’).<br><br>
So, x’ = x * sx and y’ = y * sy.<br>
The scaling factor sx, sy scales the object in X and Y direction respectively. So, the above equation can be represented in matrix form:<br><br><br>
 \begin{bmatrix} X'\\ Y'  \end{bmatrix}=\begin{bmatrix} Sx & 0 \\  0 & Sy \end{bmatrix}\begin{bmatrix} X\\ Y  \end{bmatrix} <br><br>
Or P’ = S . P<br>
Scaling process:<br><br><br>

Note: If the scaling factor S is less than 1, then we reduce the size of the object. If the scaling factor S is greater than 1, then we increase size of the object.<br><br>

Algorithm:<br><br>

1. Make a 2x2 scaling matrix S as:<br><br>
   Sx 0<br><br>
   0  Sy<br><br>
2. For each point of the polygon.<br><br>
   (i) Make a 2x1 matrix P, where P[0][0] equals <br><br>
       to x coordinate of the point and P[1][0] <br><br>
       equals to y coordinate of the point.<br><br>
   (ii) Multiply scaling matrix S with point <br><br>
        matrix P to get the new coordinate.<br><br>
3. Draw the polygon using new coordinates.<br><br>
Below is C implementation:<br><br>


// C program to demonstrate scaling of abjects <br>
#include<stdio.h> <br>
#include<graphics.h> <br><br>
  
// Matrix Multiplication to find new Coordinates. <br>
// s[][] is scaling matrix. p[][] is to store <br>
// points that needs to be scaled. <br>
// p[0][0] is x coordinate of point. <br>
// p[1][0] is y coordinate of given point. <br><br><br>
void findNewCoordinate(int s[][2], int p[][1]) <br>
{ <br>
    int temp[2][1] = { 0 }; <br>
  
    for (int i = 0; i < 2; i++) <br>
        for (int j = 0; j < 1; j++) <br>
            for (int k = 0; k < 2; k++) <br>
                temp[i][j] += (s[i][k] * p[k][j]); <br>
  
    p[0][0] = temp[0][0]; <br>
    p[1][0] = temp[1][0]; <br>
} <br><br>
  
// Scaling the Polygon <br><br>
void scale(int x[], int y[], int sx, int sy) <br>
{ <br>
    // Triangle before Scaling <br>
    line(x[0], y[0], x[1], y[1]); <br>
    line(x[1], y[1], x[2], y[2]); <br>
    line(x[2], y[2], x[0], y[0]); <br>
  
    // Initializing the Scaling Matrix. <br>
    int s[2][2] = { sx, 0, 0, sy }; <br>
    int p[2][1]; <br>
  
    // Scaling the triangle <br>
    for (int i = 0; i < 3; i++) <br>
    { <br>
        p[0][0] = x[i]; <br>
        p[1][0] = y[i]; <br>
  
        findNewCoordinate(s, p); <br>
  
        x[i] = p[0][0]; <br>
        y[i] = p[1][0]; <br>
    } <br>
  
    // Triangle after Scaling <br>
    line(x[0], y[0], x[1], y[1]); <br>
    line(x[1], y[1], x[2], y[2]); <br>
    line(x[2], y[2], x[0], y[0]); <br>
} <br><br>
  
// Driven Program <br><br>
int main() <br><br>
{ <br><br>
    int x[] = { 100, 200, 300 }; <br><br>
    int y[] = { 200, 100, 200 }; <br><br>
    int sx = 2, sy = 2; <br><br>
  
    int gd, gm; <br><br>
    detectgraph(&gd, &gm); <br><br>
    initgraph(&gd, &gm," "); <br><br>
  
    scale(x, y, sx,sy); <br><br>
    getch(); <br><br>
  
    return 0; <br><br>
} <br><br><br>

