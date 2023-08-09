<html>

</html>
<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
require 'vendor/autoload.php';

?>

<script src="../../plugins/ViewerJS/compatibility.js"></script>
<script src="../../plugins/ViewerJS/jquery.js"></script>
<script src="../../plugins/ViewerJS/viewer.js"></script>
<link rel="stylesheet" type="text/css" href="../../plugins/ViewerJS/viewer.css">

<style>
    .phongto {
        width: 40px;
        height: 40px;
    }

    .icon-phongto {s
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

            <div  class="suanh2" style="position: relative;  background-color: #D1D1D1; margin-top: 10px">
                <div class="phongto" style="position: absolute; top: 0; right: 0;">
                </div>
                <?php if (empty($result_file) || !file_exists($result_file['file'])): ?>
                    <p style="text-align: center; justify-content: center">Không có bài viết để hiển thị</p>
                <?php else : ?>
                <?php
                    $src = ' https://drive.google.com/viewerng/viewer?embedded=true&url=' . $result_file['file'];?>

                    <iframe src="<?=$src?>" height="100%" width="100%"></iframe>

                <?php endif; ?>
            </div>

        </div>

    </div>
    <?php
    require_once(BASE_PATH . '/template/app/layouts/banner-right.php');
    ?>
</div>

<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>