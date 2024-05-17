<?php 
    $title = "Campgrounds in Pristina";
    $path = "../";

    include($path . "assets/inc/header.php");

?>

<div class="header-container" style="background-image: url('<?php echo $path; ?>assets/images/campground2.png');"> 
<?php 
    include($path . "assets/inc/nav.php");

?>
<div class="opening-text">
        <h1 class="h1-mu">CAMPGROUNDS & RV PARKS</h1>
      </div>
    </div>

    <div class="line">
      <div class="hr"></div>
      <h1>
        List of Campground & RV Parks <br />
        in Pristina
      </h1>
    </div>

    <div class="main-container">
      <div class="slideshow-container">
        <div class="slides">
          <input
            type="radio"
            name="slide"
            class="slide-radio"
            id="campground"
            checked
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/campground.jpg" alt="Slide 1" />
          </div>
        </div>
      </div>
      <div class="content">
        <h2>Badovac Lake</h2>
        <p>
          Situated just 2 km away from Hajvalia and Gracanica, and a mere 5 km
          from Pristina, Badovc Lake serves as an essential artificial reservoir
          formed by the Gracanica River. It stands as one of Kosovo's primary
          sources of potable water, crucially supplying Pristina and its
          neighboring areas.
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
            name="slide2"
            class="slide-radio"
            id="germia"
            checked
          />
          <div class="slide">
            <img src="<?php echo $path; ?>assets/images/germia_park2.jpg" alt="Slide 1" />
          </div>
        </div>
      </div>
      <div class="content">
        <h2>Germia Park</h2>
        <p>
          Germia Park, located in northeast Prishtina, Kosovo, covers 62 square
          kilometers and offers a green oasis near the city center. Protected
          since 1987, this regional nature park is ideal for outdoor activities
          like walking, cycling, and dining at local restaurants. It features a
          large swimming pool, ski options in winter, and a rich biodiversity
          with 63 animal species and 600 plant species. The park's landscape
          includes oak and beech forests, meadows, sports facilities, and
          walking trails, making it Pristina's largest and most picturesque park
          for a peaceful afternoon or weekend.
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