<html>

<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="register.css">
    <script type="text/javascript" src="register.js" defer></script>
</head>

<body>

    <h1> Register</h1>



    <form method="POST" action="signup.php">
        <input class="input capital" type="text" placeholder="first name" name="first_name" required>
        <input class="input capital" type="text" placeholder="last name" name="last_name" required>
        <input class="input" type="email" placeholder="email" name="email" required>
        <input class="input" type="password" placeholder="password" name="password" required>
        <select class="input" name="gender" required>
            <option class="gender" value="0">Male</option>
            <option class="gender" value="1">Female</option>
        </select>
        <input class="input capital" type="text" placeholder="Address" name="address" required>
        <input id="dob" class="input" type="date" name="birthdate" required>
        <div class="image-upload">
            <input class="in" id="bla" type='file' name="files[]" multiple onchange="readURL(this);" accept="image/*"
                required>
            <br> <img class="in" id="blah" src="#" alt="your image" />
        </div>
        <div id="submitBorder">
            <input id="submit" type="submit" value="Sign up">
        </div>
    </form>
    <p id="have_account">Already have an account?
        <br> Log in <a href="../login/login.php">here</a></p>

    <a><input type="image" id="back" src="../images/back_button.png"></a>
    <a id="goToIndex" href="../index.php">Go back to homepage</a>
</body>



</html>