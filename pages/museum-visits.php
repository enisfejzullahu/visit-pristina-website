<!-- PHP title of the page and header with include -->
<?php 
    $title = "Museum Visits";
    $path = "../";

    include($path . "assets/inc/header.php");

?>

<!-- This is the background image for the header -->
<div class="header-container" style="background-image: url('<?php echo $path; ?>assets/images/eth_museum_header.png');"> 
<?php 
    include($path . "assets/inc/nav.php");

?>
<div class="opening-text">
        <h1 class="h1-mu">MUSEUMS TO VISIT IN PRISTINA</h1>
      </div>
    </div>

    <div class="line">
      <div class="hr"></div>
      <h1>List of Museums in Pristina</h1>
    </div>

    <!-- Slideshow For National Kosovo Museum -->

    <div class="main-container">
      <div class="slideshow-container">
        <div class="slides">
          <input
            type="radio"
            name="slide"
            class="slide-radio"
            id="museum1_slide1"
            checked
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/muzeu_i_kosoves.jpg" alt="Slide 1" />
          </div>
          <input
            type="radio"
            name="slide"
            class="slide-radio"
            id="museum2_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/kosovo_museum_inside.JPG" alt="Slide 2" />
          </div>
          <input
            type="radio"
            name="slide"
            class="slide-radio"
            id="museum3_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/kosovo_museum_inside2.jpg" alt="Slide 3" />
          </div>
          <input
            type="radio"
            name="slide"
            class="slide-radio"
            id="museum4_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/kosovo_museum_inside3.jpg" alt="Slide 4" />
          </div>
        </div>

        <!-- Navigation for the slides -->
        <div class="navigation">
          <label for="museum1_slide1" class="nav-btn"></label>
          <label for="museum2_slide1" class="nav-btn"></label>
          <label for="museum3_slide1" class="nav-btn"></label>
          <label for="museum4_slide1" class="nav-btn"></label>
        </div>
      </div>
      <div class="content">
        <h2>National Kosovo Museum</h2>
        <p>
          Since 1949, the Kosovo Museum, showcasing Kosovo's history and
          culture, lost its main collection to Belgrade in 1999. Located in
          Pristina, it stands out for its Austro-Hungarian architecture and
          initially served as a military base. The museum offers a glimpse into
          Kosovo's struggles and achievements, particularly its journey to
          independence.
        </p>
        <a href="<?php echo $path; ?>pages/reviews.php" class="see-reviews-button">See Reviews</a>
      </div>
    </div>

    <div class="line">
      <div class="hr"></div>
    </div>

    <!-- Slideshow For Ethno Kosovo Museum -->

    <div class="main-container">
      <div class="slideshow-container">
        <div class="slides">
          <input
            type="radio"
            name="eth_slide"
            class="slide-radio"
            id="ethno1_slide1"
            checked
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/eth_museum1.jpg" alt="Slide 1" />
          </div>
          <input
            type="radio"
            name="eth_slide"
            class="slide-radio"
            id="ethno2_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/eth_museum2.jpg" alt="Slide 2" />
          </div>
          <input
            type="radio"
            name="eth_slide"
            class="slide-radio"
            id="ethno3_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/eth_museum3.jpg" alt="Slide 3" />
          </div>
          <input
            type="radio"
            name="eth_slide"
            class="slide-radio"
            id="ethno4_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/eth_museum4.jpg" alt="Slide 4" />
          </div>
        </div>

        <!-- Navigation for the slides -->
        <div class="navigation">
          <label for="ethno1_slide1" class="nav-btn"></label>
          <label for="ethno2_slide1" class="nav-btn"></label>
          <label for="ethno3_slide1" class="nav-btn"></label>
          <label for="ethno4_slide1" class="nav-btn"></label>
        </div>
      </div>
      <div class="content">
        <h2>Kosovo Ethnological Museum</h2>
        <p>
          Situated in Prishtina's Old Bazaar, the Ethnological Museum, once an
          Ottoman-style home, showcases Kosovo's cultural heritage.
          Transitioning from a nature museum to a repository of Ottoman-era
          artifacts, it now highlights traditional costumes and daily life
          objects. Part of the Emin Gjiku complex and protected since 2016, the
          museum offers insights into Kosovar traditions, family life, and
          historical artifacts, reflecting the society's resourcefulness and
          customs.
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
            name="gallery_slide"
            class="slide-radio"
            id="gallery1_slide1"
            checked
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/national_gallery_museum.jpg" alt="Slide 1" />
          </div>
          <input
            type="radio"
            name="gallery_slide"
            class="slide-radio"
            id="gallery2_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/gallery_museum.jpg" alt="Slide 2" />
          </div>
          <input
            type="radio"
            name="gallery_slide"
            class="slide-radio"
            id="gallery3_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/gallery_museum2.jpg" alt="Slide 3" />
          </div>
          <input
            type="radio"
            name="gallery_slide"
            class="slide-radio"
            id="gallery4_slide1"
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/gallery_museum3.jpg" alt="Slide 4" />
          </div>
        </div>

        <!-- Navigation for the slides -->
        <div class="navigation">
          <label for="gallery1_slide1" class="nav-btn"></label>
          <label for="gallery2_slide1" class="nav-btn"></label>
          <label for="gallery3_slide1" class="nav-btn"></label>
          <label for="gallery4_slide1" class="nav-btn"></label>
        </div>
      </div>
      <div class="content">
        <h2>The National Gallery of Kosovo</h2>
        <p>
          Established in 1979, the National Gallery of Kosovo, originally part
          of the University of Prishtina’s Faculty of Arts, has grown from its
          first location at the Palace of Youth and Sports to become a key
          platform for local artists and the promotion of arts in Kosovo.
          Housing over 1,200 artworks, including a notable collection from the
          Grand Hotel Prishtina, it is nestled among the Faculty of Arts, the
          Faculty of Architecture, and the National Library. The gallery has
          broadened its scope over the years, showcasing regional artists and
          producing publications.
        </p>
        <a href="<?php echo $path; ?>pages/reviews.php" class="see-reviews-button">See Reviews</a>

      </div>
    </div>

    <!-- Below are maps for three locations -->

    <div class="line">
      <div class="hr"></div>
      <h1>Maps of the <strong>National Kosovo Museum</strong></h1>
    </div>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11735.19461915905!2d21.148365139961253!3d42.66562196575077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549f2019efb259%3A0x203dc40ae8da000a!2sKosovo%20Museum!5e0!3m2!1sen!2sus!4v1709080494295!5m2!1sen!2sus"
      width="199.99"
      height="150"
      style="display: block; margin: auto;border: 0; margin-top: 20px"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>

    <div class="line">
      <div class="hr"></div>
      <h1>Maps of the <strong>Kosovo Ethnological Museum</strong></h1>
    </div>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11735.19461915905!2d21.148365139961253!3d42.66562196575077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549f219b34283f%3A0xc5e14ced4e8b61f7!2sEthnographic%20Museum%20-%20Muzeu%20Etnologjik!5e0!3m2!1sen!2sus!4v1709080763233!5m2!1sen!2sus"
      width="199.99"
      height="150"
      style="display: block; margin: auto;border: 0; margin-top: 20px"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>

    <div class="line">
      <div class="hr"></div>
      <h1>Maps of the <strong>National Gallery of Kosovo</strong></h1>
    </div>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11735.19461915905!2d21.148365139961253!3d42.66562196575077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee7bfdc5dfb%3A0xe747d35e9f15314d!2sThe%20National%20Gallery%20of%20Kosovo!5e0!3m2!1sen!2sus!4v1709080957097!5m2!1sen!2sus"
      width="199.99"
      height="150"
      style="display: block; margin: auto;border: 0; margin-top: 20px"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>


    <!-- Below is footer with include -->

<?php 
    include($path . "assets/inc/footer.php");

?>