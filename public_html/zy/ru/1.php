<?php include('header.php'); ?>

<div class="vbox wb_container" id="wb_main" style="height: 738px; background: transparent none repeat scroll left top; padding: 0 0 40px 0;">

	

<div id="wb_element_instance5" class="wb_element" style="left: 50px; top: 30px; width: 488px; height: 173px; min-width: 488px; min-height: 173px; z-index: 92;  line-height: normal;"><h1 class="wb-stl-heading1">Мыслим нестандартно</h1>
<p class="wb-stl-normal"> </p>
<p class="wb-stl-normal"> </p>
<p class="wb-stl-normal" id="p1">Более, чем десятилетний стаж в индустрии разработки ПО и Веб приложений.<br/><br/>Нас отличает высокий профессионализм, умениет мыслить свежо и находить решение для любой проблемы.</p>
</div><div id="wb_element_instance6" class="wb_element" style="left: 409px; top: 287px; width: 123px; height: 41px; min-width: 123px; min-height: 41px; z-index: 94;"><a class="wb_button" href="#" id="zz"><span>Дальше</span></a></div><div id="wb_element_instance7" class="wb_element" style="left: 620px; top: 40px; width: 249px; height: 250px; min-width: 249px; min-height: 250px; z-index: 95;"><img alt="" src="gallery/d44eb98eda54e62698f8120856ff32e5_249x250.png" style="width: 249px; height: 250px;"></div><div id="wb_element_instance8" class="wb_element" style="left: 30px; top: 370px; width: 850px; height: 20px; min-width: 850px; min-height: 20px; z-index: 96;"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 2px dashed #a6a6a6;"></div></div><div id="wb_element_instance9" class="wb_element" style="left: 52px; top: 412px; width: 250px; height: 250px; min-width: 250px; min-height: 250px; z-index: 97;"><img alt="" src="gallery/0455c1377beafb87f8acc416287cb082_250x250.png" style="width: 250px; height: 250px;"></div><div id="wb_element_instance10" class="wb_element" style="left: 471px; top: 411px; width: 520px; height: 55px; min-width: 520px; min-height: 55px; z-index: 101; line-height: normal;"><h1 class="wb-stl-heading1">Свежие идеи</h1></div><div id="wb_element_instance11" class="wb_element" style="left: 795px; top: 667px; width: 123px; height: 41px; min-width: 123px; min-height: 41px; z-index: 99;"><a class="wb_button" href="#"><span>Дальше</span></a></div>

<div id="wb_element_instance12" class="wb_element" style="left: 479px; top: 505px; width: 502px; height: 131px; min-width: 134px; min-height: 126px; z-index: 103; line-height: normal;"><h3 class="wb-stl-heading3">1. Передовые технологии разработки</h3>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal p1">Разработка с использованием технологий последнего поколения.</p>
<p class="wb-stl-normal p1">Мы сотрудничаем только с лучшими в отрасли.</p>
<p class="wb-stl-normal p1">Мы гарантируем высококвалифицированный персонал и обширную базу знаний.</p>
</div>

<div id="wb_element_instance13" class="wb_element" style="left: 479px; top: 505px; width: 502px; height: 131px; min-width: 134px; min-height: 126px; z-index: 106; line-height: normal;display:none;"><h3 class="wb-stl-heading3">2. Эффективное планирование</h3>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal p1">Эффективное планирование позволяет ускорить и удешевить проект.</p><p class="wb-stl-normal p1">Разработка и планирование в соотвествии со стандартами SEO.</p>
<p class="wb-stl-normal p1">Наши клиенты могут видеть, на что именно идут их деньги.</p>
</div>

<div id="wb_element_instance14" class="wb_element" style="left: 479px; top: 505px; width: 502px; height: 131px; min-width: 134px; min-height: 126px; z-index: 107; line-height: normal; display:none;"><h3 class="wb-stl-heading3">3. Креативность.</h3>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal p1">Мы верим в нестандартный и креативный подход к работе..</p>
<p class="wb-stl-normal p1">Каждый наш проект выполняется с теплотой и душой.</p>
<p class="wb-stl-normal p1">Наш девиз -  никкогда не будь скучным!</p>
</div><div id="wb_element_instance15" class="wb_element" style="left: 0px; top: 758px; min-width: 0px; min-height: 0px; z-index: 9000; width: 100%;">

			<?php

				global $show_comments;

				if (isset($show_comments) && $show_comments) {

					renderComments(1);

			?>

			<script type="text/javascript">

				$(function() {

					var block = $("#wb_element_instance15");

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

					$("#wb_element_instance15").hide();

				});

			</script>

			<?php

				}

			?>

  </div></div>
<?php include('footer.html'); ?>
</div></body>
</html>