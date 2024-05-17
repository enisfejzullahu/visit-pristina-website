<?php 
    $title = "Log In";
    $path = "../";

    include($path . "assets/inc/header.php");

?>
<?php
// Log in PHP page
if (!empty($_POST['uname']) && !empty($_POST['pass'])) {

    // Connected to database through this file which is originally on server
    // so that we can make it reusable
    include("/home/MAIN/ef7113/dbconn.php");
    // This is full database connection: 
    // <?php 
    // $servername = "localhost";
	// $username = "iste240t97";
	// $password = "Sexually7!head-on";
	// $dbname = "iste240t97";

	// // Create connection
	// $conn = new mysqli($servername, $username, $password, $dbname);
	// // Check connection
	// if ($conn->connect_error) {
	// 	die("Connection failed: " . $conn->connect_error);
	// }
    #>

    $sql = "SELECT * FROM `240Login` WHERE `uname` = ? LIMIT 1";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_POST['uname']);
    $stmt->execute();
    $results = $stmt->get_result();

    if ($results->num_rows > 0) {
        // Username exists, proceed with login
        while ($row = $results->fetch_assoc()) {
            if (password_verify($_POST['pass'], $row['pass'])) {
                session_name("ef7113_240login");
                session_start();
                $_SESSION["uname"] = $_POST['uname'];
                header("Location: page.php");
            } else {
                echo "Password invalid";
            }
        }
    } else {
        // Username doesn't exist, generate a random username
        $random_username = generateRandomUsername();
        echo "The username you provided doesn't exist. Please sign up below or try another username.";

        // You can display the random username on the form or use it to pre-fill the input field
        // For example:
        // echo "<input type='text' name='uname' id='uname' size='30' value='$random_username' />";
    }
}

// Function after we see that the user doesn't exist.
function generateRandomUsername($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $username = '';
    $max = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $username .= $characters[rand(0, $max)];
    }
    return $username;
}
?>

<div class="header-container-aboutus" style="background-image: url('<?php echo $path; ?>assets/images/pristina_header.png');"> 
<?php 
    include($path . "assets/inc/nav.php");

?>
<div class="opening-text">
    <h1 class="h1-mu">LOG IN OR SIGN UP</h1>
</div>
</div>
<div class="log-in-container">
    <h2>Log In Here</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validateForm()">
    <div>
        User Name:
        <input type="text" name="uname" id="uname" size="30" />
        <span id="unameError" style="color: red;"></span>
    </div>
    <div>
        Password:
        <input type="password" name="pass" id="pass" size="30" />
        <span id="passError" style="color: red;"></span>
    </div>
    <div class="clearfix">
        <input type="reset" value="Reset Form" />
        <input type="submit" value="Enter Site" />
    </div>
</form>


<h2>Sign Up Below</h2>

<?php
// Sign Up PHP
function passMatch(){
    if(strcmp($_POST['pass_s'],$_POST['pass2_s'])==0){
        return true;
    }else{
        return false;
    }
}

if(!empty($_POST['uname_s']) && !empty($_POST['pass_s']) && !empty($_POST['pass2_s']) && passMatch()){

     include("/home/MAIN/ef7113/dbconn.php");

    $pass = password_hash($_POST['pass_s'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO `240Login` (`uname`, `pass`) VALUES (?, ?);";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param('ss', $_POST['uname_s'], $pass); // corrected parameter names
    $stmt->execute();
    $stmt->close();

    header("Location: login.php");
    exit(); // It's a good practice to exit after redirecting

    //die("Password stored");
}
?>



<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validateFormS()">
    <div>
        User Name:
        <input type="text" name="uname_s" id="uname_s" size="30" /> <!-- Unique ID -->
        <span id="unameError_s" style="color: red;"></span> <!-- Unique ID -->
    </div>
    <div>
        Password:
        <input type="password" name="pass_s" id="pass_s" size="30" /> <!-- Unique ID -->
        <span id="passError_s" style="color: red;"></span> <!-- Unique ID -->
    </div>
    <div>
        Password (again):
        <input type="password" name="pass2_s" id="pass2_s" size="30" /> <!-- Unique ID -->
        <span id="pass2Error_s" style="color: red;"></span> <!-- Unique ID -->
    </div>
    <div class="g-recaptcha" data-sitekey="6Lc8588pAAAAAGH0cBVUpMp1MAgzat5-3ZQGuUxj" id="recaptcha"></div><br>
    <div class="clearfix">
        <input type="reset" value="Reset Form" />
        <input type="submit" value="Submit Form" />
    </div>    
</form>


  </div>

<?php 
    include($path . "assets/inc/footer.php");

?>