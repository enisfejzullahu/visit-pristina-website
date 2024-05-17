<!-- Below is the Header Container including the logo, navigation bar, background image and an icon -->
<div class="top-bar">
  <img src="<?php echo $path; ?>assets/images/visit_pristina_png.png" alt="Visit Pristina Logo" class="logo_img" onclick="location.href='<?php echo $path ?>index.php'" />
  <button id="menu-toggle" class="menu-icon">&#9776;</button> <!-- Hamburger menu button -->
  <nav>
    <div class="dropdown">
      <a <?php if($title == "Pristina - Place Where I Live"){ echo 'class="active"';} ?> href="<?php echo $path; ?>index.php">HOME</a>
    </div>
    <div class="dropdown">
      <a <?php if($title == "Museum Visits" || $title == "Nightlife" || $title == "Different Events" || $title == "Historical Spots"){ echo 'class="active"';} ?> href="#">THINGS TO DO</a>
      <div class="dropdown-content">
        <a href="<?php echo $path; ?>pages/museum-visits.php">Museum Visits</a>
        <a href="<?php echo $path; ?>pages/nightlife.php">Nightlife</a>
        <a href="<?php echo $path; ?>pages/different-events.php">Different Events</a>
        <a href="<?php echo $path; ?>pages/historical-spots.php">Historical Spots</a>
      </div>
    </div>
    <div class="dropdown">
      <a <?php if($title == "Hotels in Pristia" || $title == "Airbnb in Pristina" || $title == "Campgrounds in Pristina"){ echo 'class="active"';} ?> href="#">PLACES TO STAY</a>
      <div class="dropdown-content">
        <a href="<?php echo $path; ?>pages/hotels.php">Hotels</a>
        <a href="<?php echo $path; ?>pages/airbnb.php">Airbnb</a>
        <a href="<?php echo $path; ?>pages/campgrounds.php">Campgrounds & RV Parks</a>
      </div>
    </div>
    <div class="dropdown">
      <a <?php if($title == "Trip Agendas" || $title == "Reviews" || $title == "About Us" || $title == "Contact Us"|| $title == "Works Cited"|| $title == "Login" || $title == "Grading"){ echo 'class="active"';} ?> href="#">MORE</a>
      <div class="dropdown-content">
        <a href="<?php echo $path; ?>pages/trip-agendas.php">TRIP AGENDAS</a>
        <a href="<?php echo $path; ?>pages/reviews.php">REVIEWS</a>
        <a href="<?php echo $path; ?>pages/about-us.php">ABOUT US</a>
        <a href="<?php echo $path; ?>pages/contact-us.php">CONTACT US</a>
        <a href="<?php echo $path; ?>pages/works-cited.php">WORKS CITED</a>
        <a href="<?php echo $path; ?>pages/login.php">LOGIN</a>
        <a href="<?php echo $path; ?>pages/grading.php">GRADING</a>

      </div>
    </div>
  </nav>
</div>


