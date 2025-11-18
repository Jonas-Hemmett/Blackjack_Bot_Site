<?php 
    include "top.php";
?>
<script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
<body>
    <main class = "flexBox">
        <section>
            <h2>Custom Housing</h2>
            <p>
               TIn order to combine features like a camera, screen, and buttons with  the Raspberry Pi, I made a custom housing that fits all of them. I used CAD (Computer aided design) to design it on my computer.  I created sketches of the parts, combining dimensions of the Pi with the ideas I had in my head. Designing the custom housing took many iterations to get right as I had to make sure all of the parts fit together, many of the intermediate versions were made of paper while I worked with the FabLab to laser cut the final design out of acrylic. My favorite feature is the angle gauge on the side of the camera mount. Other features include engraved text, cable management for the camera, recessing the camera and buttons for increased durability, and covering the exposed circuitry.
            </p>
        </section>  
        <section>
            <h2>3D Model</h2>
            <div class="center">
                <model-viewer alt="Housing" src="resources/HousingModel.glb" shadow-intensity="1" camera-controls touch-action="pan-y"
                camera-orbit="0deg 75deg 25m" class = "model"></model-viewer>
            </div>

            <h2>Lasercutting Layout</h2>
            <img src="resources/LaserLayoutAntiqueWhite.jpg" alt = "Strategy chart" class="layoutImg">
      
        </section>
        
    </main>
</body>