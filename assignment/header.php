<?php
session_start();
require_once './includes/dbconnect.php';
?>

<head>
		<title>Ed's Electronics</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="electronics.css" />
	</head>

	<body>
		<header>
			<h1>Ed's Electronics</h1>


			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Products
					<ul>
						<li><a href="tv.php">TVs</a></li>
						<li><a href="computer.php">Computers</a></li>
						<li><a href="phone.php">Phones</a></li>
						<li><a href="gaming.php">Gaming</a></li>
					</ul>
				</li>

			</ul>

			<address>
			
			<div> <a href="login.php">Admin login</a>  <a href="logout.php">Logout</a> </div>
				<p>We are open 9-5, 7 days a week. Call us on
					<strong>01604 11111</strong>
				</p>
			</address>



		</header>
		<section></section>