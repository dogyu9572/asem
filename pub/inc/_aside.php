<div class="svisual g<?=$gNum?> s<?=$sNum?>">
	<span><?if($sNum){?><?=$sName?><?}else{?><?=$gName?><?}?></span>
	<div class="inner">
		<div class="aside_wrap">
			<button class="btn mo_vw"><?=$sName?></button>
			<div class="aside">
			<?php if($gNum=="01"){?>
				<a href="/about/program_overview.php" class="<?if($sNum=="01"){?>on<?}?>">Program Overview</a>
				<a href="/about/steering_committee.php" class="<?if($sNum=="02"){?>on<?}?>">Steering Committee</a>
				<a href="/about/study_group.php" class="<?if($sNum=="03"){?>on<?}?>">Study Group</a>
			<?php }elseif($gNum=="02"){?>
				<a href="/resources/study_report.php" class="<?if($sNum=="01"){?>on<?}?>">Study Report</a>
				<a href="/resources/meet_startups.php" class="<?if($sNum=="02"){?>on<?}?>">Meet Startups</a>
				<a href="/resources/meet_investors.php" class="<?if($sNum=="03"){?>on<?}?>">Meet Investors</a>
			<?php }elseif($gNum=="03"){?>
				<a href="/news/notice.php" class="<?if($sNum=="01"){?>on<?}?>">Notice</a>
				<a href="/news/gallery.php" class="<?if($sNum=="02"){?>on<?}?>">Gallery</a>
			<?php }elseif($gNum=="04"){?>
				<a href="/community/promotion.php" class="<?if($sNum=="01"){?>on<?}?>">Promotion</a>
				<a href="/community/apt_talks.php" class="<?if($sNum=="02"){?>on<?}?>">APT talks</a>
			<?php }?>
			</div>
		</div>
	</div>
</div>