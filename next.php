<?php 
    include "top.php";
?>

<body>
    <main class = "flexBox">
        <section>
            <h2>Future Development</h2>
            <p>
               The next feature I want to add is an improved version of card counting. Traditional card counting assigns a score to each card (count), the running count determines the optimal bet size. My method would be broken into 3 parts based on the size of the remaining deck. 

               <ul>
                <li>Large deck: Use standard card counting.</li>

                <li>Medium deck: Precompute games with my improved strategy and store the data in a list. The list will hold the cards present and the chance of winning. To use it, map the list of cards currently remaining to a precomputed game. This would push the limits of Python, so I would code the precomputing part in C++.</li>

                <li>Small deck: Simulate different game outcomes in real time.</li>
                </ul>
            </p>
        </section>  
        
    </main>
</body>