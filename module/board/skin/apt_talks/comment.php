<?
################################################### PHP 7 Set ST
if(!isset($_GET["category"])){	$_GET["category"]=""; }
if(!isset($_GET["sw"])){		$_GET['sw']="";	}
if(!isset($_GET["sk"])){		$_GET['sk']="";	}
if(!isset($_GET["offset"])){	$_GET['offset']=0;	}
if(!isset($_GET["page_size"])){	$_GET['page_size']=""; }
if(!isset($arrBoardList["list"]["total"])){			$arrBoardList["list"]["total"]=0; }
if(!isset($arrBoardList["total"])){					$arrBoardList["total"]=0; }
if(!isset($arrBoardInfo["list"][0]["scale"])){		$arrBoardInfo["list"][0]["scale"]=0; }
if(!isset($arrBoardInfo["list"][0]["pagescale"])){	$arrBoardInfo["list"][0]["pagescale"]=0; }
if(!isset($arrBoardInfo["list"][0]["boardid"])){	$arrBoardInfo["list"][0]["boardid"]=""; }
################################################### PHP 7 Set ED

if($_SESSION[$_SITE["DOMAIN"]]["ADMIN"]["ID"] && $_SERVER["PHP_SELF"]=="/backoffice/module/board/board_view.php"){
    if(!in_array("board_manage",$_SESSION[$_SITE["DOMAIN"]]["ADMIN"]["AUTH"]) && $_SESSION[$_SITE["DOMAIN"]]["ADMIN"]["GRADE"]!="ROOT"):
        jsMsg("권한이 없습니다.");
        jsHistory("-1");
    endif;
###################################################### 관리자 페이지 ######################################################?>
    <script type="text/javascript">
        <!--
        $(document).ready(function() {
            $.each($('input.calendar'), function() {
                set_datepicker($(this));
            });
        });
        function set_datepicker($cont) {
            $cont.prop('readonly', true).datepicker({
                closeText: '닫기',
                prevText: '',
                nextText: '',
                currentText: '오늘',
                monthNames: ['1월(JAN)','2월(FEB)','3월(MAR)','4월(APR)','5월(MAY)','6월(JUN)','7월(JUL)','8월(AUG)','9월(SEP)','10월(OCT)','11월(NOV)','12월(DEC)'],
                monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                dayNames: ['일','월','화','수','목','금','토'],
                dayNamesShort: ['일','월','화','수','목','금','토'],
                dayNamesMin: ['일','월','화','수','목','금','토'],
                weekHeader: 'Wk',
                dateFormat: 'yy-mm-dd',
                defaultDate: '+1w',
                firstDay: 0,
                isRTL: false,
                showMonthAfterYear: true,
                yearSuffix: '년 ',
                changeMonth: true,
                changeYear: true,
                yearRange: '1921:c+5'
            });
        }

        function boardDel(val){
            if(confirm("삭제 하시겠습니까?")) {
                $.post("/module/board/ajax_comment_del.php", { evnMode: "delete", g_idx: val, boardid: "<?=$arrBoardInfo["list"][0]["boardid"]?>" },
                    function(data){
                        //alert(data);
                        doLoad();
                    });
            }
        }
        function doLoad(){
            location.reload();
        }
        // 선택 삭제시 singleSelect=true 값 변경 false
        function getSelections(){
            var ss = "0";

            var rows = $('input:checkbox[name=chk_list]:checked');

            for(var i=0; i<rows.length; i++){
                var row = rows[i];
                //ss.push(row.idx);
                ss += ","+row.value;
            }
            if(rows.length>0){
                //alert(ss);
                boardDel(ss);
            }else{
                alert('선택된 항목이 없습니다.');
            }
        }
        $(function(){
            $(".check_all").click(function(){
                var chk = $(this).is(":checked");//.attr('checked');
                if(chk) $(".chk_list").prop('checked', true);
                else  $(".chk_list").prop('checked', false);
            });
        });

        // 순서 변경
        $(function() {
            /*
            $("#sortWrap").sortable({
                axis: "y",
                containment: "parent",
                update: function (event, ui) {
                    var order = $(this).sortable('toArray', {
                        attribute: 'data-order'
                    });
                    console.log(order);
                    fnOrderSave(order);
                }
            });
            */
        });
        var arrIdx=[];
        function fnOrderSave(order){
            arrIdx = order;
            fnGoodOrderby();
        }
        function fnGoodOrderby(){
            var idxs = "";
            var comma = "";
            for(var i=0;i<arrIdx.length;i++){
                idxs += comma+arrIdx[i];
                comma = "|";
            }
            //alert(idxs)
            if(idxs){

                $.post("/module/board/ajax_orderby_board.php", { "gidx": idxs, "tn":"tbl_board_<?=$arrBoardInfo["list"][0]["boardid"]?>" },
                    function(data){
                        if(data){
                            //	alert(data);
                            location.reload();
                        }
                    }
                );
            }else{
                alert('변경된 순서가 없습니다.');
            }
        }
        // 메인노출
        function fnAjaxYN(objt, sf){
            var apiUrl = "/module/shop/ajax_edit_def_yn.php";
            var gidx = $(objt).val();
            var chk = $(objt).is(":checked");//.attr('checked');
            var yn = "";
            if(chk){
                yn = "Y";
            }else{
                yn = "N";
            }
            //	alert(yn)

            $.post(apiUrl, {
                "gidx":gidx,"yn":yn,"sf":sf,"tn":"tbl_board_ourstory"
            }, function(data){
                //	alert(data);
                if(data=="true"){
                    location.reload();
                }else{
                    alert(data);
                }
            });
        }
        function fnOrderby(rdnm, rdsc){
            var frm = document.form1;
            frm.rdnm.value = rdnm;
            frm.rdsc.value = rdsc;
            frm.submit();
        }
        //-->
    </script>
    <div class="container">

        <div class="title"><?=$arrBoardInfo["list"][0]["boardname"]?></div>

        <form name="form1" method="get" action="<?=$_SERVER["PHP_SELF"]?>">

            <div class="inbox">
                <div class="bdr_top">
                    <div class="left">
                        <div class="total">Total : <strong><?=number_format($arrBoardList["total"])?></strong></div>
                        <div class="down">
                            <!--	<a href="#this" class="excel" download>전체다운<span class="pc_vw">로드</span></a>
                                <a href="#this" class="excel" download>선택다운<span class="pc_vw">로드</span></a>
                            -->
                        </div>
                    </div>
                    <div class="bdr_right">
                        <div class="btns">
                            <a href="<?=$_SERVER["PHP_SELF"]?>?boardid=<?=$arrBoardInfo["list"][0]["boardid"]?>&mode=list&category=<?=$_GET['category']?>" class="btn btn_list">목록보기</a>
                        </div>
                    </div>
                </div>
        </form>
        <!-- over_tbl : 테이블을 좌우로 스크롤 할 때 사용합니다. -->
        <!-- mo_break_tbl : 767px 이하에서 테이블 구조를 깰 때 사용합니다. -->
        <div class="over_tbl mo_break_tbl">
            <div class="bdr_list tac">
                <table>
                    <colgroup class="pc_vw">
                        <col class="w4p">
                        <col class="*">
                        <col class="w15p">
                        <col class="w10p">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="pc_vw">뎁스</th>
                        <th class="pc_vw">내용</th>
                        <th class="pc_vw">등록일
                            <a href="javascript:void(0);" onclick="fnOrderby('wdate','desc')">▼</a><a href="javascript:void(0);" onclick="fnOrderby('wdate','asc')">▲</a></th>
                        <th class="pc_vw">삭제</th>
                    </tr>
                    </thead>
                    <tbody id="sortWrap">
                    <?php
                    if($arrBoardList["list"]["total"] > 0) {
                        foreach($arrBoardList["list"] as $comment) {
                            // 원본 댓글만 먼저 표시 (depno = 0)
                            if($comment['depno'] == '0') {
                                $depth = "댓글";
                                ?>
                                <tr data-order="<?=$comment['idx']?>">
                                    <td style="width:15%;"><?=$depth?></td>
                                    <td style="width:15%;"><?=$comment['comment']?></td>
                                    <td style="width:15%;"><?=$comment['wdate']?></td>
                                    <td style="width:10%;">
                                        <div class="btns">
                                            <button type="button" class="btn del" onclick="boardDel(<?=$comment['idx']?>)">삭제</button>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                // 대댓글 표시 부분
                                foreach($arrBoardList["list"] as $reply) {
                                    if($reply['prino'] == $comment['idx'] && $reply['depno'] == '1') {
                                        $depth = "대댓글";
                                        ?>
                                        <tr data-order="<?=$reply['idx']?>" class="reply-row">
                                            <td style="width:15%;"><?=$depth?></td>
                                            <td style="width:15%;" class="reply-content">
                                                <div class="reply-indent">↳ <?=$reply['comment']?></div>
                                            </td>
                                            <td style="width:15%;"><?=$reply['wdate']?></td>
                                            <td style="width:10%;">
                                                <div class="btns">
                                                    <button type="button" class="btn del" onclick="boardDel(<?=$reply['idx']?>)">삭제</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                            }
                        }
                    } else {
                        ?>
                        <tr height="100">
                            <td colspan="5">등록된 데이터가 없습니다.</td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bdr_btm">
            <div class="paging">
                <?
                ############### paging ############### ST
                $queryString = explode("&",$_SERVER['QUERY_STRING']);
                $reQueryString = "";
                $comma = "";
                for($i=0;$i<count($queryString);$i++){
                    if(strpos($queryString[$i],"offset=")===false){
                        $reQueryString .= $comma.$queryString[$i];
                        $comma = "&";
                    }
                }
                echo pageNavigationBackoffice($arrBoardList["total"],$arrBoardInfo["list"][0]["scale"],$arrBoardInfo["list"][0]["pagescale"],$_GET['offset'],$reQueryString);
                ############### paging ############### ED
                ?>
            </div>
            <!-- 			<div class="btns">
				<a href="javascript:void(0);" onclick="getSelections()" class="btn btn_del">선택삭제</a>
				<a href="<?=$_SERVER["PHP_SELF"]?>?boardid=<?=$arrBoardInfo["list"][0]["boardid"]?>&mode=write&category=<?=$_GET['category']?>" class="btn">신규등록</a>
			</div> -->
        </div>
    </div>
    </div>
    <style>
        /* 대댓글 스타일링 */
        .reply-row {
            background-color: #f8f9fa;
        }

        .reply-icon {
            color: #999;
            font-weight: bold;
            margin-right: 5px;
        }

        .reply-indent {
            padding-left: 20px;
            position: relative;
        }

        .reply-indent:before {
            content: '';
            left: 8px;
            top: 50%;
            width: 2px;
            height: 2px;
            background-color: #999;
            border-radius: 50%;
        }

        .reply-row td {
            border-top: 1px solid #eee;
        }
    </style>
    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function(){
//달력
            $(".datepicker").datepicker({
                dateFormat: 'yy-mm-dd',
                showMonthAfterYear:true,
                showOn: "both",
                buttonImage: "/images/icon_month.gif",
                buttonImageOnly: true,
                changeYear: true,
                changeMonth: true,
                yearRange: 'c-100:c+10',
                yearSuffix: "년 ",
                monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                dayNamesMin: ['일','월','화','수','목','금','토']
            });
//체크박스
            var $allCheck = $('#allCheck');
            $allCheck.change(function () {
                var $this = $(this);
                var checked = $this.prop('checked');
                $('input[name="chk_list"]').prop('checked', checked);
            });
            var boxes = $('input[name="chk_list"]');
            boxes.change(function () {
                var boxLength = boxes.length;
                var checkedLength = $('input[name="chk_list"]:checked').length;
                var selectallCheck = (boxLength == checkedLength);
                $allCheck.prop('checked', selectallCheck);
            });
        });
        //]]>
    </script>
    <?
}else {###################################################### 사용자 페이지 ######################################################

}?>