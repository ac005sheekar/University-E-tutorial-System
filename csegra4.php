<h2>Scan-line Polygon filling using OPENGL in C</h2><br><br><br><br>
Figures on a computer screen can be drawn using polygons. To fill those figures with color, we need to develop some algorithm.There are two famous algorithms for this purpose: Boundary fill and Scanline fill algorithms.<br><br><br>

Boundary filling requires a lot of processing and thus encounters few problems in real time. Thus the viable alternative is scanline filling as it is very robust in nature. This article discusses how to use Scanline filling algorithm to fill colors in an image.<br><br><br>

Scanline Polygon filling Algorithm<br><br><br>

Scanline filling is basically filling up of polygons using horizontal lines or scanlines. The purpose of the SLPF algorithm is to fill (color) the interior pixels of a polygon given only the vertices of the figure. To understand Scanline, think of the image being drawn by a single pen starting from bottom left, continuing to the right, plotting only points where there is a point present in the image, and when the line is complete, start from the next line and continue.<br><br>
This algorithm works by intersecting scanline with polygon edges and fills the polygon between pairs of intersections.<br><br>


Special cases of polygon vertices:<br><br>

If both lines intersecting at the vertex are on the same side of the scanline, consider it as two points.<br><br>
If lines intersecting at the vertex are at opposite sides of the scanline, consider it as only one point.<br><br>
Components of Polygon fill:<br><br>

Edge Buckets: It contains an edge’s information. The entries of edge bucket vary according to data structure you have used.In the example we are taking below, there are three edge buckets namely: ymax, xofymin,<br><br>
slopeinverse.<br><br><br>
Edge Table: It consistsof several edge lists -> holds all of the edges that compose the figure. When creating edges, the vertices of the edge need to be ordered from left to right and thee edges are maintained in increasing yMin order. Filling is complete once all of the edges are removed from the ET<br><br>
Active List: IT maintains the current edges being used to fill in the polygon.Edges aree pushed into the AL from the Edge Table when an edge’s yMin is equal to the current scan line being processed.<br><br>
The Active List will be re-sorted after every pass.<br><br><br>
Data Structure:<br><br>
Scan line polygon filling1<br><br><br>

Algorithm:<br><br>

1. We will process the polygon edge after edge, and store in the edge Table.<br><br>
2. Storing is done by storing the edge in the same scanline edge tuple as <br><br>
   the lowermost point's y-coordinate value of the edge.<br><br>
3. After addition of any edge in an edge tuple, the tuple is <br><br>
   sorted using insertion sort, according to its xofymin value.<br><br>
4. After the whole polygon is added to the edge table, <br><br>
   the figure is now filled.<br><br>
5. Filling is started from the first scanline at the bottom,<br><br>
   and continued till the top.<br><br>
6. Now the active edge table is taken and the following things <br><br>
   are repeated for each scanline:<br><br>
       i. Copy all edge buckets of the designated scanline <br><br>
          to the active edge tuple<br><br>
       ii. Perform an insertion sort according<br><br>
          to the xofymin values<br><br>
       iii. Remove all edge buckets whose ymax is equal <br><br>
            or greater than the scanline<br><br>
       iv. Fillup pairs of edges in active tuple, if any vertex is got, <br><br>
           follow these instructions:<br><br>
            o If both lines intersecting at the vertex are on<br><br>
              the same side of the scanline, consider it as two points.<br><br>
            o If lines intersecting at the vertex are at <br><br>
              opposite sides of the scanline, consider it as only one point.<br><br>
       v. Update the xofymin by adding slopeinverse for each bucket.<br><br>
	   
	   
	   