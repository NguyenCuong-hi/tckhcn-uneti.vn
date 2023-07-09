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

<body>
    <header>
        <div style="width: 100%; margin-bottom: 8px">
            <img style="width: 100%; height: 250px" src="../../../public/banner-image/banner-.png" />
        </div>

        <div class="header-top-right">
            <ul class="login-register" style="display: flex; justify-content: flex-end; margin: 0">
                <li style="list-style-type: none; margin: 8px"><a href="<?= url('login') ?>"><span class="lnr" style=" padding: 8px; width: 50px; background-color: yellow;" style="font-size:15px;">Login</span></a></li>
                <li style="list-style-type: none; margin: 8px"><a href="<?= url('register') ?>"><span class="lnr" style="padding: 8px; width: 50px;  background-color: yellow">Register</span></a></li>
            </ul>
        </div>

        <div style="display: flex ; justify-content: space-between; box-sizing: border-box; padding: 8px; color: white; font-size: 12px; font-weight: 700; color: white  " >
            <div style="width: 15%; ">
                <a href="#" style=" color: white;font-weight: 700; border-radius: 8px; background-color: #348FDE; width: 100%; border: none ; padding: 8px 18px">Trang chủ</a>
            </div>
            <div style="width: 15%">
                <a href="<?= url('khoahoccongnghe')?>" style="color: white; font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 8px 18px">Khoa học - công nghệ</a>
            </div>
            <div style="width: 15%">
                <a href="<?= url('kinhtexahoi')?>" style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 8px 18px">Kinh tế- xã hội</a>
            </div>
            <div style="width: 15% ">
                <a href="<?= url('diendankhoahoc')?>" style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 8px 18px">Diễn đàn khoa học</a>
            </div>
            <div style="width: 15% ">
                <a href="<?= url('thongtintraodoi')?>" style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 8px 18px"> Thông tin trao đổi</a>
            </div>
            <div style="width: 15%">
                <a href="<?= url('lienhe')?>" style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 8px 18px"> Liên hệ</a>
            </div>
        </div>

        <div class="Frame4" style=" background-color: #ccc ; height: 40px; box-shadow: 0px 2px 2px rgba(0,0,0,0.3); width: 100%; display: flex ; justify-content: space-around; box-sizing: border-box; padding: 8px;">
            <div class="current-date" style="  color: black; font-size: 12px; font-family: Inter; font-weight: 400">Chủ nhật, ngày 28 tháng 2 năm 2023</div>
            <div class="title-head" style="  color: #9C1A1A; font-size: 12px; font-family: Inter; font-weight: 700">Giáo dục và đào tạo cùng với khoa học và công nghệ là quốc sách hàng đầu </div>
            <div class="search-input" style=" color: black; font-size: 12px; font-family: Inter; font-weight: 700">
                <input placeholder="Tìm kiếm...">
            </div>
        </div>
    </header>
