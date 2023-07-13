
<html>

</html>
<style>
    .image-container {
    display: flex;
    overflow-x: scroll;
    scroll-snap-type: x mandatory;
}

.image-item {
    flex: 0 0 180px;
    flex-basis: calc(20% - 11px);
    margin-right: 32px;
    scroll-snap-align: start;
}

.image {
    margin-top: 20px;
    width: 160px;
    height: 241px;
    cursor: pointer;
    transition: transform .2s ease-out;
    border-radius: 25px;
}

.image:hover {
    transform: scale(1.1);
}

.image-title {
    width: 180px;
    height: auto;
    margin-bottom: 50px;
}

.image-container::-webkit-scrollbar {
    height: 8px;
}

.image-container::-webkit-scrollbar-thumb {
    background-color: #dddddd77;
    border-radius: 4px;
}

.image-container::-webkit-scrollbar-thumb:hover {
    background-color: #cccccc99;
}
</style>

<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
?>


    <div class="body_getdata" style="display: flex;  margin-top: 30px; margin-right: 32px">
        <?php require_once (BASE_PATH . '/template/app/layouts/menuleft.php')?>

        <!-- _________________________________________________________________________________ -->
        <div style="width: 62%; margin: 0; padding: 4px; box-sizing: border-box">
            <div style="display: flex; flex: 1; justify-content: space-between">
                <!-- Cột giới thiệu -->
                <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%; flex-grow: 1;">

                    <h3 style="text-align: center; text-transform: uppercase; color: #3734EA;font-weight: 700; font-size: 30px;">
                        Giới thiệu</h3>

                    <?php foreach ($get_url_image as $image_gioithieu): ?>
                    <div style=" margin-bottom: 70px; display: flex; justify-content: center; align-items: center;">

                        <img style="border-radius: 5px;max-width: 200px;max-height: 121px;" src="<?php echo $image_gioithieu['image']?>"
                             alt="Giới thiệu">

                    </div>
                    <?php endforeach; ?>

                </div>
                <!-- Cột thông báo -->
                <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%; flex-grow: 1;">

                    <h3 style="text-align: center; text-transform: uppercase; color:#3734EA;font-weight: 700; font-size: 30px;">
                        Thông báo</h3>

                    <?php foreach ($get_url_thongbao as $image_thongbao): ?>
                        <div style=" margin-bottom: 70px; display: flex; justify-content: center; align-items: center;">

                            <img style="border-radius: 5px;max-width: 200px;max-height: 121px;" src="<?php echo $image_gioithieu['image']?>"
                                 alt="Giới thiệu">

                        </div>
                    <?php endforeach; ?>


                </div>
                <!-- Cột sự kiện -->
                <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%; flex-grow: 1;">

                    <h3 style="text-align: center; text-transform: uppercase; color: #3734EA;font-weight: 700; font-size: 30px; ">
                        Sự kiện</h3>
                    <?php foreach ($get_url_sukien as $image_sukien): ?>
                        <div style=" margin-bottom: 70px; display: flex; justify-content: center; align-items: center;">

                            <img style="border-radius: 5px;max-width: 200px;max-height: 121px;" src="<?php echo $image_sukien['image']?>"
                                 alt="Giới thiệu">

                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
            <div style="display: flex; flex: 1; justify-content: space-between">
                <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">
                    <h3 style="text-align: center; text-transform: uppercase; color: #3734EA;font-weight: 700; font-size: 30px;">
                        Gửi bài</h3>
                    <?php foreach ($get_url_guibai as $image_guibai): ?>
                        <div style=" margin-bottom: 70px; display: flex; justify-content: center; align-items: center;">

                            <img style="border-radius: 5px;max-width: 200px;max-height: 121px;" src="<?php echo $image_guibai['image']?>"
                                 alt="Giới thiệu">

                        </div>
                    <?php endforeach; ?>
                </div>
                <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">
                </div>
                <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">

                </div>

            </div>
        </div>

        <div style="width: 15%;">
            <?php foreach ($get_image_sidebar as $image): ?>
                <img style="width: 100%" src="<?php echo $image['image'] ;?>">
            <?php endforeach; ?>

        </div>
    </div>
    <!-- _________________________________________________________________________________ -->
<div>
    <div style="margin-left: 60px; margin-top: 30px;">
        <h3 style="text-align: left;  color: #3734ea;font-weight: 700; font-size: 30px;">Các số đã xuất bản</h3>
    </div>
    <div style="margin-left: 8%; margin-right:6%">


        <div style="  /* display: flex;*/
    flex-wrap: wrap;
    /*justify-content: center;*/ /* căn giữa các sản phẩm */
    margin-left: -20px;
    margin-right: -20px;
    margin-top: 50px;
    margin-bottom: 50px;">

            <div class="image-container">
                <?php foreach ($posts as $datas): ?>
                    <div class="image-item">
                        <img class="image" src="<?php echo $datas['image'] ?>" alt="Nhà xuất bản 1">
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>
    <script>
        const imageContainer = document.querySelector('.image-container');
        let isMouseDown = false;
        let startX = 0;
        let scrollLeft = 0;

        imageContainer.addEventListener('mousedown', (e) => {
            isMouseDown = true;
            startX = e.pageX - imageContainer.offsetLeft;
            scrollLeft = imageContainer.scrollLeft;
        });

        imageContainer.addEventListener('mouseleave', () => {
            isMouseDown = false;
        });

        imageContainer.addEventListener('mouseup', () => {
            isMouseDown = false;
        });

        imageContainer.addEventListener('mousemove', (e) => {
            if (!isMouseDown) return;
            e.preventDefault();
            const x = e.pageX - imageContainer.offsetLeft;
            const walk = (x - startX) * 2;
            imageContainer.scrollLeft = scrollLeft - walk;
        });

    </script>

    <!-- start footer Area -->
<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>