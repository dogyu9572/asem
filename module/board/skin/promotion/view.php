<?if($_SESSION[$_SITE["DOMAIN"]]["ADMIN"]["ID"] && $_SERVER["PHP_SELF"]=="/backoffice/module/board/board_view.php"){
    if(!in_array("biz_manage",$_SESSION[$_SITE["DOMAIN"]]["ADMIN"]["AUTH"]) && $_SESSION[$_SITE["DOMAIN"]]["ADMIN"]["GRADE"]!="ROOT"):
        jsMsg("권한이 없습니다.");
        jsHistory("-1");
    endif;
###################################################### 관리자 페이지 ######################################################?>
    <script language="javascript">
        function fileDownload(boardid,b_idx,idx){
            obj = window.open("/module/board/download.php?boardid="+boardid+"&b_idx="+b_idx+"&idx="+idx,"urlCheck","width=100,height=100,menubars=0, toolbars=0");
        }
        <script type="text/javascript">
        <!--
        function boardDel(val){
            if(confirm("삭제 하시겠습니까?")) {
                $.post("/module/board/ajax_board_del.php", { evnMode: "delete", g_idx: val, boardid: "<?=$arrBoardInfo["list"][0]["boardid"]?>" },
		function(data){
			//alert(data);
			doLoad();
		});
	}
}
function doLoad(){
	location.href="<?=$_SERVER["PHP_SELF"]?>?boardid=<?=$arrBoardInfo["list"][0]["boardid"]?>&mode=list&sk=<?=$_GET['sk']?>&sw=<?=$_GET['sw']?>&offset=<?=$_GET['offset']?>&category=<?=$_GET['category']?>";
}
//-->
    </script>
    <div id="admin-content">
        <h2 class="admin-title"><?=$arrBoardInfo["list"][0]["boardname"]?> - View</h2>
        <table class="viewTable">
            <colgroup><col width="110px" /><col width="*" /><col width="110px" /><col width="20%" /><col width="110px" /><col width="20%" /></colgroup>
            <thead>
            <tr>
                <th colspan="6"><?=stripslashes($arrBoardArticle["list"][0]['subject'])?></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>작성자</th>
                <td><?=stripslashes($arrBoardArticle["list"][0]['name'])?></td>
                <th>조회수</th>
                <td colspan="3"><?=number_format($arrBoardArticle["list"][0]['hit'])?></td>
            </tr>
            <tr>
                <td class="ct" colspan="6">
                    <div style="min-height:100px;"><?=stripslashes($arrBoardArticle["list"][0]['contents'])?></div>
                </td>
            </tr>
            <tr>
                <th>키워드</th>
                <td colspan="5">
                    <?=stripslashes($arrBoardArticle["list"][0]['etc_1'])?>
                </td>
            </tr>
            <tr>
                <th>첨부파일</th>
                <td colspan="5" class="file">
                    <?for($i=0;$i<$arrBoardArticle["total_files"];$i++){?>
                        <a href="javascript:void(0);" onclick="fileDownload('<?=$arrBoardArticle["files"][$i]['boardid']?>','<?=$arrBoardArticle["files"][$i]['b_idx']?>','<?=$arrBoardArticle["files"][$i]['idx']?>');"><?=$arrBoardArticle["files"][$i]['ori_name']?></a>
                    <?}?>
                    <?if($i<1){?>
                        첨부파일이 없습니다.
                    <?}?>
                </td>
            </tr>
            <tr>
                <th>등록일시</th>
                <td><?=$arrBoardArticle["list"][0]['wdate']?></td>
                <th>등록IP</th>
                <td colspan="3"><?=stripslashes($arrBoardArticle["list"][0]['ip'])?></td>
            </tr>
            </tbody>
        </table>
        <p class="btn_l">
            <a href="<?=$_SERVER["PHP_SELF"]?>?boardid=<?=$arrBoardInfo["list"][0]["boardid"]?>&mode=list&sk=<?=$_GET['sk']?>&sw=<?=$_GET['sw']?>&offset=<?=$_GET['offset']?>&category=<?=$_GET['category']?>" class="btn_box act_list">목록보기</a>
        </p>
        <p class="btn_r">
            <a href="javascript:void(0);" onclick="boardDel(<?=$arrBoardArticle["list"][0]['idx']?>)" class="btn_box black act_del">삭제</a>
            <a href="<?=$_SERVER["PHP_SELF"]?>?boardid=<?=$arrBoardInfo["list"][0]["boardid"]?>&mode=modify&idx=<?=$arrBoardArticle["list"][0]['idx']?>&category=<?=$_GET['category']?>" class="btn_box act_upt">수정</a>
        </p>
        <dl class="more_list">
            <dt>이전글</dt><dd><?if($arrBoardArticle["prev"]["idx"] !=0):?><a href="<?=$_SERVER["PHP_SELF"]?>?boardid=<?=$arrBoardInfo["list"][0]["boardid"]?>&mode=view&idx=<?=$arrBoardArticle["prev"]["idx"]?>&category=<?=$_GET['category']?>" title="<?=$arrBoardArticle["prev"]["subject"]?>" class="act_view"><?=text_cut($arrBoardArticle["prev"]["subject"],$arrBoardInfo["list"][0]['subjectcut'])?></a><?else:?><a href="javascript:void(0);">이전글이 없습니다.</a><?endif;?></dd>
            <dt>다음글</dt><dd><?if($arrBoardArticle["next"]["idx"] !=0):?><a href="<?=$_SERVER["PHP_SELF"]?>?boardid=<?=$arrBoardInfo["list"][0]["boardid"]?>&mode=view&idx=<?=$arrBoardArticle["next"]["idx"]?>&category=<?=$_GET['category']?>" title="<?=$arrBoardArticle["next"]["subject"]?>" class="act_view"><?=text_cut($arrBoardArticle["next"]["subject"],$arrBoardInfo["list"][0]['subjectcut'])?></a><?else:?><a href="javascript:void(0);">다음글이 없습니다.</a><?endif;?></dd>
        </dl>
    </div>
<?}else{###################################################### 사용자 페이지 ######################################################?>
    <script language="javascript">
        function fileDownload(boardid, b_idx, idx) {
            document.fileFrm.boardid.value = boardid;
            document.fileFrm.b_idx.value = b_idx;
            document.fileFrm.idx.value = idx;
            document.fileFrm.target = "fileFrame";
            document.fileFrm.submit();
        }
    </script>
    <iframe name="fileFrame" style="display:none;"></iframe>
    <form name="fileFrm" action="/module/board/download.php"/>
    <input type="hidden" name="boardid"/>
    <input type="hidden" name="b_idx"/>
    <input type="hidden" name="idx"/>
    </form>
    <div class="inner">

        <div class="board_view">
            <div class="tit"><?=stripslashes($arrBoardArticle["list"][0]['subject'])?></div>
            <ul class="info">
                <li class="date"><?=date('Y.m.d', strtotime($arrBoardArticle["list"][0]['wdate']))?></li>
                <li class="writer"><?=stripslashes($arrBoardArticle["list"][0]['name'])?></li>
            </ul>
            <div class="con">
                <?=stripslashes($arrBoardArticle["list"][0]['contents'])?>
            </div>
            <? if ($arrBoardArticle["total_files"] > 0 ){ ?>
                <div class="file">
                    <?for($i=0;$i<$arrBoardArticle["total_files"];$i++){?>
                        <a href="javascript:void(0);" onclick="fileDownload('<?=$arrBoardArticle["files"][$i]['boardid']?>', '<?=$arrBoardArticle["files"][$i]['b_idx']?>', '<?=$arrBoardArticle["files"][$i]['idx']?>');"><?=$arrBoardArticle["files"][$i]['ori_name']?></a>
                    <?}?>
                </div>
            <?}?>
        </div>

        <!-- 댓글 영역 -->
        <div class="comments">
            <div class="tt">Comments</div>
            <!-- 댓글 작성 폼 -->
            <form name="commentFrm" method="post" action="/module/board/board_evn.php">
                <input type="hidden" name="evnMode" value="comment_write">
                <input type="hidden" name="boardid" value="<?=$arrBoardInfo["list"][0]["boardid"]?>">
                <input type="hidden" name="board_idx" value="<?=$arrBoardArticle["list"][0]["idx"]?>">
                <input type="hidden" name="depno" value="0">
                <input type="hidden" name="returnURL" value="<?=$_SERVER['REQUEST_URI']?>">
                <div class="write_box">
                    <div class="textarea">
                        <textarea name="comment" class="text content" cols="30" rows="4" maxlength="1000" placeholder="Comment"></textarea>
                        <span class="counter">0/1000</span>
                    </div>
                    <div class="captcha">
                        <div class="password"><input type="password" name="password" class="text" placeholder="Password" required></div>
                        <img src="/pub/images/img_captcha.png" alt="임시 캡챠 이미지">
                    </div>
                    <button type="submit" class="btn">POST COMMENT</button>
                </div>
            </form>

            <!-- 댓글 리스트 -->
            <div class="list">
                <?php if($arrCommentList["list"]["total"] > 0) {
                    foreach($arrCommentList["list"] as $comment) {
                        if($comment['depno'] == '0') { // 원본 댓글만 표시 ?>
                            <div class="box">
                                <div class="flex">
                                    <div class="imgfit"><img src="/pub/images/icon_human.svg" alt="image"></div>
                                    <div class="txt">
                                        <div class="tt"><?=htmlspecialchars($comment['comment'])?></div>
                                        <div class="co_info">
                                            <div class="date"><?=date('Y.m.d', strtotime($comment['wdate']))?></div>
                                            <button type="button" class="btn_re">Reply</button>
                                            <button type="button" class="btn_del" data-comment-id="<?=$comment['idx']?>">Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="rere_list">
                                    <!-- 대댓글 표시 -->
                                    <?php
                                    // 대댓글 표시 부분만 수정
                                    foreach($arrCommentList["list"] as $reply) {
                                        // 부모의 prino와 같고, reply의 depno가 1인 경우만 표시
                                        if($reply['prino'] == $comment['idx'] && $reply['depno'] == '1') { ?>
                                            <div class="box">
                                                <div class="flex">
                                                    <div class="imgfit"><img src="/pub/images/icon_human.svg" alt="reply"></div>
                                                    <div class="txt">
                                                        <div class="tt"><?=htmlspecialchars($reply['comment'])?></div>
                                                        <div class="co_info">
                                                            <div class="date"><?=date('Y.m.d', strtotime($reply['wdate']))?></div>
                                                            <button type="button" class="btn_del" data-comment-id="<?=$reply['idx']?>">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                    } ?>
                                    <!-- 대댓글 입력 폼 -->
                                    <form class="reply-form" style="display:none;" method="post" action="/module/board/board_evn.php">
                                        <input type="hidden" name="evnMode" value="comment_write">
                                        <input type="hidden" name="boardid" value="<?=$arrBoardInfo["list"][0]["boardid"]?>">
                                        <input type="hidden" name="board_idx" value="<?=$arrBoardArticle["list"][0]["idx"]?>">
                                        <input type="hidden" name="prino" value="<?=$comment['prino']?>">
                                        <input type="hidden" name="depno" value="1">
                                        <input type="hidden" name="returnURL" value="<?=$_SERVER['REQUEST_URI']?>">
                                        <div class="write_box">
                                            <div class="textarea">
                                                <textarea name="comment" class="text content" cols="30" rows="4" maxlength="1000" placeholder="Reply"></textarea>
                                                <span class="counter">0/1000</span>
                                            </div>
                                            <div class="captcha">
                                                <div class="password"><input type="password" name="password" class="text" placeholder="Password" required></div>
                                                <img src="/pub/images/img_captcha.png" alt="임시 캡챠 이미지">
                                            </div>
                                            <button type="submit" class="btn">POST REPLY</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php }
                    }
                }  ?>
            </div>
        </div>
    </div>

    <!-- 댓글 삭제 팝업 -->
    <div class="popup" id="popDelete">
        <div class="dm" onclick="closePop('popDelete')"></div>
        <div class="inbox">
            <button type="button" class="btn_close" onclick="closePop('popDelete')">닫기</button>
            <div class="apt_talks_start">
                <div class="tit">Delete Comment</div>
                <p class="desc">You must enter a password to delete this comment.</p>
                <div class="input_wrap">
                    <dl>
                        <dt>Password</dt>
                        <dd><input type="password" id="deletePassword" class="text" placeholder="Password"></dd>
                    </dl>
                    <div class="captcha">
                        <img src="/pub/images/img_captcha.png" alt="임시 캡챠 이미지">
                    </div>
                </div>
                <div class="btns">
                    <button type="button" class="btn" onclick="confirmDelete()">VERIFY</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function() {
            // 초기화 작업 및 이벤트 바인딩
            function init() {
                // 글자수 카운터
                $('.content').on('keyup', function() {
                    var content = $(this).val();
                    $(this).closest('.textarea').find('.counter').html(content.length + '/1000');
                });
                $('.content').keyup();

                // 초기 상태: 대댓글 영역 표시, 대댓글 폼 숨김
                $(".comments .list .rere_list").show();
                $(".comments .list .reply-form").hide();

                // 이벤트 바인딩 전 기존 이벤트 제거 (중복 방지)
                $(document).off('click', '.btn_re');
                $(document).off('click', '.btn_del');

                // Reply 버튼 클릭 이벤트
                $(document).on('click', '.btn_re', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    var $this = $(this);
                    var $replyForm = $this.closest('.box').find('.reply-form').first();

                    // 다른 답글 폼은 닫기
                    $('.reply-form').not($replyForm).slideUp();
                    $('.btn_re').not($this).removeClass('on');

                    // 현재 답글 폼 토글
                    $this.toggleClass('on');
                    $replyForm.slideToggle();
                });

                // 댓글 삭제 버튼 클릭
                $(document).on('click', '.btn_del', function(e) {
                    e.preventDefault();
                    var commentId = $(this).data('comment-id');
                    $('#deletePassword').data('comment-id', commentId);
                    openPop('popDelete');
                });

                // 댓글 폼 제출 전 검증
                $('form[name="commentFrm"], .reply-form').on('submit', function(e) {
                    var $form = $(this);
                    var content = $form.find('[name="comment"]').val().trim();
                    var password = $form.find('[name="password"]').val();

                    if (!content) {
                        alert('댓글 내용을 입력해주세요.');
                        return false;
                    }
                    if (!password) {
                        alert('비밀번호를 입력해주세요.');
                        return false;
                    }
                    return true;
                });

                // 댓글 영역 클릭 시 닫히지 않도록 처리
                $('.reply-form').on('click', function(e) {
                    e.stopPropagation();
                });
            }

            // 초기화 함수 실행
            init();
        });

        // 삭제 확인 함수
        function confirmDelete() {
            var commentId = $('#deletePassword').data('comment-id');
            var password = $('#deletePassword').val();

            if (!password) {
                alert('비밀번호를 입력해주세요.');
                return;
            }

            console.log('삭제 요청: ID=' + commentId + ', PW=' + password); // 디버깅용

            $.ajax({
                type: 'POST',
                url: '/module/board/board_evn.php',
                data: {
                    evnMode: 'comment_delete',
                    idx: commentId,
                    password: password
                },
                dataType: 'json',
                success: function(response) {
                    console.log('응답:', response); // 디버깅용

                    if (response.success) {
                        alert('댓글이 삭제되었습니다.');
                        location.reload();
                    } else {
                        alert(response.message || '댓글 삭제에 실패했습니다.');
                    }
                    closePop('popDelete');
                    $('#deletePassword').val('');
                },
                error: function(xhr, status, error) {
                    console.log('에러:', xhr.responseText); // 디버깅용
                    alert('서버 오류가 발생했습니다.');
                    closePop('popDelete');
                    $('#deletePassword').val('');
                }
            });
        }

        function openPop(id) {
            $(`#${id}`).fadeIn("fast");
        }

        function closePop(id) {
            $(`#${id}`).fadeOut("fast");
            if(id === 'popDelete') {
                $('#deletePassword').val('');
            }
        }
    </script>

<?}###################################################### 사용자 페이지 ###################################################### END ?>