<!DOCTYPE html>
<html lang="en">
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


            <section>
                <h1 class="section__title">Content Goes Here</h1>

            </section>
            


            
            <?php include("inc/footer.php"); ?>
        </main>


        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/animsition/dist/js/animsition.min.js"></script>
        <script src="js/main.js"></script>
    </body>


</html>