<!--This block of code creates a story slide show on the homepage of the website-->


<footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

        <div class="group">

            <div class="site-footer__col-one">
                <h1 class="school-logo-text school-logo-text--alt-color"><a href="<?php echo site_url() ?>"><strong>The Tocumwal</strong> Archival</a></h1>
                <p class="copyright-text">&copy; <?php echo date("Y"); ?> Don't Steal, its not nice...</p>

            </div>


            <!--This block of code creates a footer of the website. The footer contains navigation menu-->
            <div class="site-footer__col-two-three-group">
                <div class="site-footer__col-two">
                    <h3 class="headline headline--small">Explore</h3>
                    <nav class="nav-list">



                        <ul>
                            <li><a href="<?php echo site_url("#"/*'/about'*/) ?>">About</a></li>
                            <li><a href="<?php echo site_url("#"/*'/gallery'*/) ?>">Gallery</a></li>
                            <li><a href="<?php echo site_url("#"/*'/location'*/) ?>">Location</a></li>
                            <li><a href="<?php echo site_url("#"/*'/get-in-touch'*/) ?>">Get in Touch</a></li>
                        </ul>

                    </nav>
                </div>

                <div class="site-footer__col-three">
                    <h3 class="headline headline--small">Learn</h3>
                    <nav class="nav-list">



                        <ul>
                            <li><a href="<?php echo site_url("#"/*'/stories'*/) ?>">Stories</a></li>
                            <li><a href="<?php echo site_url("#"/*'/news'*/) ?>">News</a></li>
                        </ul>

                    </nav>
                </div>
            </div>



            <div class="site-footer__col-four">
                <h3 class="headline headline--small">Connect With Us</h3>
                <nav>
                    <ul class="min-list social-icons-list group">
                        <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</footer>



<?php wp_footer(); ?>
</body>





</html>
