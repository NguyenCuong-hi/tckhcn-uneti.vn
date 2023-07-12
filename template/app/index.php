<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
?>
<style>
    .image-container {
    display: flex;
    overflow-x: scroll;
    scroll-snap-type: x mandatory;
}

.image-item {
    flex: 0 0 180px;
    flex-basis: calc(20% - 11px);
    margin-right: 32px;
    scroll-snap-align: start;
}

.image {
    margin-top: 20px;
    width: 180px;
    height: 261px;
    cursor: pointer;
    transition: transform .2s ease-out;
    border-radius: 25px;
}

.image:hover {
    transform: scale(1.1);
}

.image-title {
    width: 180px;
    height: auto;
    margin-bottom: 50px;
}

.image-container::-webkit-scrollbar {
    height: 8px;
}

.image-container::-webkit-scrollbar-thumb {
    background-color: #dddddd77;
    border-radius: 4px;
}

.image-container::-webkit-scrollbar-thumb:hover {
    background-color: #cccccc99;
}
</style>

    <style>
        .menu_right{
            list-style: none;
            padding: 10px;
        }
        .menu_right a{
            text-decoration: none;
            color: #fff;
            background-color: #3498db;
            padding: 20px 27px;
            border-radius: 5px;
            margin-bottom: 2%;
            text-align: center;
            font-size: medium;
        }

    </style>

    <style>
        .menu_right {
            display: flex;
            padding-right: 32px;
            width: 20%;
            flex-direction: column;
            box-sizing: border-box;
            padding: 8px;
            color: white;
            font-size: 12px;
            font-weight: 700;
            color: white;
        }

        .menu_right > div {
            width: 100%;
            margin: 8px 0;
        }

        .menu_right button {
            color: white;
            font-weight: 700;
            border-radius: 8px;
            background-color: #348FDE;
            width: 100%;
            border: none;
            padding: 18px 18px;
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            .menu_right {
                width: 100%;
                padding-right: 0;
            }
        }
    </style>

    <div class="body_getdata" style="display: flex;  margin-top: 30px; margin-right: 32px">
        <div class="menu_right">
            <a href="<?= url('/')?>">Trang chủ</a>
            <a href="<?= url('khoahoccongnghe')?>">Khoa học - công nghệ</a>
            <a href="<?= url('kinhtexahoi')?>">Kinh tế- xã hội</a>
            <a href="<?= url('diendankhoahoc')?>">Diễn đàn khoa học</a>
            <a href="<?= url('thongtintraodoi')?>">Thông tin trao đổi</a>
            <a href="<?= url('lienhe')?>">Liên hệ</a>
        </div>

        <!-- _________________________________________________________________________________ -->
        <div style="width: 60%; border: 1px solid #ddd; margin: 0 64px; padding: 4px; box-sizing: border-box">
            <div style="display: flex; flex: 1; justify-content: space-between">
                <!-- Cột giới thiệu -->
                <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">

                    <h3 style="text-align: center; text-transform: uppercase; color: #3734ea;font-weight: 700; font-size: 30px;">
                        Giới thiệu</h3>
                    <div style=" margin-bottom: 70px; display: flex; justify-content: center; align-items: center;">
                        <img style="border-radius: 5px; max-width: 580px;" src="<?php echo $get_image_body_gioithieu['image'];?>>"
                             alt="Giới thiệu">

                    </div>
                    <div style="margin-bottom: 70px; display: flex; justify-content:  center; align-items: center;">
                        <img style="border-radius: 5px; max-width: 580px; margin-bottom: 15px;"
                             src="../../../public/banner-image/gt3.png" alt="Giới thiệu">
                    </div>

                </div>
                <!-- Cột thông báo -->
                <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">

                    <h3 style="text-align: center; text-transform: uppercase; color: #3734ea;font-weight: 700; font-size: 30px;">
                        Thông báo</h3>
                    <div style=" margin-bottom: 70px; display: flex; justify-content: center; align-items: center;">
                        <img style="border-radius: 5px; max-width: 580px;" src="../../../public/banner-image/gt3.png"
                             alt="Giới thiệu">

                    </div>
                    <div style="margin-bottom: 70px; display: flex; justify-content:  center; align-items: center;">
                        <img style="border-radius: 5px; max-width: 580px; margin-bottom: 15px;"
                             src="../../../public/banner-image/gt3.png" alt="Giới thiệu">
                    </div>

                </div>
                <!-- Cột sự kiện -->
                <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">

                    <h3 style="text-align: center; text-transform: uppercase; color: #3734ea;font-weight: 700; font-size: 30px;">
                        Sự kiện</h3>
                    <div style=" margin-bottom: 70px; display: flex; justify-content: center; align-items: center;">
                        <img style="border-radius: 5px; max-width: 580px;" src="../../../public/banner-image/gt3.png"
                             alt="Giới thiệu">

                    </div>
                    <div style="margin-bottom: 70px; display: flex; justify-content:  center; align-items: center;">
                        <img style="border-radius: 5px; max-width: 580px; margin-bottom: 15px;"
                             src="../../../public/banner-image/gt3.png" alt="Giới thiệu">
                    </div>

                </div>
            </div>
            <div style="display: flex; flex: 1; justify-content: space-between">
                <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">
                    <h3 style="text-align: center; text-transform: uppercase; color: #3734ea;font-weight: 700; font-size: 30px;">
                        Gửi bài</h3>
                    <div style="display: flex; justify-content:  center; align-items: center;">
                        <a href="<?= url("guibai") ?>">
                            <img style="max-width: 580px;margin-bottom: 15px;" src="../../../public/banner-image/gt3.png"
                                 alt="Sự kiện">
                        </a>

                    </div>
                </div>
                <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">
                </div>
                <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">

                </div>

            </div>
        </div>

        <div style="width: 20%; padding-left: 32px">
            <?php foreach ($get_image_sidebar as $image): ?>
                <img style="width: 100%" src="<?php echo $image['image'] ;?>">
            <?php endforeach; ?>

        </div>
    </div>
    <!-- _________________________________________________________________________________ -->
<div>
    <div style="margin-left: 60px; margin-top: 30px;">
        <h3 style="text-align: left;  color: #3734ea;font-weight: 700; font-size: 30px;">Các số đã xuất bản</h3>
    </div>
    <div style="margin-left: 8%; margin-right:6%">


        <div style="  /* display: flex;*/
    flex-wrap: wrap;
    /*justify-content: center;*/ /* căn giữa các sản phẩm */
    margin-left: -20px;
    margin-right: -20px;
    margin-top: 50px;
    margin-bottom: 50px;">

            <div class="image-container">
                <?php foreach ($posts as $datas): ?>
                    <div class="image-item">
                        <img class="image" src="<?php echo $datas['image'] ?>" alt="Nhà xuất bản 1">
                        <div class="image-title">
                            <p style="margin-top: 20px;"><?php echo $datas['title'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>
    <script>
        const imageContainer = document.querySelector('.image-container');
        let isMouseDown = false;
        let startX = 0;
        let scrollLeft = 0;

        imageContainer.addEventListener('mousedown', (e) => {
            isMouseDown = true;
            startX = e.pageX - imageContainer.offsetLeft;
            scrollLeft = imageContainer.scrollLeft;
        });

        imageContainer.addEventListener('mouseleave', () => {
            isMouseDown = false;
        });

        imageContainer.addEventListener('mouseup', () => {
            isMouseDown = false;
        });

        imageContainer.addEventListener('mousemove', (e) => {
            if (!isMouseDown) return;
            e.preventDefault();
            const x = e.pageX - imageContainer.offsetLeft;
            const walk = (x - startX) * 2;
            imageContainer.scrollLeft = scrollLeft - walk;
        });

    </script>

    <!-- start footer Area -->
<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>