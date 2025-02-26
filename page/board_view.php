<?php include("/pub/inc/_dtd.php") ?>
<?php $gNum="01"; $sNum="01"; ?>
<?php include("/pub/inc/_header.php") ?>

<div class="container">
	<?php include("/pub/inc/_aside.php") ?>
	<div class="contents" class="sub<?=$gNum?>">
		<div class="content_header">
			<h2>페이지명</h2>
			<p>소제목</p>
			<div><span class="home"><a href="/">home</a></span> <span>&gt;</span> 대분류 <span>&gt;</span> <strong>페이지명</strong></div>
		</div>
		<div class="content">
			<!-- content start -->
			<div class="board_in">
				<table>
					<tr>
						<th>제목제목제목제목제목제목제목제목제목제목제목제목</th>
					</tr>
					<tr>
						<td>내용내용내용내용내용내용내용내용내용내용내용내용</td>
					</tr>
				</table>
			</div>
			<div class="board_bottom">
				<div class="btns">
					<div class="fl">
						<a href="#this" class="btn btn_gray">이전글</a>
						<a href="#this" class="btn btn_gray">다음글</a>
					</div>
					<div class="fr">
						<a href="#this" class="btn btn_gray">삭제</a>
						<a href="/page/board_write.php" class="btn btn_gray">수정</a>
						<a href="/page/board_list.php" class="btn">목록</a>
						<a href="/page/board_write.php" class="btn btn_gray">글쓰기</a>
					</div>
				</div>
			</div> <!-- //board_bottom -->

			<!-- content end -->
		</div>
	</div>
</div>
<?php include("/pub/inc/_footer.php") ?>