<!DOCTYPE html>
<html>
<head>
<title>Skaff - Shirt Site <?php if ($title) echo " - " . $title; ?> </title>
<link rel="stylesheet" href="style.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body <?php if ($bodyclass) echo ' class = "' . $bodyclass . '"' ?>>



<div id="top" class="row">
	<form id="search" action="">
		<label class="screen-reader-text" for="searchtext">Search for:</label>
		<input type="text" class="text" placeholder="Search..." value="" />
		<input type="submit" class="submit" value="Search" />
	</form>
	<div id="cart">
		<p>3 Items - $45</p>
		<p><a href="#">View Cart</a></p>
	</div>
</div><!-- top -->




<div id="header" class="row">
	<h1 id="logo"><a href="index.php">Big Logo</a></h1>
	<nav id="menu">
		<h4 class="toggle">Menu</h4>
		<ul class="dropmenu target">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="#">Shop</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>
</div><!-- header -->

<main>