<?php
    include "connect.php";
?>

<html>
    <head>
        
        <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" type="text/css" href="login.css">
        <title>My Profile</title>
        <style type="text/css">
            table{
                border-collapse: collapse;
                width: 100%;
                color: aqua;
                font-family: monospace;
                font-size: 25px;
                text-align: left;
                border: 4px solid #c36cbb;
            }
            th
            {
                background-color: #cce6ff;
                color: black;
                border: 4px solid #c36cbb;
            }
            tr:nth-child(even)
            {
                background-color: burlywood;
                color: black;
                border: 4px solid #c36cbb;
            }
            .box{
                padding-left: 1100px;
            }
            .btn{
                
                border: 3px solid #000;
                width: 100px;
                height: 30px;
                font-family: monospace;
                font-size: 20px;
                color: black;
                
            }
        </style
    </head>
    <body>
            <nav>
				<ul class="nav-links">
					<li><a class="nav-link" href="index.php">HOME</a></li>
				</ul>
			</nav>
            
            <div class="box">
                <form class="navbar-form" method="post" name="form1">
                    <input class="src-cont" type="text" name="serch" placeholder="Search books....">
                    <button type="submit" name="submit" class="btn">Enter</button>
                </form>
            </div>
        <h2>List of Books</h2>
        <?php
            
            if(isset($_POST['submit']))
            {
                $q=mysqli_query($db,"SELECT * from books where Name like '%$_POST[serch]%' ");
                if(mysqli_num_rows($q)==0)
                {
                    echo "Sorry! No book found.";
                }
                else
                {
                        echo "<table class='table table-bordered'>";
                        echo "<tr style='background-color:white;'>";
                            // table header
                        echo "<th>"; echo "ID";           echo "</th>";
                        echo "<th>"; echo "Book Name";    echo "</th>";
                        echo "<th>"; echo "Authors Name"; echo "</th>";
                        echo "<th>"; echo "Edition";      echo "</th>";
                        echo "<th>"; echo "Status";       echo "</th>";
                        echo "<th>"; echo "Quantity";     echo "</th>";
                        echo "<th>"; echo "Depertment";   echo "</th>";
                        echo "</tr>";

                    while($row=mysqli_fetch_assoc($q))
                    {
                        echo "<tr>";

                        echo "<td>"; echo $row['Bid']; echo "</td>";
                        echo "<td>"; echo $row['Name']; echo "</td>";
                        echo "<td>"; echo $row['Authors']; echo "</td>";
                        echo "<td>"; echo $row['Edition']; echo "</td>";
                        echo "<td>"; echo $row['Status']; echo "</td>";
                        echo "<td>"; echo $row['Quantity']; echo "</td>";
                        echo "<td>"; echo $row['Depertment']; echo "</td>";

                        echo "</tr>";
                    }
                    echo "</table>";
                }
        }
                //******************* no pressed********
        else
        {
            $res=mysqli_query($db,"SELECT * FROM `books`;");
        
            echo "<table class='table table-bordered'>";
            echo "<tr style='background-color:white;'>";
                // table header
            echo "<th>"; echo "ID";           echo "</th>";
            echo "<th>"; echo "Book Name";    echo "</th>";
            echo "<th>"; echo "Authors Name"; echo "</th>";
            echo "<th>"; echo "Edition";      echo "</th>";
            echo "<th>"; echo "Status";       echo "</th>";
            echo "<th>"; echo "Quantity";     echo "</th>";
            echo "<th>"; echo "Depertment";   echo "</th>";
            echo "</tr>";
        
        while($row=mysqli_fetch_assoc($res))
        {
            echo "<tr>";
            
            echo "<td>"; echo $row['Bid']; echo "</td>";
            echo "<td>"; echo $row['Name']; echo "</td>";
            echo "<td>"; echo $row['Authors']; echo "</td>";
            echo "<td>"; echo $row['Edition']; echo "</td>";
            echo "<td>"; echo $row['Status']; echo "</td>";
            echo "<td>"; echo $row['Quantity']; echo "</td>";
            echo "<td>"; echo $row['Depertment']; echo "</td>";
            
            echo "</tr>";
        }
        echo "</table>";
        }
        ?>
    </body>
</html>