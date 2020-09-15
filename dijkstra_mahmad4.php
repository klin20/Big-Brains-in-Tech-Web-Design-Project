<?php 
$url="https://www.csc170.org/mahmad4/project1/index.html";
$creator="Muhammad Ahmad";
include 'inc/html-top.php'; ?>

<body>
	<?php include 'inc/header.php'; ?>

	<?php include 'inc/nav.php'; ?>

	<header>
		<h1>EDSGER W. DIJKSTRA</h1>
		<div class="subtitle">— A PIONEER IN COMPUTER SCIENCE —</div>
	</header>

	<div class="container">
		<main class="about">
			<h2 class="specialheader">About</h2>
			<figure class="signedprofile">
				<img class="flexible" src="./images/dijkstra.jpg" alt="logo">
				<figcaption>Fig. 1 - Dijkstra</figcaption>
			</figure>


			<section class="info">
				<p class="bg">Edsger Wybe Dijkstra was a Dutch systems scientist, programmer, software engineer and a science essayist. A theoretical physicist by training, he worked as a programmer at the Mathematisch Centrum from 1952 to 1962. A university professor for much of his life, Dijkstra held the Schlumberger Centennial Chair in Computer Sciences at the University of Texas at Austin from 1984 until his retirement in 1999. He was a professor of mathematics at the Eindhoven University of Technology (1962–1984) and a research fellow at the Burroughs Corporation (1973–1984).

				One of the most influential figures of computing science's founding generation, Dijkstra helped shape the new discipline from both an engineering and a theoretical perspective. His fundamental contributions cover diverse areas of computing science, including compiler construction, operating systems, distributed systems, sequential and concurrent programming, programming paradigm and methodology, programming language research, program design, program development, program verification, software engineering principles, graph algorithms, and philosophical foundations of computer programming and computer science. Many of his papers are the source of new research areas. Several concepts and problems that are now standard in computer science were first identified by Dijkstra and/or bear names coined by him. As a foremost opponent of the mechanizing view of computing science, he refuted the use of the concepts of 'computer science' and 'software engineering' as umbrella terms for academic disciplines.

				Until the mid-1960s computer programming was considered more an art (or a craft) than a scientific discipline. In Harlan Mills's words (1986), "programming was regarded as a private, puzzle-solving activity of writing computer instructions to work as a program". In the late 1960s, computer programming was in a state of crisis. Dijkstra was one of a small group of academics and industrial programmers who advocated a new programming style to improve the quality of programs. Dijkstra, who had a background in mathematics and physics, was one of the driving forces behind the acceptance of computer programming as a scientific discipline. He coined the phrase "structured programming" and during the 1970s this became the new programming orthodoxy. His ideas about structured programming helped lay the foundations for the birth and development of the professional discipline of software engineering, enabling programmers to organize and manage increasingly complex software projects. As Bertrand Meyer (2009) noted, "The revolution in views of programming started by Dijkstra's iconoclasm led to a movement known as structured programming, which advocated a systematic, rational approach to program construction. Structured programming is the basis for all that has been done since in programming methodology, including object-oriented programming."</p>
			</section>
		</main>
	</div>

	<div class="container2">
		<article class="fam bg">
			<h2 class="header">Scientific contributions and impacts</h2>
			<section>
				<p>As an early theoretical pioneer in many research areas of computing science, Dijkstra helped shape the new discipline from both an engineering and an academic perspective. Many of his papers are the source of new research areas. Many concepts that are now standard in computer science were first identified by Dijkstra and/or bear names coined by him. Several important problems were also first formulated and solved by him. A 1994 survey of over a thousand professors of computer science was conducted to obtain a list of 38 most influential scholarly papers in the field, and Dijkstra is the author of five papers.

				During his forty-plus years as a computing scientist, which included positions in both academia and industry, Dijkstra made numerous seminal contributions to many areas of computing science, including compiler construction, operating systems, concurrent programming (concurrent computing), distributed programming (distributed computing), programming paradigm and methodology, programming language research, program design, program development, program verification, software engineering principles, algorithm design, and philosophical foundations of computer programming and computer science. In addition, Dijkstra was intensely interested in teaching computer science, and in the relationships between academic computing science and the software industry.</p>
			</section>
		</article>

		<aside class="fam bg">
			<h3 class="header">Algorithmic work</h3>
			<p>Dijkstra's algorithmic work (especially graph algorithms, concurrent algorithms, and distributed algorithms) plays an important role in many areas of computing science. According to Leslie Lamport (2002), Dijkstra "started the field of concurrent and distributed algorithms with his 1965 CACM paper "Solution of a Problem in Concurrent Programming Control", in which he first stated and solved the mutual exclusion problem." As Lamport explains, "that paper is probably why PODC exists (...). It remains to this day the most influential paper in the field. That it did not win a PODC Influential Paper Award reflects an artificial separation between concurrent and distributed algorithms–a separation that has never existed in Dijkstra's work."

				A year later, he came across another problem from hardware engineers working on the institute's next computer: minimize the amount of wire needed to connect the pins on the back panel of the machine. As a solution, he rediscovered the algorithm known as Prim's minimal spanning tree algorithm. The Prim's algorithm was originally developed in 1930 by Czech mathematician Vojtěch Jarník. and later independently rediscovered and republished by Robert C. Prim in 1957, and Dijkstra in 1959. Therefore, it is also sometimes called the DJP algorithm.

				In 1961 Dijkstra first described the shunting-yard algorithm, a method for parsing mathematical expressions specified in infix notation, in the Mathematisch Centrum report. It can be used to produce output in Reverse Polish notation (RPN) or as an abstract syntax tree (AST). The algorithm was named the "shunting yard" algorithm because its operation resembles that of a railroad shunting yard. The shunting-yard algorithm is commonly used to implement operator-precedence parsers.

			In 1962 or 1963 Dijkstra proposed the semaphore mechanism for mutual exclusion algorithm for n processes (a generalization of Dekker's algorithm), which was probably the first published concurrent algorithm and which introduced a new area of algorithmic research. He also identified the deadlock problem and proposed the banker's algorithm that prevents deadlock.</p>
		</aside>

		<section class="fam bg">
			<h3 class="header">Compiler construction and programming language research</h3>
			<p>Dijkstra was known to be a fan of the programming language ALGOL, and worked on the team that implemented the first compiler for ALGOL 60, which he was closely involved in developing, realising, and popularising. As discussed by Peter Naur in the article 'The European side of the last phase of the development of ALGOL 60', in the Proceedings of the First ACM SIGPLAN Conference on History of Programming Languages, January 1978, Dijkstra took part in the period 1958–1959 in a number of meetings that culminated in the publication of the report defining the ALGOL 60 language. Dijkstra's name does not appear in the list of 13 authors of the final report, but he was an official member of the International Federation for Information Processing (IFIP) IFIP Working Group 2.1, which supports and maintains ALGOL 60 and ALGOL 68. He eventually left the committee, apparently because he could not agree with the majority opinions. Still, while at the Mathematisch Centrum (Amsterdam), he wrote jointly with Jaap Zonneveld the first ALGOL 60 compiler. Dijkstra and Zonneveld, who collaborated on the compiler, agreed not to shave until the project was completed. Zonneveld shaved shortly thereafter, but Dijkstra kept his beard for the rest of his life.<br><br>

			ALGOL was the result of a collaboration of American and European committees. ALGOL 60 (short for ALGOrithmic Language 1960) is a member of the ALGOL family of computer programming languages. It followed on from ALGOL 58 and inspired many languages that followed it. It gave rise to many other languages, including BCPL, B, Pascal, Simula, and C. Algol 60 was a sophisticatedly designed computer language and it provided a large number of hitherto unknown implementation challenges. As Bjarne Stroustrup notes, "one problem with Algol60 was that no one knew how to implement it." A major new challenge in Algol 60 implementation was the run-time allocation and management of data. In 1960, Dijkstra and Zonneveld showed how recursive procedures could be executed using a run-time stack of activation records, and how to efficiently access identifiers from statically enclosing scopes using the so-called display. The ALGOL 60 compiler was one of the first to support recursion employing a novel method to do so. Dijkstra's short book Primer of Algol 60 Programming, originally published in 1962, was the standard reference for the language for several years.</p>
		</section>

		<aside class="fam bg">
			<h3 class="header">Operating system research</h3>
			<p>In the 1960s Dijkstra and his colleagues in Eindhoven designed and implemented THE (standing for 'Technische Hogeschool Eindhoven') operating system, which was organised into clearly identified abstraction layers. His 1968 article on this subject provided the foundation for subsequent designs of the operating systems. The IEEE Computer Society's David Alan Grier writes, "We generally trace the idea of building computer systems in layers back to a 1967 paper that the Dutch computer scientist Edsger Dijkstra gave to a joint IEEE Computer Society/ACM conference. Prior to this paper, engineers had struggled with the problem of how to organize software. If you look at early examples of programs, and you can find many in the electronic library of the Computer Society, you will find that most code of that era is complicated, difficult to read, hard to modify, and challenging to reuse. In his 1967 paper, Dijkstra described how software could be constructed in layers and gave an example of a simple operating system that used five layers. He admitted that this system might not be a realistic test of his ideas but he argued that the "larger the project, the more essential the structuring!" The idea of using layers to control complexity has become a mainstay of software architecture. We see it in many forms and apply it to many problems. We see it in the hierarchy of classes in object-oriented programming and in the structure of service-oriented architecture (SOA). SOA is a relatively recent application of layering in computer science. It was articulated in 2007 as a means of controlling complexity in business systems, especially distributed systems that make substantial use of the Internet. Like Dijkstra's plan for system development, its layering system is called the SOA Solution Stack or S3. The S3's nine layers are: 1) operational systems, 2) service components, 3) services, 4) business processes, 5) consumer actions, 6) system integration, 7) quality control and assurance, 8) information architecture, and 9) system governance and policies."</p>
		</aside>

		<section class="fam bg">
			<h3 class="header">Concurrent computing and programming</h3>
			<figure class="ai">
				<img class="flexible" src="./images/dining_philosophers.png" alt="logo">
				<figcaption>Fig. 1 - Dining Philosophers</figcaption>
			</figure>

			<p>In a one-page paper from 1965 Dijkstra introduced the 'mutual exclusion problem' for n processes and discussed a solution to it. It was probably the first published concurrent algorithm. The notion, standard by now, of a 'critical section' was also introduced in this paper. Per Brinch Hansen, a pioneer in the field of concurrent computing, considers Dijkstra's Cooperating Sequential Processes (1965) to be the first classic paper in concurrent programming. As Brinch Hansen notes, 'Dijkstra lays the conceptual foundation for abstract concurrent programming' with that paper.

				In 1968 Dijkstra published his seminal paper 'Cooperating sequential processes', a 70-page essay that originated the field of concurrent programming. He discussed in it the notion of mutual exclusion (mutex) and the criteria a satisfactory solution should satisfy. He also redressed the historical perspective left out of his 1965 paper by including the first known correct solution to the mutual exclusion problem, for two processes, due to Theodorus Dekker. Dijkstra subsequently generalized Dekker's solution to n processes. Further, he proposed the first synchronisation mechanism for concurrent processes, the semaphore with its two operations, P and V. He also identified the 'deadlock problem' (called there 'the problem of the deadly embrace') and proposed an elegant 'Banker's algorithm' that prevents deadlock. The deadlock detection and prevention became perennial research problems in the field of concurrent programming.

			The dining philosophers problem is an example problem often used in concurrent algorithm design to illustrate synchronization issues and techniques for resolving them. It was originally formulated in 1965 by Dijkstra as a student exam exercise, presented in terms of computers competing for access to tape drive peripherals. Soon after, Tony Hoare gave the problem its present formulation. The sleeping barber problem is also attributed to Dijkstra.</p>
		</section>
		<section class="fam bg">
			<h3 class="header">Distributed computing</h3>
			<p>Dijkstra was one of the very early pioneers of the research on principles of distributed computing. As the citation for the Dijkstra Prize recognizes, "no other individual has had a larger influence on research in principles of distributed computing." Some of his papers are even considered to be those that established the field. Dijkstra's 1965 paper, Solution of a Problem in Concurrent Programming Control was the first to present the correct solution to the mutual exclusion problem. Leslie Lamport writes that this work "is probably why PODC exists" and it "started the field of concurrent and distributed algorithms".

			In particular, his paper "Self-stabilizing Systems in Spite of Distributed Control" (1974) started the sub-field of self-stabilization. It is also considered as the first scientific examination of fault-tolerant systems. Dijkstra's paper was not widely noticed until Leslie Lamport's invited talk at the ACM Symposium on Principles of Distributed Computing (PODC) in 1983. In his report on Dijkstra's work on self-stabilizing distributed systems, Lamport regard it to be 'a milestone in work on fault tolerance' and 'a very fertile field for research'.</p>
		</section>
	</div>

	<div class="container">
		<aside class="career">
			<h2 class="header">Books</h2>
			<table>
				<tr>
					<th>Book Title</th>
					<th>ISBN</th>
					<th>Year</th>
				</tr>
				<tr class="row">
					<td>A Primer of ALGOL 60 Programming</td>
					<td>978-0122162503</td>
					<td>1962</td>
				</tr>
				<tr class="row">
					<td>Structured Programming.</td>
					<td>978-0122005503</td>
					<td>1972</td>
				</tr>
				<tr class="row">
					<td>A Discipline of Programming</td>
					<td>978-0132158718</td>
					<td>1976</td>
				</tr>
				<tr class="row">
					<td>Selected Writings on Computing: A Personal Perspective</td>
					<td>978-0387906522</td>
					<td>1982</td>
				</tr>
				<tr class="row">
					<td>A Method of Programming</td>
					<td>978-0201175363</td>
					<td>1988</td>
				</tr>
			</table>

			<h2 class="header">Awards and Honors</h2>
			<ul class="bg">
				<li>Member of the Royal Netherlands Academy of Arts and Sciences (1971)</li>
				<li>Distinguished Fellow of the British Computer Society (1971)</li>
				<li>The Association for Computing Machinery's A.M. Turing Award (1972)</li>
				<li>Harry H. Goode Memorial Award from the IEEE Computer Society (1974)</li>
				<li>Foreign Honorary Member of the American Academy of Arts and Sciences (1975)</li>
				<li>Doctor of Science Honoris Causa from the Queen's University Belfast (1976)</li>
				<li>Computer Pioneer Charter Recipient from the IEEE Computer Society (1982)</li>
				<li>Fellow of the Association for Computing Machinery (1994)</li>
			</ul>
		</aside>

		<footer>
			<h2 class="header">Citations</h2>
			<ol>
				<li> Hoare, C.A.R. (12 October 2010). "The 2010 Edsger W. Dijkstra Memorial Lecture: What Can We Learn from Edsger W. Dijkstra?". Department of Computer Science, The University of Texas at Austin. Retrieved 12 August 2015</li>
				<li>Ryder, Barbara G.; Soffa, Mary Lou; Burnett, Margaret (2005). "Impact of Software Engineering Research on Modern Programming Languages". ACM Transactions on Software Engineering and Methodology. 14 (4): 431–477</li>
				<li> Dijkstra, Edsger W. A Case against the GO TO Statement (EWD-215) (PDF). E.W. Dijkstra Archive. Center for American History, University of Texas at Austin</li>
				<li>Reilly, Edwin D. (2004). Concise Encyclopedia of Computer Science. (John Wiley &amp; Sons, Ltd.), p. 734</li>
				<li>Meyer, Bertrand (2009). Touch of Class: Learning to Program Well with Objects and Contracts. (Springer), p. 188</li>
				<li>From Wikipedia: <a href="https://en.wikipedia.org/wiki/Edsger_W._Dijkstra"> Edsger Dijkstra</a> and  <a href="https://en.wikipedia.org/wiki/Dining_philosophers_problem"> Dining Philosophers problem</a>.</li>
			</ol>
		</footer>.
	</div>

	<?php include "inc/scripts.php"; ?>

	<?php include "inc/footer.php"; ?>
</body></html>