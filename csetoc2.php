<h2>Theory of Computation | Finite Automata Introduction</h2><br><br><br><br>



Finite Automata(FA) is the simplest machine to recognize patterns.<br><br>
A Finite Automata consists of the following :<br><br><br>

Q : Finite set of states.<br><br>
∑ : set of Input Symbols.<br><br>
q : Initial state.<br><br>
F : set of Final States.<br><br>
δ : Transition Function.<br><br>
Formal specification of machine is<br><br>
{ Q, ∑, q, F, δ }.<br><br><br>

FA is characterized into two types:<br><br><br>

 
1) Deterministic Finite Automata (DFA)<br><br><br><br><br>



 

DFA consists of 5 tuples {Q, ∑, q, F, δ}. <br><br>
Q : set of all states.<br><br>
∑ : set of input symbols. ( Symbols which machine takes as input )<br><br>
q : Initial state. ( Starting state of a machine )<br><br>
F : set of final state.<br><br>
δ : Transition Function, defined as δ : Q X ∑ --> Q.<br><br>
In a DFA, for a particular input character, the machine goes to one state only. A transition function is defined on every state for every input symbol. Also in DFA null (or ε) move is not allowed, i.e., DFA cannot change state without any input character.<br><br><br>

For example, below DFA with ∑ = {0, 1} accepts all strings ending with 0.<br><br><br>

One important thing to note is, there can be many possible DFAs for a pattern. A DFA with minimum number of states is generally preferred.<br><br><br>

 <br><br><br>
2) Nondeterministic Finite Automata(NFA)<br><br>
NFA is similar to DFA except following additional features:<br><br>
1. Null (or ε) move is allowed i.e., it can move forward without reading symbols.<br><br>
2. Ability to transmit to any number of states for a particular input.<br><br>
However, these above features don’t add any power to NFA. If we compare both in terms of power, both are equivalent.<br><br>
<br><br>
Due to above additional features, NFA has a different transition function, rest is same as DFA.<br><br><br>

δ: Transition Function<br><br>
δ:  Q X (∑ U ϵ ) --> 2 ^ Q. <br><br>
As you can see in transition function is for any input including null (or ε), NFA can go to any state number of states.<br><br>
For example, below is a NFA for above problem<br><br>

One important thing to note is, in NFA, if any path for an input string leads to a final state, then the input string accepted. For example, in above NFA, there are multiple paths for input string “00”. Since, one of the paths leads to a final state, “00” is accepted by above NFA.<br><br>

 <br><br>
Some Important Points:<br><br>
1. Every DFA is NFA but not vice versa.<br><br>
2. Both NFA and DFA have same power and each NFA can be translated into a DFA.<br><br>
3. There can be multiple final states in both DFA and NFA.<br><br>
3. NFA is more of a theoretical concept.<br><br>
4. DFA is used in Lexical Analysis in Compiler.<br><br>



