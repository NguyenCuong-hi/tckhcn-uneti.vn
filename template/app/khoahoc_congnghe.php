<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
?>

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

    <style>
        .footer-element {
            text-align: end;
            margin-bottom: 8px;
            display: flex;
            justify-content: flex-end;
        }

        .footer-element .icon {
            margin-left: 16px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .footer-element {
                justify-content: center;
            }

            .footer-element .icon {

                margin: 0 8px;
            }
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


    <div class="body_getdata" style="display: flex;  margin-top: 30px; margin-right: 32px">
        <div class="menu_right">
                <a href="<?= url('/')?>">Trang chủ</a>
                <a href="<?= url('khoahoccongnghe')?>">Khoa học - công nghệ</a>
                <a href="<?= url('kinhtexahoi')?>">Kinh tế- xã hội</a>
                <a href="<?= url('diendankhoahoc')?>">Diễn đàn khoa học</a>
                <a href="<?= url('thongtintraodoi')?>">Thông tin trao đổi</a>
                <a href="<?= url('lienhe')?>">Liên hệ</a>
        </div>


        <div class="body_data" style="width: 60%; display: flex; border: 1px solid #ddd; flex-direction: column; margin: 0 64px;
         padding: 4px; box-sizing: border-box">
            <div style="width: 100%; display: flex; justify-content: center">
                <form action="ScienceTechController.php" method="GET" style="display: flex; margin-right: 8px ; width: 100%;">
                    <div style=" font-size: 16px; margin-right: 8px ">
                        <input type="text"  name="search" style="padding-left: 8px" placeholder="Nhập từ khóa"/>
                    </div>
                    <label style="margin-right: 8px">
                        <input type="radio" name="title" value="title"> Tiêu đề
                    </label>
                    <label>
                        <input type="radio" name="author" value="author"> Tác giả
                    </label>
                    <button type="submit" style=" margin-left: 8px; background-color: #ddd; border: none; height: 30px;  border-radius: 4px; font-size: 16px">
                        Tìm kiếm
                    </button>
                </form>

            </div>
            <?php foreach ($data as $datas): ?>
            <div>
                <div style="font-size: 16px; font-weight: 500; border-bottom: 2px dotted red">
                    <span>
                        <a style=" font-weight: 600; font-size: 18px" href="#"> <?php echo $datas['title']; ?>
                            </a>
                    </span>
                    <div style=" margin-bottom: 8px">
                        <ul style="list-style-type: square; margin-bottom: 8px">
                            <li>Số tạp chí: <?php echo $datas['code_name'] ?></li>
                            <li>Tác giả: <?php echo $datas['author_name']?></li>
                            <li>Tạp chí xuất bản: <?php echo $datas['cat_name'] ?></li>
                            <li><a href="#">Tóm tắt</a></li>
                        </ul>
                    </div>
                    <div class="footer-element">
                        <div class="icon">
                            <img style="max-width: 24px; max-height: 12px" src="../../public/banner-image/dowload.png" alt="Download Icon" />
                        </div>
                        <div class="icon">
                            <img style="max-width: 24px; max-height: 12px" src="../../public/banner-image/eyes.png" alt="Eyes Icon" />
                        </div>
                    </div>

                </div>

            </div>
            <?php endforeach;?>
        </div>

        <div class="img_lienket" style="width: 20%; padding-left: 32px">
            <?php foreach ($get_image_sidebar as $image): ?>
                <img style="width: 100%" src="<?php echo $image['image'] ;?>">
            <?php endforeach; ?>
        </div>

    </div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>