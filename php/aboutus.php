<html>  
    <head>
        <title>#taka-Wedding Planner-About Us</title>
        <link rel="stylesheet" href="../css/aboutus.css">
        <link rel="shortcut icon" type="img/png" href="../img/logo00.png">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
        <style>
        </style>
    </head>   
    <body style="background-color: rgb(243, 243, 243);">
        <!-- first div with image and heading list --> 
        <div class="fdivimage">
            <img src="../img/aboutus.jpg" alt="here is our love story" class="bigimg">
            <div class="headdiv">
                <table class="tablehead">
                    <tr>
                        <td><a href="Home.php" target="_blank">Home</a></td>
                        <td>|</td>
                        <td><a href="#sdiv"><span style="color: rgb(235, 115, 117); text-decoration: underline;">About Us</span></a></td>
                        <td>|</td>
                        <td><a href="story.php" target="_blank">Love story</a></td>
                        <td>|</td>
                        <td><a href="package.php" target="_blank">Packages</a></td>
                        <td>|</td>
                        <td><a href="#contact">Contact Us</a></td>
                        <td>|</td>
                        <td><a href="Login.php">LogOut</a></td>

                    </tr>   
                </table>
            </div>
        </div>

        <!--some paragraph about us page -->
        <div id="sdiv">
            <h1 class="why">WHY US !</h1>
            <p class="fprag">"Love is fun and should be celebrated. We believe that every love story is as unique as the couple and your wedding should celebrate that from the moment you say “yes!” to the last moment of your wedding send off. If you are looking for a planner who is positive and compassionate with a clear plan, we think you've come to the right place! "</p>

            <img src="../img/pack4.jpg" class="imgabout">
            <img src="../img/pack8.jpg" class="imgabout1">

            <img src="../img/heart.png" class="heart">
            <p class="besimg"><span style="color: rgb(235, 115, 117);">The Something Perfect Experience</span><br>At Something Perfect, we care about our couples planning experience from beginning to end. Which is why our goal is to celebrate you. Something Perfect couples are treated like superstars. Count on our passionate, empathetic, fun-loving team to make wedding planning fun (as it should be!).</p>

            <img src="../img/heart.png" class="heart1">
            <p class="besimg1"><span style="color: rgb(235, 115, 117);">We Make it Work</span><br>As my favorite fashion guru says, “make it work!” It doesn’t matter if it means holding umbrellas over grandma’s head while you say “I Do” in a rainstorm, finding a missing bow tie , we always figure out a way to make it work … with a smile, of course. With years of experience planning weddings for you.</p>

            <img src="../img/heart.png" class="heart2">
            <p class="besimg2"><span style="color: rgb(235, 115, 117);">A Wedding That Screams You</span><br>When those reception doors open, your guests will say, “that is so ___ & ___ (insert names).” Lean on our professional team to take your jumbled Pinterest board and extract your vision which means your wedding will be exactly what you’ve always dreamt of.</p>

            <img src="../img/heart.png" class="heart3">
            <p class="besimg3"><span style="color: rgb(235, 115, 117);">The Perfect Plan</span><br>You’re Type A… and so are we! We have an organized plan (with checklists, yay!) to guide you from saying “yes!” to “I do,” including all the pretty things, small details and big must-dos in between. You get to enjoy planning without the heavy lifting.</p>
        </div>

        <!--for  contact us -->
        <div id="contact">
            <div class="imghome"><img src="../img/map0.png" ><p class="ho">Home<br><span style="color: rgb(185, 185, 185);font-size: 23px;">6, EL-Nozha st.<br> Q.G ,Egypt</span></div>
            <div class="imghome"><img src="../img/Phone0.png" ><p class="ph">Phone<br><span style="color: rgb(185, 185, 185);font-size: 23px;">+02 01025455148<br>+013 3124285</span></p></div>
            <div class="imghome"><img src="../img/mail0.png"><p class="ma">E-Mail<br><span style="color: rgb(185, 185, 185);font-size: 23px; "> wedding@example.com <br>#taka@example.com</span></p></div>
        </div>

        <!-- for login form that pop in that form -->
        <div id="id01" class="modal">
            <form class="modal-content animate" action="/action_page.php">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="../notneed/event1.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" id="usrname" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                    <button type="submit">Login</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    <div id="message">
                        <h3>Password must contain the following:</h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </body>
</html>

























