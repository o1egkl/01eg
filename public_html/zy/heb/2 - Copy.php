<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>About me</title>
	<base href="http://01eg.comyr.com/" />
	<meta name="viewport" content="width=1005" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
    	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
<link href="css/site.css" rel="stylesheet" type="text/css">
</head>


<body><div class="root" style="width: 1003px; height: 808px;">
<?php include('header.html'); ?>

<div class="vbox wb_container" id="wb_main" style="height: 588px; background: transparent none repeat scroll left top; padding: 0 0 40px 0;">

	



 
 <div id="wb_element_instance27" class="wb_element" style="left: 660px; top: 105px; width: 290px; height: 29px; min-width: 290px; min-height: 29px; z-index: 64;  line-height: normal;"><h2 class="wb-stl-heading2">My Recent Projects</h2>
</div>
<div id="wb_element_instance28" class="wb_element" style="left: 30px; top: 370px; width: 500px; height: 218px; min-width: 500px; min-height: 218px; z-index: 61;  line-height: normal;">

<h2 class="wb-stl-heading2">Professional in every step</h2>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br>
Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>
</div>
<div id="wb_element_instance22" class="wb_element" style="left: 30px; top: 40px; width: 490px; height: 239px; min-width: 490px; min-height: 239px; z-index: 57;  line-height: normal;"><h1 class="wb-stl-heading1">About me</h1>

<h2 class="wb-stl-heading2"> </h2>

<h2 class="wb-stl-heading2">More than 10 years of WEB development</h2>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>
</div>
<div id="wb_element_instance29" class="wb_element" style="left: 530px; top: 135px; width: 440px; height: 365px; z-index: 57;"><div style="background: #a5de88; border: 5px solid #C0C0C0; opacity: 0.95; border-radius: 10px 10px 10px 10px; -moz-border-radius: 10px 10px 10px 10px; -webkit-border-radius: 10px 10px 10px 10px; width: 430px; height: 365px;"><?php include('slides.html'); ?>
<div  style="margin-top:315px; text-align:center;padding:5px 10px;">
   <div id="arrows"><a href="" id="but1" style="float:left;"><img src="img/a-down33.jpg" style="width=:28px; height:28px;" title="Down"></a>&nbsp;<a href="" id="but2"><img src="img/a-up33.jpg" style="width=:28px; height:28px;" Title="Up" ></a></div>
</div></div></div>

<div id="wb_element_instance30" class="wb_element" style="left: 0px; top: 608px; min-width: 0px; min-height: 0px; z-index: 9000; width: 100%;">

			<?php

				global $show_comments;

				if (isset($show_comments) && $show_comments) {

					renderComments(2);

			?>

			<script type="text/javascript">

				$(function() {

					var block = $("#wb_element_instance30");

					var comments = block.children(".wb_comments").eq(0);

					var contentBlock = $("#wb_main");

					contentBlock.height(contentBlock.height() + comments.height());

				});

			</script>

			<?php

				} else {

			?>

			<script type="text/javascript">

				$(function() {

					$("#wb_element_instance30").hide();

				});

			</script>

			<?php

				}

			?>

			</div></div>
<?php include('footer.html'); ?>
</div></body>
</html>