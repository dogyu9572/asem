<?php $gNum="03"; $sNum="02"; $gName="News"; $sName="Gallery"; ?>
<?php include("../pub/inc/_dtd.php") ?>
<?php include("../pub/inc/_header.php") ?>
<?php include("../pub/inc/_aside.php") ?>
<div id="mainContent" class="container g<?=$gNum?> s<?=$sNum?>">
    <?php
    $boardid = "gallery";
    include_once $_SERVER["DOCUMENT_ROOT"]."/module/board/board.php";
    ?>

</div> <!-- //container -->
<?php include("../pub/inc/_footer.php") ?>