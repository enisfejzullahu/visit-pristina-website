<?php 
    // Set the page title
    $title = "Pristina - Place Where I Live";
    // Set the path for including header and footer
    $path = "./";

    // Include the header file
    include($path . "assets/inc/header.php");
?>

<!-- This is the background image for the header -->
<div class="index-header-container" style="background-image: url('<?php echo $path; ?>assets/images/pristina_header.jpg');"> 
    <?php 
        // Include the navigation bar
        include($path . "assets/inc/nav.php");
    ?>
    <div class="opening-text">
        <h1>PRISTINA - KOSOVO'S BEATING HEART</h1>
        <p>
          Explore a city brimming with youthful energy, rich history, and
          vibrant street art. Dive into delicious food, cultural experiences,
          and unforgettable adventures. Pristina awaits.
        </p>
    </div>
</div>

<div class="line">
    <div class="hr"></div>
    <h1>Things to Do</h1>
</div>

<!-- Displaying the main content of the index page -->
<div class="main-content">
    <div class="description-text">
        <h1>Explore Different Museums in Pristina</h1>
        <p>
          Embark on a cultural journey through Pristina's museums. Start at the
          Kosovo Museum for ancient history. Experience the diverse heritage of
          Pristina in a day!
        </p>
        <a href="<?php echo $path; ?>pages/museum-visits.php" class="see-more-button">See More</a>
    </div>
    <div class="museum-image">
        <img data-src="<?php echo $path; ?>assets/images/muzeu_i_kosoves.jpg" alt="Kosovo National Museum" />
    </div>
</div>

<div class="line2">
    <div class="hr"></div>
    <h1>Places to Stay</h1>
</div>

<div class="main-content">
    <div class="description-text">
        <h1>Explore Different Hotels to Stay in Pristina</h1>
        <p>
          Discover various accommodations options in Pristina. Whether you're
          looking for a luxury hotel or a cozy boutique inn, there's something
          for every traveler's preference.
        </p>
        <a href="./pages/places-to-stay/hotels.html" class="see-more-button">See More</a>
    </div>
    <div class="museum-image">
        <img data-src="<?php echo $path; ?>assets/images/hotel_emerald.jpg" alt="Kosovo National Museum" />
    </div>
</div>

<!-- Differetiating the main page with something different -->
<div class="line2">
    <div class="hr"></div>
    <h1>Inspiration for your <br />next trip</h1>
</div>

<!-- These trip-collection sends you to trip-agendas page -->
<div class="trip-collection" onclick="window.location.href='pages/trip-agendas.php'">
    <div class="trip" style="background-image: url('<?php echo $path; ?>assets/images/big_mosque.jpg');"> 
        <div class="trip-info">
            <h2>3-Day Trip</h2>
            <p>
                Explore Pristina's rich history and culture during this 3-day trip,
                visiting iconic landmarks and fascinating museums.
            </p>
        </div>
    </div>

    <div class="trip" style="background-image: url('<?php echo $path; ?>assets/images/germia_park.jpg');">
        <div class="trip-info">
            <h2>5-Day Trip</h2>
            <p>
                Immerse yourself in Pristina's nightlife, thrilling sports events,
                and scenic hiking trails during this 5-day adventure.
            </p>
        </div>
    </div>

    <div class="trip" style="background-image: url('<?php echo $path; ?>assets/images/stadium_fadil_vokrri.jpg');">
        <div class="trip-info">
            <h2>One Week Trip</h2>
            <p>
                Embark on a week exploration of Pristina's attractions, from
                historical sites to nightlife and outdoor adventures.
            </p>
        </div>
    </div>
</div>

<script>
// IntersectionObserver to detect when the image enters the viewport
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const img = entry.target;
      const src = img.getAttribute('data-src');
      if (src) {
        img.src = src;
        img.removeAttribute('data-src');
        observer.unobserve(img);
      }
    }
  });
});

// Observe all images with the 'lazy' class
document.querySelectorAll('img[data-src]').forEach(img => {
  observer.observe(img);
});
</script>

<?php 
    // Include the footer file
    include($path . "assets/inc/footer.php");
?>
