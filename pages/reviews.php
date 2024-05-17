<?php 
    $title = "Reviews";
    $path = "../";

    include($path . "assets/inc/header.php");

?>

<div class="header-container-aboutus" style="background-image: url('<?php echo $path; ?>assets/images/pristina_header.png');"> 
<?php 
    include($path . "assets/inc/nav.php");

?>
<!-- Below is the connection to database and getting the info from the table 'comments' -->
<?php
include("/home/MAIN/ef7113/dbconn.php");

if(!empty($_POST['name']) && !empty($_POST['comment'])) {
    $from = $_POST["name"];
    $message = $_POST["comment"];
    $date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `comments` (`from`, `message`, `date`) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $from, $message, $date);
    $stmt->execute();
    $stmt->close();
}

$sql = "SELECT * FROM `comments` ORDER BY `id` DESC LIMIT 50";
$result = $conn->query($sql);
?>
<div class="opening-text">
    <h1 class="h1-mu">REVIEWS FROM TOURISTS</h1>
</div>
</div>
<div class="review-container">
        <h1 style="text-align: center">Pristina Reviews</h1>
        <div class="click-here">
            <p>Click here to leave a review:</p>
            <!-- Button which redirects to login page -->
            <button onclick="redirectToLogin()">Leave a Review</button> 
        </div>
        <?php
// Assuming this is the loop fetching review data
// Below are the results that we get from the table and they are shown in an organized way. So, info about the name of the one who wrote review, date and also the message of the review.
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
    <div class="review">
        <div class="review-header">
            <div class="user-info">
                <h2><?php echo $row['from']; ?></h2>
                <p class="review-date"><?php echo $row['date']; ?></p>
            </div>
        </div>
        <p class="review-text"><?php echo $row['message']; ?></p>
    </div>
<?php
    }
} else {
    echo "No reviews found.";
}
?>

    </div>

    <?php 
    include($path . "assets/inc/footer.php");

?>


<!-- Recaptcha from which after you login or signup it will redirect you here. So to connect the recaptcha from login page to reviews.php page -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $captchaResponse = $_POST['g-recaptcha-response'];
    $secretKey = '6Lc8588pAAAAAJaOoICDzj273WM3CQQhj98j4CYU'; // Replace with your actual reCAPTCHA Secret Key
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captchaResponse";
    
    // Make a request to the reCAPTCHA verification endpoint
    $response = file_get_contents($url);
    $responseKeys = json_decode($response, true);
    
    if (intval($responseKeys["success"]) !== 1) {
        // CAPTCHA verification failed
        echo "CAPTCHA verification failed. Please try again.";
        exit;
    }
    
    // CAPTCHA verification succeeded, proceed with comment submission
    // Your code to handle comment submission goes here
} else {
    // Redirect to an error page or display an error message
    echo "Invalid request.";
}

?>


