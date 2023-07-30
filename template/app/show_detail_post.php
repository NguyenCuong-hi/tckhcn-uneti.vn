<html>

</html>
<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
require 'vendor/autoload.php';
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Writer\PDF\DomPDF;
use PhpOffice\PhpWord\Shared\ZipArchive;
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
    .suanh{
        width: 100%;   height: 40vh;

    }
    .suanh2{
        width: 80%;  height: 40vh;
    }
    @media screen and (min-width: 768px) {
        .suanh {
          
            width: 100%; height: 650px;
     }
     .suanh2{
       
        width: 80%; height: 650px;
     }
}

</style>
<div class="body_getdata" style="display: flex; margin-top: 30px; margin-right: 32px">

    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>



    <div style="width: 62%; margin: 0; padding: 4px; box-sizing: border-box">
        <div style="display: flex; flex-direction: column; align-items: center;">


            <?php
            foreach ($result_image as $item):
                ?>
                <div  style="width: 80%;border: 1px solid #D1D1D1; justify-content: center; margin-bottom: 70px;">
                    <img class="suanh"  src="<?= url($item['image']) ?> " alt="">
                </div>
            <?php endforeach; ?>


            <?php foreach ($result_file as $file): ?>
            <div  class="suanh2" style="position: relative;  background-color: #D1D1D1; margin-top: 10px">
                <div class="phongto" style="position: absolute; top: 0; right: 0;">
                </div>
                <?php if (empty($file) || !file_exists($file['file'])): ?>
                    <p style="text-align: center; justify-content: center">Không có bài viết để hiển thị</p>
                <?php else : ?>

                <?php $extension = pathinfo($file['file'], PATHINFO_EXTENSION);
                $src = '';
                    if($extension === 'docx'){
                        $src = ' https://view.officeapps.live.com/op/view.aspx?src='. url($file['file']);
                    }
                    if($extension === 'pdf'){

                        $src = url($file['file']);

                    }
                ?>
                    <script type="text/javascript" src="jquery.min.js"></script>
                    <script type="text/javascript" src="jquery.gdocsviewer.min.js"></script>
                    <script type="text/javascript">
                        $(document).ready(function (){
                            $('iframe').gdocsViewer({width: 600, height:700});
                            $('').gdocsViewer();
                        });
                    </script>

                    <iframe loading="lazy" src="<?=$src?>"
                            style="width: 100%; height: 100%; border: none;">
                    </iframe>

                <?php endif; ?>

            </div>


            <?php endforeach; ?>

        </div>

        <div>

        </div>
    </div>
    <div class="img_lienket" style="width: 15%; text-align: center; margin-top: 2vh;" >
        <H4 style="font-size: 1.1vw; color: #155fa2; font-family: 'Times New Roman', Times, serif; "> LIÊN KẾT
            WEBSITE</H4>
            <img style="width: 100%" src="<?=url('./public/banner-image/bo-cong-thuong.png')?>">
        <img style="width: 100%" src="<?=url('./public/banner-image/DHKTKTCN.png')?>">
        <img style="width: 100%" src="<?=url('./public/banner-image/khcn.png')?>">


    </div>




</div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>