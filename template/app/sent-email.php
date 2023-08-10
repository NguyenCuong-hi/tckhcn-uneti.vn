<?php
?>

<html lang="vi" xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#">
<head>
    <title>Hội thảo giới thiệu về Đổi mới sáng tạo và tập huấn Ý tưởng khởi nghiệp Sinh viên</title>
    <meta name="description"
          content="Hội thảo giới thiệu về Đổi mới sáng tạo và tập huấn Ý tưởng khởi nghiệp Sinh viên - Sendmail - Tin Tức -...">
    <meta name="author" content="PHÒNG KHOA HỌC CÔNG NGHỆ - UNETI">
    <meta name="copyright" content="PHÒNG KHOA HỌC CÔNG NGHỆ - UNETI [webmaster@phongkhcn.uneti.edu.vn]">
    <meta name="robots" content="index, archive, follow, noodp">
    <meta name="googlebot" content="index,archive,follow,noodp">
    <meta name="msnbot" content="all,index,follow">
    <meta name="generator" content="NukeViet v4.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="og:title"
          content="Hội thảo giới thiệu về Đổi mới sáng tạo và tập huấn Ý tưởng khởi nghiệp Sinh viên">
    <meta property="og:type" content="website">
    <meta property="og:description"
          content="Hội thảo giới thiệu về Đổi mới sáng tạo và tập huấn Ý tưởng khởi nghiệp Sinh viên - Sendmail - Tin Tức -...">
    <meta property="og:site_name" content="PHÒNG KHOA HỌC CÔNG NGHỆ - UNETI">
    <meta property="og:url"
          content="https://phongkhcn.uneti.edu.vn/vi/news/sendmail/hoi-thao/hoi-thao-gioi-thieu-ve-doi-moi-sang-tao-va-tap-huan-y-tuong-khoi-nghiep-sinh-vien-102.html">
    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="stylesheet" href="<?= asset('public/app/css/linearicons.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/animate.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/jquery-ui.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/main2.css') ?>">

    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>

    <style>
        body {
            padding: 20px;
            font-size: 11pt;
        }
    </style>
</head>
<body>
<div id="sendmail">
    <div class="panel panel-default">
        <div class="panel-body">
            <h1 class="text-center">Gửi bài viết qua email</h1>
            <form id="sendmailForm"
                  method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="sname" class="col-sm-4 control-label">Tên của bạn<em>*</em></label>
                    <div class="col-sm-20">
                        <input id="sname" type="text" name="name" value="" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="syourmail_iavim" class="col-sm-4 control-label">E-mail của bạn</label>
                    <div class="col-sm-20">
                        <input id="syourmail_iavim" type="text" name="youremail" value="" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="semail" class="col-sm-4 control-label">E-mail người nhận<em>*</em></label>
                    <div class="col-sm-20">
                        <input id="semail" type="text" name="email" value="" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="scontent" class="col-sm-4 control-label">Nội dung</label>
                    <div class="col-sm-20">
                        <textarea id="scontent" name="content" rows="5" cols="20" class="form-control"></textarea>
                    </div>
                </div>

                <input
                    type="hidden" name="id" value="102">

            </form>
            <button id="sendButton" type="submit" class="btn btn-default"> Gửi</button>
        </div>
    </div>
</div>

<script>

    document.getElementById("sendButton").addEventListener("click", function () {
        var email = document.getElementById("email").value;

        emailjs.init("");

        var messager = document.getElementById("scontent").value;
        var templateParams = {
            to_email: email,
            message: messager
        };

        emailjs.send("your_emailjs_service_id", "your_emailjs_template_id", templateParams)
            .then(function (response) {
                console.log("Email sent successfully!", response);
                alert("Email đã được gửi thành công!");
            }, function (error) {
                console.error("Email sending failed:", error);
                alert("Gửi email thất bại!");
            });

        document.getElementById("popup").style.display = "none";
        document.getElementById("overlay").style.display = "none";
    });
</script>

<div id="openidResult" class="nv-alert" style="display:none"></div>
<div id="openidBt" data-result="" data-redirect=""></div>
<script>
    var nv_base_siteurl = "/", nv_lang_data = "vi", nv_lang_interface = "vi", nv_name_variable = "nv",
        nv_fc_variable = "op", nv_lang_variable = "language", nv_module_name = "news", nv_func_name = "sendmail",
        nv_is_user = 0, nv_my_ofs = 7, nv_my_abbr = "+07", nv_cookie_prefix = "nv4", nv_check_pass_mstime = 1738000,
        nv_area_admin = 0, nv_safemode = 0, theme_responsive = 0, nv_is_recaptcha = 0;
</script>
<script src="/assets/js/language/vi.js?t=1618628632"></script>
<script src="/assets/js/global.js?t=1618628632"></script>
<script src="/themes/default/js/news.js?t=1618628632"></script>
<script src="/themes/default/js/main.js?t=1618628632"></script>
<script src="/themes/default/js/bootstrap.min.js?t=1618628632"></script>

</body>
</html>
