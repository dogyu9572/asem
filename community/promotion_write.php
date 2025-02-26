<?php $gNum="04"; $sNum="01"; $gName="Community"; $sName="Promotion"; ?>
<?php include("../pub/inc/_dtd.php") ?>
<?php include("../pub/inc/_header.php") ?>
<?php include("../pub/inc/_aside.php") ?>
<div id="mainContent" class="container g<?=$gNum?> s<?=$sNum?>">
	
	<div class="inner">
		<div class="stit">Create Promotion <a href="/community/promotion.php" class="btn_back">Back</a></div>
		<div class="board_write bdt">
			<table>
				<tbody>
					<tr>
						<th>Company Name<span>*</span></th>
						<td><input type="text" class="text w1" placeholder="Company Name"></td>
					</tr>
					<tr>
						<th>Author<span>*</span></th>
						<td><input type="text" class="text w1" placeholder="Author"></td>
					</tr>
					<tr>
						<th>Email<span>*</span></th>
						<td><input type="text" class="text w1" placeholder="Email"></td>
					</tr>
					<tr>
						<th>Subject<span>*</span></th>
						<td><input type="text" class="text w1" placeholder="Subject"></td>
					</tr>
					<tr>
						<th>Content<span>*</span></th>
						<td><textarea name="" id="" cols="30" rows="10" class="text w100p" placeholder="Content"></textarea></td>
					</tr>
					<tr>
						<th>Password<span>*</span><p>Please set a password to use when <br class="pc_vw">editing or deleting this post later.</p></th>
						<td><input type="password" class="text w1" placeholder="Password"></td>
					</tr>
					<tr>
						<th>reCAPCHA<span>*</span></th>
						<td><img src="/pub/images/img_captcha.png" alt="임시 캡챠 이미지"></td>
					</tr>
				</tbody>
			</table>
			<table class="terms">
				<tbody>
					<tr>
						<td>
							<div class="flex">
								<label class="check"><input type="checkbox"><i></i>[Required] I agree to the Privacy Policy.</label>
								<button type="submit" class="btn_write">WRITE</button>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

</div> <!-- //container -->
<?php include("../pub/inc/_footer.php") ?>