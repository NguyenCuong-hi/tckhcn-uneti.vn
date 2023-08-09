<html>

</html>
<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');

?>

<!--xu ly hien thi o day-->

<div style="display: flex;  margin-top: 45px; margin-right: 32px">

    <?php
    require_once(BASE_PATH . '/template/app/layouts/menuleft.php');
    ?>
    <style>
        .body_data {
            
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
        .contact-item p{
            font-family: "Times New Roman";
            font-weight: 530;
        }


    </style>

    <div class="body_data" style="width: 62%;  padding: 0 1.3vw 0 1vw; box-sizing: border-box">
        <div class="contact">
            <div class="contact-info">
                <a style=" font-weight: 700; font-size: 1.7vw; color: #2b2bff"> THÔNG TIN LIÊN HỆ </a>
            </div>
            <div class="contact-details">
                <div class="contact-item">
                    <p style="font-style: italic; font-size: 1.6vw; font-weight: bold">Nội dung chi tiết và thông tin liên hệ xin gửi
                        về:</p>
                    <p style="font-weight: bold; font-style: normal; font-size: 1.6vw;;color: #2b2bff">TÒA SOẠN TẠP CHÍ KHOA HỌC &amp; CÔNG NGHỆ</p>
                    <p style="font-size: 1.2vw;" >Phòng 402 – Nhà HA11, Trường Đại học Kinh tế - Kỹ thuật Công nghiệp, số 218 Lĩnh Nam, Hoàng
                        Mai, Hà Nội</p>
                    <p style="font-size: 1.2vw;">E-mail: <a href="tapchikhcn@uneti.edu.vn"><span style="text-decoration: underline;">tapchikhcn@uneti.edu.vn</span></a>;</p>
                    <p style="font-size: 1.2vw;">Website: <a href="https://tckhcn-uneti.vn"><span style="text-decoration: underline;">https://tckhcn-uneti.vn </span></a></p>
                </div>
            </div>
        </div>
    </div>
    <!--    /////////////////////-->


    <?php require_once(BASE_PATH . '/template/app/layouts/banner-right.php') ?>
</div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>

