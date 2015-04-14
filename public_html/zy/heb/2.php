<?php include('header.php'); ?>

<div class="vbox wb_container" id="wb_main" style="height: 588px; background: transparent none repeat scroll left top; padding: 0 0 40px 0;">

	



 
 <div id="wb_element_instance27" class="wb_element" style="right: 670px; top: 75px; width: 250px; height: 29px; min-width: 290px; min-height: 29px; z-index: 64;  line-height: normal;">
   <h2 class="wb-stl-heading2">פרוייקטים אחרונים</h2>
</div>
<div id="wb_element_instance28" class="wb_element" style="right: 30px; top: 270px; width: 500px; height: 286px; min-width: 500px; min-height: 218px; z-index: 61; line-height: normal;">

<h2 class="wb-stl-heading2">חוות דעת:</h2>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal heb1" style=" font-style:italic;height:25px;">&quot;Oleg is easily one of the best people we had&quot; </p>
<p class="wb-stl-normal heb1" style="margin-left: 160px;">Reznik Valentin, CTO, QBSystem.</p>
<p class="wb-stl-normal">&nbsp;</p>

<p class="wb-stl-normal  heb1" style=" font-style:italic;height:25px;">&quot;Oleg is one of the most knowledgeable persons I met&quot;</p>
<p class="wb-stl-normal heb1" style="margin-left: 160px;">Gal Gur-Arie, System  architect, Algosec.</p>
<p class="wb-stl-normal">&nbsp;</p>
<p class="wb-stl-normal  heb1" style=" font-style:italic;height:25px;">&quot;Thanks to Oleg we have now great new site&quot;</p>
<p class="wb-stl-normal heb1" style="margin-left: 160px;">Jacob Meerson, CEO, Travellux </p>
<p class="wb-stl-normal">&nbsp;</p>
<p class="wb-stl-normal heb1" style=" font-style:italic;height:25px;">&quot;Oleg always has elegant solution to any problem we encounter&quot;</p>
<p class="wb-stl-normal heb1" style="margin-left: 160px;">Gonen Lifshitz. PM, Apply-Tech </p>
</div>
<div id="wb_element_instance22" class="wb_element" style="right: 30px; top: 30px; width: 490px; height: 239px; min-width: 490px; min-height: 239px; z-index: 57; line-height: normal;"><h1 class="wb-stl-heading1">מי אנחנו</h1>

<h2 class="wb-stl-heading2"> </h2>

<h2 class="wb-stl-heading2">יותר מ -10 שנים בתוכנות ויישומי אינטרנט.</h2>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal" style="font:14px/20px Arial,Helvetica,sans-serif;">יותר מעשר שנים בתפקידים שונים בתעשית אינטרנט ותוכנה נתנו לנו לא רק את<br/>ההזדמנות לרכוש את הכישורים הדרושים, אלא גם נסיון להתמודד בהצלחה עם כל בעיה.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>
</div>
<div id="wb_element_instance29" class="wb_element" style="right: 550px; top: 115px; width: 440px; height: 425px; z-index: 57;"><div style="background: #a5de88; border: 5px solid #C0C0C0; opacity: 0.95; border-radius: 10px 10px 10px 10px; -moz-border-radius: 10px 10px 10px 10px; -webkit-border-radius: 10px 10px 10px 10px; width: 430px; height: 425px;"><?php include('slides.html'); ?>


</div></div>

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