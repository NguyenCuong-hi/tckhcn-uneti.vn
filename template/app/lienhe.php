<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');

?>

<!--xu ly hien thi o day-->

<div style="display: flex;  margin-top: 30px; margin-right: 32px">
    <div style="display: flex; padding-right: 32px; width: 20%; flex-direction: column; box-sizing: border-box; padding: 8px; color: white; font-size: 12px; font-weight: 700; color: white  ">
        <div style="width: 100%; margin: 8px 0">
            <Button style=" color: white;font-weight: 700; border-radius: 8px; background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                Trang chủ
            </Button>
        </div>
        <div style="width: 100%; margin: 8px 0">
            <Button style="color: white; font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                Khoa học - công nghệ
            </Button>
        </div>
        <div style="width: 100%; margin: 8px 0">
            <Button style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                Kinh tế- xã hội
            </Button>
        </div>
        <div style="width: 100%; margin: 8px 0 ">
            <Button style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                Diễn đàn khoa học
            </Button>
        </div>
        <div style="width: 100%; margin: 8px 0 ">
            <Button style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                Thông tin trao đổi
            </Button>
        </div>
        <div style="width: 100%; margin: 8px 0">
            <Button style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                Liên hệ
            </Button>
        </div>
    </div>

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
    <!---->
    <!--    <div class="contact">-->
    <!--        <div class="contact-info">-->
    <!--            <h3>THÔNG TIN LIÊN HỆ</h3>-->
    <!--        </div>-->
    <!---->
    <!--        <div class="contact-details">-->
    <!--            <div class="contact-item">-->
    <!--                <p style="font-weight: bold;font-style: italic;">Nội dung chi tiết và thông tin liên hệ xin gửi về:</p>-->
    <!--                <p style="font-weight: bold;">TÒA SOẠN TẠP CHÍ KHOA HỌC &amp; CÔNG NGHỆ</p>-->
    <!--                <p>Phòng 402 – Nhà HA11, Trường Đại học Kinh tế - Kỹ thuật Công nghiệp, số 218 Lĩnh Nam, Hoàng Mai, Hà Nội</p>-->
    <!--                <p>E-mail: <a href="tapchikhcn@uneti.edu.vn">tapchikhcn@uneti.edu.vn</a></p>-->
    <!--                <p>Website: <a href="https://tckhcn-uneti.vn">https://tckhcn-uneti.vn</a></p>-->
    <!--            </div>-->
    <!---->
    <!--        </div>-->
    <!--    </div>-->

    <!--    /////////////////////-->
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


    <div style="width: 20%; padding-left: 32px">
        <img style="width: 100%" src="../../../public/banner-image/bo-cong-thuong.png"/>
        <img style="width: 100%" src="../../../public/banner-image/DHKTKTCN.png"/>
        <img style="width: 100%" src="../../public/banner-image/khcn.png"/>

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
