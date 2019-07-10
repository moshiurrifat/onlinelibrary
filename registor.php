<?php
    include "connect.php";

?>


<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" type="text/css" href="login.css">
        
		<title>Registration</title>
	</head>
    <body>
        <nav>
				<ul class="nav-links">
					<li><a class="nav-link" href="index.php">HOME</a></li>
				</ul>
			</nav>
        <div class="signin">
        <form name="reg" action="" method="post">
            <h2>Login</h2>
            <input type="text" name="first" placeholder="First Name" required>
            <input type="text" name="last" placeholder="Last Name" required>
            <input type="text" name="user" placeholder="Enter Username" required>
            <input type="text" name="id" placeholder="ID Number" required>
            <input type="password" name="password" placeholder="Password" required>
            <input class="button" type="submit" name="submit" value="SIGN UP">
        </form>
        </div>
        
        <?php
             if(isset($_POST['submit'])){
                 $count=0;
                 $sql="SELECT user from login";
                 $res=mysqli_query($db,$sql);
                 
                 while($row=mysqli_fetch_assoc($res))
                 {
                     if($row['user']==$_POST['user'])
                     {
                         $count=$count+1;
                     }
                 }
                 if($count==0){
                 mysqli_query($db,"INSERT INTO `login` VALUES('$_POST[first]','$_POST[last]','$_POST[user]','$_POST[id]','$_POST[password]');");
        ?>
            <script type="text/javascript">
                alert("Registration Successfully");
            </script>
        <?php
                 
            }
                 else
                 {
                     ?>
                     <script type="text/javascript">
                            alert("The Username already Exist");
                    </script>
                    <?php
                 }
            }
        ?>
        
    </body>
</html>