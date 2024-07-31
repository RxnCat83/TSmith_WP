<footer class="site-footer">
    <div class="site-footer__inner container container--narrow">
        <div class="group">
            <div class="site-footer__col-one">
                <h1 class="school-logo-text school-logo-text--alt-color">
                    <a href="#"><strong>Team Smith Real Estate</strong></a>
                </h1>
                <br>
                <p>
                Utica Realty 8243 Hall Road Suite 205 Utica, Michigan 48317
                </p>
                <p><a class="site-footer__link" href="#">(313)555-5555</a></p>
                <p>Email: <a href="mailto:info@mydomain.com">info@email.</a></p>
            </div>

            <div class="site-footer__col-two-three-group">
                <div class="site-footer__col-two">
                    <h3 class="headline headline--small">Explore</h3>
                    <nav class="nav-list">
                        <ul>
                            <li><a href="<?php echo site_url()?>">About Us</a></li>
                            <li><a href="<?php echo site_url('/services')?>">Services</a></li>
                            <li><a href="<?php echo site_url('/listings')?>">Current Listings</a></li>
                            <li><a href="<?php echo site_url('/contact-us')?>">Contact Us</a></li>
                            <li><a href="<?php echo site_url('/affiliates')?>">Affiliates</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="site-footer__col-three">
                    <h3 class="headline headline--small">Resources</h3>
                    <nav class="nav-list">
                        <ul>
                            <li><a href="<?php echo site_url('/sellers')?>">Sellers</a></li>
                            <li><a href="<?php echo site_url('/buyers')?>">Buyers</a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="site-footer__col-four">
                <h3 class="headline headline--small">Connect With Us</h3>
                <nav>
                    <ul class="min-list social-icons-list group">
                        <li>
                            <a href="https://wa.me/12489878376" class="social-color-whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/in/marc-smith-76a14624" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/team_smithre?igsh=MTV3b2ExejhzOGl6bw%3D%3D&utm_source=qr" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="container"></div>
    <div class="site-footer__copyright">
        <p>&copy; 2024 Catalyst Reaction LLC. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
