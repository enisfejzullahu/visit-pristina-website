<?php 
    $title = "Hotels in Pristia";
    $path = "../";

    include($path . "assets/inc/header.php");

?>

<div class="header-container" style="background-image: url('<?php echo $path; ?>assets/images/hotel_emerald_header.jpg');"> 
<?php 
    include($path . "assets/inc/nav.php");

?>
<div class="opening-text">
        <h1 class="h1-mu">HOTELS TO STAY IN PRISTINA</h1>
      </div>
    </div>

    <div class="line">
      <div class="hr"></div>
      <h1>List of Hotels in Pristina</h1>
    </div>

    <!-- Slideshow For Hotels in Pristina -->

    <div class="main-container">
      <div class="slideshow-container">
        <div class="slides">
          <input
            type="radio"
            name="emerald"
            class="slide-radio"
            id="emerald1_slide1"
            checked
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/emerald2.jpg" alt="Slide 1" />
          </div>
          <input
            type="radio"
            name="emerald"
            class="slide-radio"
            id="emerald2_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/emerald1.jpg" alt="Slide 2" />
          </div>
          <input
            type="radio"
            name="emerald"
            class="slide-radio"
            id="emerald3_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/emerald3.jpg" alt="Slide 3" />
          </div>
          <input
            type="radio"
            name="emerald"
            class="slide-radio"
            id="emerald4_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/emerald4.jpg" alt="Slide 4" />
          </div>
        </div>

        <!-- Navigation for the slides -->
        <div class="navigation">
          <label for="emerald1_slide1" class="nav-btn"></label>
          <label for="emerald2_slide1" class="nav-btn"></label>
          <label for="emerald3_slide1" class="nav-btn"></label>
          <label for="emerald4_slide1" class="nav-btn"></label>
        </div>
      </div>
      <div class="content">
        <h2>Hotel Emerald</h2>
        <p>
          The Emerald Hotel in Kosovo is a luxurious resort and conference
          venue, located conveniently between Pristina and Skopje. It offers
          easy access to Pristina's center and airport. The hotel boasts a
          variety of dining options, a SPA, a sports center, and exceptional
          service, catering to all guest needs with a focus on detail and
          satisfaction.
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
            name="swissdiamond"
            class="slide-radio"
            id="swissdiamond1_slide1"
            checked
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/swiss_diamond.webp" alt="Slide 1" />
          </div>
          <input
            type="radio"
            name="swissdiamond"
            class="slide-radio"
            id="swissdiamond2_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/swissdiamond2.webp" alt="Slide 2" />
          </div>
          <input
            type="radio"
            name="swissdiamond"
            class="slide-radio"
            id="swissdiamond3_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/swissdiamond3.webp" alt="Slide 3" />
          </div>
          <input
            type="radio"
            name="swissdiamond"
            class="slide-radio"
            id="swissdiamond4_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/swissdiamond4.webp" alt="Slide 4" />
          </div>
        </div>

        <!-- Navigation for the slides -->
        <div class="navigation">
          <label for="swissdiamond1_slide1" class="nav-btn"></label>
          <label for="swissdiamond2_slide1" class="nav-btn"></label>
          <label for="swissdiamond3_slide1" class="nav-btn"></label>
          <label for="swissdiamond4_slide1" class="nav-btn"></label>
        </div>
      </div>
      <div class="content">
        <h2>Swiss Diamond Hotel</h2>
        <p>
          The Swiss Diamond Hotel, located in the heart of Pristina near key
          attractions and government offices, blends imperial and modern styles
          elegantly. It provides a luxurious experience with facilities
          including various dining options, a year-round terrace, multiple
          conference rooms, a health and spa center, and medical services.
          Recognized internationally with '5 Stars' by the American Academy of
          Hospitality Sciences among other accolades, the hotel is celebrated
          for its opulent setting and bespoke services.
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
            name="sirius"
            class="slide-radio"
            id="sirius1_slide1"
            checked
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/sirius0.jpg" alt="Slide 1" />
          </div>
          <input
            type="radio"
            name="sirius"
            class="slide-radio"
            id="sirius2_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/sirius2.jpg" alt="Slide 2" />
          </div>
          <input
            type="radio"
            name="sirius"
            class="slide-radio"
            id="sirius3_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/sirius3.png" alt="Slide 3" />
          </div>
          <input
            type="radio"
            name="sirius"
            class="slide-radio"
            id="sirius4_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/sirius4.jpg" alt="Slide 4" />
          </div>
        </div>

        <!-- Navigation for the slides -->
        <div class="navigation">
          <label for="sirius1_slide1" class="nav-btn"></label>
          <label for="sirius2_slide1" class="nav-btn"></label>
          <label for="sirius3_slide1" class="nav-btn"></label>
          <label for="sirius4_slide1" class="nav-btn"></label>
        </div>
      </div>
      <div class="content">
        <h2>Hotel Sirius</h2>
        <p>
          Hotel Sirius, centrally located in Pristina, boasts a luxurious
          top-floor restaurant with stunning city views, making it an ideal spot
          for both business and leisure. Just a 3-minute walk from the
          Parliament Building, National Theatre, and Mother Theresa Square, it
          offers well-appointed rooms with modern amenities such as
          air-conditioning, LCD TV, minibar, and free Wi-Fi. Guests can enjoy
          facilities like a lobby and snack bar, daily breakfast buffet, and
          room service. The hotel also features conference halls equipped with
          the latest technology, making it suitable for various events.
        </p>
        <a href="<?php echo $path; ?>pages/reviews.php" class="see-reviews-button">See Reviews</a>

      </div>
    </div>

    <div class="line">
      <div class="hr"></div>
      <h1>Maps of the <strong>Hotel Emerald</strong></h1>
    </div>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11746.774876454852!2d21.1307419!3d42.6042414!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549daf98db6df7%3A0xa4fc5cc429e7a3a7!2sEmerald%20Hotel!5e0!3m2!1sen!2sus!4v1709086417864!5m2!1sen!2sus"
      width="199.99"
      height="150"
      style="display: block; margin: auto;border: 0; margin-top: 20px"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>

    <div class="line">
      <div class="hr"></div>
      <h1>Maps of the <strong>Swiss Diamond Hotel</strong></h1>
    </div>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2933.938675580144!2d21.161394074593684!3d42.66265491593309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee08a5639f7%3A0x20ddb9b4fb298905!2sSwiss%20Diamond%20Hotel%20Prishtina!5e0!3m2!1sen!2sus!4v1709086554597!5m2!1sen!2sus"
      width="199.99"
      height="150"
      style="display: block; margin: auto;border: 0; margin-top: 20px"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>

    <div class="line">
      <div class="hr"></div>
      <h1>Maps of the <strong>Hotel Sirius</strong></h1>
    </div>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2933.938675580144!2d21.161394074593684!3d42.66265491593309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee09f1e1c2b%3A0x8f4b935a52322594!2sHotel%20Sirius!5e0!3m2!1sen!2sus!4v1709086587084!5m2!1sen!2sus"
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