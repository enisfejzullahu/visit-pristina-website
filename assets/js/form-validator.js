// Form validatoin and sanitizating

// This is for login
function validateForm() {
  var uname = document.getElementById("uname").value;
  var pass = document.getElementById("pass").value;
  var unameError = document.getElementById("unameError");
  var passError = document.getElementById("passError");
  var recaptchaResponse = grecaptcha.getResponse();
  var isValid = true;

  unameError.textContent = "";
  passError.textContent = "";

  if (uname === "") {
    unameError.textContent = "Username cannot be empty";
    isValid = false;
  }

  if (pass === "") {
    passError.textContent = "Password cannot be empty";
    isValid = false;
  }
}

// Thhis is for the sign up
function validateFormS() {
  var uname = document.getElementById("uname_s").value;
  var pass = document.getElementById("pass_s").value;
  var pass2 = document.getElementById("pass2_s").value;
  var unameError = document.getElementById("unameError_s");
  var passError = document.getElementById("passError_s");
  var pass2Error = document.getElementById("pass2Error_s");
  var recaptchaResponse = grecaptcha.getResponse();
  var isValid = true;

  unameError.textContent = "";
  passError.textContent = "";
  pass2Error.textContent = "";

  if (uname === "") {
    unameError.textContent = "Username cannot be empty";
    isValid = false;
  }

  if (pass === "") {
    passError.textContent = "Password cannot be empty";
    isValid = false;
  }

  if (pass2 === "") {
    pass2Error.textContent = "Please confirm your password";
    isValid = false;
  } else if (pass !== pass2) {
    pass2Error.textContent = "Passwords do not match";
    isValid = false;
  }

  // Check if reCAPTCHA is verified
  if (recaptchaResponse === "") {
    alert("Please verify that you're not a robot.");
    isValid = false;
  }

  return isValid;
}

// Button Click
function redirectToLogin() {
  window.location.href = "login.php";
}
