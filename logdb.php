<?php

    $conn =mysqli_connect("localhost","root","","library");
    if(!$conn){
        echo ("Error Connection: ".mysqli_connect_error());
    }
    
    if(isset($_POST['submit']))
    {
        $user =$_POST['user'];
        $password =$_POST['password'];
        
        $sql = "select * from login where user='$user' and password='$password'";
        $result= mysqli_query($conn,$sql);
        $conn=mysqli_num_rows($result);
        
        if($conn ==0)
        {
            ?>
            <script type="text/javascript">
                alert(" Username and Password does't match!!!");
                window.location="sing.php";
            </script>
            <?php
        }
        else
        {
            $_SESSION['login_user']=$_POST['user'];
            ?>
            <script type="text/javascript">
                window.location="index.php";
            </script>
            <?php
        }
        
    }
        
?>