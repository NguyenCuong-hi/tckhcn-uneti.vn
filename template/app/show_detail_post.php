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

        </div>

        <h> DANH MỤC BÀI VIẾT </h>
        <table class="table tab-content">


            <tbody>
            <?php
            $counter = 1;
            foreach ($result_file as $file):
                $id = $file['id'];
                ?>
                <tr>
                    <td style="font-weight: normal; font-size: 1.17em">
                        <?php echo $counter ; ?>.
                    </td>
                    <td class="font-weight-bold f-left" >
                        <a href="<?= url('chi-tiet/bai-dang/' . $id) ?>">
                            <?php
                            $file_name = pathinfo($file['name'], PATHINFO_FILENAME);
                            echo $file_name;
                            ?>
                        </a>
                    </td>
                </tr>
                <?php
                $counter++;
            endforeach;
            ?>
            </tbody>
        </table>

    </div>

    <?php
    require_once(BASE_PATH . '/template/app/layouts/banner-right.php');
    ?>




</div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>