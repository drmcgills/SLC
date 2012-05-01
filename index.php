<html>
	<!-- 
		Author Name + Class + Section: John Knutson CSci 150.32
		Web Page Description: CSS based frame page
	-->
	<head>
		<title>John Knutson SLC</title>
		<link rel="stylesheet" type="text/css" href="styles.css" />
	</head>
<body>
<script src="http://john.mark-knutson.com/jquery-1.7.2.min.js" type="text/javascript"></script>
<?php include("functions.php"); ?>
<?php include("sidelinks.php"); ?>
<?php include("header.php"); ?>
<?php
if(isset($_GET['p']))
{
	switch($_GET['p'])
	{
		case "routing":
			include("routing.php");
			break;
		case "circuits":
			include("circuits.php");
			break;
		case "pictures":
			include("pictures.php");
			break;
		default:
			include("main.php");
			break;
	}
}
else
{
	include("main.php");
}
?>
</body>
</html>
