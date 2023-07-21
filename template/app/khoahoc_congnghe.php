<html>

</html>
<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
?>


<div class="body_getdata" style="display: flex; margin-top: 30px; margin-right: 32px;">

    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

    <div class="body_data" style="width: 62%; display: flex;  flex-direction: column;
         padding: 1vh 3vw; box-sizing: border-box">
        <div style="width: 100%; display: flex; justify-content: center">
            <form method="GET" action="<?= url('khoahoccongnghe') ?>"
                  style="display: flex; margin-right: 8px ; width: 100%;">
                <div style="display: flex; align-items: center; width: 80%;">
                    <div style="font-size: 16px; margin-right: 8px; display: flex;
                    flex-direction: column ; width: 100%">
                        <input type="text" name="keyword"
                                 style="padding-left: 0.8vw ; width: 100%; margin: 1px 3px;"/>
                        <button type="submit"
                                style=" margin-left: 3px; background-color: #ddd; border: none;
                            height: 5vh;  border-radius: 4px; font-size: 1.1vw; width: 9.2vw;">
                            Tìm kiếm
                        </button>
                    </div>
                </div>

                <div style="font-size: 1.1vw;display: flex; width: 50%">
                    <label style=" width: 100%;">
                        <input type="radio" name="title"> Tiêu đề
                    </label>
                    <label style="width: 100%">
                        <input type="radio" name="author"> Tác giả
                    </label>
                </div>

            </form>

        </div>
        <?php foreach ($data as $datas): ?>
            <div>
                <div style="font-size: 1.1vw; font-weight: 500; border-bottom: 2px dotted red;
                border-left: 2px solid rgb(241,243,244); padding-left: 3vw;">
                    <span>
                        <?php $id = $datas['id'] ?>
                        <a style=" font-weight: 600; font-size: 1.3vw" href="<?= url('khcn/chi-tiet/' . $id) ?>">
                            <?php echo $datas['title']; ?>
                            </a>
                    </span>
                    <div style=" margin-bottom: 8px">
                        <ul style="list-style-type: circle; margin-bottom: 8px">
                            <li>Số tạp chí: <?php echo $datas['code_name'] ?></li>
                            <li>Tác giả: <?php echo $datas['author_name'] ?></li>
                            <li>Tạp chí xuất bản: <?php echo $datas['cat_name'] ?></li>
                            <li>
                                <a href="#" onclick="toggleSummary(event)">Tóm tắt</a>
                                <span class="summary" style="display: none;"><?php echo $datas['summary']?></span>
                                </li>
                            <script>
                                function toggleSummary(event) {
                                    event.preventDefault();

                                    var summaryElement = event.target.nextElementSibling;
                                    summaryElement.classList.toggle('show');

                                    if (summaryElement.classList.contains('show')) {
                                        event.target.innerText = 'Ẩn tóm tắt';
                                    } else {
                                        event.target.innerText = 'Tóm tắt';
                                    }
                                }
                            </script>
                            <style>
                                .show {
                                    display: block !important;
                                }
                            </style>
                        </ul>
                    </div>
                    <div class="footer-element" style="text-align: end; margin-bottom: 8px;
                    display: flex; justify-content: flex-end;">
                        <div class="icon" style="margin-right: 12px;">
                            <img style="    max-width: 2vw;
    max-height: 3vh;  margin: -4px 4px 2px;"
                                 src="./public/banner-image/dowload.png" alt="Download Icon"/>
                        </div>
                        <div class="icon">
                            <img style="    max-width: 1.8vw;
    max-height: 2.8vh;"
                                 src="./public/banner-image/eyes.png" alt="Eyes Icon"/>
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
</div>


