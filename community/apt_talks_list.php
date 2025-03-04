<?php
// 세션 시작
session_start();

$gNum="04"; $sNum="02"; $gName="Community"; $sName="APT talks";

// 인증 체크
if(!isset($_SESSION['apt_talks_authenticated']) || $_SESSION['apt_talks_authenticated'] !== true) {
	// 인증되지 않은 경우 비밀번호 페이지로 리다이렉트
	header("Location: /community/apt_talks.php");
	exit;
}

include("../pub/inc/_dtd.php");
include("../pub/inc/_header.php");
include("../pub/inc/_aside.php");
?>
    <div id="mainContent" class="container g<?=$gNum?> s<?=$sNum?>">
        <div id="mainContent" class="container g<?=$gNum?> s<?=$sNum?>">
			<?php
			$boardid = "apt_talks";
			include_once $_SERVER["DOCUMENT_ROOT"]."/module/board/board.php";
			?>
        </div>
    </div> <!-- //container -->
<?php include("../pub/inc/_footer.php") ?>