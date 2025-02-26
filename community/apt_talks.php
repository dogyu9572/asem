<?php $gNum="04"; $sNum="02"; $gName="Community"; $sName="APT talks"; ?>
<?php include("../pub/inc/_dtd.php") ?>
<?php include("../pub/inc/_header.php") ?>
<?php include("../pub/inc/_aside.php") ?>
<div id="mainContent" class="container g<?=$gNum?> s<?=$sNum?>">
	
	<div class="inner">
		<div class="apt_talks_start">
			<div class="tit">Limited Access Documents</div>
			<p>You must enter a password to access the list.</p>
			<dl>
				<dt>Password</dt>
				<dd><input type="text" class="text" placeholder="Password"></dd>
			</dl>
			<div class="captcha">
				<img src="/pub/images/img_captcha.png" alt="임시 캡챠 이미지">
			</div>

			<div class="btns">
				<button class="btn" onclick="location.href='/community/apt_talks_list.php'">VERIFY</button>
			</div>
		</div>
	</div>

</div> <!-- //container -->
<?php include("../pub/inc/_footer.php") ?>