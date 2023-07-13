<html>

</html>
<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');

?>

<style>

    .modal-4 a {
        margin: 0 5px;
        padding: 0;
        width: 30px;
        height: 30px;
        line-height: 30px;
        -moz-border-radius: 100%;
        -webkit-border-radius: 100%;
        border-radius: 100%;
        /* background-color: #3498DB; */
        font-size: 18px;
        color: #ffffff;
    }

    .modal-4 div {
        margin: 0 5px;
        padding: 0;
        width: 30px;
        height: 30px;
        line-height: 30px;
        -moz-border-radius: 100%;
        -webkit-border-radius: 100%;
        border-radius: 100%;
        background-color: #3498DB;
        font-size: 18px;
        color: #ffffff;
    }

    .modal-4 div.prev {
        background-color: #3498DB;
        -moz-border-radius: 50px 0 0 50px;
        -webkit-border-radius: 50px;
        border-radius: 50px 0 0 50px;
        width: 100px;
    }

    .modal-4 div.next {
        background-color: #3498DB;
        -moz-border-radius: 0 50px 50px 0;
        -webkit-border-radius: 0;
        border-radius: 0 50px 50px 0;
        width: 100px;
    }

    .modal-4 div:hover {
        background-color: #CDCD00;
    }

    .modal-4 div.active, .modal-4 div:active {
        background-color: #003333;
    }
</style>
<div style="display: flex;  margin-top: 30px; margin-right: 32px">

    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>
    <div style="width: 62%; display: flex;  flex-direction: column;
         padding: 10px 50px; box-sizing: border-box">
        <div style="width: 100%; display: flex; justify-content: center">
            <form method="GET" action="<?= url('diendankhoahoc') ?>"
                  style="display: flex; margin-right: 8px ; width: 100%;">
                <div style="display: flex; align-items: center; width: 80%;">
                    <div style="font-size: 16px; margin-right: 8px; display: flex;
                    flex-direction: column ; width: 100%">
                        <input type="text" name="keyword"
                               style="padding-left: 8px ; width: 100%; margin: 1px 3px;"/>
                        <button type="submit"
                                style=" margin-left: 3px; background-color: #ddd; border: none;
                            height: 30px;  border-radius: 4px; font-size: 16px; width: 92px;">
                            Tìm kiếm
                        </button>
                    </div>
                </div>

                <div style="display: flex; width: 50%">
                    <label style="margin-right: 8px; width: 50%">
                        <input type="radio" name="title"> Tiêu đề
                    </label>
                    <label style="width: 50%">
                        <input type="radio" name="author"> Tác giả
                    </label>
                </div>

            </form>

        </div>
        <div>
            <?php foreach ($data as $datas): ?>
                <div style="font-size: 16px; font-weight: 500; border-bottom: 2px dotted red;
                border-left: 2px solid rgb(241,243,244); padding-left: 30px;">
                    <span><a style=" font-weight: 600; font-size: 18px"
                             href="#"><?php echo $datas['title'] ?></a></span>
                    <div style=" margin-bottom: 8px; ">
                        <ul style="list-style-type: circle; margin-bottom: 8px">
                            <li>Tác giả: <?php echo $datas['author_name'] ?></li>
                            <li>Tạp chí xuất bản: <?php echo $datas['cat_name'] ?></li>
                            <li><a href="#">Tóm tắt</a></li>
                        </ul>
                    </div>
                    <div class="footer-element" style="text-align: end; margin-bottom: 8px; display: flex;
    justify-content: flex-end;">
                        <div class="icon" style="margin-right: 12px;">
                            <img style="max-width: 24px; max-height: 12px" src="../../public/banner-image/dowload.png"
                                 alt="Download Icon"/>
                        </div>
                        <div class="icon">
                            <img style="max-width: 24px; max-height: 12px" src="../../public/banner-image/eyes.png"
                                 alt="Eyes Icon"/>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>

    <div class="img_lienket" style="width: 15%; ">
        <img style="width: 100%" src="./public/banner-image/bo-cong-thuong.png">
        <img style="width: 100%" src="./public/banner-image/DHKTKTCN.png">
        <img style="width: 100%" src="./public/banner-image/khcn.png">

    </div>

</div>

<div style="text-align: center; justify-content:center; display:flex; margin:20px 0;">
    <ul class="pagination modal-4">
        <?php
        if ($current_page > 3) {
            $first_page = 1;
            ?>
            <li>
                <a href="?per_page=<?= $item_per_page ?> &page=<?= $first_page ?>">
                    <div class="prev">
                        <i class="fa fa-chevron-left"></i>
                        <i class="fa fa-chevron-left"></i>
                        Đầu
                    </div>

                </a>
            </li>
        <?php } ?>
        <?php
        if ($current_page > 1) {
            $prev_page = $current_page - 1;
            ?>
            <li>
                <a href="?per_page=<?= $item_per_page ?> &page=<?= $prev_page ?>">
                    <div class="next">
                        <i class="fa fa-chevron-left"></i>
                        Trước

                    </div>
                </a>
            </li>
        <?php } ?>
        <?php for ($num = 1; $num <= $totalPages; $num++) { ?>

            <?php if ($num != $current_page) { ?>
                <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
                    <li><a href="?per_page=<?= $item_per_page ?> &page=<?= $num ?>">
                            <div><?= $num ?></div>
                        </a></li>

                <?php } ?>
            <?php } else { ?>
                <li><a href="">
                        <div class="active"><?= $num ?></div>
                    </a></li>
            <?php } ?>
        <?php } ?>
        <?php
        if ($current_page < $totalPages - 1) {
            $next_page = $current_page + 1;
            ?>
            <li>
                <a href="?per_page=<?= $item_per_page ?> &page=<?= $next_page ?>">
                    <div class="next">
                        tiếp
                        <i class="fa fa-chevron-right"></i>

                    </div>
                </a>
            </li>
        <?php } ?>
        <?php
        if ($current_page < $totalPages - 3) {
            $end_page = $totalPages;
            ?>
            <li>
                <a href="?per_page=<?= $item_per_page ?> &page=<?= $end_page ?>">
                    <div class="next">
                        Cuối
                        <i class="fa fa-chevron-right"></i>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>