<?php $gNum="00"; $gName="Search"; ?>
<?php include("../pub/inc/_dtd.php") ?>
<?php include("../pub/inc/_header.php") ?>
<?php include("../pub/inc/_aside.php") ?>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/module/board/board.lib.php";
$dblink = SetConn($_conf_db["main_db"]);

$arrNoticeList = getBoardListBaseNFile("notice", "", "all", $_GET['sk'], "", 0,'', "user"); // 전체 교육 리스트 가져오기
$arrGalleryList = getBoardListBaseNFile("gallery", "", "all", $_GET['sk'], "", 0,'', "user"); // 전체 교육 리스트 가져오기

//DB해제
SetDisConn($dblink);
?>
<div id="mainContent" class="container g<?=$gNum?> s<?=$sNum?> search_wrap">

	<div class="inner">
		<div class="search_head">
			<p>Search results for <strong>‘<?=$_GET["sk"]?>’</strong><br>A total of <strong>0</strong> results were found.</p>
			<div class="search_box">
                <form name="form1" method="get" action="<?=$_SERVER[PHP_SELF]?>">
                    <input type="hidden" name="boardid" value="<?=$_GET["boardid"]?>">
				    <input type="text" name="sk" class="text" placeholder="" value="<?=$_GET["sk"]?>">
				    <button type="submit" class="btn">Search</button>
                </form>
			</div>
		</div>

        <div class="tabs">
            <a href="/search/index.php?sk=<?=$_GET["sk"]?>" class="<?=empty($_GET['boardid']) ? 'on' : ''?>">All (0)</a>
            <a href="/search/index.php?boardid=about&sk=<?=$_GET["sk"]?>" class="<?=($_GET['boardid']=='about') ? 'on' : ''?>">About<span>(6)</span></a>
            <a href="/search/index.php?boardid=study&sk=<?=$_GET["sk"]?>" class="<?=($_GET['boardid']=='study') ? 'on' : ''?>">Study Report<span>(1)</span></a>
            <a href="/search/index.php?boardid=startups&sk=<?=$_GET["sk"]?>" class="<?=($_GET['boardid']=='startups') ? 'on' : ''?>">Meet Startups</a>
            <a href="/search/index.php?boardid=notice&sk=<?=$_GET["sk"]?>" class="<?=($_GET['boardid']=='notice') ? 'on' : ''?>">Notice(<?=$arrNoticeList["list"]["total"] ?? 0?>)</a>
            <a href="/search/index.php?boardid=gallery&sk=<?=$_GET["sk"]?>" class="<?=($_GET['boardid']=='gallery') ? 'on' : ''?>">Gallery(<?=$arrGalleryList["list"]["total"] ?? 0?>)</a>
            <a href="/search/index.php?boardid=promotion&sk=<?=$_GET["sk"]?>" class="<?=($_GET['boardid']=='promotion') ? 'on' : ''?>">Promotion</a>
            <a href="/search/index.php?boardid=apt&sk=<?=$_GET["sk"]?>" class="<?=($_GET['boardid']=='apt') ? 'on' : ''?>">APT talks</a>
        </div>

		<?php
		if ($arrNoticeList["list"]["total"] > 0 && (empty($_GET['boardid']) || $_GET["boardid"] == "notice")) {
			?>
            <div class="search_list">
                <div class="btit">Notice <span>(<?= $arrNoticeList["list"]["total"] ?>)</span><a href="/news/notice.php" class="more">VIEW MORE</a></div>
                <div class="list">
					<?
					for ($i = 0; $i < $arrNoticeList["list"]["total"]; $i++) {
						$subject = preg_replace("/(" . preg_quote($_GET["sk"], '/') . ")/i", "<span>$1</span>", $arrNoticeList["list"][$i]["subject"]);
						$contents = preg_replace("/(" . preg_quote($_GET["sk"], '/') . ")/i", "<span>$1</span>", $arrNoticeList["list"][$i]["contents"]);
						?>
                        <a href="/news/notice.php?boardid=edu&mode=view&idx=<?= $arrNoticeList["list"][$i]["idx"] ?>">
                            <span class="tt"><?= $subject ?></span>
                            <p><?= $contents ?></p>
                        </a>
					<?php } ?>
                </div>
            </div>
		<?php } ?>
		<?php
		if ($arrGalleryList["list"]["total"] > 0 && (empty($_GET['boardid']) || $_GET["boardid"] == "gallery")) {
			?>
            <div class="search_list">
                <div class="btit">Gallery <span>(<?= $arrGalleryList["list"]["total"] ?>)</span><a href="/news/gallery.php" class="more">VIEW MORE</a></div>
                <div class="list">
                    <?
                    for ($i = 0; $i < $arrGalleryList["list"]["total"]; $i++) {
                        $subject = preg_replace("/(" . preg_quote($_GET["sk"], '/') . ")/i", "<span>$1</span>", $arrGalleryList["list"][$i]["subject"]);
                        $contents = preg_replace("/(" . preg_quote($_GET["sk"], '/') . ")/i", "<span>$1</span>", $arrGalleryList["list"][$i]["contents"]);
                        ?>
                        <a href="/news/gallery.php?boardid=edu&mode=view&idx=<?= $arrGalleryList["list"][$i]["idx"] ?>">
                            <span class="tt"><?= $subject ?></span>
                            <p><?= $contents ?></p>
                        </a>
                    <?php } ?>
                </div>
            </div>
		<?php } ?>

<!-- 검색된 내용이 없을 경우 -->
<!--		<div class="no_search">-->
<!--			<div class="tt">No search results found for <strong>‘XXX’</strong></div>-->
<!--			<p>Please check if the spelling is correct.<br>Try searching with commonly used keywords.</p>-->
<!--		</div>-->
<!-- //검색된 내용이 없을 경우 -->

<!-- 검색된 내용이 있을 경우 -->
<!--		<div class="search_list">-->
<!---->
<!--			<div class="btit">About <span>(6)</span><a href="/about/program_overview.php" class="more">VIEW MORE</a></div>-->
<!--			<div class="list">-->
<!--				<a href="#this">-->
<!--					<span class="tt">It’s the space where the <span>title</span> goes in.</span>-->
<!--					<p>The space where the content will be located. The space where the content will be located.The space where the content will be located. The space where the content will be located. The space where the content will be located. The space where the content will be located.The space where the content will be located. The space where the content will be located. The space where the content will be located. The space where the content will be located.</p>-->
<!--				</a>-->
<!--				<a href="#this">-->
<!--					<span class="tt">It’s the space where the <span>title</span> goes in.</span>-->
<!--					<p>The space where the content will be located. The space where the content will be located.The space where the content will be located. The space where the content will be located. The space where the content will be located. The space where the content will be located.The space where the content will be located. The space where the content will be located. The space where the content will be located. The space where the content will be located.</p>-->
<!--				</a>-->
<!--				<a href="#this">-->
<!--					<span class="tt">It’s the space where the <span>title</span> goes in.</span>-->
<!--					<p>The space where the content will be located. The space where the content will be located.The space where the content will be located. The space where the content will be located. The space where the content will be located. The space where the content will be located.The space where the content will be located. The space where the content will be located. The space where the content will be located. The space where the content will be located.</p>-->
<!--				</a>-->
<!--				<a href="#this">-->
<!--					<span class="tt">It’s the space where the <span>title</span> goes in.</span>-->
<!--					<p>The space where the content will be located. The space where the content will be located.The space where the content will be located. The space where the content will be located. The space where the content will be located. The space where the content will be located.The space where the content will be located. The space where the content will be located. The space where the content will be located. The space where the content will be located.</p>-->
<!--				</a>-->
<!--				<a href="#this">-->
<!--					<span class="tt">It’s the space where the <span>title</span> goes in.</span>-->
<!--					<p>The space where the content will be located. The space where the content will be located.The space where the content will be located. The space where the content will be located. The space where the content will be located. The space where the content will be located.The space where the content will be located. The space where the content will be located. The space where the content will be located. The space where the content will be located.</p>-->
<!--				</a>-->
<!--				<a href="#this">-->
<!--					<span class="tt">It’s the space where the <span>title</span> goes in.</span>-->
<!--					<p>The space where the content will be located. The space where the content will be located.The space where the content will be located. The space where the content will be located. The space where the content will be located. The space where the content will be located.The space where the content will be located. The space where the content will be located. The space where the content will be located. The space where the content will be located.</p>-->
<!--				</a>-->
<!--			</div>-->
<!---->
<!--			<div class="btit">Study Report <span>(1)</span><a href="/resources/study_report.php" class="more">VIEW MORE</a></div>-->
<!--			<div class="list">-->
<!--				<a href="#this">-->
<!--					<span class="tt">It’s the space where the <span>title</span> goes in.</span>-->
<!--					<p>The space where the content will be located. The space where the content will be located.The space where the content will be located. The space where the content will be located. The space where the content will be located. The space where the content will be located.The space where the content will be located. The space where the content will be located. The space where the content will be located. The space where the content will be located.</p>-->
<!--				</a>-->
<!--			</div>-->
<!---->
<!--		</div>-->
<!-- //검색된 내용이 있을 경우 -->
	</div>

</div> <!-- //container -->
<?php include("../pub/inc/_footer.php") ?>