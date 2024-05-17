<?php 
    $title = "Leave a Review";
    $path = "../";

    include($path . "assets/inc/header.php");

?>
<!-- This script attibute is for reCaptcha -->
<script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
<div class="header-container-aboutus" style="background-image: url('<?php echo $path; ?>assets/images/pristina_header.png');"> 
<?php 
    include($path . "assets/inc/nav.php");

?>
<div class="opening-text">
    <h1 class="h1-mu">LEAVE A REVIEW</h1>
</div>
</div>
<?php 
    session_name("ef7113_240login");
    session_start();
    if(empty($_SESSION['uname'])){
        die("You are not allowed to view this page!");
    }else{
        //echo "You are in " . $_SESSION[ 'uname' ];
?>
        You are in, <?php echo $_SESSION['uname'];?>!!!<br/>
        <a href="reviews.php">Sign Out</a>

<?php
    }
?>
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
<div class="add-container">
    <h1>What do you have to say?</h1>
    <form id="commentForm" method="post" action="reviews.php">
        <input type="text" id="name" name="name" placeholder="Your Name"><br>
        <div id="nameError" class="error"></div>
        <textarea id="comment" name="comment" placeholder="Your Comment" rows="4" cols="50"></textarea><br>
        <div id="commentError" class="error"></div>
        <div class="g-recaptcha" data-sitekey="6Lc8588pAAAAAGH0cBVUpMp1MAgzat5-3ZQGuUxj" data-action="LOGIN"></div><br>
        <input type="submit" value="Add the comment" onclick="return validateForm()">
    </form>
</div>

<!-- Validating the form above and sanitizing after. -->
<script>
    function validateForm() {
        var name = document.getElementById("name").value.trim();
        var comment = document.getElementById("comment").value.trim();
        var nameError = document.getElementById("nameError");
        var commentError = document.getElementById("commentError");
        var recaptchaResponse = grecaptcha.getResponse();
        var isValid = true;

        nameError.textContent = "";
        commentError.textContent = "";

        if (name === "") {
            nameError.textContent = "Please enter your name";
            isValid = false;
        }

        if (comment === "") {
            commentError.textContent = "Please enter your comment";
            isValid = false;
        }

        // Check if reCAPTCHA is verified
        if (recaptchaResponse === "") {
            alert("Please verify that you're not a robot.");
            isValid = false;
        }

        return isValid;
    }
</script>


<?php 
    include($path . "assets/inc/footer.php");
?>
