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
        <link rel="stylesheet" href="js/textillate/animate.css" />
        <link rel="styelsheet" href="js/textillate/style.css" />
        <link rel="stylesheet" href="css/application.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />


        <title>My Projects | Alice Stiles</title>
    </head>



    <body>
        <?php include("inc/sidenav.php"); ?>
        <div class="nav__vertical--toggle">
            <button onclick="toggleSidebar()"><i class="fa fa-chevron-left"></i></button>
        </div>



        <main>
            


            <section id="banner">
                <div id="banner__img">
                </div>
                <div id="banner__inner">
                    <h1 class="textillate" data-in-effect="fadeIn" data-in-shuffle="true">Alice Stiles</h1>
                    <p class="textillate" data-in-effect="fadeIn" data-in-shuffle="true"> Web development portfolio</p>
                    <h3 class="page__arrow"><a class="hover-glow" href="#banner__end">Scroll Down<br><i class="fa fa-chevron-down"></i></a></h3>
                </div>
            </section>
            <div id="banner__end"></div>


            <?php include("inc/topnav.php"); ?>


            <div class="snap-point"></div>
            
            <section id="projects" class="container">
                <h1 class="section__title">My Projects</h1>
                

                <!-- Grid for project cards -->
                <div id="projects__grid">

                    <div class="projects__card">
                        <a class="projects__card--link" href="https://netmatters.alice-stiles.netmatters-scs.co.uk/" target="_blank">
                            <div class="projects__card--img-container">
                                <div class="projects__card--img" id="nm-remake">
                                    <div class="languages php">PHP</div>
                                </div>
                            </div>
                            <h3 class="projects__card--title">Netmatters Homepage Recreation</h3>
                            <p class="projects__card--desc">A copy of the Netmatters homepage made from scratch to match the original as closely as possible</p>
                            <p class="projects__card--arrow"><span class="hover-underline">View Project <span class="fa fa-arrow-right"></span></span></p>
                        </a>
                    </div>

                    <div class="projects__card">
                        <a class="projects__card--link" href="https://aliceeesixes.github.io/colour-palettes/" target="_blank">
                            <div class="projects__card--img-container">
                                <div class="projects__card--img" id="colour-palettes">
                                    <div class="languages js">jQuery</div>
                                </div>
                            </div>
                            <h3 class="projects__card--title">Colour Palette Creator</h3>
                            <p class="projects__card--desc">A simple web app for creating and manipulating colour palettes. Built with HTML, CSS and jQuery.</p>
                            <p class="projects__card--arrow"><span class="hover-underline">View Project <span class="fa fa-arrow-right"></span></span></p>
                        </a>
                    </div>

                    <div class="projects__card">
                        <a class="projects__card--link" href="https://js-array.alice-stiles.netmatters-scs.co.uk/" target="_blank">
                            <div class="projects__card--img-container">
                                <div class="projects__card--img" id="js-array">
                                    <div class="languages js">jQuery</div>
                                </div>
                            </div>
                            <h3 class="projects__card--title">JS Image Array</h3>
                            <p class="projects__card--desc">A website that generates images using an API, and saves them to collections tied to email addresses. This project uses HTML, CSS, and jQuery</p>
                            <p class="projects__card--arrow"><span class="hover-underline">View Project <span class="fa fa-arrow-right"></span></span></p>
                        </a>
                    </div>

                    <div class="projects__card">
                        <a class="projects__card--link" href="#" target="_blank">
                            <div class="projects__card--img-container">
                                <div class="projects__card--img"></div>
                            </div>
                            <h3 class="projects__card--title">Project Four</h3>
                            <p class="projects__card--desc">Coming soon...</p>
                            <p class="projects__card--arrow"><span class="hover-underline">View Project <span class="fa fa-arrow-right"></span></span></p>
                        </a>
                    </div>

                    <div class="projects__card">
                        <a class="projects__card--link" href="#" target="_blank">
                            <div class="projects__card--img-container">
                                <div class="projects__card--img"></div>
                            </div>
                            <h3 class="projects__card--title">Project Five</h3>
                            <p class="projects__card--desc">Coming soon...</p>
                            <p class="projects__card--arrow"><span class="hover-underline">View Project <span class="fa fa-arrow-right"></span></span></p>
                        </a>
                    </div>

                </div>

            </section>

            <!-- Contact Form -->

            <section id="contact" class="snap-point container">
                <?php
                require_once("inc/connection.php");
                
                if (isset($_POST["submit"])) {
                    $fname = htmlspecialchars($_POST["fname"]);
                    $lname = htmlspecialchars($_POST["lname"]);
                    $email = htmlspecialchars($_POST["email"]);
                    $subject = htmlspecialchars($_POST["subject"]);
                    $message = htmlspecialchars($_POST["message"]);
                    $timestamp = htmlspecialchars($_POST["timestamp"]);


                    if (timestampAppears($timestamp)) {
                        echo "<div class='contact__notif bad'><p>Error: Duplicate form request</p><div class='close-message'>&times;</div></div>";
                    } else if (!($fname && $lname && $email && $subject && $message)) {
                        echo "<div class='contact__notif bad'><p>Error: Missing fields</p><div class='close-message'>&times;</div></div>";
                    } else if (!$timestamp) {
                        echo "<div class='contact__notif bad'><p>Error: Missing timecode (try resubmitting)</p><div class='close-message'>&times;</div></div>";
                    } else {
                        storeMessage($fname, $lname, $email, $subject, $message, $timestamp);
                        sendEmail($fname, $lname, $email, $subject, $message);
                        echo "<div class='contact__notif good'><p>Form Submitted</p><div class='close-message'>&times;</div></div>";
                    }
                    
                }
                ?>
                <div class='contact__notif bad' id="nojs"><p>Error: JavaScript not functioning properly</p><div class='close-message'>&times;</div></div>
                <div class="contact__grid">

                    <div class="contact__description">
                        <h1>Get In Touch</h1>
                        <p>If you have any question or queries, feel free to get in touch! You can either use the form on this webpage, contact me via <a class="in-text" href="https://discord.com/users/316241440462209025" target="_blank">Discord</a> or <a class="in-text" href="https://www.linkedin.com/in/alice-stiles-605b1331a/" target="_blank">LinkedIn</a>, or use the following contact details:</p>
                            <h3><i class="fa fa-phone"></i> : <a class="in-text" href="tel:+44741456988">07741 456988</a></h3>
                            <h3><i class="fa fa-envelope"></i> : <a class="in-text" href="mailto:alicestilesmusic@gmail.com">alicestilesmusic@gmail.com</a></h3>
                        <p>I'm likely to respond fastest to Discord messages and emails, but I do try to check all my various inboxes</p>
                    </div>


                    <div class="contact__form">
                        <form id="contact__form--form" method="POST" onsubmit="return validateForm()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" novalidate>
                            <div class="input name"><input type="text" placeholder="First Name*" id="fname" name="fname" /></div>
                            <div class="input name"><input type="text" placeholder="Last Name*" id="lname" name="lname" /></div>
                            
                            <div class="input"><input type="email" placeholder="Email Address*" id="email" name="email" /></div>
                            <div class="input"><input type="text" placeholder="Subject*" id="subject" name="subject" /></div>

                            <div class="input"><textarea id="message" name="message" placeholder="Message" rows="5"></textarea></div>
                            <input type="hidden" value="true" name="submit" />
                            <input type="hidden" value="<?php echo time();?>" name="timestamp" />
                            <div class="submit"><input type="submit" /></div>
                        </form>
                    </div>

                </div>

            </section>
            <?php include("inc/footer.php"); ?>
        </main>


        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/textillate/jquery.fittext.js"></script>
        <script src="js/textillate/jquery.lettering.js"></script>
        <script src="js/textillate/jquery.textillate.js"></script>
        <script>$(".textillate").textillate();</script>
        <script src="js/animsition/dist/js/animsition.min.js"></script>
        <script src="js/form-validation/dist/jquery.validate.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/form.js"></script>
    </body>


</html>