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
                    <!-- <img src="<?php // $item['image'] ;?> "> -->
                    <div style="display: flex; justify-content: center; margin-bottom: 70px;">
                        <img style="width: 70%; height: 650px;  " src="<?php $item['image']; ?> " alt="">
                    </div>
                    <?php //echo $item['image']?>
                <?php endforeach; ?>


                <div style="position: relative; width: 70%; height: 650px; background-color: #D1D1D1;">
                    <div class="phongto" style="position: absolute; top: 0; right: 0;">
                        <span class="icon-phongto"></span>
                    </div>
                </div>
                <p class="embed_download"><a href="https://uneti.edu.vn/wp-content/uploads/2022/09/pdf24_merged.pdf"
                                             download="">Download File </a></p>
            </div>
            <div class="ndfHFb-c4YZDc-GSQQnc-LgbsSe ndfHFb-c4YZDc-to915-LgbsSe VIpgJd-TzA9Ye-eEGnhe ndfHFb-c4YZDc-LgbsSe"
                 role="button" tabindex="0" data-tooltip-unhoverable="true" data-tooltip-delay="500"
                 data-tooltip-class="ndfHFb-c4YZDc-tk3N6e-suEOdc" data-tooltip-align="b,c" data-tooltip-offset="-6"
                 aria-label="Pop-out" data-tooltip="Pop-out" style="user-select: none;">
                <div class="ndfHFb-c4YZDc-Bz112c ndfHFb-c4YZDc-DH6Rkf-Bz112c"></div>
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