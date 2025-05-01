<!DOCTYPE html>
<html lang="en" class="scroll-snap">
    <head>
        <!-- Meta Tags-->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />


        <!-- Links -->
        <link rel="stylesheet" href="js/animsition/dist/css/animsition.min.css"/>
        <link rel="stylesheet" href="css/application.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>


        <title>Alice Stiles</title>
    </head>



    <body class="animsition">
        <?php include("inc/sidenav.php"); ?>
        <div class="nav__vertical--toggle">
            <button onclick="toggleSidebar()"><i class="fa fa-chevron-left"></i></button>
        </div>

        <main>


            

            <?php include("inc/topnav.php"); ?>


            <section class="tall centered hero dark snap-point" id="about-scs">
                
                <img src="./img/netmatters_logo.png" id="netmatters-logo"/>
                <h2>Introduction to the Scion Coalition Scheme</h2>
                <p>The Scion Coalition Scheme is an intensive, specially tailored training program run by Netmatters in order to give willing candidates the opportunity to enter the industry as web developers. Under the supervision of senior web developers, scions generally aim to complete training within six to nine months. The course is intensive and therefore the level of learning achieved is extensive in a short space of time.</p>
            </section>

            <section class="tall centered hero snap-point" id="treehouse">
                
                <h2>Treehouse</h2>
                <p>Treehouse is an online learning community, featuring videos covering a number of topics from basic HTML to C# programming, iOS development, data analysis, and more. By completing courses users can earn points, allowing them to track their progress and see how much they've covered in certain areas.</p>
                <p>Total Score: <a class="in-text" href="https://teamtreehouse.com/profiles/alicestiles2">Treehouse</a>
            
            
            </section>

            <section class="tall centered hero dark snap-point" id="about-netmatters">
                <h2>About Netmatters</h2>
                <div id="netmatters-list">
                    <h4>Established 2008</h4>
                    <h4>Norfolk's leading technology company</h4>
                    <h4>Winner of the Princess Royal Training Award</h4>
                    <h4>Winner of EDP Skills of Tomorrow Award</h4>
                    <h4>80+ staff, 2 locations across Norfolk</h4>
                    <h4>Broad spectrum of clients, working nationwide</h4>
                    <h4>Operate to strict company values</h4>
                </div>
                
            </section>
            



            
            <?php include("inc/footer.php"); ?>
        </main>

        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/animsition/dist/js/animsition.min.js"></script>
        <script src="js/main.js"></script>
    </body>


</html>