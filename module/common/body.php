<?php
if (!defined("SYSTEM_PATH"))
	die("Bad request");

if (hasRegister())
   echo "<script>const NAME = '" . getCurrentName() ."';</script>";
else redirect("involve");
 ?>
<?php require_once MODULE_PATH . "common/header.php"; ?>
	<div class="wrapper">
		
	<div id="msg-content-box">
<!--		<div class="msg-content me">-->
<!--			<div class="avt"></div>-->
<!--			<div class="msg-text">-->
<!--				hahahah-->
<!--			</div>-->
<!--		</div>-->
<!--		<div class="clear"></div>-->
<!--		<div class="msg-content stranger">-->
<!---->
<!--			<div class="name">-->
<!--				<strong>Nguyễn Văn A</strong>, 11:20PM-->
<!--			</div>-->
<!--			<div class="avt"></div>-->
<!--			<div class="msg-text">-->
<!--				fdsafdsa đừng gọi tên nhau khi gió mưa fdsafdsa đừng gọi tên nhau khi gió mưa fdsafdsa đừng gọi tên nhau khi gió mưa fdsafdsa đừng gọi tên nhau khi gió mưa -->
<!--			</div>-->
<!--		</div>-->
<!--		<div class="clear"></div>-->
<!--		<div class="msg-content me">-->
<!--			<div class="avt"></div>-->
<!--			<div class="msg-text">-->
<!--				hihi <br> aha-->
<!--				hihi <br> aha-->
<!--				hihi <br> aha-->
<!--			</div>-->
<!--		</div>-->
	</div>
	<div class="clear" style="height: 100px"></div>
	<div id="type-msg-wrapper">
		<div id="msg-input-box">
			<input id="msg-box">
		</div>
		<div class="msg-button">
			<button id="btn-send">Send</button>
		</div>
	</div>
	</div>

<?php require_once MODULE_PATH . 'common/footer.php'; ?>