<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="login.css">
    
</head>

<body>
    <div id="box">
        <h1> Sign in to your Account</h1>
        <div id="both">
            <img src="../images/phone.png">
            <div id="border">
                <form method="POST" action="loginauth.php">
                    <input class="input" name="email" type="email" placeholder="email">
                    <input class="input" name="password" type="password" placeholder="password">
                    <div id="submitBorder">
                        <input id="submit" type="submit" value="Sign in">
                    </div>
                </form>
                <p id="noAccount">Don't have an account?
                    <br> Register <a href="../register/register.php">here</a></p>
            </div>
        </div>
    </div>
</body>

</html>