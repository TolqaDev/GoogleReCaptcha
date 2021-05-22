<?php
ob_start();
session_start();
$ssl = $_SERVER['HTTPS'];
$domain = $_SERVER['SERVER_NAME'];
if($ssl = "on"){
    define('base_url', 'https://'.$domain."/");
    define('base_link', 'https://'.$domain."/App/");
}else{
    define('base_url', 'http://'.$domain."/");
    define('base_link', 'http://'.$domain."/App/");
}?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
	<title>tolqa.dev - Google ReCaptcha</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo base_link;?>Config/images/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_link;?>Config/css/main.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" integrity="sha384-haqrlim99xjfMxRP6EWtafs0sB1WKcMdynwZleuUSwJR0mDeRYbhtY+KPMr+JL6f" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha512-rRQtF4V2wtAvXsou4iUAs2kXHi3Lj9NE7xJR77DE7GHsxgY9RTWy93dzMXgDIG8ToiRTD45VsDNdTiUagOFeZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css" integrity="sha512-SagM1PHxt5mWDyWARVY6UOdhM5A8J+R1UqIWcGfiwOd+be7uHQagB+JQOmfVZF8jjJQqbyuWzw/KXfb4yqjBkQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
                'sitekey' : 'your_site_key',
                //'callback' : verifyCallback,
                //'theme' : 'dark',
                //'theme' : 'light',
            });
        };
    </script>
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_link;?>Config/images/background.jpg');background-repeat: no-repeat;background-position: center;background-size: cover;">
			<div class="wrap-login100">
                <span class="login100-form-title p-b-49" style="font-size: 25px;">Google ReCaptcha<br><font style="font-size: 15px;">2 Aşamalı İnsan Doğrulama Sistemi.</font></span>
                <div id="html_element" style="transform: scale(.99);-webkit-transform: scale(0.92); transform-origin: 0 0;-webkit-transform-origin: 0 0;"></div><br>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn ReCaptchaChach">Doğrula</button>
                    </div>
                </div>
			</div>
		</div>
	</div>
    <script src="<?php echo base_link;?>Config/js/main.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js" integrity="sha512-pYd2QwnzV9JgtoARJf1Ui1q5+p1WHpeAz/M0sUJNprhDviO4zRo12GLlk4/sKBRUCtMHEmjgqo5zcrn8pkdhmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>