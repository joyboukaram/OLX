<?php
require ("../connect.php");
session_start();
?>

<html>

    <head>

<link rel = "stylesheet" href = "signin.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    
    <body>
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="loginquery.php" method="POST">
				<span class="login100-form-title p-b-37">
					Sign In
				</span><br><br>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter name">
					<input class="input100" type="text" name="name" placeholder="name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

                <br> <br>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign In
                    </button>
                    
                </div>
                
              
				
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>

</body>
</html>