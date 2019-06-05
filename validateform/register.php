<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Submission Form</title>

</head>
<body>
    <div id="wrapper">
    <form method="POST" action="index.php" onsubmit="return Validate()" name="vform">
    <div>
        <input type="text" name="username" class="textInput" placeholder="Username">
        <div id="name_error" class="val_error"></div>
    </div>

    <div>
        <input type="email" name="email" class="textInput" placeholder="Email">
        <div id="email_error" class="val_error"></div>
    </div>

    <div>
        <input type="password" name="password" class="textInput" placeholder="Password">
    </div>

    <div>
        <input type="password" name="password_confirmation" class="textInput" placeholder="Password confirmation">
        <div id="password_error" class="val_error"></div>
    </div>

    <div>
        <input type="submit" value="Register" class="btn" name="register">
    </div>

    </form>
    </div>
</body>
</html>

<!-- adding javascript -->

<script type="text/javascript">
//getting all input text objects
var username = document.forms["vforms"]["username"];
var email = document.forms["vforms"]["email"];
var password = document.forms["vforms"]["password"];
var password_confirmation = document.forms["vforms"]["password_confirmation"];

//getting all error display objects
var name_error = document.getElementById("name_error");
var email_error = document.getElementById("email_error");
var password_error = document.getElementById("password_error");

//setting all event listeners
username.addEventListener("blur", nameVerify, true);
email.addEventListener("blur", emailVerify, true);
password.addEventListener("blur", passwordVerify, true);

//validation function
function Validate(){
    //username validation
    if (username.value == "") {
        username.style.border = "1px solid red";
        name_error.textContent = "Username is required";
        username.focus();
        return false;
    }
    //email validation
    if (email.value == "") {
        email.style.border = "1px solid red";
        email_error.textContent = "Email is required";
        email.focus();
        return false;
    }
    //password validation
    if (password.value == "") {
        password.style.border = "1px solid red";
        password_error.textContent = "Password is required";
        password.focus();
        return false;
    }
}

//event handler functions
function nameVerify(){
    if (username.value !="") {
        username.style.border = "1px solid #5E6E66";
        name_error.innerHTML = "";
        return true;
    }
}

function emailVerify(){
    if (email.value !="") {
        email.style.border = "1px solid #5E6E66";
        email_error.innerHTML = "";
        return true;
    }
}

function passwordVerify(){
    if (password.value !="") {
        password.style.border = "1px solid #5E6E66";
        password_error.innerHTML = "";
        return true;
    }
}


</script>