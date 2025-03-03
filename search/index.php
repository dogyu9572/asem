<?php $gNum="00"; $gName="Search"; ?>
<?php include("../pub/inc/_dtd.php") ?>
<?php include("../pub/inc/_header.php") ?>
<?php include("../pub/inc/_aside.php") ?>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/module/board/board.lib.php";

$dblink = SetConn($_conf_db["main_db"]);

$arrAboutList = getBoardListBaseNFile("search", "", "all", $_GET['sk'], "", 0,' and search_id = "about"', "user"); // about 리스트 가져오기
$arrStudyList = getBoardListBaseNFile("search", "", "all", $_GET['sk'], "", 0,' and search_id = "study_report"', "user"); // Study 리스트 가져오기
$arrStartupsList = getBoardListBaseNFile("meet_startups", "", "all", $_GET['sk'], "", 0,'', "user"); // Startups 리스트 가져오기
$arrNoticeList = getBoardListBaseNFile("notice", "", "all", $_GET['sk'], "", 0,'', "user"); // Notice 리스트 가져오기
$arrGalleryList = getBoardListBaseNFile("gallery", "", "all", $_GET['sk'], "", 0,'', "user"); // Gallery 리스트 가져오기
$arrPromotionList = getBoardListBaseNFile("promotion", "", "all", $_GET['sk'], "", 0,'', "user"); // Promotion 리스트 가져오기
$arrAptTalksList = getBoardListBaseNFile("apt_talks", "", "all", $_GET['sk'], "", 0,'', "user"); // Apt Talks 리스트 가져오기

// 전체 토탈 계산
$total_count = 0;
$total_count += ($arrAboutList["list"]["total"] ?? 0);
$total_count += ($arrStudyList["list"]["total"] ?? 0);
$total_count += ($arrStartupsList["list"]["total"] ?? 0);
$total_count += ($arrNoticeList["list"]["total"] ?? 0);
$total_count += ($arrGalleryList["list"]["total"] ?? 0);
$total_count += ($arrPromotionList["list"]["total"] ?? 0);
$total_count += ($arrAptTalksList["list"]["total"] ?? 0);

//DB해제
//SetDisConn($dblink);
?>
<div id="mainContent" class="container g<?=$gNum?> s<?=$sNum?> search_wrap">

	<div class="inner">
		<div class="search_head">
			<p>Search results for <strong>‘<?=$_GET["sk"]?>’</strong><br>A total of <strong><?=$total_count?></strong> results were found.</p>
			<div class="search_box">
                <form name="form1" method="get" action="<?=$_SERVER[PHP_SELF]?>">
                    <input type="hidden" name="boardid" value="<?=$_GET["boardid"]?>">
				    <input type="text" name="sk" class="text" placeholder="" value="<?=$_GET["sk"]?>">
				    <button type="submit" class="btn">Search</button>
                </form>
			</div>
		</div>

        <div class="tabs">
            <a href="/search/index.php?sk=<?=$_GET["sk"]?>" class="<?=empty($_GET['boardid']) ? 'on' : ''?>">All (<?=$total_count?>)</a>
            <a href="/search/index.php?boardid=search&search_id=about&sk=<?=$_GET["sk"]?>" class="<?=($_GET['boardid']=='search' && $_GET['search_id'] == 'about') ? 'on' : ''?>">About<span>(<?=$arrAboutList["list"]["total"] ?? 0?>)</span></a>
            <a href="/search/index.php?boardid=search&search_id=study_report&sk=<?=$_GET["sk"]?>" class="<?=($_GET['boardid']=='search' && $_GET['search_id'] == 'study_report' ) ? 'on' : ''?>">Study Report<span>(<?=$arrStudyList["list"]["total"] ?? 0?>)</span></a>
            <a href="/search/index.php?boardid=meet_startups&sk=<?=$_GET["sk"]?>" class="<?=($_GET['boardid']=='meet_startups') ? 'on' : ''?>">Meet Startups<span>(<?=$arrStartupsList["list"]["total"] ?? 0?>)</span></a>
            <a href="/search/index.php?boardid=notice&sk=<?=$_GET["sk"]?>" class="<?=($_GET['boardid']=='notice') ? 'on' : ''?>">Notice<span>(<?=$arrNoticeList["list"]["total"] ?? 0?>)</span></a>
            <a href="/search/index.php?boardid=gallery&sk=<?=$_GET["sk"]?>" class="<?=($_GET['boardid']=='gallery') ? 'on' : ''?>">Gallery<span>(<?=$arrGalleryList["list"]["total"] ?? 0?>)</span></a>
            <a href="/search/index.php?boardid=promotion&sk=<?=$_GET["sk"]?>" class="<?=($_GET['boardid']=='promotion') ? 'on' : ''?>">Promotion<span>(<?=$arrPromotionList["list"]["total"] ?? 0?>)</span></a>
            <a href="/search/index.php?boardid=apt_talks&sk=<?=$_GET["sk"]?>" class="<?=($_GET['boardid']=='apt_talks') ? 'on' : ''?>">APT talks<span>(<?=$arrAptTalksList["list"]["total"] ?? 0?>)</span></a>
        </div>

        <?php
        /**
         * 검색 결과 리스트 출력
         * @param array $listData 리스트 데이터 배열
         * @param string $title 섹션 제목
         * @param string $linkUrl VIEW MORE 링크 URL
         * @param string $boardId 게시판 ID
         * @param string $searchId 검색 ID (옵션)
         */
        function displaySearchResults($listData, $title, $linkUrl, $boardId, $searchId = '') {
            if ($listData["list"]["total"] <= 0) return;

            $showSection = empty($_GET['boardid']) ||
                ($_GET["boardid"] == $boardId &&
                    ($searchId == '' || $_GET["search_id"] == $searchId));

            if (!$showSection) return;
            ?>
            <div class="search_list">
                <div class="btit"><?=$title?> <span>(<?=$listData["list"]["total"]?>)</span><a href="<?=$linkUrl?>" class="more">VIEW MORE</a></div>
                <div class="list">
                    <?php
                    for ($i = 0; $i < $listData["list"]["total"]; $i++) {
                        $subject = preg_replace("/(".preg_quote($_GET["sk"], '/').")/i", "<span>$1</span>", $listData["list"][$i]["subject"]);
                        $contents = preg_replace("/(".preg_quote($_GET["sk"], '/').")/i", "<span>$1</span>", $listData["list"][$i]["contents"]);
                        $viewUrl = $linkUrl . "?boardid=" . $boardId . "&mode=view&idx=" . $listData["list"][$i]["idx"];
                        ?>
                        <a href="<?=$viewUrl?>">
                            <span class="tt"><?=$subject?></span>
                            <p><?=$contents?></p>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <?php
        }

        // 각 섹션 출력
        displaySearchResults(
            $arrAboutList,
            "About",
            "/about/program_overview.php",
            "search",
            "about"
        );

        displaySearchResults(
            $arrStudyList,
            "Study Report",
            "/resources/study_report.php",
            "search",
            "study_report"
        );

        displaySearchResults(
            $arrStartupsList,
            "Meet Startups",
            "/startups/meet_startups.php",
            "meet_startups"
        );

        displaySearchResults(
            $arrNoticeList,
            "Notice",
            "/news/notice.php",
            "notice"
        );

        displaySearchResults(
            $arrGalleryList,
            "Gallery",
            "/news/gallery.php",
            "gallery"
        );

        displaySearchResults(
            $arrPromotionList,
            "Promotion",
            "/news/promotion.php",
            "promotion"
        );

        displaySearchResults(
            $arrAptTalksList,
            "APT talks",
            "/news/apt_talks.php",
            "apt_talks"
        );
        ?>

<!-- 검색된 내용이 없을 경우 -->
        <?php
        if ($total_count == 0) { // 검색 결과가 하나도 없을 때
            ?>
            <div class="no_search">
                <div class="tt">No search results found for <strong>'<?=$_GET["sk"]?>'</strong></div>
                <p>Please check if the spelling is correct.<br>Try searching with commonly used keywords.</p>
            </div>
        <?php } ?>
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