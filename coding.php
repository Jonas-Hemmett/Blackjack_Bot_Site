<?php 
    include "top.php";
?>

<body>
    <main class = "flexBox">
        <section>
            <h2>Python</h2>
            <p>
                This project is largely coded in Python. I chose Python largely because the microelectronics used (E.G. screen and buttons) natively support it and it's fast to code. However Python is an interpreted language. Meaning it’s relatively slow. This is not really an issue as compute speed is not the bottleneck in real games, and running thousands of games to test my algorithms is still effectively instant.
            </p>

             <h2>Simulations & Local Gameplay</h2>
            <p>
                In order to test the effectiveness of my bot, I coded the game of blackjack from the ground up. This lets me simulate games locally on the Pi. What would take hours to play in real life can be simulated in seconds. I modified the simulation program, letting you play games against the computer on the device (i.e. a blackjack video game).<br>
                <br>
                I tried a variety of different game and card counting strategies and as expected, more advanced strategies on average were more profitable. Running these simulations further proved to me how much of an edge the dealer really has and how it impacts profitably over the course of many games.

            </p>
        </section>  
        <section>
            <h2>Object-Oriented Programming</h2>
            <p>
                Because this project is made up of so many parts, composition and inheritance really helped to keep things simple. Each part is essentially made out of a few building blocks. For instance the file that contains the game logic can either be run through the Raspberry Pi UI or through the terminal. This is also how I build the bot logic, each bot is made up of a card counting part, a strategy part, and an IO part which handles how game information is received and displayed. Setting it up like this lets me try a variety of game strategies very quickly both in simulations and in real games.
            </p>

            <h2>Web Development</h2>
            <p>
                I used HTML, CSS, and PHP to build this website. I applied what I learned in CS 1080 Intro to Web Site Development as well as some examples I found on the web (e.g. The 3D model viewer) to really make this site pop.
            </p>   
        </section>  

    </main>
</body>