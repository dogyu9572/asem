<?php $gNum="03"; $sNum="01"; $gName="News"; $sName="Notice"; ?>
<?php include("../pub/inc/_dtd.php") ?>
<?php include("../pub/inc/_header.php") ?>
<?php include("../pub/inc/_aside.php") ?>
<div id="mainContent" class="container g<?=$gNum?> s<?=$sNum?>">
    <?php
    $boardid = "notice";
    include_once $_SERVER["DOCUMENT_ROOT"]."/module/board/board.php";
    ?>
</div> <!-- //container -->
<?php include("../pub/inc/_footer.php") ?>