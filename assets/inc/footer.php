<!-- Below is the footer -->

<footer>
    <div class="footer-container">
        <!-- Logo and Address -->
        <div class="logo-section">
            <img src="<?php echo $path;?>assets/images/visit_pristina_png.png" alt="Visit Pristina Logo" class="logo_img" onclick="location.href='<?php echo $path ?>index.php'" />
        </div>
        <!-- Navigation Sections -->
        <div class="footer-nav">
            <!-- UNIX Basics -->
            <div class="submenu-section">
                <h3>THINGS TO DO</h3>
                <ul class="footer-menu">
                    <li><a href="<?php echo $path; ?>pages/museum-visits.php">Museum Visits</a></li>
                    <li><a href="<?php echo $path; ?>pages/nightlife.php">Nightlife</a></li>
                    <li><a href="<?php echo $path; ?>pages/different-events.php">Different Events</a></li>
                    <li><a href="<?php echo $path; ?>pages/historical-spots.php">Historical Spots</a></li>
                </ul>
            </div>
            <!-- Places to Stay -->
            <div class="submenu-section">
                <h3>PLACES TO STAY</h3>
                <ul class="footer-menu">
                    <li><a href="<?php echo $path; ?>pages/hotels.php">Hotels</a></li>
                    <li><a href="<?php echo $path; ?>pages/airbnb.php">Airbnb</a></li>
                    <li><a href="<?php echo $path; ?>pages/campgrounds.php">Campgrounds & RV Parks</a></li>
                </ul>
            </div>
            <!-- More -->
            <div class="submenu-section">
                <h3>MORE</h3>
                <ul class="footer-menu">
                    <li><a href="<?php echo $path; ?>pages/trip-agendas.php">TRIP AGENDAS</a></li>
                    <li><a href="<?php echo $path; ?>pages/reviews.php">REVIEWS</a></li>
                    <li><a href="<?php echo $path; ?>pages/about-us.php">ABOUT US</a></li>
                    <li><a href="<?php echo $path; ?>pages/contact-us.php">CONTACT US</a></li>
                    <li><a href="<?php echo $path; ?>pages/works-cited.php">WORKS CITED</a></li>
                    <li><a href="<?php echo $path; ?>pages/grading.php">GRADING</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Scroll to Top and Copyright -->
    <div class="scroll-to-top">
            <p>&copy; <?php echo date("Y"); ?> Your Website Name</p>
        </div>
</footer>

  </body>
</html>