<?php 
    include "top.php";
?>

<body>
    <main class = "flexBox">
        <section>
            <h2>AI Usage</h2>
            <p>
                This project was my step into integrating artificial intelligence into a coding project. I found the technical integration to be relatively simple, but getting AI to constantly do what I wanted it to was more difficult. It often felt like working with a kindergartener who understands the basic task but not the fine details. I will continue to use AI in my projects going forward as it is extremely useful for specific tasks and I think many of the issues I had will be ironed out as development in the field continues to advance.<br>
                <br>
                I was also able to apply many of the concepts from my Intro Artificial Intelligence course (e.g. expectiminimax) to develop my own decision making system for this project.

            </p>
        </section>  
        <section>
            <h2>Computer Vision</h2>
            <p>
               In order to determine what cards are present on the table, an image of the table has to be viewed. Although computers are far better at the analytical side of blackjack, image recognition remains deceptively challenging. Like many problems in life, this one can be solved with ChatGPT.  Using the OpenAI API for Python, I upload an image to their servers, ChatGPT analyzes the image and returns a list of the cards it sees and who has them. However input validation is needed as factors like blurry images and covered cards can lead to incorrect outputs.<br>
               <br>
               Although letting the bot run autonomously is a relatively simple feature to add, just requiring the bot to scan every couple seconds until the cards change, the high cost of image processing makes this feature prohibitely expensive. 
            </p>
        </section>  

    </main>
</body>