<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thanks!</title>
	<style>
		body{
			background-color:#363233;
			color:white;
			font-size: 1.5em;
			border: 2em #FFA8AA groove;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-flow: column nowrap;
			min-height: 100vh;
}
	h2,p{
			text-align: center;
		}
	</style>
</head>

<body>
	<h2>Thanks for submitting a commision request!</h2>
	<p>Thank you, <strong><?php echo $_POST["fname"] . " " . $_POST["lname"]; ?> </strong>. I will contact you about your <strong><?php echo $_POST["art"]; ?></strong> piece soon for more information! can't wait to create something awesome with you! :D</p>
	
</body>
</html>