<html>

</html>
<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');

?>

<!--xu ly hien thi o day-->

<div style="display: flex;  margin-top: 30px; margin-right: 32px">

    <?php
    require_once(BASE_PATH . '/template/app/layouts/menuleft.php');
    ?>
    <style>
        .body_data {
            style =
            width: 60%;
            display: flex;
            flex-direction: column;
            padding: 4px;
            box-sizing: border-box
        }

        .contact-info {
            text-align: center;


        }

        .contact-details {
            text-align: left;
            margin-bottom: 8px;
        }

        .contact-item {
            margin-left: 30px;
            margin-top: 10px;
        }

        .contact {
            font-size: 16px;
        }


    </style>

    <div class="body_data" style="width: 62%;  padding: 4px; box-sizing: border-box">
        <div class="contact">
            <div class="contact-info">
                <a style=" font-weight: 600; font-size: 27px; color: #348fde"> THÔNG TIN LIÊN HỆ </a>
            </div>
            <div class="contact-details">
                <div class="contact-item">
                    <p style="font-style: italic; font-size: 20px">Nội dung chi tiết và thông tin liên hệ xin gửi
                        về:</p>
                    <p style="font-weight: bold; font-style: normal; font-size:26px;color: #348fde">TÒA SOẠN TẠP CHÍ KHOA HỌC &amp; CÔNG NGHỆ</p>
                    <p style="font-size:18px" >Phòng 402 – Nhà HA11, Trường Đại học Kinh tế - Kỹ thuật Công nghiệp, số 218 Lĩnh Nam, Hoàng
                        Mai, Hà Nội</p>
                    <p style="font-size:18px">E-mail: <a href="tapchikhcn@uneti.edu.vn"><span style="text-decoration: underline;">tapchikhcn@uneti.edu.vn</span></a>;</p>
                    <p style="font-size:18px">Website: <a href="https://tckhcn-uneti.vn"><span style="text-decoration: underline;">https://tckhcn-uneti.vn </span></a></p>
                </div>
            </div>
        </div>
    </div>
    <!--    /////////////////////-->


    <div class="img_lienket" style="width: 15%; ">
        <img style="width: 100%" src="./public/banner-image/bo-cong-thuong.png">
        <img style="width: 100%" src="./public/banner-image/DHKTKTCN.png">
        <img style="width: 100%" src="./public/banner-image/khcn.png">
    </div>
</div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>

