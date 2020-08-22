<h2>Operating System | Process Management | Deadlock Introduction</h2><br><br><br>



A process in operating systems uses different resources and uses resources in following way.<br><br>
1) Requests a resource<br><br>
2) Use the resource<br><br>
2) Releases the resource<br><br><br><br>



Deadlock is a situation where a set of processes are blocked because each process is holding a resource and waiting for another resource acquired by some other process.<br><br>
Consider an example when two trains are coming toward each other on same track and there is only one track, none of the trains can move once they are in front of each other. Similar situation occurs in operating systems when there are two or more processes hold some resources and wait for resources held by other(s). For example, in the below diagram, Process 1 is holding Resource 1 and waiting for resource 2 which is acquired by process 2, and process 2 is waiting for resource 1.<br><br><br>



 





Deadlock can arise if following four conditions hold simultaneously (Necessary Conditions) <br><br><br>
Mutual Exclusion: One or more than one resource are non-sharable (Only one process can use at a time)<br><br>
Hold and Wait: A process is holding at least one resource and waiting for resources.<br><br>
No Preemption: A resource cannot be taken from a process unless the process releases the resource.<br><br>
Circular Wait: A set of processes are waiting for each other in circular form.<br><br><br>



Methods for handling deadlock<br><br>
There are three ways to handle deadlock<br><br>
1) Deadlock prevention or avoidance: The idea is to not let the system into deadlock state.<br><br>

2) Deadlock detection and recovery: Let deadlock occur, then do preemption to handle it once occurred.<br><br>

3) Ignore the problem all together: If deadlock is very rare, then let it happen and reboot the system. This is the approach that both Windows and UNIX take.<br><br><br>


