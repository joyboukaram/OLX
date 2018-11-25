<html>

<head>

    <title>Confirm</title>
    <link rel="stylesheet" href="confirm.css">
    <script src="confirm.js" defer></script>

</head>

<body>
    <h1>Type in your email and password</h1>

    <form method="GET" name="form" action="edit_profile.php">
        <input class="input" type="email" placeholder="email" id = "email" name="email" required>
        <input class="input" type="password" placeholder="password" name="password" required>
        <input id="submit" type="submit" value="Done" >


    </form>
    <a class="hidden" id="account" href="account.php">Go to account</a>

</body>

</html>