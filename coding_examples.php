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
        

            <h1 class="section__title">Coding Examples</h1>
            <section class="container" id="examples">
                
                <div class="code-example">
                    <h3>Netmatters Homepage Recreation</h3>

                    <div class="code-example-info">
                        <div class="project-description">
                            <h4>Project Description</h4>
                            <p>A faithful recreation of the homepage and contact form for the Norfolk-based development firm Netmatters, done as part of a training course with them.</p>
                        </div>

                        <div class="languages-used">
                        <h4>Languages used:</h4>
                            <ul>
                                <li><img src="img/language logos/HTML5_logo_and_wordmark.svg.png" class="language-logo" />HTML</li>
                                <li><img src="img/language logos/CSS3_logo_and_wordmark.svg" class="language-logo" /> CSS</li>
                                <li><img src="img/language logos/jquery-original-wordmark-icon-485x512-7kn0h2yt.png" class="language-logo" />jQuery</li>
                                <li><img src="img/language logos/PHP-logo.svg.png" class="language-logo" />PHP</li>
                                <li><img src="img/language logos/MySQL-Logo.png" class="language-logo" />MYSQL</li>
                            </ul>
                        </div>
                    </div>

                    <div class="code-example-item">
                        <div class="code-example-code">
                            <code>
                                <span class="purple">require_once</span> <span class="yellow">realpath(<span class="blue">__DIR__</span> . <span class="orange">"/../vendor/autoload.php"</span>)</span>;<br>
                                <span class="blue">use</span> Dotenv\<span class="green">Dotenv</span>;<br>
                                <br>
                                <span class="light-blue">$dotenv</span> = <span class="green">Dotenv</span>::<span class="yellow">createImmutable(<span class="blue">__DIR__</span> . <span class="red">"/../"</span>)</span>;<br>
                                <span class="light-blue">$dotenv</span>-><span class="yellow">load()</span>;<br>
                                <br>
                                <span class="light-blue">$db_servername</span> = <span class="light-blue">$_ENV</span><span class="yellow">[<span class="orange">"HOST"</span>]</span>;<br>
                                <span class="light-blue">$db_username</span> = <span class="light-blue">$_ENV</span><span class="yellow">[<span class="orange">"USER"</span>]</span>;<br>
                                <span class="light-blue">$db_password</span> = <span class="light-blue">$_ENV</span><span class="yellow">[<span class="orange">"PASSWORD"</span>]</span>;<br>
                                <span class="light-blue">$db_name</span> = <span class="light-blue">$_ENV</span><span class="yellow">[<span class="orange">"DB_NAME"</span>]</span>;<br>
                            </code>
                        </div>

                        <div class="code-example-explanation">
                            <p>In this example, I loaded a .env file using a Composer package. I did this so the database credentials are not stored in any file the user may access, thereby reducing the risk of a malicious attack. The .env file with the credentials is accessible only by the server, and not by the user.</p>

                        </div>

                    </div>


                    <div class="code-example-item">
                        <div class="code-example-code">
                            <code>
                                <span class="blue">function</span> <span class="yellow">storeMessage(<span class="light-blue">$name</span>, <span class="light-blue">$company</span>, <span class="light-blue">$email</span>, <span class="light-blue">$tel</span>, <span class="light-blue">$message</span>) {</span><br>
                                    <div class="indent"><span class="blue">global</span> <span class="light-blue">$db</span>;<br>
                                    <span class="light-blue">$sql</span> = <span class="light-blue">$db</span>-><span class="yellow">prepare</span><span class="purple">(</span>"<span class="blue">INSERT INTO</span> MESSAGES <span class="blue">(NAME</span>, COMPANY, EMAIL, PHONE, <span class="blue">MESSAGE)</span> <span class="yellow">VALUES</span> <span class="blue">(</span>?, ?, ?, ?, ?<span class="blue">)</span>"<span class="purple">)</span>;<br>
                                    <span class="light-blue">$sql</span>-><span class="yellow">bindParam</span><span class="purple">(</span><span class="green">1</span>, <span class="light-blue">$name</span><span class="purple">)</span>;<br>
                                    <span class="light-blue">$sql</span>-><span class="yellow">bindParam</span><span class="purple">(</span><span class="green">2</span>, <span class="light-blue">$company</span><span class="purple">)</span>;<br>
                                    <span class="light-blue">$sql</span>-><span class="yellow">bindParam</span><span class="purple">(</span><span class="green">3</span>, <span class="light-blue">$email</span><span class="purple">)</span>;<br>
                                    <span class="light-blue">$sql</span>-><span class="yellow">bindParam</span><span class="purple">(</span><span class="green">4</span>, <span class="light-blue">$tel</span><span class="purple">)</span>;<br>
                                    <span class="light-blue">$sql</span>-><span class="yellow">bindParam</span><span class="purple">(</span><span class="green">5</span>, <span class="light-blue">$message</span><span class="purple">)</span>;<br>
                                    <span class="light-blue">$sql</span>-><span class="yellow">execute</span><span class="purple">()</span>;</div>
                                <span class="yellow">}</span>
                            </code>
                        </div>

                        <div class="code-example-explanation">
                            <p>I then used prepared statements to construct my SQL query. This prevents the user from engineering inputs to execute a SQL injection attack, as the user input is not inserted directly into the query, but is instead passed as a parameter. </p>

                        </div>

                    </div>

                </div>


                <div class="code-example">
                    <h3>Colour Palette Generator</h3>

                    <div class="code-example-info">
                        <div class="project-description">
                            <h4>Project Description</h4>
                            <p>A jQuery-based web app for creating and modifying colour palettes. Inspired by existing similar tools like <a href="coolors.co" target="_blank">Coolors.</a></p>
                        </div>

                        <div class="languages-used">
                            <h4>Languages used:</h4>
                            <ul>
                                <li><img src="img/language logos/HTML5_logo_and_wordmark.svg.png" class="language-logo" />HTML</li>
                                <li><img src="img/language logos/CSS3_logo_and_wordmark.svg" class="language-logo" /> CSS</li>
                                <li><img src="img/language logos/jquery-original-wordmark-icon-485x512-7kn0h2yt.png" class="language-logo" />jQuery</li>
                            </ul>
                        </div>
                    </div>
                </div>



                <div class="code-example">
                    <h3>Image Array Project</h3>
                    
                    <div class="code-example-info">
                        <div class="project-description">
                            <h4>Project Description</h4>
                            <p>A site for generating images using an API, and adding them to labeled collections. Made as part of the Netmatters SCS course.</p>
                        </div>

                        <div class="languages-used">
                            <h4>Languages used:</h4>
                            <ul>
                                <li><img src="img/language logos/HTML5_logo_and_wordmark.svg.png" class="language-logo" />HTML</li>
                                <li><img src="img/language logos/CSS3_logo_and_wordmark.svg" class="language-logo" /> CSS</li>
                                <li><img src="img/language logos/jquery-original-wordmark-icon-485x512-7kn0h2yt.png" class="language-logo" />jQuery</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </section>
            


            
            <?php include("inc/footer.php"); ?>
        </main>


        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/animsition/dist/js/animsition.min.js"></script>
        <script src="js/main.js"></script>
    </body>


</html>