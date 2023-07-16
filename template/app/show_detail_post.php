<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
?>
<style>
    .phongto {
        width: 40px;
        height: 40px;
    }

    .icon-phongto {
        display: inline-block;
        width: 100%;
        height: 100%;
        background-image: url(//ssl.gstatic.com/docs/common/viewer/v3/v-sprite50.svg) !important;
        background-size: cover;
    }
</style>
<div class="body_getdata" style="display: flex; margin-top: 30px; margin-right: 32px">

    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>



    <div style="width: 62%; margin: 0; padding: 4px; box-sizing: border-box">
        <div style="display: flex; flex-direction: column; align-items: center;">


            <?php
            foreach ($result_image as $item):
                ?>
                <div style="width: 80%;border: 1px solid #D1D1D1; justify-content: center; margin-bottom: 70px;">
                    <img style="width: 100%; height: 650px;  " src="<?= url($item['image']) ?> " alt="">
                </div>
            <?php endforeach; ?>


            <div style="position: relative; width: 80%; height: 650px; background-color: #D1D1D1;">
                <div class="phongto" style="position: absolute; top: 0; right: 0;">
                    <span class="icon-phongto"></span>
                </div>
            </div>
            <p class="embed_download"><a href="https://uneti.edu.vn/wp-content/uploads/2022/09/pdf24_merged.pdf"
                    download="">Download File </a>
            </p>
        </div>

        <div>

        </div>
    </div>



    <div class="img_lienket" style="width: 15%; ">
        <img style="width: 100%" src="/OnlineNewsSite/public/banner-image/bo-cong-thuong.png">
        <img style="width: 100%" src="/OnlineNewsSite/public/banner-image/DHKTKTCN.png">
        <img style="width: 100%" src="/OnlineNewsSite/public/banner-image/khcn.png">
    </div>

</div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>