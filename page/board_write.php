<?php include("/pub/inc/_dtd.php") ?>
<?php $gNum="01"; $sNum="01"; ?>
<?php include("/pub/inc/_header.php") ?>

<div class="container">
	<?php include("/pub/inc/_aside.php") ?>
	<div class="contents sub<?=$gNum?>">
		<div class="content_header">
			<h2>페이지명</h2>
			<p>소제목</p>
			<div><span class="home"><a href="/">home</a></span> <span>&gt;</span> 대분류 <span>&gt;</span> <strong>페이지명</strong></div>
		</div>
		<div class="content">
			<!-- content start -->
			<div class="board_in board_write">
				<table>
					<colgroup>
						<col class="w1" />
						<col width="*" />
					</colgroup>
					<tr>
						<th><label for="wr01">제목</label></th>
						<td><input type="text" id="wr01" class="text w100p" /></td>
					</tr>
					<tr>
						<th><label for="wr02">내용</label></th>
						<td><textarea name="" id="wr02" cols="30" rows="10" class="text w100p">에디터</textarea></td>
					</tr>
				</table>
			</div>
			<div class="board_bottom">
				<div class="btns tac">
					<input type="submit" value="작성완료" id="btn_submit" class="btn">
					<a href="#this" class="btn btn_gray">취소</a>
				</div>
			</div> <!-- //board_bottom -->
			<!-- content end -->
		</div>
	</div>
</div>
<?php include("/pub/inc/_footer.php") ?>