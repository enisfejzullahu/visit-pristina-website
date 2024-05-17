<?php 
    $title = "Nightlife";
    $path = "../";

    include($path . "assets/inc/header.php");

?>

<div class="header-container" style="background-image: url('<?php echo $path; ?>assets/images/nightlife2_header.jpg');"> 
<?php 
    include($path . "assets/inc/nav.php");

?>
<div class="opening-text">
        <h1 class="h1-mu">NIGHTLIFE IN PRISTINA</h1>
      </div>
    </div>

    <div class="line">
      <div class="hr"></div>
      <h1>List of Night Clubs in Pristina</h1>
    </div>

    <!-- Slideshow For Nightlife in Pristina -->

    <div class="main-container">
      <div class="slideshow-container">
        <div class="slides">
          <input
            type="radio"
            name="slide"
            class="slide-radio"
            id="nightlife_slide1"
            checked
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/nightlife_header.jpg" alt="Slide 1" />
          </div>
          <input
            type="radio"
            name="slide"
            class="slide-radio"
            id="nightlife2_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/nightlife2_header.jpg" alt="Slide 2" />
          </div>
          <input
            type="radio"
            name="slide"
            class="slide-radio"
            id="nightlife3_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/nightlife3_header.jpg" alt="Slide 3" />
          </div>
          <input
            type="radio"
            name="slide"
            class="slide-radio"
            id="nightlife4_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/nightlife4_header.jpg" alt="Slide 4" />
          </div>
        </div>

        <!-- Navigation for the slides -->
        <div class="navigation">
          <label for="nightlife1_slide1" class="nav-btn"></label>
          <label for="nightlife2_slide1" class="nav-btn"></label>
          <label for="nightlife3_slide1" class="nav-btn"></label>
          <label for="nightlife4_slide1" class="nav-btn"></label>
        </div>
      </div>
      <div class="content">
        <h2>Zone Club</h2>
        <p>
          Zone Club, a top nightlife spot in Pristina, offers a lively mix of
          bars and dance clubs. Open from 11:00 AM to 6:00 AM, it's perfect for
          those looking to enjoy vibrant night out. Ranked #1 for nightlife in
          Pristina, it's a must-visit for party enthusiasts.
        </p>
        <a href="<?php echo $path; ?>pages/reviews.php" class="see-reviews-button">See Reviews</a>

      </div>
    </div>

    <div class="line">
      <div class="hr"></div>
    </div>

    <div class="main-container">
      <div class="slideshow-container">
        <div class="slides">
          <input
            type="radio"
            name="duplex_slide"
            class="slide-radio"
            id="duplex_slide1"
            checked
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/duplex_nightlife.jpg" alt="Slide 1" />
          </div>
          <input
            type="radio"
            name="duplex_slide"
            class="slide-radio"
            id="duplex2_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/duplex_nightlife2.jpg" alt="Slide 2" />
          </div>
          <input
            type="radio"
            name="duplex_slide"
            class="slide-radio"
            id="duplex3_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/duplex_nightlife3.jpg" alt="Slide 3" />
          </div>
          <input
            type="radio"
            name="duplex_slide"
            class="slide-radio"
            id="duplex4_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/duplex_nightlife4.jpg" alt="Slide 4" />
          </div>
        </div>

        <!-- Navigation for the slides -->
        <div class="navigation">
          <label for="duplex1_slide1" class="nav-btn"></label>
          <label for="duplex2_slide1" class="nav-btn"></label>
          <label for="duplex3_slide1" class="nav-btn"></label>
          <label for="duplex4_slide1" class="nav-btn"></label>
        </div>
      </div>
      <div class="content">
        <h2>Duplex Club Premium</h2>
        <p>
          Duplex Club Premium, a stunning venue with incredible guests, invites
          you to join our world. Experience the beauty and excitement firsthand!
        </p>
        <a href="<?php echo $path; ?>pages/reviews.php" class="see-reviews-button">See Reviews</a>

      </div>
    </div>

    <div class="line">
      <div class="hr"></div>
      <h1>Maps of the <strong>Zone Club</strong></h1>
    </div>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.478760587977!2d21.12231107459285!3d42.651208916660195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549e6974dff05d%3A0x2c3716d1a361e419!2sZONE%20Club!5e0!3m2!1sen!2sus!4v1709082432133!5m2!1sen!2sus"
      width="199.99"
      height="150"
      style="display: block; margin: auto;border: 0; margin-top: 20px"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>

    <div class="line">
      <div class="hr"></div>
      <h1>Maps of the <strong>Duplex Club Premium</strong></h1>
    </div>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11735.865168740173!2d21.137787775109356!3d42.66206969856248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549f7c1888ec67%3A0xace132fba9b12609!2sDuplex%20Premium!5e0!3m2!1sen!2sus!4v1709082509512!5m2!1sen!2sus"
      width="199.99"
      height="150"
      style="display: block; margin: auto;border: 0; margin-top: 20px"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>


<?php 
    include($path . "assets/inc/footer.php");

?>