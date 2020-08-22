<h2>Operating System | Process Synchronization </h2><br><br><br>



On the basis of synchronization, processes are categorized as one of the following two types:<br><br>

Independent Process : Execution of one process does not affects the execution of other processes.<br><br>
Cooperative Process : Execution of one process affects the execution of other processes.<br><br>
Process synchronization problem arises in the case of Cooperative process also because resources are shared in Cooperative processes.<br><br><br>
 
Critical Section Problem<br><br><br>

Critical section is a code segment that can be accessed by only one process at a time. Critical section contains shared variables which need to be synchronized to maintain consistency of data variables.<br><br>
critical section problem<br><br>

In the entry section, the process requests for entry in the Critical Section.<br><br><br>



 

Any solution to the critical section problem must satisfy three requirements:<br><br>

Mutual Exclusion : If a process is executing in its critical section, then no other process is allowed to execute in the critical section.<br><br>
Progress : If no process is in the critical section, then no other process from outside can block it from entering the critical section.<br><br>
Bounded Waiting : A bound must exist on the number of times that other processes are allowed to enter their critical sections after a process has made a request to enter its critical section and before that request is granted.<br><br>
 
Peterson’s Solution<br><br>
Peterson’s Solution is a classical software based solution to the critical section problem.<br><br><br>

In Peterson’s solution, we have two shared variables:<br><br><br>

boolean flag[i] :Initialized to FALSE, initially no one is interested in entering the critical section<br><br><br>
int turn : The process whose turn is to enter the critical section.<br><br>
peterson<br>
 
Peterson’s Solution preserves all three conditions :<br><br><br>

Mutual Exclusion is assured as only one process can access the critical section at any time.<br><br>
Progress is also assured, as a process outside the critical section does not blocks other processes from entering the critical section.<br>
Bounded Waiting is preserved as every process gets a fair chance.<br><br><br><br>
 
Disadvantages of Peterson’s Solution<br><br><br>

It involves Busy waiting<br>
It is limited to 2 processes.<br>
 <br><br><br>

TestAndSet<br><br>
TestAndSet is a hardware solution to the synchronization problem. In TestAndSet, we have a shared lock variable which can take either of the two values, 0 or 1.<br><br><br>

0 Unlock<br><br>
1 Lock<br><br>
Before entering into the critical section, a process inquires about the lock. If it is locked, it keeps on waiting till it become free and if it is not locked, it takes the lock and executes the critical section.<br><br>

In TestAndSet, Mutual exclusion and progress are preserved but bounded waiting cannot be preserved.<br><br><br>
 
Question : The enter_CS() and leave_CS() functions to implement critical section of a process are realized using test-and-set instruction as follows:<br><br><br>

int TestAndSet(int &lock) {<br>
    int initial = lock;<br>
    lock = 1;<br>
    return initial;<br>
}<br><br><br>

void enter_CS(X)<br>
{<br>
  while test-and-set(X) ;<br>
}<br>

void leave_CS(X)<br>
{<br>
  X = 0;<br>
}<br>
In the above solution, X is a memory location associated with the CS and is initialized to 0. Now, consider the following statements:<br><br>
I. The above solution to CS problem is deadlock-free<br><br>
II. The solution is starvation free.<br><br>
III. The processes enter CS in FIFO order.<br><br>
IV. More than one process can enter CS at the same time.<br><br><br><br>

