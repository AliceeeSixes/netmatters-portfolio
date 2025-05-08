<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Tags-->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="View my php and javascript web development projects, or contact me." />
        <meta name="keywords" content="HTML, CSS, JavaScript, jQuery, PHP, web development, software, cybersecurity, web design" />
        <meta name="author" content="Alice Stiles" />


        <!-- Links -->
        <link rel="stylesheet" href="js/animsition/dist/css/animsition.min.css" />
        <link rel="stylesheet" href="css/application.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>


        <title>About Me | Alice Stiles</title>
    </head>



    <body>
        <?php include("inc/sidenav.php"); ?>

        <main>
            <div class="nav__vertical--toggle">
                <button onclick="toggleSidebar()"><i class="fa fa-chevron-left"></i></button>
            </div>


            

            <?php include("inc/topnav.php"); ?>

            

            <section class="dark slant-bottom about-me">
                <h1>Who am I?</h1>
                <p class="centered">My name is Alice Stiles! I'm a 22-year-old university graduate with a degree in Music and Technology looking to go into web development. My other professional skillset is music and audio for video games.</p>

                

            </section>
            

            <section class="slant-inverse about-me">
                <h1>My Coding Experience</h1>
                <p class="centered">I have solid fundamentals in HTML and CSS, having built several website previously. More skills coming soon as I complete the SCS curriculum :D</p>
            </section>


            <section class="dark slant-both about-me">
                <h1>My Interests</h1>
                <p class="centered">My hobbies and interests include chess, ancient history, Counterstrike, and both modern and historical martial arts.</p>

                

            </section>

            
            <?php include("inc/footer.php"); ?>
        </main>


        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/animsition/dist/js/animsition.min.js"></script>
        <script src="js/main.js"></script>
    </body>


</html>