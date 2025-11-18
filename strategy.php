<?php 
    include "top.php";
?>

<body>
    <main class = "flexBox">
        <section>
            <h2>My Strategy</h2>
            <p>
                The standard strategy in blackjack is to follow the basic strategy chart popularized by Edward O. Thorp. It’s a table of moves where your cards are listed in the rows and the dealer’s are in the columns.  The problem with basic strategy is that the table used is static, so it will tell you to make the same move no matter what cards are in the deck. (E.G. you are at 12, there it will tell you to hit even if there are only 10s left). My strategy improves on this using expectiminimax. It runs every possible move with every possible card combination, then picks the move with the highest chance of winning. This solves the problem in basic strategy as my strategy changes its answer based on the cards left in the deck. One thing I did to further improve the efficiency of this algorithm was incorporating memoization, storing hand information in a dictionary, so identical hands would not have to be recomputed.
            </p>
        </section>  

        <section>
            <h2>Strategy Chart</h2>
            <img src="resources/StrategyChart.jpg" alt = "Strategy chart" class="chartImg">
        </section>

    </main>
</body>