<?php
    //include "connect.php";
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" type="text/css" href="login.css">
        
		<title>Sign In</title>
	</head>
    <body>
        <nav>
				<ul class="nav-links">
					<li><a class="nav-link" href="index.php">HOME</a></li>
				</ul>
			</nav>
        <div class="signin">
        <form name="log" action="logdb.php" method="post">
            <h2>Login</h2>
            <input type="text"     name="user" placeholder="Enter Username">
            <input type="password" name="password" placeholder="Password">
            <input class="button" type="submit" name="submit" value="LOG IN">
        </form>
            <a class="b1" href="#">Forgot Passwrod ?</a>
            <a class="b2" href="registor.php">Create An Account</a>
        </div>

    </body>
</html>