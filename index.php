<?php
    include "logdb.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link
			href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="./style.css" />
		<title>UAP Library</title>
	</head>
	<body>
		<header>
			<div class="logo-container">
				<img src="./img/logo.png" width="80" height="80" alt="logo" />
				<h4 class="logo">UAP LIBRARY</h4>
			</div>
			<nav>
				<ul class="nav-links">
					<li><a class="nav-link" href="#">HOME</a></li>
					<li><a class="nav-link" href="sing.php">Log In</a></li>
					<li><a class="nav-link" href="registor.php">Registor</a></li>
				</ul>
			</nav>
		</header>

		<main>
			<section class="presentation">
				<div class="introduction">
					<div class="intro-text">
						<h1>UAP LIBRARY</h1>
						<p>
							Knowladge is power !!
						</p>
					</div>
					<div class="cta">
                        <a href="books.php">
                        <button class="cta-select">Search Book</button>
                        </a>
						<a href="sing.php">
                        <button class="cta-add">Add Book</button>
                        </a>
					</div>
				</div>
				<div class="cover">
					<img src="./img/book.png" alt="matebook" />
				</div>
			</section>
		</main>
	</body>
	</body>
</html>