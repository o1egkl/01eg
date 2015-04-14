<?php
		$cc = explode('/',$_SERVER['REQUEST_URI']);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?=str_replace('-',' ',$cc[1])?></title>
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


<body>
<div class="root" style="width: 1003px;">
<div class="vbox wb_container" id="wb_header" style="height: 120px; background: transparent none repeat-x scroll left top;">
<div id="wb_element_instance17" class="wb_element" style="left: 530px; top: 75px; width: 445px; height: 50px; min-width: 358px; min-height: 50px; z-index: 338;">
<script type="text/javascript">
				$(function() {
					$("#wb_element_instance17").children("ul").children().each(function() {
						if ($(this).children("ul").size() == 0) return;
						$(this).hover(function() {
							$(this).children("ul").css({display: "block"});
						}, function() {
							$(this).children("ul").css({display: "none"});
						});
					});
				});
</script>
<ul class="hmenu" id="hmenu">
<li><a href="http://01eg.comyr.com/Home/" target="_self" title="Home">Home</a></li>
<li ><a href="http://01eg.comyr.com/About-us/" target="_self" title="About us">About us</a></li>
<li><a href="http://01eg.comyr.com/Contacts/" target="_self" title="Contacts">Contacts</a></li>
</ul>
<img src="img/flag_eng.jpg"  style="margin-top:-111px; float:right;margin-right:-4px;" id="flag1"/>
<img src="img/flag_rus_noerrow.jpg" style="margin-top:-90px; float:right;margin-right:-4px;display:none;" id="flag2"/>
<img src="img/flag_heb_noerrow.jpg" style="margin-top:-70px; float:right;margin-right:-4px;display:none;" id="flag3"/>
</div>
<script type="text/javascript">
	findActive(window.location.href.toString().split(window.location.host)[1].replace(/\//g,''));
</script>
<div id="wb_element_instance18" class="wb_element" style="left: 38px; top: 29px; width: 242px; height: 55px; min-width: 242px; min-height: 55px; z-index: 139;  line-height: normal;"><h4 class="wb-stl-pagetitle" style="text-align: center;">Oleg Klimov</h4>

<h5 class="wb-stl-subtitle" style="text-align: center;">WEB, DB & SEO solutions</h5>
</div>
</div>

