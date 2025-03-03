<?php $gNum="03"; $sNum="01"; $gName="News"; $sName="Notice"; ?>
<?php include("../pub/inc/_dtd.php") ?>
<?php include("../pub/inc/_header.php") ?>
<?php include("../pub/inc/_aside.php") ?>
<div id="mainContent" class="container g<?=$gNum?> s<?=$sNum?>">
	
	<div class="inner">

		<div class="board_view">
			<div class="tit">It’s the space where the title goes in. It’s the space where the title goes in. It’s the space where the title goes in. It’s the space where the title goes in.</div>
			<ul class="info">
				<li class="date">2024.01.01</li>
				<li class="writer">admin</li>
			</ul>
			<div class="con">
				<img src="/pub/images/img_sample.jpg" alt="images"><br>
				<br>
				The space where the content will be located. The space where the content will be located.<br>
				The space where the content will be located. The space where the content will be located.<br>
				The space where the content will be located. The space where the content will be located.<br>
				The space where the content will be located. The space where the content will be located.<br>
				The space where the content will be located. The space where the content will be located.<br>
				The space where the content will be located. The space where the content will be located.<br>
				The space where the content will be located. The space where the content will be located.<br>
				The space where the content will be located. The space where the content will be located.
			</div>
			<div class="file">
				<a href="#this">Attachment.pdf</a>
			</div>
		</div>

		<div class="comments">
			<div class="tt">Comments</div>
			<div class="write_box">
				<div class="textarea">
					<textarea name="" class="text content" id="content" cols="30" rows="4" maxlength="1000" placeholder="Comment"></textarea>
					<span class="counter" id="counter">###</span>
				</div>
				<div class="captcha">
					<div class="password"><input type="text" class="text" placeholder="Password"></div>
					<img src="/pub/images/img_captcha.png" alt="임시 캡챠 이미지">
				</div>
				<button type="button" class="btn">POST COMMENT</button>
			</div>

			<div class="list">

				<div class="box">
					<div class="flex">
						<div class="imgfit"><img src="/pub/images/icon_human.svg" alt="image"></div>
						<div class="txt">
							<div class="tt">The space where the content will be located.</div>
							<div class="co_info">
								<div class="date">2025.01.01</div>
								<button class="btn_re">Reply</button>
								<button class="btn_del" onclick="openPop('popDelete')">Delete</button>
							</div>
						</div>
					</div>
					<div class="rere_list">
						<div class="box">
							<div class="flex">
								<div class="imgfit"><img src="/pub/images/icon_human.svg" alt="image"></div>
								<div class="txt">
									<div class="tt">The space where the content will be located.</div>
									<div class="co_info">
										<div class="date">2025.01.01</div>
										<button class="btn_del" onclick="openPop('popDelete')">Delete</button>
									</div>
								</div>
							</div>
						</div>
						<div class="box">
							<div class="flex">
								<div class="imgfit"><img src="/pub/images/icon_human.svg" alt="image"></div>
								<div class="txt">
									<div class="tt">The space where the content will be located.</div>
									<div class="co_info">
										<div class="date">2025.01.01</div>
										<button class="btn_del" onclick="openPop('popDelete')">Delete</button>
									</div>
								</div>
							</div>
						</div>
						<div class="write_box">
							<div class="textarea">
								<textarea name="" class="text content" id="content" cols="30" rows="4" maxlength="1000" placeholder="Comment"></textarea>
								<span class="counter" id="counter">###</span>
							</div>
							<div class="captcha">
								<div class="password"><input type="text" class="text" placeholder="Password"></div>
								<img src="/pub/images/img_captcha.png" alt="임시 캡챠 이미지">
							</div>
							<button type="button" class="btn">POST COMMENT</button>
						</div>
					</div>
				</div>

				<div class="box">
					<div class="flex">
						<div class="imgfit"><img src="/pub/images/icon_human.svg" alt="image"></div>
						<div class="txt">
							<div class="tt">The space where the content will be located.</div>
							<div class="co_info">
								<div class="date">2025.01.01</div>
								<button class="btn_re">Reply</button>
								<button class="btn_del" onclick="openPop('popDelete')">Delete</button>
							</div>
						</div>
					</div>
					<div class="rere_list">
						<div class="write_box">
							<div class="textarea">
								<textarea name="" class="text content" id="content" cols="30" rows="4" maxlength="1000" placeholder="Comment"></textarea>
								<span class="counter" id="counter">###</span>
							</div>
							<div class="captcha">
								<div class="password"><input type="text" class="text" placeholder="Password"></div>
								<img src="/pub/images/img_captcha.png" alt="임시 캡챠 이미지">
							</div>
							<button type="button" class="btn">POST COMMENT</button>
						</div>
					</div>
				</div>

				<div class="box">
					<div class="flex">
						<div class="imgfit"><img src="/pub/images/icon_human.svg" alt="image"></div>
						<div class="txt">
							<div class="tt">The space where the content will be located.</div>
							<div class="co_info">
								<div class="date">2025.01.01</div>
								<button class="btn_re">Reply</button>
								<button class="btn_del" onclick="openPop('popDelete')">Delete</button>
							</div>
						</div>
					</div>
					<div class="rere_list">
						<div class="write_box">
							<div class="textarea">
								<textarea name="" class="text content" id="content" cols="30" rows="4" maxlength="1000" placeholder="Comment"></textarea>
								<span class="counter" id="counter">###</span>
							</div>
							<div class="captcha">
								<div class="password"><input type="text" class="text" placeholder="Password"></div>
								<img src="/pub/images/img_captcha.png" alt="임시 캡챠 이미지">
							</div>
							<button type="button" class="btn">POST COMMENT</button>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="btns">
			<a href="/news/notice.php" class="btn_list">LIST</a>
		</div>

	</div>

</div> <!-- //container -->

<div class="popup" id="popDelete">
	<div class="dm" onclick="closePop('popDelete')"></div>
	<div class="inbox">
		<button type="button" class="btn_close" onclick="closePop('popDelete')">닫기</button>
		<div class="apt_talks_start">
			<div class="tit">Delete Comment</div>
			<p>You must enter a password to delete this comment.</p>
			<dl>
				<dt>Password</dt>
				<dd><input type="text" class="text" placeholder="Password"></dd>
			</dl>
			<div class="captcha">
				<img src="/pub/images/img_captcha.png" alt="임시 캡챠 이미지">
			</div>
			<div class="btns">
				<button type="button" class="btn">VERIFY</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
//<![CDATA[
$(function() {
	$('.content').keyup(function (){
        var content = $(this).val();
        $(this).siblings('.counter').html(content.length + '/1000');
    });
    $('.content').keyup();

	$(".comments .list .co_info .btn_re").on('click', function() {
		var $this = $(this); // 클릭한 버튼
		var $currentRereList = $this.closest(".box").find(".rere_list"); // 클릭한 버튼의 관련 rere_list

		// 다른 버튼 및 rere_list 초기화
		$(".comments .list .co_info .btn_re").not($this).removeClass("on"); // 다른 버튼의 "on" 클래스 제거
		$(".comments .list .rere_list").not($currentRereList).slideUp("fast"); // 다른 rere_list 숨기기

		// 현재 버튼 및 rere_list 토글
		$this.toggleClass("on");
		$currentRereList.slideToggle("fast");
	});

});
function openPop(id) {
    $(`#${id}`).fadeIn("fast");
}
function closePop(id) {
    $(`#${id}`).fadeOut("fast");
}
//]]>
</script>

<?php include("../pub/inc/_footer.php") ?>