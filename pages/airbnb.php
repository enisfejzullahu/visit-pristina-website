<?php 
    $title = "Airbnb in Pristina";
    $path = "../";

    include($path . "assets/inc/header.php");

?>

<div class="header-container" style="background-image: url('<?php echo $path; ?>assets/images/hotel_emerald_header.jpg');"> 
<?php 
    include($path . "assets/inc/nav.php");

?>
<div class="opening-text">
        <h1 class="h1-mu">AIRBNB OPTIONS IN PRISTINA</h1>
      </div>
    </div>

    <div class="line">
      <div class="hr"></div>
      <h1>List of Airbnb options in Pristina</h1>
    </div>

    <!-- AIRBNB OPTION -->

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
            <img src="<?php echo $path; ?>assets/images/airbnb2.png" alt="Slide 1" />
          </div>
        </div>
      </div>
      <div class="content">
        <h2>Airbnb Options</h2>
        <p>
          Pristina's Airbnb scene offers a wide array of accommodations,
          catering to every traveler's need. From quaint studios to large
          apartments, guests can enjoy a comfortable stay in various city
          locations, including quiet areas, the bustling city center, or near
          cultural hotspots. These Airbnbs, equipped with amenities from basic
          to luxury, provide a perfect base for exploring the city, whether
          you're here for business or leisure, ensuring a convenient and
          authentic experience of Pristina's lifestyle.
        </p>
        <a
          href="https://www.airbnb.com/s/Pristina--Pristina--Kosovo/homes?tab_id=home_tab&refinement_paths%5B%5D=%2Fhomes&flexible_trip_lengths%5B%5D=one_week&monthly_start_date=2024-03-01&monthly_length=3&monthly_end_date=2024-06-01&price_filter_input_type=0&channel=EXPLORE&query=Pristina%2C%20Pristina%2C%20Kosovo&place_id=ChIJJwkRBeaeVBMRWrleON-_ZZM&date_picker_type=calendar&source=structured_search_input_header&search_type=autocomplete_click"
          class="see-more"
          >See More</a
        >
      </div>
    </div>

    <div class="line">
      <div class="hr"></div>
    </div>

<?php 
    include($path . "assets/inc/footer.php");

?>