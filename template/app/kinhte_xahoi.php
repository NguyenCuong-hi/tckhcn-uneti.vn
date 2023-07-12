<html>

</html>
<?php

use App\SocioEconomicController;

require_once(BASE_PATH . '/template/app/layouts/header.php');

?>

    <div class="body_getdata" style="display: flex;  margin-top: 30px; margin-right: 32px">
        <?php require_once (BASE_PATH . '/template/app/layouts/menuleft.php')?>

        <div class="body_data" style="width: 60%; display: flex; border-left: 1px solid #ddd; flex-direction: column; margin: 0 64px;
         padding: 4px; box-sizing: border-box">
            <div style="width: 100%; display: flex; justify-content: center">
                <form method="GET" action="<?=url('kinhtexahoi')?>" style="display: flex; margin-right: 8px ; width: 100%;">
                    <div style=" font-size: 16px; margin-right: 8px ">
                        <input type="text" name="keyword" style="padding-left: 8px" placeholder="Nhập từ khóa"/>
                    </div>
                    <label style="margin-right: 8px">
                        <input type="radio" name="title" value="title"> Tiêu đề
                    </label>
                    <label>
                        <input type="radio" name="author" value="author"> Tác giả
                    </label>
                    <button style=" margin-left: 8px; background-color: #ddd; border: none; height: 30px;  border-radius: 4px; font-size: 16px">
                        Tìm kiếm
                    </button>
                </form>

            </div>

<!--            Hiển thị data ra màn hình -->
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
                                <li>Tác giả: <?php echo $datas['author_name'] ?></li>
                                <li>Tạp chí xuất bản: <?php echo $datas['cat_name'] ?></li>
                                <li><a href="#">Tóm tắt</a></li>
                            </ul>
                        </div>
                        <div class="footer-element" style="text-align: end; margin-bottom: 8px; display: flex;
    justify-content: flex-end;">
                            <div class="icon" style="margin-right: 12px;">
                                <img style="max-width: 24px; max-height: 19px ;margin: -4px 4px 2px;" src="/OnlineNewsSite/public/banner-image/dowload.png" alt="Download Icon" />
                            </div>
                            <div class="icon">
                                <img style="max-width: 24px; max-height: 19px;" src="/OnlineNewsSite/public/banner-image/eyes.png" alt="Eyes Icon" />
                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>

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