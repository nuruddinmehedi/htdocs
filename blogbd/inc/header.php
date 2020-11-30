<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<title>css project 3</title>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/style.css">
<!--
Template 2031 Green Age
http://www.tooplate.com/view/2031-green-age
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:2000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

	
	
	
</head>

<body>
	<div class="header"><div class="logo"><img src="images/logo.png" alt=""><h1>website title</h1>
	<p>our website discription</p></div>
	<div class="social-link">
	<a><img src="images/fb.png" alt=""></a>
	<a><img src="images/t.png" alt=""></a>
	<a><img src="images/lin.png" alt=""></a>
	<a><img src="images/in.png" alt=""></a></div>
	</div>
	<div class="navmenu"><ul>
	    <li><a href="index.php">home</a></li>
	    <li><a href="about.php">about us</a></li>
	    <li><a href="contact.php">conact us</a></li>
	    <li><a href="help.php">help</a></li>
	    <li><a href="account.php">account</a></li>
	</ul></div>