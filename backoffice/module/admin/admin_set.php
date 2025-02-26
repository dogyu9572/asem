<?PHP
include $_SERVER['DOCUMENT_ROOT'] . "/backoffice/pub/inc/admin_top.php";
include "./menu.php";

if(!in_array("admin_manage",$_SESSION[$_SITE["DOMAIN"]]["ADMIN"]["AUTH"]) && $_SESSION[$_SITE["DOMAIN"]]["ADMIN"]["GRADE"]!="ROOT"):
	jsMsg("권한이 없습니다.");
	jsHistory("-1");
endif;
?>
<div class="container">

	<div class="title">기본정보설정</div>
	
	<div class="inbox write_tbl mo_break_write">
		<form name="frmInfo" method="post" action="admin_evn.php">
		<input type="hidden" name="evnMode" value="setAdmin">

		<div class="tit mb0">관리자정보 <i>*</i></div>
		<div class="tbl">
			<table>
				<tr>
					<th>홈페이지 이름</th>
					<td><div class="inputs"><input type="text" class="w4" name="shop_name" value="<?=$arrSetInfo["list"][0]['shop_name']?>"></div></td>
				</tr>
				<tr>
					<th>홈페이지 URL</th>
					<td><div class="inputs gap"><input type="text" class="w3" name="shop_url" value="<?=$arrSetInfo["list"][0]['shop_url']?$arrSetInfo["list"][0]['shop_url']:"https://"?>"><em> ※ 예) https://도메인주소</em></div></td>
				</tr>
				<tr>
					<th>관리자 이메일</th>
					<td><div class="inputs"><input type="text" class="w4" name="admin_email" value="<?=$arrSetInfo["list"][0]['admin_email']?>"></div></td>
				</tr>
			</table>
		</div>

		<div class="tit mb0">홈페이지 Title</div>
		<div class="tbl">
			<table>
				<tbody class="plus_minus plus_minus_devel">
					<tr>
						<th>홈페이지 이름</th>
						<td><div class="inputs"><input type="text" class="w4" name="shop_title" value="<?=$arrSetInfo["list"][0]['shop_title']?>"></div></td>
					</tr>
					<tr>
						<th>검색키워드</th>
						<td><div class="inputs"><input type="text" class="w4" name="shop_keyword" value="<?=$arrSetInfo["list"][0]['shop_keyword']?>"></div></td>
					</tr>
					<tr>
						<th>소개글</th>
						<td><div class="inputs"><input type="text" class="w4" name="shop_content" value="<?=$arrSetInfo["list"][0]['shop_content']?>"></div></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="btns">
			<button class="btn btn_save" type="submit">저장</button>
		</div>
		</form>
	</div> <!-- //inbox -->

</div>
<?php
######################################################## 디자인 ED
include $_SERVER['DOCUMENT_ROOT'] . "/backoffice/pub/inc/footer.php";
?>