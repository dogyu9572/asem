<?php $gNum="02"; $sNum="02"; $gName="Resources"; $sName="Meet Startups"; ?>
<?php include("../pub/inc/_dtd.php") ?>
<?php include("../pub/inc/_header.php") ?>
<?php include("../pub/inc/_aside.php") ?>
<div id="mainContent" class="container g<?=$gNum?> s<?=$sNum?>">
    <?php
    $boardid = "meet_startups";
    include_once $_SERVER["DOCUMENT_ROOT"]."/module/board/board.php";
    ?>
</div> <!-- //container -->
<?php include("../pub/inc/_footer.php") ?>