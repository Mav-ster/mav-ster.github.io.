<?php 
	if(isset($_GET["id"]) === false)
	{
		header("location: final.php?id=main.php");
		exit;  //GET exectued if url if does not exist and loads main page with pg1.php material. -->
	}
?> 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mavi's Artwalk</title>
	<link rel="stylesheet" type="text/css" href="final.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Joti+One&display=swap" rel="stylesheet">
</head>

<body>
	<header><h1>Artwalk!</h1></header>
<div id="wrapper">
	<nav>
		<ul>
			<li><a class="extras" href="../index.html" title="HOME">HOME</a></li>
			<li><a  class="extras" href="#commissions" title="commission">Contact</a></li>
			<div class="dropdown">
				<button class="dropbtn">
						<li>Artwalk!</li>
				</button>
				<div class="dropdown-content">
					<li><a href="?id=main.php" title="main">Hello!</a></li>
					<li><a href="?id=pg1.php" title="fanart">Lumity fanart</a></li>
					<li><a  href="?id=pg2.php" title="oc">OC drawing</a></li>
					<li><a  href="?id=pg3.php" title="traditional">Traditional Art</a></li>
					<li><a  href="?id=pg4.php" title="charcoal">Charcoal Art</a></li>
					<li><a  href="?id=pg5.php" title="gallary">Art Gallery</a></li>
				</div>
			</div>
		</ul>
	</nav>
	<main>
		<?php include($_GET["id"]); ?>
	</main>
	</div>
	<br>
	<h3 id="commissions">Contact for Commission!</h3>
	<br>
	<div id="commission">
		<form action="thanks.php" method="post">
			<ul>
				<li><label for="fname">First Name:<sup>*</sup></label><br>
				<input
					   type="text"
					   name="fname"
					   size="15"
					   required
					   maxlength="60">
				</li>
				<li><label for="lname">Last Name:<sup>*</sup></label><br>
				<input
					   type="text"
					   name="lname"
					   size="15"
					   required
					   maxlength="60">
				</li>
				<li><label for="email">Email:<sup>*</sup></label><br>
				<input
					   type="email"
					   name="email"
					   size="30"
					   required
					   maxlength="100">
				</li>
				<li><label for="art">Art Medium:<sup>*</sup></label><br>
					<input type="radio" name="art" value="Digital"><label for="art">Digital</label>
					<input type="radio" name="art" value="charcoal"><label for="art">Charcoal</label>
					<input type="radio" name="art" value="pastel"><label for="art">Pastel</label>
				</li>
				<li><label for="idea">Idea:<sup>*</sup></label><br>
				<textarea 
						  name="idea" 
						  rows="15" 
						  cols="45"
						  required
						  placeholder="Put Idea Here!"
						  ></textarea>
				</li>
			</ul>
			<p><sup>*</sup>feilds required</p>
		<input  type="reset" name="cancel" value="Cancel">
		<input  type="submit" name="done" value="Submit">
			<br><br>
		<img id="kitty" src="images/cat.gif" alt="kitty">
		</form>
	</div>
	<br>
	<hr>
	<footer><a href="https://giselyyyy.tumblr.com/" title="tumblr" target="_blank">Mavi Reyes 2026</a></footer>
</body>
</html>
