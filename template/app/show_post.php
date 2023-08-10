<html>

</html>
<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
require 'vendor/autoload.php';

?>


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


        .entry_post {
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

        .entry_time {
            float: left;
            display: inline-block;
            margin-top: 9px;
            box-sizing: border-box;
        }

        .time_sg {
            font-size: 13px;
            color: #888;
            display: inline-block;
            margin-right: 10px;
            box-sizing: border-box;
        }

        .sg_view {
            font-size: 13px;
            color: #888;
            display: inline-block;
            box-sizing: border-box;
        }

        .sigle_title {
            font-size: 25px;
            color: #245d7c;
            padding-bottom: 10px;
            float: left;
        }

        .title {
            width: 80%;
        }
}

</style>
<div class="body_getdata" style="display: flex; margin-top: 50px; margin-right: 32px; margin-bottom: 75px">

    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

    <div style="width: 62%; margin: 0; padding: 4px; box-sizing: border-box">
        <div style="display: flex; flex-direction: column; align-items: center;">
            <div class="title">
                <h1 class="sigle_title"> <?= $post['title'] ?> </h1>
            </div>

            <div class="entry_post" style="width: 80%">

                <div class="entry_time">
                    <?php $datetimeString = $post['published_at'];
                    $datetime = new DateTime($datetimeString);
                    $dateOnly = $datetime->format("d-m-Y");
                    ?>
                    <time class="time_sg bi bi-calendar"><i></i> Ngày đăng: <?= $dateOnly ?></time>
                    <span class="sg_view bi bi-eye"><i></i> Lượt xem: <?= $post['view'] ?></span>
                </div>

            </div>

            <div class="suanh2" style="position: relative;  background-color: #D1D1D1; margin-top: 10px">
                <div class="phongto" style="position: absolute; top: 0; right: 0;">
                </div>
                <?php if (empty($result_file) || !file_exists($result_file['file'])): ?>
                    <p style="text-align: center; justify-content: center">Không có bài viết để hiển thị</p>
                <?php else : ?>

                <?php $extension = pathinfo($result_file['file'], PATHINFO_EXTENSION);
                $src = '';
                if ($extension === 'docx') {
                    $src = ' https://view.officeapps.live.com/op/view.aspx?src=' . url($result_file['file']);
                    echo "<p> 2 </p>";
                }
                if ($extension === 'pdf') {

                    $src = ' https://docs.google.com/gview?url=' . url($result_file['file']). '&embedded=true';
                    echo "<p> 1 </p>";
                }
                ?>

                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('iframe').gdocsViewer({width: 600, height: 700});
                            $('').gdocsViewer();
                        });
                    </script>

                    <iframe src="<?= url($src)?>"
                            style="width: 100%; height: 100%; border: none;">
                    </iframe>

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