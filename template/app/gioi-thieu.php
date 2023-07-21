<html>

</html>
<?php

use App\IntroduceController;

require_once(BASE_PATH . '/template/app/layouts/header.php');

?>
<style>
.anhgt{
    width: 10vw; height: 8vh;
}
@media screen and (min-width: 768px) {
    .anhgt {
            width: 286px; height: 190px;
  }

}
</style>
<div class="body_getdata" style="display: flex;  margin-top: 30px; margin-right: 32px">
    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

    <div class="body_data" style="width: 62%; display: flex;  flex-direction: column; margin: 0 2vw;
         padding: 4px; box-sizing: border-box">

        <?php foreach ($data as $datas): ?>

            <div style="display: flex; font-weight: 500;  padding-bottom:2vh; margin-bottom: 18px;border-bottom: 2px dotted red">
                <!--            <div style="display: flex; width: 819px; height: 187.775px; padding-bottom: 0.800px; margin-bottom: 18px;border-bottom: 2px dotted red">-->

                <!--                <div style="font-size: 16px; font-weight: 500; border-bottom: 2px dotted red;
                                border-left: 2px solid rgb(241,243,244); padding-left: 30px;">-->
                <div>
                    <img class="anhgt"  src="<?=url($datas['banner_img'])?>">
                </div>

                <div style="padding-left: 1.5vw">
                    <div style="font-size: 1vw; font-weight: 500">
                    <span>
                        <?php $id = $datas['id'] ?>
                        <a style=" font-weight: 600; font-size: 1.3vw" href="<?= url('gioithieu/chi-tiet/' . $id) ?>"> <?php echo $datas['title']; ?>
                            </a>
                    </span>

                        <div style="display: flex; font-weight: 300">
                            <div>
                                <?php echo date("d/m/Y", strtotime($datas['created_at'])); ?> |
                            </div>
                            <div>
                                <a href="" style="font-weight: 500">Giới thiệu</a>
                            </div>
                        </div>

                        <div style=" margin:7px 0 ; font-size: 0.8vw">
                            <div id="summary">
                                <?php echo $datas['summary'] ?>
                            </div>
                            <script>
                                var contentElement = document.getElementById('summary');
                                var maxCharacters = 100;

                                if (contentElement.textContent.length > maxCharacters) {
                                    contentElement.textContent = contentElement.textContent.substr(0, maxCharacters) + '...';
                                }
                            </script>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <div class="img_lienket" style="width: 15%; text-align: center; margin-top: 2vh;" >
        <H4 style="font-size: 1.1vw; color: #155fa2; font-family: 'Times New Roman', Times, serif; "> LIÊN KẾT
            WEBSITE</H4>
        <a href="https://moit.gov.vn/"><img style="width: 100%" src="./public/banner-image/bo-cong-thuong.png"> </a>
        <a href="https://uneti.edu.vn/"><img style="width: 100%" src="./public/banner-image/DHKTKTCN.png"></a>
        <a href=""><img style="width: 100%" src="./public/banner-image/khcn.png"></a>


    </div>

</div>

<?php
require_once(BASE_PATH . '/template/app/layouts/phantrang.php')
?>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>