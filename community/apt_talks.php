<?php
// 세션 시작
session_start();
unset($_SESSION['apt_talks_authenticated']);
$gNum="04"; $sNum="02"; $gName="Community"; $sName="APT talks";

// 이미 인증된 사용자는 자바스크립트로 리다이렉트
if(isset($_SESSION['apt_talks_authenticated']) && $_SESSION['apt_talks_authenticated'] === true) {
	echo "<script>window.location.href='/community/apt_talks_list.php';</script>";
	exit;
}

include("../pub/inc/_dtd.php");
include("../pub/inc/_header.php");
include("../pub/inc/_aside.php");

// reCAPTCHA 확인 함수
function verifyCaptcha($recaptchaResponse) {
	$secretKey = "6Les5-gqAAAAAFwpEF7ELezIzL56YJ5WwD-P884e"; // reCAPTCHA 비밀 키로 변경하세요
	$url = "https://www.google.com/recaptcha/api/siteverify";
	$data = [
		'secret' => $secretKey,
		'response' => $recaptchaResponse
	];

	$options = [
		'http' => [
			'header' => "Content-type: application/x-www-form-urlencoded\r\n",
			'method' => 'POST',
			'content' => http_build_query($data)
		]
	];

	$context = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captchaResult = json_decode($verify);

	return $captchaResult->success;
}

// 비밀번호 제출 처리
if(isset($_POST['apt_password'])) {
	// reCAPTCHA 응답 확인
	$recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
	$captchaSuccess = false;

	if (!empty($recaptchaResponse)) {
		$captchaSuccess = verifyCaptcha($recaptchaResponse);
	}

	if ($captchaSuccess) {
		// reCAPTCHA 검증 성공, 비밀번호 확인
		if($_POST['apt_password'] === $arrSetInfo["list"][0]['apt_password']) {
			// 비밀번호 일치, 세션 설정
			$_SESSION['apt_talks_authenticated'] = true;
			// 자바스크립트로 리다이렉트
			echo "<script>window.location.href='/community/apt_talks_list.php';</script>";
			exit;
		} else {
			// 비밀번호 불일치
			$error_message = "Password does not match. Please try again.";
		}
	} else {
		// reCAPTCHA 실패
		$error_message = "Please verify that you are not a robot.";
	}
}
?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div id="mainContent" class="container g<?=$gNum?> s<?=$sNum?>">
    <div class="inner">
        <div class="apt_talks_start">
            <div class="tit">Limited Access Documents</div>
            <p>You must enter a password to access the list.</p>
			<?php if(isset($error_message)): ?>
                <p style="color: red;"><?php echo $error_message; ?></p>
			<?php endif; ?>
            <form method="post" action="">
                <dl>
                    <dt>Password</dt>
                    <dd><input type="text" name="apt_password" id="apt_password" class="text" placeholder="Password"></dd>
                </dl>
                <div class="captcha">
                    <!-- reCAPTCHA 위젯 삽입 -->
                    <div class="g-recaptcha" data-sitekey="6LeexOgqAAAAACyIx4ask5pv7TkCYDIbFmK1ljsx"></div>
                </div>
                <div class="btns">
                    <button type="submit" class="btn">VERIFY</button>
                </div>
            </form>
        </div>
    </div>
</div> <!-- //container -->
<?php include("../pub/inc/_footer.php") ?>