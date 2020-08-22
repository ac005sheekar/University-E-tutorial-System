<h2>Operating System | Thread</h2><br><br><br>



What is a Thread?<br><br>
A thread is a path of execution within a process. A process can contain multiple threads. <br><br>
Why Multithreading?<br><br>
A thread is also known as lightweight process. The idea is to achieve parallelism by dividing a process into multiple threads. For example, in a browser, multiple tabs can be different threads. MS Word uses multiple threads: one thread to format the text, another thread to process inputs, etc. More advantages of multithreading are discussed below<br><br>
Process vs Thread?
The primary difference is that threads within the same process run in a shared memory space, while processes run in separate memory spaces.<br><br>
Threads are not independent of one another like processes are, and as a result threads share with other threads their code section, data section, and OS resources (like open files and signals). But, like process, a thread has its own program counter (PC), register set, and stack space.<br><br>
Advantages of Thread over Process
1. Responsiveness: If the process is divided into multiple threads, if one thread completes its execution, then its output can be immediately returned.<br>

2. Faster context switch: Context switch time between threads is lower compared to process context switch. Process context switching requires more overhead from the CPU.<br>

3. Effective utilization of multiprocessor system: If we have multiple threads in a single process, then we can schedule multiple threads on multiple processor. This will make process execution faster.<br><br><br>



 

4. Resource sharing: Resources like code, data, and files can be shared among all threads within a process.<br><br>
Note: stack and registers can’t be shared among the threads. Each thread has its own stack and registers.<br><br>

5. Communication: Communication between multiple threads is easier, as the threads shares common address space. while in process we have to follow some specific communication technique for communication between two process.<br><br>

6. Enhanced throughput of the system: If a process is divided into multiple threads, and each thread function is considered as one job, then the number of jobs completed per unit of time is increased, thus increasing the throughput of the system.<br><br><br>

<br><br><br>
<h3>Types of Threads</h3><br><br>
There are two types of threads.<br><br>
User Level Thread<br><br>
Kernel Level Thread<br><br><br><br>



Thread is a single sequence stream within a process. Threads have same properties as of the process so they are called as light weight processes. Threads are executed one after another but gives the illusion as if they are executing in parallel. Each thread has different states. Each thread has<br><br><br>

A program counter<br><br>
A register set<br><br>
A stack space<br><br>
All the threads are independent of each other so they share the code, data, OS resources etc.<br><br><br>

Similarity between Threads and Processes –<br><br>

Only one thread or process is active at a time<br><br>
Within process both execute sequentiall<br><br>
Both can create children<br><br>
Differences between Threads and Processes –<br><br><br>

Threads are not independent, processes are.<br><br>
Threads are designed to assist each other, processes may or may not do it<br><br>
Types of Threads:<br><br><br>



 

User Level thread (ULT) –<br><br><br>
Is implemented in the user level library, they are not created using the system calls. Thread switching does not need to call OS and to cause interrupt to Kernel. Kernel doesn’t know about the user level threadand manages them as if they were single threaded processes.<br><br>
Advantages of ULT –<br><br>

Can be implemented on an OS that does’t support multithreading.<br><br>
Simple representation since thread has only program counter, register set, stack space.<br><br><br>
Simple to create since no intervention of kernel.<br><br>
Thread switching is fast since no OS calls need to be made.<br><br>
Disadvantages of ULT –<br><br>

No or less co-ordination among the threads and Kernel.<br><br>
If one thread causes a page fault, the entire process blocks.<br><br>
Kernel Level Thread (KLT) –<br><br><br>
Kernel knows and manages the threads. Instead of thread table in each process, the kernel itself has thread table (a master one) that keeps track of all the threads in the system. In addition kernel also maintains the traditional process table to keep track of the processes. OS kernel provides system call to create and manage threads.<br><br><br>
Advantages of KLT –<br><br>

Since kernel has full knowledge about the threads in the system, scheduler may decide to give more time to processes having large number of threads.<br><br>
Good for applications that frequently block.<br><br><br><br>
Disadvantages of KLT –<br><br>

Slow and inefficient.<br><br>
It requires thread control block so it is an overhead.<br><br>
Summary:<br><br>

Each ULT has a process that keeps track of the thread using the Thread table.<br><br>
Each KLT has Thread Table (TCB) as well as the Process Table (PCB).<br><br><br><br>