<html>

</html>
<?php

use App\NoticeController;

require_once(BASE_PATH . '/template/app/layouts/header.php');

?>

<div class="body_getdata" style="display: flex;  margin-top: 30px; margin-right: 32px">
    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

    <div class="body_data" style="width: 60%; display: flex; border-left: 1px solid #ddd; flex-direction: column; margin: 0 64px;
         padding: 4px; box-sizing: border-box">


        <?php foreach ($data as $datas): ?>
            <div style="display: flex; width: 819px; height: 187.775px; padding-bottom: 0.800px; margin-bottom: 18px;border-bottom: 2px dotted red">
                <div>
                    <img style="width: 286px; height: 150px" src="<?php echo $datas['image'] ?>">
                </div>

                <div style="padding-left: 20px">
                    <div style="font-size: 16px; font-weight: 500">
                    <span>
                        <a style=" font-weight: 600; font-size: 18px" href="#"> <?php echo $datas['title']; ?>
                            </a>
                    </span>

                        <div style="display: flex">
                            <div>
                                <?php  echo date("d/m/Y", strtotime($datas['created_at']));  ?> |
                            </div>
                            <div>
                                <a href="">Thông báo</a>
                            </div>
                        </div>

                        <div style=" margin-bottom: 8px; font-size: 14px">
                            <div>
                                <?php echo $datas['summary'] ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <div class="img_lienket" style="width: 20%; padding-left: 32px">
        <?php foreach ($get_image_sidebar as $image): ?>
            <img style="width: 100%" src="<?php echo $image['image']; ?>">
        <?php endforeach; ?>
    </div>

</div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>