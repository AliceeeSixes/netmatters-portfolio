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
        <link rel="stylesheet" href="js/animsition/dist/css/animsition.min.css"/>
        <link rel="stylesheet" href="css/application.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>


        <title>Code Examples | Alice Stiles</title>
    </head>



    <body>
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
                            <div class="languages-used">
                                <ul>
                                    <li><img src="img/language logos/HTML5_logo_and_wordmark.svg.png" class="language-logo" />HTML</li>
                                    <li><img src="img/language logos/CSS3_logo_and_wordmark.svg" class="language-logo" /> CSS</li>
                                    <li><img src="img/language logos/jquery-original-wordmark-icon-485x512-7kn0h2yt.png" class="language-logo" />jQuery</li>
                                    <li><img src="img/language logos/PHP-logo.svg.png" class="language-logo" />PHP</li>
                                    <li><img src="img/language logos/MySQL-Logo.png" class="language-logo" />MYSQL</li>
                                </ul>
                            </div>
                            <p>A faithful recreation of the homepage and contact form for the Norfolk-based development firm Netmatters, done as part of a training course with them.</p>
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
                    <h3>Image Array Project</h3>
                    
                    <div class="code-example-info">
                        <div class="project-description">
                            <div class="languages-used">
                                <ul>
                                    <li><img src="img/language logos/HTML5_logo_and_wordmark.svg.png" class="language-logo" />HTML</li>
                                    <li><img src="img/language logos/CSS3_logo_and_wordmark.svg" class="language-logo" /> CSS</li>
                                    <li><img src="img/language logos/jquery-original-wordmark-icon-485x512-7kn0h2yt.png" class="language-logo" />jQuery</li>
                                </ul>
                            </div>
                            <p>A site for generating images using an API, and adding them to labeled collections. Made as part of the Netmatters SCS course.</p>
                        </div>
                    </div>

                    <div class="code-example-item">
                        <div class="code-example-code">
                            <code>
                                <span class="dark-green">// Eager load - load images in advance so high-resolution images don't introduce delay on button press</span><br>
                                <span class="blue">async function</span> <span class="yellow">eagerLoad() {</span><br>
                                <div class="indent"><span class="purple">try {</span><br>
                                        <div class="indent"><span class="blue">let</span> <span class="light-blue">response</span> = <span class="purple">await</span> <span class="yellow">fetch</span><span class="blue">(</span><span class="orange">`https://picsum.photos/<span class="yellow">${<span class="light-blue">imageDimensions<span class="purple">[<span class="green">1</span>]</span><span class="yellow">}<span class="orange">/</span>${</span>imageDimensions<span class="purple">[<span class="green">2</span>]</span></span>}</span>`</span><span class="blue">)</span>; <span class="dark-green">// Fetch image from Picsum API</span><br>
                                            <span class="purple">if</span> <span class="blue">(</span>!<span class="light-blue">response</span>.<span class="blue">ok) {</span><br>
                                            <div class="indent"><span class="purple">throw</span> <span class="blue">new</span> <span class="green">Error</span><span class="yellow">(<span class="orange">`<span class="purple">${<span class="light-blue">response<span class="white">.</span><span class="blue">status</span></span>}</span>`</span>)</span>; <span class="dark-green">// Error handling</span><br>
                                        </div><span class="blue">}</span><br>
                                        <br>
                                        <span class="light-blue">eagerImage</span> = <span class="blue">[<span class="light-blue">response<span class="white">,</span> imageDimensions</span>]</span>; <span class="dark-green">// Create image array for the updateImage() function to parse</span><br>
                                        <span class="yellow">$</span><span class="blue">(<span class="orange">"#quickLoad"</span>)</span>.<span class="yellow">css</span><span class="blue">(</span><span class="orange">"background"</span>,<span class="orange">`url(<span class="yellow">${<span class="light-blue">>response</span><span class="white">.</span><span class="blue">url</span>}</span>)`</span><span class="blue">)</span>.<span class="yellow">css</span><span class="blue">(<span class="orange">"background-size"<span class="white">,</span>"contain"</span>)</span>; <span class="dark-green">// Extra div to display image as soon a possible to prevent browser lag slowing down image display</span><br>
                                        <br>
                                    </div><span class="purple">} catch (<span class="light-blue">error</span>) {</span><br>
                                        <div class="indent"><span class="light-blue">console</span>.<span class="yellow">log</span><span class="blue">(<span class="light-blue">error<span class="white">.</span>message</span>)</span>;<br>
                                        <span class="yellow">$</span><span class="blue">(<span class="orange">"#addImageMessage"</span>)</span>.<span class="yellow">text</span><span class="blue">(<span class="light-blue">error<span class="white">.</span>message</span>)</span>; <span class="dark-green">// Output any error text</span><br>
                                        <span class="light-blue">eagerImage</span> = <span class="blue">null</span>; <span class="dark-green">// Clear currently stored eager image to allow the function to run from scratch next time</span><br>
                                    </div><span class="purple">}</span><br>
                                </div><span class="yellow">}</span><br>
                            </code>
                        </div>

                        <div class="code-example-explanation">
                            <p>For this project I ran into an issue - using higher resolution images would lead tom much longer loading times from the API, but lower resolution images would create a worse end result. To circumvent this issue, I implemented an "eager loading" feature, where the code would request one more image than it needs, and then when the user presses the button to generate a new image, the site can display one immediately instead of having to wait for the API. The site then requests another image from the API to preload for when the user next presses the button.</p>

                        </div>

                        <div class="code-example-code">
                            <code>
                            <span class="dark-green">// Update image</span><br>
                            <span class="blue">function</span> <span class="yellow">updateImage() {</span><br>
                                <div class="indent"><span class="blue">let</span> <span class="light-blue">image</span> = <span class="light-blue">eagerImage</span><span class="purple">[<span class="green">0</span>]</span>; <span class="dark-green">// Get API response object out of eagerImage array created earlier</span><br>
                                <span class="blue">let</span> <span class="light-blue">imageUrl</span> = <span class="light-blue">image</span>.<span class="light-blue">url</span> <span class="dark-green">// Get image url from response object</span><br>
                                <span class="yellow">$<span class="purple">(<span class="orange">"#quickLoad"</span>)</span><span class="white">.</span>css<span class="purple">(<span class="orange">"z-index"<span clas="white">,</span>"5"</span>)</span></span>; <span class="dark-green">// Bring pre-loaded version to the forefront</span><br>
                                <span class="yellow">$<span class="purple">(<span class="orange">"#image-viewport"</span>)</span><span class="white">.</span>css<span class="purple">(<span class="orange">"background"<span class="white">,</span>`url(<span class="blue">${<span class="light-blue">image<span class="white">.</span>url</span>}</span>)`</span>)</span><span class="white">.</span>css<span class="purple">(<span class="orange">"background-size"<span class="white">,</span>"contain"</span>)</span></span>; <span class="dark-green">// Set image viewport to display image</span><br>
                                <span class="yellow">$<span class="purple">(<span class="orange">"#image-viewport-link"</span>)</span><span class="white">.</span>attr<span class="purple">(<span class="orange">"href"<span class="white">,</span>image.url</span>)</span></span>; <span class="dark-green">// Set image link to correct URL</span><br>
                                <span class="yellow">$<span class="purple">(<span class="orange">"#quickLoad"</span>)</span><span class="white">.</span>css<span class="purple">(<span class="orange">"z-index"<span class="white">,</span>"-5"</span>)</span></span>; <span class="dark-green">// Hide pre-loaded version again</span><br>
                                <br>
                                <br>
                                <br>
                                <span class="dark-green">// Track most recently displayed image in global variable lastImage</span><br>
                                <span class="light-blue">lastImage</span> = <span class="purple">{<br>
                                    <div class="indent"><span class="light-blue">url : imageUrl<span class="white">,</span><br>
                                    dimensions : imageDimensions</span><br>
                                </div>}</span>;<br>
                            </div><span class="yellow">}</span><br>
                            </code>
                        </div>

                        <div class="code-example-explanation">
                            <p>This is the code for displaying the pre-loaded image. First, a special div with the pre-loaded image is brought to the front, which means it displays instantly. Then, the main image display div is updated and brought back to the front, so the pre-loading div can be re-used for the next image.</p>
                            
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