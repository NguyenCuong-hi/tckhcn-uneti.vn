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

    <div class="body_data" style="width: 62%;  padding: 4px; box-sizing: border-box">
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


    <div class="img_lienket" style="width: 15%; text-align: center; margin-top: 2vh;" >
        <H4 style="font-size: 1.1vw; color: #155fa2; font-family: 'Times New Roman', Times, serif; "> LIÊN KẾT
            WEBSITE</H4>
        <a href="https://moit.gov.vn/"><img style="width: 100%" src="./public/banner-image/bo-cong-thuong.png"> </a>
        <a href="https://uneti.edu.vn/"><img style="width: 100%" src="./public/banner-image/DHKTKTCN.png"></a>
        <a href=""><img style="width: 100%" src="./public/banner-image/khcn.png"></a>


    </div>
</div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>

