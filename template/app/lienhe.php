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
            margin: 0 64px;
            padding: 4px;
            box-sizing: border-box
        }

        .contact-info {
            text-align: center;


        }

        /*.contact-info > h3 {*/
        /*    color: #00a8ff;*/
        /*    font-weight: bold;*/

        /*}*/

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

    <div class="body_data" style="width: 60%; display: flex; flex-direction: column; margin: 0 64px;
         padding: 4px; box-sizing: border-box">
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


    <div class="img_lienket" style="width: 20%; padding-left: 32px">
        <?php foreach ($get_image_sidebar as $image): ?>
            <img style="width: 100%" src="<?php echo $image['image'] ;?>">
        <?php endforeach; ?>
    </div>
</div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>


<!--hãy css cho đoạn sau-->
<!--THÔNG TIN LIÊN HỆ-->
<!--Nội dung chi tiết và thông tin liên hệ xin gửi về:-->
<!--TÒA SOẠN TẠP CHÍ KHOA HỌC & CÔNG-->
<!--NGHỆ-->
<!--Phòng 402 – Nhà HA11, Trường Đại học Kinh tế --->
<!--Kỹ thuật Công nghiệp, số 218 Lĩnh Nam, Hoàng-->
<!--Mai, Hà Nội-->
<!--E-mail: tapchikhcn@uneti.edu.vn;-->
<!--Website : https://tckhcn-uneti.vn-->
<!---->
<!--THÔNG TIN LIÊN HỆ thì ở giữa nội dung
Nội dung chi tiết và thông tin liên hệ xin gửi về
css cho nội dung chữ đậm, nét nghiêng

-->
