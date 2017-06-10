<?php get_header(); ?>

<main>
    <section class="hero jumbotron">
        <div class="content container">
            <div class="row">
                <div class="col-md-7">
                    <p><span class="greeting">Hi,</span> I'm an Educator and Web Developer who loves to make code flow like poetry.</p>
                </div>
            </div>
        </div>
        <!--hero container end-->
    </section>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="portfolio-header">Portfolio</h2>
                </div>
                <!---end col-->
            </div>
            <!--First row of Portfolio-->
            <!-- add link to live site (globe) and github (code) with tooltip, then at bottom of each card display the tech used   e.g.   Google API, Knockout.js, etc.-->

            <div class="row">
                <div class="col-md-12">
                    <div class="card-deck-wrapper">
                        <div class="card-deck">
                            <!-- Project 2: Micah Online -->
                            <div class="card">
                                <img class="card-img-top" src="<?php echo get_bloginfo( 'template_directory' );?>/img/micah-online-mockup-300.png" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Micah Online</h4>
                                    <a href="http://micahonline.com" target="_blank" data-toggle="tooltip" title="View Live Site"> <i class="fa fa-2x fa-globe" aria-hidden="true"></i></a>
                                    <p class="card-text">Personal website of local comedian, Micah Fuller. Customized CSS for existing WordPress theme.</p>
                                </div>
                            </div>
                            <!-- Project 1: Bug Bites -->
                            <div class="card">
                                <img class="card-img-top" src="<?php echo get_bloginfo( 'template_directory' );?>/img/bug-bites-mockup-300.png" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Bug Bites!</h4>
                                    <a href="https://latashahussey.github.io/frontend-nanodegree-arcade-game/" target="_blank" data-toggle="tooltip" title="View Live Site"> <i class="fa fa-2x fa-globe" aria-hidden="true"></i></a>
                                    <a href="https://github.com/latashahussey/frontend-nanodegree-arcade-game/" target="_blank" data-toggle="tooltip" title="View GitHub Repo"> <i class="fa fa-2x fa-github" aria-hidden="true"></i></a>
                                    <p class="card-text">An HTML5 Canvas powered video game, developed using the best practices in Object Oriented JavaScript.</p>
                                </div>
                            </div>

                            <!-- Project 3: Move Companion -->
                            <div class="card">
                                <img class="card-img-top" src="<?php echo get_bloginfo( 'template_directory' );?>/img/move-companion-mockup-300.png" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Move Companion</h4>
                                    <a href="https://latashahussey.github.io/ajax-move-companion/" target="_blank" data-toggle="tooltip" title="View Live Site"><i class="fa fa-2x fa-globe" aria-hidden="true"></i></a>
                                    <a href="https://github.com/latashahussey/ajax-move-companion" target="_blank" data-toggle="tooltip" title="View GitHub Repo"><i class="fa fa-2x fa-github" aria-hidden="true"></i></a>
                                    <p class="card-text">Using jQuery, created a move companion application that pulls data from three APIs: the New York Times, Wikipedia, and Google Streetview then dynamically modifies the DOM to display the information. Further customized
                                        the project by personalizing the design using Skeleton CSS.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end card deck -->
                    </div>
                    <!-- end card wrapper -->
                </div>
                <!-- end card wrapper container -->
            </div>


            <!--Second Row of Portfolio-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card-deck-wrapper">
                        <div class="card-deck">
                            <!-- Project 4: Jane Doette Portfolio -->
                            <div class="card">
                                <img class="card-img-top" src="<?php echo get_bloginfo( 'template_directory' );?>/img/jane-doette-mockup-300.jpg" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Jane Doette Portfolio</h4>
                                    <a href="https://latashahussey.github.io/jane-doette-portfolio/" target="_blank" data-toggle="tooltip" title="View Live Site"><i class="fa fa-2x fa-globe" aria-hidden="true"></i></a>
                                    <a href="https://github.com/latashahussey/jane-doette-portfolio" target="_blank" data-toggle="tooltip" title="View GitHub Repo"><i class="fa fa-2x fa-github" aria-hidden="true"></i></a>
                                    <p class="card-text">Developed a fictitious personal portfolio page using HTML, CSS, and the Bootstrap framework. The page is fully responsive and works on mobile, tablet, and desktop browsers.</p>
                                </div>
                            </div>
                            <!-- Project 5: Interactive Resume -->
                            <div class="card">
                                <img class="card-img-top" src="<?php echo get_bloginfo( 'template_directory' );?>/img/interactive-resume-mockup-300.jpg" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Interactive Resume</h4>
                                    <a href="https://github.com/latashahussey/frontend-nanodegree-resume/" target="_blank" data-toggle="tooltip" title="View Live Site"><i class="fa fa-2x fa-globe"></i></a>
                                    <a href="https://latashahussey.github.io/frontend-nanodegree-resume/" target="_blank" data-toggle="tooltip" title="View GitHub Repo"><i class="fa fa-2x fa-github" aria-hidden="true"></i></a>
                                    <p class="card-text">Using jQuery, developed an interactive resume application that reads all data from a JSON file and then dynamically modifies the DOM to display the information. Further customized the project by personalizing the
                                        design using CSS.</p>
                                </div>
                            </div>
                            <!-- Project 6: Rogue Pickings -->
                            <div class="card">
                                <img class="card-img-top" src="<?php echo get_bloginfo( 'template_directory' );?>/img/rogue-pickings-mockup-300.png" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Rogue Pickings</h4>
                                    <a href="https://latashahussey.github.io/rogue-pickings/" target="_blank" data-toggle="tooltip" title="View Live Site"> <i class="fa fa-2x fa-globe"></i></a>
                                    <a href="https://github.com/latashahussey/rogue-pickings/" target="_blank" data-toggle="tooltip" title="View GitHub Repo"><i class="fa fa-2x fa-github" aria-hidden="true"></i></a>
                                    <p class="card-text">Sample non-responsive website project for a fictitious company. Built using HTML and CSS.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end portfolio container -->
    </section>
    <!--- Skills Section --->
    <section id="skills" class="skills text-center">
        <div class="content container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Skills</h2>
                </div>

            </div>
            <!---end Skills header-->

            <!-- First Skills Row -->
            <div class="row">
                <article class="col-sm-3 skill-icon">
                    <i class="devicon-html5-plain-wordmark"></i>
                </article>
                <article class="col-sm-3 skill-icon">
                    <i class="devicon-javascript-plain"></i>
                </article>
                <article class="col-sm-3 skill-icon">
                    <i class="devicon-bootstrap-plain-wordmark"></i>
                </article>
                <article class="col-sm-3 skill-icon">
                    <i class="devicon-photoshop-plain"></i>
                </article>
            </div>

            <!--end first row skills-->

            <!-- Second Skills Row -->
            <div class="row">
                <article class="col-sm-3 skill-icon">
                    <i class="devicon-css3-plain-wordmark"></i>
                </article>
                <article class="col-sm-3 skill-icon">
                    <i class="devicon-jquery-plain-wordmark"></i>
                </article>
                <article class="col-sm-3 skill-icon">
                    <i class="devicon-git-plain-wordmark"></i>
                </article>
                <article class="col-sm-3 skill-icon">
                    <i class="devicon-gulp-plain"></i>
                </article>
            </div>
            <!--end second row skills-->
        </div>
</main>


<?php get_footer(); ?>
