<html>

<head>
    <title>My Account</title>
    <link rel="stylesheet" href="edit_profile.css">

</head>

<body>

    <h1>Edit your Information</h1>
    
    <form method="POST" action="account.php">
            <input class="input" type="text" placeholder="first name" name="first_name">
            <input class="input" type="text" placeholder="last name" name="last_name">
            <input class="input" type="text" placeholder="phone" name="phone number">
            <select class="input" required>
                    <option class="gender" value="male">Male</option>
                    <option class="gender" value="female">Female</option>
                    <option class="gender" value="other">Other</option>
                </select>
            <input class="input" type="email" placeholder="email">
            <input class="input" type="text" placeholder="billing information/card number">
            <input class="input" type="text" placeholder="security code">
            <input class="input center" type="date" placeholder="expiry date">
            <input class="input" type="text" placeholder="shipping address">
            <p>Date of birth</p>
            <input class="input center" type="date">
            
                <input id="submit" type="submit" value="Done">
            
    </form>
</body>

</html>