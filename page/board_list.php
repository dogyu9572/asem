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

			<div class="board_top">
				<div class="left">
					<div class="total">TOTAL <strong class="c_iden1">100</strong></div>
					<select name="" id="" class="text">
						<option value="">분류</option>
					</select>
				</div>
				<div class="search_area">
					<select name="" id="" class="text">
						<option value="">제목</option>
						<option value="">내용</option>
					</select>
					<input type="text" class="text" placeholder="검색어를 입력해 주세요.">
					<button type="submit" class="btn">검색</button>
				</div>
			</div>

			<div class="board_list">
				<table>
					<colgroup>
						<col class="w1" />
						<col width="*" />
						<col class="w2" />
						<col class="w3" />
						<col class="w4" />
					</colgroup>
					<thead>
						<tr>
							<th>번호</th>
							<th>제목</th>
							<th>작성자</th>
							<th>작성일</th>
							<th>조회수</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>10</td>
							<td class="tal"><a href="/page/board_view.php">제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목</a></td>
							<td>관리자</td>
							<td>2016-00-00</td>
							<td>999</td>
						</tr>
						<tr>
							<td>9</td>
							<td class="tal"><a href="/page/board_view.php">제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목</a></td>
							<td>관리자</td>
							<td>2016-00-00</td>
							<td>999</td>
						</tr>
						<tr>
							<td>8</td>
							<td class="tal"><a href="/page/board_view.php">제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목</a></td>
							<td>관리자</td>
							<td>2016-00-00</td>
							<td>999</td>
						</tr>
						<tr>
							<td>7</td>
							<td class="tal"><a href="/page/board_view.php">제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목</a></td>
							<td>관리자</td>
							<td>2016-00-00</td>
							<td>999</td>
						</tr>
						<tr>
							<td>6</td>
							<td class="tal"><a href="/page/board_view.php">제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목</a></td>
							<td>관리자</td>
							<td>2016-00-00</td>
							<td>999</td>
						</tr>
						<tr>
							<td>5</td>
							<td class="tal"><a href="/page/board_view.php">제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목</a></td>
							<td>관리자</td>
							<td>2016-00-00</td>
							<td>999</td>
						</tr>
						<tr>
							<td>4</td>
							<td class="tal"><a href="/page/board_view.php">제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목</a></td>
							<td>관리자</td>
							<td>2016-00-00</td>
							<td>999</td>
						</tr>
						<tr>
							<td>3</td>
							<td class="tal"><a href="/page/board_view.php">제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목</a></td>
							<td>관리자</td>
							<td>2016-00-00</td>
							<td>999</td>
						</tr>
						<tr>
							<td>2</td>
							<td class="tal"><a href="/page/board_view.php">제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목</a></td>
							<td>관리자</td>
							<td>2016-00-00</td>
							<td>999</td>
						</tr>
						<tr>
							<td>1</td>
							<td class="tal"><a href="/page/board_view.php">제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목제목</a></td>
							<td>관리자</td>
							<td>2016-00-00</td>
							<td>999</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="board_bottom">
				<div class="paging">
					<a href="#this" class="arrow two first">맨끝</a>
					<a href="#this" class="arrow one prev">이전</a>
					<a href="#this" class="on">1</a>
					<a href="#this">2</a>
					<a href="#this">3</a>
					<a href="#this">4</a>
					<a href="#this">5</a>
					<a href="#this" class="arrow one next">다음</a>
					<a href="#this" class="arrow two last">맨끝</a>
				</div>
			</div> <!-- //board_bottom -->

			<div class="board_bottom">
				<div class="btns">
					<div class="fr">
						<a href="/page/board_write.php" class="btn">글쓰기</a>
					</div>
				</div>
				<div class="paging">
					<a href="#this" class="arrow two first">맨끝</a>
					<a href="#this" class="arrow one prev">이전</a>
					<a href="#this" class="on">1</a>
					<a href="#this">2</a>
					<a href="#this">3</a>
					<a href="#this">4</a>
					<a href="#this">5</a>
					<a href="#this" class="arrow one next">다음</a>
					<a href="#this" class="arrow two last">맨끝</a>
				</div>
			</div> <!-- //board_bottom -->
		</div> <!-- content end -->
	</div>
</div>
<?php include("/pub/inc/_footer.php") ?>