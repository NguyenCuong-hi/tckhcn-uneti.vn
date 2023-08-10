<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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

    .entry_post{
        width: 80%;
        float: left;
        clear: both;
        background: #f2f2f2;
        border: 1px solid #e4e4e4;
        min-height: 22px;
        padding: 0 10px;
        margin-top: 5px;
        margin-bottom: 13px;
    }
    .entry_time{
        float: left;
        display: inline-block;
        margin-top: 9px;
        box-sizing: border-box;
    }
    .time_sg{
        font-size: 13px;
        color: #888;
        display: inline-block;
        margin-right: 10px;
        box-sizing: border-box;
    }
    .sg_view{
        font-size: 13px;
        color: #888;
        display: inline-block;
        box-sizing: border-box;
    }

    .sigle_title{
        font-size: 25px;
        color: #245d7c;
        padding-bottom: 10px;
        float: left;
    }

    .title{
        width: 80%;
    }
</style>
<div class="body_getdata" style="display: flex; margin-top: 50px; margin-right: 32px; margin-bottom: 75px">

    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>



    <div style="width: 62%; margin: 0; padding: 4px; box-sizing: border-box">
        <div style="display: flex; flex-direction: column; align-items: center;">

            <div class="title" >
                <h1 class="sigle_title"> <?= $post['title'] ?> </h1>
            </div>

            <div class="entry_post" style="width: 80%">

                <div class="entry_time">
                    <?php $datetimeString = $post['published_at'];
                    $datetime = new DateTime($datetimeString);
                    $dateOnly = $datetime->format("d-m-Y");
                    ?>
                        <time class="time_sg bi bi-calendar"><i></i> Ngày đăng: <?=$dateOnly?></time>
                        <span class="sg_view bi bi-eye"><i></i> Lượt xem: <?=$post['view']?></span>
                </div>

            </div>


            <?php
            foreach ($result_image as $item):
                ?>
                <div  style="width: 80%;border: 1px solid #D1D1D1; justify-content: center; margin-bottom: 70px;">
                    <img class="suanh"  src="<?= url($item['image']) ?> " alt="">
                </div>
            <?php endforeach; ?>



        </div>
        <div style="align-items: flex-end; font-family: 'Times New Roman'; font-style: italic">
            Nguồn đăng : <?= $post['author_name'] ?>
        </div>



        <div>
            <h> DANH MỤC BÀI VIẾT</h>
            <table class="table tab-content">


                <tbody>
                <?php
                $counter = 1;
                foreach ($result_file as $file):
                    $id = $file['id'];
                    ?>
                    <tr>
                        <td style="font-weight: normal; font-size: 1.17em">
                            <?php echo $counter; ?>.
                        </td>
                        <td class="font-weight-bold f-left">
                            <a style="color: #1a3f5e;" href="<?= url('chi-tiet/bai-dang/' . $id) ?>">
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


        <div>

        </div>

    </div>

    <?php
    require_once(BASE_PATH . '/template/app/layouts/banner-right.php');
    ?>




</div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>