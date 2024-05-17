<?php 
    $title = "Contact Us";
    $path = "../";

    include($path . "assets/inc/header.php");

?>

<div class="header-container-aboutus" style="background-image: url('<?php echo $path; ?>assets/images/pristina_header.png');"> 
<?php 
    include($path . "assets/inc/nav.php");

?>
<div class="opening-text">
    <h1 class="h1-mu">CONTACT US</h1>
</div>
</div>
<main class="main-container1">
        <h1 class="h1-mu">Contact Us</h1>
        <p>
            We'd love to hear from you! Please fill out the form below with any
            questions or feedback, and we'll get back to you as soon as possible.
        </p>
        <form id="contact-form" class="contact-form">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name">

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email">

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4"></textarea>

            <button type="button" onclick="validateAndSubmit()" class="see-reviews-button">Send Message</button>
        </form>
    </main>

    <script>
        function validateAndSubmit() {
            var name = document.getElementById("name").value.trim();
            var email = document.getElementById("email").value.trim();
            var message = document.getElementById("message").value.trim();

            if (name === "") {
                alert("Please enter your name.");
                return;
            }

            if (email === "") {
                alert("Please enter your email address.");
                return;
            } else if (!isValidEmail(email)) {
                alert("Please enter a valid email address.");
                return;
            }

            if (message === "") {
                alert("Please enter your message.");
                return;
            }

            // Sanitize the input before submitting
            name = sanitize(name);
            message = sanitize(message);

            // Call your function to submit the form data
            submitFormData(name, email, message);
        }

        function isValidEmail(email) {
            var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }

        function sanitize(str, length = 50) {
            str = str.trim();
            str = str.replace(/</g, "&lt;").replace(/>/g, "&gt;"); // Escape HTML tags
            str = str.substring(0, length); // Limit the length
            return str;
        }

        function submitFormData(name, email, message) {
            // Implement your logic to submit the form data using AJAX or any other method
            console.log("Name: " + name);
            console.log("Email: " + email);
            console.log("Message: " + message);

            // Display a thank you message
            alert("Thank you for contacting us, " + name + "! We'll get back to you as soon as possible.\n\nYour Email: " + email + "\n\nYour Message: " + message);

            // Reset the form after clicking OK
            document.getElementById("contact-form").reset();
        }
    </script>

<?php 
    include($path . "assets/inc/footer.php");
?>
