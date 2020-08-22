<h2>Operating System | Process Management | Introduction</h2><br><br><br>



Program vs Process<br><br>
A process is a program in execution. For example, when we write a program in C or C++ and compile it, the compiler creates binary code. The original code and binary code are both programs. When we actually run the binary code, it becomes a process.<br>

A process is an ‘active’ entity, as opposed to a program, which is considered to be a ‘passive’ entity. A single program can create many processes when run multiple times; for example, when we open a .exe or binary file multiple times, multiple instances begin (multiple processes are created).<br><br><br>


Text Section:A Process, sometimes known as the Text Section, also includes the current activity represented by the value of the Program Counter.<br>
Stack: The Stack contains the temporary data, such as function parameters, returns addresses, and local variables.<br>
Data Section: Contains the global variable.<br>
Heap Section: Dynamically allocated memory to process during its run time.<br>
Refer this for more details on sections.<br><br><br><br>



 

Attributes or Characteristics of a Process<br><br>
A process has following attributes.<br><br>



 

1. Process Id:    A unique identifier assigned by the operating system<br><br>
2. Process State: Can be ready, running, etc.<br><br>
3. CPU registers: Like the Program Counter (CPU registers must be saved and <br><br>
                  restored when a process is swapped in and out of CPU)<br><br>
5. Accounts information:<br><br>
6. I/O status information: For example, devices allocated to the process, 
                           open files, etc<br><br>
8. CPU scheduling information: For example, Priority (Different processes <br><br>
                               may have different priorities, for example<br><br>
                               a short process may be assigned a low priority<br>
                               in the shortest job first scheduling)<br>
All of the above attributes of a process are also known as thecontext of the process.<br><br>
Every process has its own program control block(PCB), i.e each process will have a unique PCB. All of the above attributes are part of the PCB.<br><br><br><br>

 

States of Process:<br><br>
A process is in one of the following states:<br><br>

1. New: Newly Created Process (or) being-created process.<br><br><br>

2. Ready: After creation process moves to Ready state, i.e. the 
          process is ready for execution.<br><br><br>

3. Run: Currently running process in CPU (only one process at
        a time can be under execution in a single processor).<br><br><br>

4. Wait (or Block): When a process requests I/O access.<br><br><br>

5. Complete (or Terminated): The process completed its execution.<br><br><br>

6. Suspended Ready: When the ready queue becomes full, some processes
                    are moved to suspended ready state<br><br>

7. Suspended Block: When waiting queue becomes full.<br><br>


