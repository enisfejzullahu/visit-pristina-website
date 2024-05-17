<?php 
    $title = "Historical Spots";
    $path = "../";

    include($path . "assets/inc/header.php");

?>

<div class="header-container" style="background-image: url('<?php echo $path; ?>assets/images/mosque3.png');"> 
<?php 
    include($path . "assets/inc/nav.php");

?>

<div class="opening-text">
        <h1 class="h1-mu">HISTORICAL SPOTS IN PRISTINA</h1>
      </div>
    </div>

    <div class="line">
      <div class="hr"></div>
      <h1>List of Historical Spots in Pristina</h1>
    </div>

    <!-- Slideshow For Imperial Mosque -->

    <div class="main-container">
      <div class="slideshow-container">
        <div class="slides">
          <input
            type="radio"
            name="mosque"
            class="slide-radio"
            id="mosque1_slide1"
            checked
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/imperial_mosque.jpg" alt="Slide 1" />
          </div>
          <input
            type="radio"
            name="mosque"
            class="slide-radio"
            id="mosque2_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/imperial_mosque2.jpg" alt="Slide 2" />
          </div>
        </div>

        <!-- Navigation for the slides -->
        <div class="navigation">
          <label for="mosque1_slide1" class="nav-btn"></label>
          <label for="mosque2_slide1" class="nav-btn"></label>
        </div>
      </div>
      <div class="content">
        <h2>Imperial Mosque</h2>
        <p>
          The Imperial Mosque, also known as the King's Mosque, stands as a
          significant piece of Ottoman architecture in Pristina, Kosovo.
          Constructed in 1461 by Sultan Mehmed the Conqueror, its entrance
          boasts an Arabic inscription in six rows, marking the year 1461
          Gregorian calendar, or Hijra 865 in the Islamic calendar. Recognized
          for its monumental structure, construction technique, and decorative
          elements, the mosque is considered one of the most important Islamic
          architecture sites in Eastern Europe.
        </p>
        <a href="<?php echo $path; ?>pages/reviews.php" class="see-reviews-button">See Reviews</a>

      </div>
    </div>

    <div class="line">
      <div class="hr"></div>
    </div>

    <!-- Slideshow For Church -->

    <div class="main-container">
      <div class="slideshow-container">
        <div class="slides">
          <input
            type="radio"
            name="church"
            class="slide-radio"
            id="church1_slide1"
            checked
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/church.JPG" alt="Slide 1" />
          </div>
          <input
            type="radio"
            name="church"
            class="slide-radio"
            id="church2_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/church2.avif" alt="Slide 2" />
          </div>
        </div>

        <!-- Navigation for the slides -->
        <div class="navigation">
          <label for="church1_slide1" class="nav-btn"></label>
          <label for="church2_slide1" class="nav-btn"></label>
        </div>
      </div>
      <div class="content">
        <h2>Saint Nicholas Church</h2>
        <p>
          The Saint Nicholas Church in Pristina, the only operational Serbian
          Orthodox Church in the city, was restored with EU funding after being
          damaged in the 2004 unrest. It lost many of its original 18th-century
          icons and frescoes but reopened for liturgies in 2010. The restoration
          included a new exterior, roof, marble tiles, and icons, symbolizing
          its resurgence as a significant place of worship.
        </p>
        <a href="<?php echo $path; ?>pages/reviews.php" class="see-reviews-button">See Reviews</a>

      </div>
    </div>

    <div class="line">
      <div class="hr"></div>
    </div>


<?php 
    include($path . "assets/inc/footer.php");

?>