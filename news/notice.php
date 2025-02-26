<?php $gNum="03"; $sNum="01"; $gName="News"; $sName="Notice"; ?>
<?php include("../pub/inc/_dtd.php") ?>
<?php include("../pub/inc/_header.php") ?>
<?php include("../pub/inc/_aside.php") ?>
<div id="mainContent" class="container g<?=$gNum?> s<?=$sNum?>">
	
	<div class="inner">
		<div class="search_box">
			<input type="text" class="text" placeholder="Please enter a search term.">
			<button type="submit" class="btn">Search</button>
		</div>

		<div class="board_top">
			<div class="total">Total <strong>20</strong></div>
		</div>

		<div class="board_list">
			<table>
				<colgroup>
					<col class="w16" />
					<col width="*" />
					<col class="w18" />
				</colgroup>
				<thead>
					<tr>
						<th>NO</th>
						<th>Title</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<tr class="announcement file">
						<td class="num"><span>Announcement</span></td>
						<td class="tal"><a href="/news/notice_view.php">It’s the space where the title goes in.</a></td>
						<td class="date">2024.05.28</td>
					</tr>
					<tr class="announcement">
						<td class="num"><span>Announcement</span></td>
						<td class="tal"><a href="/news/notice_view.php">It’s the space where the title goes in.</a></td>
						<td class="date">2024.05.28</td>
					</tr>
					<tr class="announcement">
						<td class="num"><span>Announcement</span></td>
						<td class="tal"><a href="/news/notice_view.php">It’s the space where the title goes in.</a></td>
						<td class="date">2024.05.28</td>
					</tr>
					<tr class="announcement">
						<td class="num"><span>Announcement</span></td> 
						<td class="tal"><a href="/news/notice_view.php">It’s the space where the title goes in.</a></td>
						<td class="date">2024.05.28</td>
					</tr>
					<tr>
						<td class="num">6</td>
						<td class="tal"><a href="/news/notice_view.php">It’s the space where the title goes in.</a></td>
						<td class="date">2024.05.28</td>
					</tr>
					<tr>
						<td class="num">5</td>
						<td class="tal"><a href="/news/notice_view.php">It’s the space where the title goes in.</a></td>
						<td class="date">2024.05.28</td>
					</tr>
					<tr>
						<td class="num">4</td>
						<td class="tal"><a href="/news/notice_view.php">It’s the space where the title goes in.</a></td>
						<td class="date">2024.05.28</td>
					</tr>
					<tr>
						<td class="num">3</td>
						<td class="tal"><a href="/news/notice_view.php">It’s the space where the title goes in.</a></td>
						<td class="date">2024.05.28</td>
					</tr>
					<tr>
						<td class="num">2</td>
						<td class="tal"><a href="/news/notice_view.php">It’s the space where the title goes in.</a></td>
						<td class="date">2024.05.28</td>
					</tr>
					<tr>
						<td class="num">1</td>
						<td class="tal"><a href="/news/notice_view.php">It’s the space where the title goes in.</a></td>
						<td class="date">2024.05.28</td>
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
	</div>

</div> <!-- //container -->
<?php include("../pub/inc/_footer.php") ?>