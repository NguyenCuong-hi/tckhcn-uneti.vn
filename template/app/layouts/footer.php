<!-- start footer Area -->
<?php

use Database\DataBase;

?>
<style>
    .footer-area {
        /*background-image: url("public/banner-image/banner_khcn_footer_.jpg");*/
        padding: 1vh 0;
        color: aliceblue;
        margin-top: 1vh;
        /* position: fixed;
        z-index:9999; */
    }

    .footer-area .container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .footer-area img {
        width: 4vw;
        height:4vh;
        margin-right: 1vw;
    }

    .footer-area u {
        font-size: 18px;
        font-weight: bold;
        text-decoration: underline;
    }
    .footer-area i {
        font-size: 0.8vw;
        font-weight: bold;
       
    }
    .footer-area hr {
        border: none;
        height: 0.1vw;
        background-color: #ccc;
        margin-top: 1vh;
        margin-bottom: 10px;
    }

    .footer-area p {
        font-size: 0.8vw;
        margin-bottom: 0;
        font-weight: 500;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .footer-area h3 {
        font-size: 1vw;
        font-weight: bold;
        margin-bottom: 0;
       

    }
    .footer-area span{
        font-size: 1vw;
    }

    .footer-area h4 {
        font-size: 1.3vw;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .footer-area .container > div:first-child {
        display: flex;
        align-items: flex-start;
    }

    .footer-area .container > div:first-child > div:first-child {
        margin-right: 10px;
    }

    .footer-area .container > div:last-child {
        flex: 1;
        margin-left: 40px;
    }

    .footer-area .container > div:last-child p:last-child {
        margin-bottom: 0;
    }
    .imgfooter{
        width:95%; 
        height:5vh;
        border-radius: 15%;
    }
    @media screen and (min-width: 768px) {
        .imgfooter{
            width:90%; 
        height:20vh;
    }
    .footer-area img {
        width: 4.5vw;
        height: 44%;
        margin-right: 1vw;
    }
}
</style>
<footer class="footer-area section-gap" style="background-image: url('https://png.pngtree.com/background/20210710/original/pngtree-blue-technology-web-banner-picture-image_1038231.jpg'); background-size: cover; background-repeat: no-repeat">
    <div style="width: 100%; display: flex; ">
  <div>
                    <img src="<?=url('./public/banner-image/logo.png')?>" alt="">
                </div>
        <div style="width:80%; ">
        
            <div style=" display: flex;">
              
                <div>
                    <div style="border-bottom: 0.3vw solid #fff;" >
                    <p style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                        <span style="text-transform: uppercase; font-weight: 700; margin-right: 10px;">Tạp chí khóa học & công nghệ trường Đại học Kinh tế - Kỹ thuật Công nghiệp</span> </p>
                   </div>
                   <p style="font-weight: 700;margin-right: 10px;">JOURNAL OF SCIENCE & TECHNOLOGY UNIVERSITY OF ECONOMICS - TECHNOLOGY FOR INDUSTRIES
                    </p>
                </div>
            </div>
            <div style=" display:flex;" >
                <div  style="width:45%;">
                      <p>Cơ quan chủ quản: Trường Đại học Kinh tế - Kỹ thuật Công nghiệp</p>
                <p>Giấy phép hoạt động số: 193/GP-BTTTT ngày 02-06-2023</p>
                <p>Cơ quan cấp phép: Bộ Thông tin và Truyền thông</p>
                <p>Copyright © 2022 Trường Đại học Kinh tế - Kỹ thuật Công nghiệp</p>
                </div>

              <div style="width:55%;">
                 <h3>Thông tin liên hệ</h3>
            <p> Phòng 402 - Nhà HA.11, Trường Đại học Kinh tế - Kỹ thuật Công nghiệp, Số 218
                Lĩnh Nam, Hoàng Mai, Hà Nội.

            </p>
            <p>Số diện thoại: 024.36321493</p>
            <p>Email: tapchikhcn@uneti.edu.vn</p>
              </div>
            </div>
        </div>
        <div style=" width:20%;">
           
            
            <div>

<iframe class = "imgfooter" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.3077152215537!2d105.8736443747645!3d20.980298780656934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135afd765487289%3A0x21bd5839ba683d5f!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBLaW5oIFThur8gLSBL4bu5IFRodeG6rXQgQ8O0bmcgTmdoaeG7h3A!5e0!3m2!1svi!2s!4v1689386949867!5m2!1svi!2s"
  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
        </div>
    </div>

</footer>
<!-- End footer Area -->
<script src="<?= asset('public/app/js/vendor/jquery-2.2.4.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="<?= asset('public/app/js/vendor/bootstrap.min.js') ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="<?= asset('public/app/js/easing.min.js') ?>"></script>
<script src="<?= asset('public/app/js/hoverIntent.js') ?>"></script>
<script src="<?= asset('public/app/js/superfish.min.js') ?>"></script>
<script src="<?= asset('public/app/js/jquery.ajaxchimp.min.js') ?>"></script>
<script src="<?= asset('public/app/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= asset('public/app/js/mn-accordion.js') ?>"></script>
<script src="<?= asset('public/app/js/jquery-ui.js') ?>"></script>
<script src="<?= asset('public/app/js/jquery.nice-select.min.js') ?>"></script>
<script src="<?= asset('public/app/js/owl.carousel.min.js') ?>"></script>
<script src="<?= asset('public/app/js/mail-script.js') ?>"></script>
<script src="<?= asset('public/app/js/main.js') ?>"></script>
</div>

</body>

</html>