<?php
$p1 = $p2 = $p3 = $p4 = "navlink";
if(isset($_GET['p']))
{
	switch($_GET['p'])
	{
		case "routing":
			$p2 = "currentpagelink";
			break;
		case "circuits":
			$p3 = "currentpagelink";
			break;
		case "pictures":
			$p4 = "currentpagelink";
			break;
		default:
			$p1 = "currentpagelink";
			break;
	}
}
else
{
	$p1 = "currentpagelink";
}
?>
	<div id="framecontentLeft">
		<div class="innertube">
		<br />
			<ul id="navlist">
				<li><a class="<?php echo $p1 ?>" id="topnavlink" href="./">Home</a></li>
				<li><a class="<?php echo $p2 ?>" href="./?p=routing">Routing & Switching</a></li>
				<li><a class="<?php echo $p3 ?>" href="./?p=circuits">Circuits</a></li>
				<li><a class="<?php echo $p4 ?>" id="bottomnavlink" href="./?p=pictures">Pictures</a></li>
			</ul>
		</div>
	</div>