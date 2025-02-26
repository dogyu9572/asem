
<?php include_once $_SERVER["DOCUMENT_ROOT"]."/include/headHtml.php"; ?>
<div class="header <?if($gNum=="main"){?>main<?}?>">
	<a href="/" class="logo"><img src="/pub/images/logo.svg" alt="logo"><h1>ASEAN PLUS THREE</h1></a>

	<div class="gnb">
		<div class="menu gnb1 <?if($gNum=="01"){?>on<?}?>"><a href="/about/program_overview.php">About</a></div>
		<div class="menu gnb2 <?if($gNum=="02"){?>on<?}?>"><a href="/resources/study_report.php">Resources</a></div>
		<div class="menu gnb3 <?if($gNum=="03"){?>on<?}?>"><a href="/news/notice.php">News</a></div>
		<div class="menu gnb4 <?if($gNum=="04"){?>on<?}?>"><a href="/community/promotion.php">Community</a></div>
	</div>

	<button type="button" class="btn_search">Search</button>
	<div class="search_area">
		<div class="outbox">
			<div class="inbox">
				<input type="text" class="text" placeholder="Please enter a search term.">
				<button type="button" class="btn" onclick="location.href='/search/'">Search</button>
			</div>
		</div>
	</div>
	<a href="javascript:void(0);" class="btn_menu">
		<p class="t"></p>
		<p class="m"></p>
		<p class="b"></p>
	</a>

	<div class="sub_wrap">
		<div class="tit">ASEAN PLUS THREE</div>
		<div class="con">
			<div class="smenu <?if($gNum=="01"){?>on<?}?>">
				<a href="/about/program_overview.php">About</a>
				<div class="snb">
					<a href="/about/program_overview.php" class="<?if($gNum=="01"&&$sNum=="01"){?>on<?}?>">Program Overview</a>
					<a href="/about/steering_committee.php" class="<?if($gNum=="01"&&$sNum=="02"){?>on<?}?>">Steering Committee</a>
					<a href="/about/study_group.php" class="<?if($gNum=="01"&&$sNum=="03"){?>on<?}?>">Study Group</a>
				</div>
			</div>
			<div class="smenu <?if($gNum=="02"){?>on<?}?>">
				<a href="/resources/study_report.php">Resources</a>
				<div class="snb">
					<a href="/resources/study_report.php" class="<?if($gNum=="02"&&$sNum=="01"){?>on<?}?>">Study Report</a>
					<a href="/resources/meet_startups.php" class="<?if($gNum=="02"&&$sNum=="02"){?>on<?}?>">Meet Startups</a>
					<a href="/resources/meet_investors.php" class="<?if($gNum=="02"&&$sNum=="03"){?>on<?}?>">Meet Investors</a>
				</div>
			</div>
			<div class="smenu <?if($gNum=="03"){?>on<?}?>">
				<a href="/news/notice.php">News</a>
				<div class="snb">
					<a href="/news/notice.php" class="<?if($gNum=="03"&&$sNum=="01"){?>on<?}?>">Notice</a>
					<a href="/news/gallery.php" class="<?if($gNum=="03"&&$sNum=="02"){?>on<?}?>">Gallery</a>
				</div>
			</div>
			<div class="smenu <?if($gNum=="04"){?>on<?}?>">
				<a href="/community/promotion.php">Community</a>
				<div class="snb">
					<a href="/community/promotion.php" class="<?if($gNum=="04"&&$sNum=="01"){?>on<?}?>">Promotion</a>
					<a href="/community/apt_talks.php" class="<?if($gNum=="04"&&$sNum=="02"){?>on<?}?>">APT talks</a>
				</div>
			</div>	
		</div>
	</div>

	<div class="sitemap">
		<div class="menu gnb1 <?if($gNum=="01"){?>on<?}?>">
			<a href="/about/program_overview.php" class="pc_vw">ABOUT</a>
			<a href="javascript:void(0);" class="mo_vw">ABOUT</a>
			<div class="snb">
				<a href="/about/program_overview.php" class="<?if($gNum=="01"&&$sNum=="01"){?>on<?}?>">Program Overview</a>
				<a href="/about/steering_committee.php" class="<?if($gNum=="01"&&$sNum=="02"){?>on<?}?>">Steering Committee</a>
				<a href="/about/study_group.php" class="<?if($gNum=="01"&&$sNum=="03"){?>on<?}?>">Study Group</a>
			</div>
		</div>
		<div class="menu gnb2 <?if($gNum=="02"){?>on<?}?>">
			<a href="/resources/study_report.php" class="pc_vw">RESOURCES</a>
			<a href="javascript:void(0);" class="mo_vw">RESOURCES</a>
			<div class="snb">
				<a href="/resources/study_report.php" class="<?if($gNum=="02"&&$sNum=="01"){?>on<?}?>">Study Report</a>
				<a href="/resources/meet_startups.php" class="<?if($gNum=="02"&&$sNum=="02"){?>on<?}?>">Meet Startups</a>
				<a href="/resources/meet_investors.php" class="<?if($gNum=="02"&&$sNum=="03"){?>on<?}?>">Meet Investors</a>
			</div>
		</div>
		<div class="menu gnb3 <?if($gNum=="03"){?>on<?}?>">
			<a href="/news/notice.php" class="pc_vw">NEWS</a>
			<a href="javascript:void(0);" class="mo_vw">NEWS</a>
			<div class="snb">
				<a href="/news/notice.php" class="<?if($gNum=="03"&&$sNum=="01"){?>on<?}?>">Notice</a>
				<a href="/news/gallery.php" class="<?if($gNum=="03"&&$sNum=="02"){?>on<?}?>">Gallery</a>
			</div>
		</div>
		<div class="menu gnb4 <?if($gNum=="04"){?>on<?}?>">
			<a href="/community/promotion.php" class="pc_vw">COMMUNITY</a>
			<a href="javascript:void(0);" class="mo_vw">COMMUNITY</a>
			<div class="snb">
				<a href="/community/promotion.php" class="<?if($gNum=="04"&&$sNum=="01"){?>on<?}?>">Promotion</a>
				<a href="/community/apt_talks.php" class="<?if($gNum=="04"&&$sNum=="02"){?>on<?}?>">APT talks</a>
			</div>
		</div>
	</div>
</div>