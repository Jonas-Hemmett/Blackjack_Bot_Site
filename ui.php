<?php 
    include "top.php";
?>

<body>
    <main class = "flexBox">
        <section>
            <h2>Pi User Interface</h2>
            <p>
               On a regular computer, the UI (user interface) is printed in the Python terminal. It displays all relevant information and takes user input through the keyboard, although it’s a little clunky, it gets the job done.<br>
               <br>
                However due to the small size of the screen on the Raspberry Pi, displaying the game info via the terminal wouldn't have made for a good user experience, so I made my own UI. The screen came with basic graphical starter code using the Pillow module in Python, which helped me get started which I modified heavily. Features include a scrollable menu bar allowing for options to be quickly chosen while not taking up much space; a menu to modify the cards being present, which gives a visual preview of what the table looks like; a menu which lets you take and view pictures stored on the Pi, these pictures can be processed and the cards present on a table will be input into a new game; and my personal favorite, a loading screen which simulates a card spinning in “3D”, the illusion of 3D is achieved by applying trig functions to a card which makes it appear to rotate.
            </p>
        </section>  

        <section>
            <h2>Shoe Input</h2>
            <p>
                In addition to the buttons on the Pi itself I designed a shoe insole which maps foot movement to keyboard input, allowing for a hands free user experience. I was shopping for microelectronics and I saw conductive fabric and I immediately knew I could use it for my project, combining it with some leftover denim, the sewing skills I learned in THE 1330: Stagecraft: Costumes, and an old shoe insole,  I built the custom insole. The old insole serves as a structural base while the denim sits on top with pieces of conductive fabric inlaid into the big toe and heel areas.
            </p>
            
        </section>
        

    </main>
</body>