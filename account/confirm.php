<html>

<head>

    <title>Confirm</title>
    <link rel="stylesheet" href="confirm.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="confirm.js" defer></script>

</head>

<body>
    <h1>Type in your email and password</h1>

    <form method="POST" name="form" action="loginauth.php">
        <input class="input" type="email" placeholder="email" id="email" name="email" required>
        <input class="input" type="password" placeholder="password" name="password" required>
        <input id="submit" type="submit" value="Done">


    </form>
    <a class="hidden" id="account" href="account.php">Go to account</a>

</body>

</html>