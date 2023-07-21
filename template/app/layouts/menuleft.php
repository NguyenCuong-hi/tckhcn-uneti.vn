<?php

use Database\DataBase;

?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<div>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
<!--    <link rel="shortcut icon" href="--><?php //=asset($setting['icon'])?><!--">-->
<!--     Meta Description -->
<!--    <meta name="description" content="--><?php //=$setting['description']?><!--">-->
<!--    < Meta Keyword -->
<!--    <meta name="keywords" content="--><?php //=$setting['keywords']?><!--">-->
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title></title>
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
</div>

    <style>
        .menu_left {
            display: flex;
            padding-right: 32px;
            width: 23%;
            flex-direction: column;
            box-sizing: border-box;
            padding: 8px;
            color: white;
            font-size: 12px;
            font-weight: 700;
            color: white;
        }

        .menu_left > div {
            width: 100%;
            margin: 8px 0;
        }

        .menu_left button {
            color: white;
            font-weight: 700;
            border-radius: 8px;
            background-color: #348FDE;
            width: 100%;
            border: none;
            padding: 18px 18px;
        }

        /* Responsive */
        /* @media screen and (max-width: 768px) {
            .menu_left {
                width: 100%;
                padding-right: 0;
            }
        } */
        .menu_left{
            list-style: none;
            padding: 10px;
        }
        .menu_left a{
            text-decoration: none;
            color: #fff;
            background-color: #5B9BD5;
            padding: 3.5vh 1vw;
            border-radius: 5px;
            margin-bottom: 2%;
            text-align: left;
            font-size: medium;
            text-transform: uppercase;
            font-size: 1vw;
                        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .menu_left a:hover {
    transform: translateY(-2px) rotateX(8deg) rotateY(3deg);
}
    </style>

    <div class="menu_left">
        <a href="<?= url('/')?>">Trang chủ</a>
        <a href="<?= url('khoahoccongnghe')?>">Khoa học - công nghệ</a>
        <a href="<?= url('kinhtexahoi')?>">Kinh tế- xã hội</a>
        <a href="<?= url('diendankhoahoc')?>">Diễn đàn khoa học</a>
        <a href="<?= url('thongtintraodoi')?>">Thông tin trao đổi</a>
        <a href="<?= url('lienhe')?>">Liên hệ</a>
    </div>

