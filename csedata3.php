<h2>Queue | Set 1 (Introduction and Array Implementation)</h2><br><br><br><br>
Like Stack, Queue is a linear structure which follows a particular order in which the operations are performed. The order is First In First Out (FIFO).  A good example of queue is any queue of consumers for a resource where the consumer that came first is served first.<br><br>
The difference between stacks and queues is in removing. In a stack we remove the item the most recently added; in a queue, we remove the item the least recently added.<br><br>

Operations on Queue:<br><br>
Mainly the following four basic operations are performed on queue:<br><br>

Enqueue: Adds an item to the queue. If the queue is full, then it is said to be an Overflow condition.<br><br>
Dequeue: Removes an item from the queue. The items are popped in the same order in which they are pushed. If the queue is empty, then it is said to be an Underflow condition.<br><br>
Front: Get the front item from queue.<br><br>
Rear: Get the last item from queue.<br><br>



Applications of Queue:<br><br>
Queue is used when things don’t have to be processed immediatly, but have to be processed in First InFirst Out order like Breadth First Search. This property of Queue makes it also useful in following kind of scenarios.<br><br>

1) When a resource is shared among multiple consumers. Examples include CPU scheduling, Disk Scheduling.<br><br>
2) When data is transferred asynchronously (data not necessarily received at same rate as sent) between two processes. Examples include IO Buffers, pipes, file IO, etc.<br><br>

See this for more detailed applications of Queue and Stack.<br><br>

Array implementation Of Queue<br><br>
For implementing queue, we need to keep track of two indices, front and rear. We enqueue an item at the rear and dequeue an item from front. If we simply increment front and rear indices, then there may be problems, front may reach end of the array. The solution to this problem is to increase front and rear in circular manner (See this for details)<br><br>

Recommended: Please solve it on “PRACTICE” first, before moving on to the solution.<br><br>


 


// C program for array implementation of queue <br><br>
#include <stdio.h> <br>
#include <stdlib.h> <br>
#include <limits.h> <br>
  
// A structure to represent a queue <br><br>
struct Queue <br>
{ <br>
    int front, rear, size; <br>
    unsigned capacity; <br>
    int* array; <br>
}; <br>
  
// function to create a queue of given capacity.  <br>
// It initializes size of queue as 0 <br>
struct Queue* createQueue(unsigned capacity) <br>
{ <br>
    struct Queue* queue = (struct Queue*) malloc(sizeof(struct Queue)); <br>
    queue->capacity = capacity; <br>
    queue->front = queue->size = 0; <br> 
    queue->rear = capacity - 1;  // This is important, see the enqueue <br>
    queue->array = (int*) malloc(queue->capacity * sizeof(int)); <br>
    return queue; <br>
} <br><br>
  
// Queue is full when size becomes equal to the capacity  <br>
int isFull(struct Queue* queue) <br>
{  return (queue->size == queue->capacity);  } <br>
  
// Queue is empty when size is 0 <br>
int isEmpty(struct Queue* queue) <br>
{  return (queue->size == 0); } <br>
  
// Function to add an item to the queue.   <br>
// It changes rear and size <br>
void enqueue(struct Queue* queue, int item) <br>
{ <br>
    if (isFull(queue)) <br><br>
        return; <br><br>
    queue->rear = (queue->rear + 1)%queue->capacity; <br>
    queue->array[queue->rear] = item; <br>
    queue->size = queue->size + 1; <br>
    printf("%d enqueued to queue\n", item); <br>
} <br><br><br>
  
// Function to remove an item from queue.  <br><br>
// It changes front and size <br><br>
int dequeue(struct Queue* queue) <br><br>
{ <br>
    if (isEmpty(queue)) <br>
        return INT_MIN; <br>
    int item = queue->array[queue->front]; <br>
    queue->front = (queue->front + 1)%queue->capacity; <br>
    queue->size = queue->size - 1; <br>
    return item; <br>
} <br><br><br>
  
// Function to get front of queue <br><br><br>
int front(struct Queue* queue) <br>
{ <br>
    if (isEmpty(queue)) <br>
        return INT_MIN; <br>
    return queue->array[queue->front]; <br>
} <br><br>
  
// Function to get rear of queue <br><br>
int rear(struct Queue* queue) <br>
{ <br>
    if (isEmpty(queue)) <br>
        return INT_MIN; <br>
    return queue->array[queue->rear]; <br>
} <br><br>
  
// Driver program to test above functions./ <br><br>
int main() <br>
{ <br>
    struct Queue* queue = createQueue(1000); <br>
  
    enqueue(queue, 10); <br><br>
    enqueue(queue, 20); <br><br>
    enqueue(queue, 30); <br><br>
    enqueue(queue, 40); <br><br>
  
    printf("%d dequeued from queue\n\n", dequeue(queue)); <br><br>
  
    printf("Front item is %d\n", front(queue)); <br><br>
    printf("Rear item is %d\n", rear(queue)); <br><br>
  
    return 0; <br>
} <br><br><br><br>

Output:<br><br>
10 enqueued to queue<br><br>
20 enqueued to queue<br><br>
30 enqueued to queue<br><br>
40 enqueued to queue<br><br>
10 dequeued from queue<br><br>
Front item is 20<br><br>
Rear item is 40<br><br>
Time Complexity: Time complexity of all operations like enqueue(), dequeue(), isFull(), isEmpty(), front() and rear() is O(1). There is no loop in any of the operations.<br><br><br>



