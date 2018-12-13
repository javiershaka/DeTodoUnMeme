
<!doctype html>
<html lang="en">
    <head>
        <title>DeTodoUnMeme</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!-- Main CSS --> 
        <link rel="stylesheet" href="css/style.css">

        <!-- Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>


        <!-- Main navigation -->
        <?php include ('./includes/navegation.php'); ?>
        <?php include ('./includes/login.php'); ?>


        <!-- Jumbtron / Slider -->
        <?php include ('./includes/slider.php'); ?>



        <!-- Main content area -->
        <div class="card-container">
            <div class="container">

                <div class="text-center padded-box pb-0">
                    <h2>Acerca de DeTodoUnMeme</h2>
                    <p class="lead">Esta pagina esta hecha para todo tipos de personas ya sean fanaticos de los memes, personas que solo pasan un rato para ver memes, creadores de memes, calquier pesona que quiera relacionarese con los memes.</p>

                </div>
                <!--aqui empieza el ciclo-->


                <!--aqui acaba el for-->

                <div class="padded-box row">

                    <?php include './memeTodos.php'; ?>

                </div>

            </div>
        </div>



        <!--         Coloured bg jumbotron 
                <div class="colored-bg-container jumbotron-wrap">
                    <div class="container">
                        <div class="jumbotron px-0">
                            <h2>Lorem lipsum</h2>
                            <p class="lead">Quisque sagittis, est in laoreet semper, enim dui consequat felis, faucibus ornare urna velit nec leo. Maecenas condimentum velit vitae est lobortis fermentum. In tristique sem vitae metus ornare luctus tempus nisl volutpat. Integer et est id nisi tempus pharetra sagittis et libero.</p>
                        </div>
                    </div>
                </div>-->




        <!--        <main class="container">
                    <div class="row">
        
                         Main content 
                        <div class="col-md-8">
                            <article>
                                <h2 class="article-title">Introduction to goodness</h2>
        
                                <p class="article-meta">Posted on <time datetime="2017-05-14">14 May</time> by <a href="#" rel="author">Joe Bloggs</a></p>
        
                                <p>Welcome to goodness, a free CSS3 &amp; HTML5 responsive web template from <a href="https://zypopwebtemplates.com/" title="ZyPOP">ZyPOP</a>. This template is completely <strong>free</strong> to use permitting a link remains back to  <a href="https://zypopwebtemplates.com/" title="ZyPOP">https://zypopwebtemplates.com/</a>.</p>
        
                                <p> Should you wish to use this template unbranded you can buy a template license from our website for 8.00 GBP, this will allow you remove all branding related to our site, for more information about this see below.</p>	
        
                                <p>This template has been tested in:</p>
        
                                <ul>
                                    <li>Firefox</li>
                                    <li>IE / Edge</li>
                                    <li>Chrome</li>
                                    <li>Safari</li>
                                    <li>iOS / Android</li>
                                </ul>
        
                                <a href="#" class="btn btn-primary">Read more</a>
                                <a href="#" class="btn btn-secondary">Comments</a>
        
                            </article>
        
                            <article>
        
                                <h2 class="article-title">Buy unbranded</h2>
                                <p class="article-meta">Posted on <time datetime="2013-05-14">14 May</time> by <a href="#" rel="author">Joe Bloggs</a></p>
        
                                <p>Purchasing a template license for 8.00 GBP (at time of writing around 12 USD) gives you the right to remove any branding including links, logos and source tags relating to ZyPOP. As well as waiving the attribution requirement, your payment will also help us provide continued support for users as well as creating new web templates. Find out more about how to buy at the licensing page on our website which can be accessed at <a href="https://zypopwebtemplates.com/licensing" title="template license">https://zypopwebtemplates.com/licensing</a></p>
        
                                <h3>Lorem lipsum</h3>
        
                                <p>Morbi fermentum condimentum felis, commodo vestibulum sem mattis sed. Aliquam magna ante, mollis vitae tincidunt in, malesuada vitae turpis. Sed aliquam libero ut velit bibendum consectetur. Quisque sagittis, est in laoreet semper, enim dui consequat felis, faucibus ornare urna velit nec leo. Maecenas condimentum velit vitae est lobortis fermentum. In tristique sem vitae metus ornare luctus tempus nisl volutpat. Integer et est id nisi tempus pharetra sagittis et libero.</p>
        
                                <a href="#" class="btn btn-primary">Read more</a>
                                <a href="#" class="btn btn-secondary">Comments</a>
                            </article>
        
        
                             Example pagination Bootstrap component 
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
        
        
                         Sidebar 
                        <aside class="col-md-4">
                            <div class="sidebar-box">
                                <h4>Categories</h4>
                                <div class="list-group list-group-root">
                                    <a class="list-group-item active" href="index.html">Home Page</a>
                                    <a class="list-group-item" href="examples.html">Style Examples</a>
                                    <div class="list-group">
                                        <a class="list-group-item" href="three-column.html">Three Column</a>
                                        <a class="list-group-item" href="one-column.html">One column / no sidebar</a>
                                        <a class="list-group-item" href="text.html">Text / left sidebar</a>	
                                    </div>
                                    <a class="list-group-item" href="three-column.html">Three column layout example</a>
                                    <a class="list-group-item" href="#">Sed aliquam libero ut velit bibendum</a>
                                    <a class="list-group-item" href="#">Maecenas condimentum velit vitae</a>
                                </div>
                            </div>
        
                            <div class="sidebar-box sidebar-box-bg">
                                <h4>About us</h4>
                                <p>Aenean nec massa a tortor auctor sodales sed a dolor. Duis vitae lorem sem. Proin at velit vel arcu pretium luctus. <a href="#" class="readmore">Read More &raquo;</a></p>    
                            </div>
        
                            <div class="sidebar-box">
                                <h4>Search site</h4>
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="text"  placeholder="Search" aria-label="Search">
                                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
        
                            <div class="sidebar-box">
                                <h4>Helpful Links</h4>
                                <ul>
                                    <li><a href="http://www.themeforest.net/?ref=spykawg" title="premium templates">Premium HTML web templates from $10</a></li>
                                    <li><a href="http://www.dreamhost.com/r.cgi?259541" title="web hosting">Cheap web hosting from Dreamhost</a></li>
                                    <li><a href="http://tuxthemes.com" title="Tux Themes">Premium WordPress themes</a></li>
                                </ul>
                            </div>
                        </aside> 
        
        
                    </div> 
                </main>-->



        <!-- Gray bg jumbotron -->
        <!--        <div class="gray-bg-container mb-0 jumbotron-wrap">
                    <div class="container">
                        <div class="jumbotron px-0">
                            <h2>Lorem lipsum</h2>
                            <p class="lead">Quisque sagittis, est in laoreet semper, enim dui consequat felis, faucibus ornare urna velit nec leo. Maecenas condimentum velit vitae est lobortis fermentum. In tristique sem vitae metus ornare luctus tempus nisl volutpat. Integer et est id nisi tempus pharetra sagittis et libero.</p>
                        </div>
                    </div>
                </div>-->



        <!-- Footer -->
        <footer class="footer">
            <div class="footer-lists">
                <div class="container">
                    <div class="row">
                        <!--                        <div class="col-sm">
                                                    <ul>
                                                        <li><h4>Proin accumsan</h4></li>
                                                        <li><a href="#">Rutrum nulla a ultrices</a></li>
                                                        <li><a href="#">Blandit elementum</a></li>
                                                        <li><a href="#">Proin placerat accumsan</a></li>
                                                        <li><a href="#">Morbi hendrerit libero </a></li>
                                                        <li><a href="#">Curabitur sit amet tellus</a></li>
                                                    </ul>
                                                </div>-->
                        <!--                        <div class="col-sm">
                                                    <ul>
                                                        <li><h4>Condimentum</h4></li>
                                                        <li><a href="#">Curabitur sit amet tellus</a></li>
                                                        <li><a href="#">Morbi hendrerit libero </a></li>
                                                        <li><a href="#">Proin placerat accumsan</a></li>
                                                        <li><a href="#">Rutrum nulla a ultrices</a></li>
                                                        <li><a href="#">Cras dictum</a></li>
                                                    </ul>
                                                </div>   -->
                        <!--                        <div class="col-sm">
                                                    <ul>
                                                        <li><h4>Suspendisse</h4></li>
                                                        <li><a href="#">Morbi hendrerit libero </a></li>
                                                        <li><a href="#">Proin placerat accumsan</a></li>
                                                        <li><a href="#">Rutrum nulla a ultrices</a></li>
                                                        <li><a href="#">Curabitur sit amet tellus</a></li>
                                                        <li><a href="#">Donec in ligula nisl.</a></li>
                                                    </ul>
                                                </div>-->
                        <div class="col-sm text-center">
                            <h4>Contactos</h4>
                            <p>Para cualquier duda, queja aclaraciones, favor de comunicarse con nostros en los contactos que se proporcionaran abajo.</p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/javiershakas"><i class="fa fa-facebook fa-2x "></i></a>
                                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                <a href="https://www.youtube.com/channel/UCdRllWKR2-uHXk09T4WGfRA"><i class="fa fa-youtube fa-2x"></i></a>
                                <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-bottom">
                <p class="text-center">Free Bootstrap Template by <a href="https://zypopwebtemplates.com/">ZyPop</a>.</p>
                <p class="text-center"><a href="index.php">Back to top</a></p>
            </div>

        </footer>



        <!-- Bootcamp JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    </body>
</html>