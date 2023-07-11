<?php

use Database\DataBase;

?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?=asset($setting['icon'])?>">
    <!-- Meta Description -->
    <meta name="description" content="<?=$setting['description']?>">
    <!-- Meta Keyword -->
    <meta name="keywords" content="<?=$setting['keywords']?>">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title><?=$setting['title']?></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
		CSS
		============================================= -->
    <link rel="stylesheet" href="<?=asset('public/app/css/linearicons.css')?>">
    <link rel="stylesheet" href="<?=asset('public/app/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?=asset('public/app/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?=asset('public/app/css/magnific-popup.css')?>">
    <link rel="stylesheet" href="<?=asset('public/app/css/nice-select.css')?>">
    <link rel="stylesheet" href="<?=asset('public/app/css/animate.min.css')?>">
    <link rel="stylesheet" href="<?=asset('public/app/css/owl.carousel.css')?>">
    <link rel="stylesheet" href="<?=asset('public/app/css/jquery-ui.css')?>">
    <link rel="stylesheet" href="<?=asset('public/app/css/main2.css')?>">
</head>

<body style="width: 80%; margin: 0 auto ">
    <header>

        <style>
            .banner img {
                width: 100%;
                height: 250px;
            }

            .header-top-right {
                display: flex;
                justify-content: flex-end;
                margin: 0;
            }

            .header-top-right ul {
                display: flex;
                list-style-type: none;
                margin: 8px;
            }

            .header-top-right ul li {
                margin: 8px;
            }

            .menu {
                display: flex;
                justify-content: space-between;
                box-sizing: border-box;
                padding: 8px;
                color: white;
                font-size: 12px;
                font-weight: 700;
            }

            .menu a {
                color: white;
                font-weight: 700;
                border-radius: 8px;
                background-color: #348FDE;
                width: 100%;
                border: none;
                margin: 0 4px 0 4px;
                padding: 16px 8px;
                text-align: center;
                font-size: 14px;
            }

            .footer {
                background-color: #ccc;
                height: 40px;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                width: 100%;
                display: flex;
                justify-content: space-around;
                box-sizing: border-box;
                padding: 8px;
                border-top: 2px #9b3333 solid;
            }

            .current-date {
                color: black;
                font-size: 12px;
                font-family: Inter;
                font-weight: 400;
            }

            .title-head {
                color: #9C1A1A;
                font-size: 12px;
                font-family: Inter;
                font-weight: 700;
            }

            .search-input input {
                color: black;
                font-size: 12px;
                font-family: Inter;
                font-weight: 700;


            }
        </style>

        <div class="banner">
            <?php

            $db = new DataBase();
            $get_image = $db->select('SELECT image, url  FROM banners WHERE id = 13')->fetchAll();

            foreach ($get_image as $banner):
            ?>
            <img src="<?php echo $banner['image']?>" alt="Banner" />

            <?php endforeach; ?>
        </div>

<!--        <div class="header-top-right">-->
<!--            <ul class="login-register">-->
<!--                <li><a href="--><?php //= url('login') ?><!--"><span class="lnr">Login</span></a></li>-->
<!--                <li><a href="--><?php //= url('register') ?><!--"><span class="lnr">Register</span></a></li>-->
<!--            </ul>-->
<!--        </div>-->

        <div class="menu">
            <a href="<?= url('/')?>">Trang chủ</a>
            <a href="<?= url('khoahoccongnghe')?>">Khoa học - công nghệ</a>
            <a href="<?= url('kinhtexahoi')?>">Kinh tế- xã hội</a>
            <a href="<?= url('diendankhoahoc')?>">Diễn đàn khoa học</a>
            <a href="<?= url('thongtintraodoi')?>">Thông tin trao đổi</a>
            <a href="<?= url('lienhe')?>">Liên hệ</a>
        </div>

        <div class="footer">
            <div class="current-date" id="date">
                <script>
                    var daysOfWeek = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy'];
                    var monthsOfYear = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];

                    var today = new Date();
                    var dayOfWeek = daysOfWeek[today.getDay()];
                    var day = today.getDate();
                    var month = monthsOfYear[today.getMonth()];
                    var year = today.getFullYear();

                    var formattedDate = dayOfWeek + ', ngày ' + day + ' ' + month + ' năm ' + year;
                    document.getElementById('date').innerHTML = formattedDate;
                </script>
            </div>
            <div class="title-head">Giáo dục và đào tạo cùng với khoa học và công nghệ là quốc sách hàng đầu</div>
            <div class="search-input">
                <input type="text" placeholder="Tìm kiếm...">
            </div>
        </div>

    </header>
