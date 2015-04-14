<?php include('header.php'); ?>

<div class="vbox wb_container" id="wb_main" style="height: 480px; background: transparent none repeat scroll left top; padding: 0 0 40px 0;">

<div id="wb_element_instance37" class="wb_element" style="left: 30px; top: 10px; width: 890px; height: 143px; min-width: 890px; min-height: 123px; z-index: 45;  line-height: normal;">
<h1 class="wb-stl-heading1">Обратная связь</h1>
<p class="wb-stl-normal">&nbsp;</p>
<h3 class="wb-stl-heading3">Email:<a href="mailto:o1egkl@gmail.com"> o1egkl@gmail.com</a></h3>
<p class="wb-stl-normal"> </p>	
<h3 class="wb-stl-heading3">Тел: +972-54-7773015</h3>
<p class="wb-stl-normal">&nbsp;</p>
<h2 class="wb-stl-heading2">Либо заполните форму ниже</h2>
</div><div id="wb_element_instance38" class="wb_element" style="left: 30px; top: 280px; width: 479px; height: 200px; min-width: 479px; min-height: 200px; z-index: 46;"><form class="wb_form" method="post"><input type="hidden" name="wb_form_id" value="a2443e76"><textarea name="message" rows="3" cols="20" class="hpc"></textarea><table><tr><th class="wb-stl-normal">Имя&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Name"><input type="text" value="" style="width: 335.4px;" name="wb_input_0"></td></tr><tr><th class="wb-stl-normal">E-mail&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="E-mail"><input type="text" value="" style="width: 335.4px;" name="wb_input_1"></td></tr><tr>
        <th class="wb-stl-normal" style="height: 1%;">Текст<br/>Сообщения&nbsp;&nbsp;</th><td style="height: 1%;"><input type="hidden" name="wb_input_2" value="Message"><textarea rows="3" cols="20" style="width: 335.4px; height: 70.4px;" name="wb_input_2"></textarea></td></tr><tr><td colspan="2" style="height: 20px;"><button type="submit" class="btn">Отправить</button></td></tr></table></form><script type="text/javascript">
			var formValues = <?php echo json_encode($_POST); ?>;
			var formErrors = <?php global $formErrors; echo json_encode($formErrors); ?>;
			wb_form_validateForm("a2443e76", formValues, formErrors);
			<?php global $wb_form_send_state; if (isset($wb_form_send_state) && $wb_form_send_state) { ?>
				setTimeout(function() {
					alert("<?php echo addcslashes($wb_form_send_state, "\\'\"&\n\r\0\t<>"); ?>");
				}, 1);
			<?php } ?>	
			</script></div><div id="wb_element_instance39" class="wb_element" style="left: 30px; top: 232px; width: 213px; height: 29px; min-width: 103px; min-height: 29px; z-index: 48;  line-height: normal;"><h2 class="wb-stl-heading2">Письмо</h2></div><div id="wb_element_instance40" class="wb_element" style="left: 30px; top: 190px; width: 931px; height: 24px; min-width: 931px; min-height: 24px; z-index: 98;"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 2px dashed #a6a6a6;"></div></div><div id="wb_element_instance41" class="wb_element" style="left: 0px; top: 500px; min-width: 0px; min-height: 0px; z-index: 9000; width: 100%;">

			<?php

				global $show_comments;

				if (isset($show_comments) && $show_comments) {

					renderComments(3);

			?>

			<script type="text/javascript">

				$(function() {

					var block = $("#wb_element_instance41");

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

					$("#wb_element_instance41").hide();

				});

			</script>

			<?php

				}

			?>

			</div></div>
<?php include('footer.html'); ?>
</div></body>
</html>