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
        margin-right: 3.2vw;
        scroll-snap-align: start;
    }

    .image {
       
        margin: 1vh 0;
        width: 10vw;
        height: 13vh;
        cursor: pointer;
        transition: transform .2s ease-out;
        border-radius: 2.5%;
    }

    @media screen and (min-width: 768px) {
        .image {
            height: 28vh;
        }

    }

    .image:hover {
        transform: scale(1.1);
    }

    .image-title {
        width: 180px;
        height: auto;
        margin-bottom:4vh;
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

    /* CSS for scrollLeftBtn and scrollRightBtn */
    #scrollLeftBtn,
    #scrollRightBtn {
        background-color: #c0c0c000;
        color: #DDDDDD;
        font-size: 1.7vw;
        border: none;
        padding: 0.8vh 0.5vw;
        cursor: pointer;
        outline: none;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1;

    }

    #scrollRightBtn:hover {

        cursor: pointer;
    

    }

    #scrollLeftBtn:hover {
      
   
        cursor: pointer;
       

    }

    #scrollLeftBtn {
        left: 0;
        border-radius: 100% 100% 100% 100%;
    }

    #scrollRightBtn {
        right: 0;
        border-radius: 100% 100% 100% 100%;
    }

    /* CSS for the parent div wrapping the .image-container and buttons */
    .image-container-parent {
        position: relative;
        display: flex;
        align-items: center;
        margin-left: 4%;
        /* Adjust the margin as needed */
        margin-right: 4%;
        /* Adjust the margin as needed */
        overflow: hidden;
        /* Hide the scroll buttons if not needed */
    }

    .image-container {
        display: flex;
        overflow-x: scroll;
        scroll-snap-type: x mandatory;
    }

    .image-item {
        /* ... Your previous styles ... */
    }
</style>

<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
?>


<div class="body_getdata" style="display: flex;  margin-top: 6vh; margin-right: 3.2vh">
    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

    <div style="width: 62%; margin: 0; padding: 4px; box-sizing: border-box">
        <div style="display: flex; flex: 1; justify-content: space-between">
            <!-- Cột giới thiệu -->
            <div class="card-panel" style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 33%; flex-grow: 1;">

                <a style="text-decoration: none" href="<?= url('gioithieu') ?>">
                    <h3
                        style="text-align: center; text-transform: uppercase; color: #3734EA;font-weight: 700; font-size: 1.8vw;">
                        Giới thiệu</h3>

                    <div style=" margin-bottom: 7vh; display: flex; justify-content: center; align-items: center;">

                        <img style="border-radius: 5px; width:100%;max-width: 200px;max-height: 121px;"
                            src="./public/banner-image/gioithieu.png" alt="Giới thiệu">
                    </div>
                </a>

            </div>
            <!-- Cột thông báo -->
            <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 33%; flex-grow: 1;">

                <a style="text-decoration: none" href="<?= url('thongbao') ?>">
                    <h3
                        style="text-align: center; text-transform: uppercase; color:#3734EA;font-weight: 700; font-size: 1.8vw;">
                        Thông báo</h3>


                    <div style=" margin-bottom: 7vh; display: flex; justify-content: center; align-items: center;">
                        <a href="<?= url("thongbao") ?>">
                            <img style="border-radius: 5px;width:100%; max-width: 200px;max-height: 121px;"
                                src="./public/banner-image/thong-bao.png" alt="Giới thiệu">
                        </a>

                    </div>
                </a>


            </div>
            <!-- Cột sự kiện -->
            <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 33%; flex-grow: 1;">
                <a style="text-decoration: none" href="#">
                    <h3
                        style="text-align: center; text-transform: uppercase; color: #3734EA;font-weight: 700; font-size: 1.8vw; ">
                        Sự kiện</h3>
                    <div style=" margin-bottom: 7vh; display: flex; justify-content: center; align-items: center;">

                        <a href="<?= url('sukien') ?>">
                            <img style="border-radius: 5px;width:100%;max-width: 200px;max-height: 121px;"
                                src="./public/banner-image/sukien.png" alt="Giới thiệu">
                        </a>

                    </div>
                </a>

            </div>
        </div>
        <div style="display: flex; flex: 1; justify-content: space-between">
            <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">
                <h3
                    style="text-align: center; text-transform: uppercase; color: #0C548A;font-weight: 700; font-size: 1.8vw;">
                    Gửi bài</h3>

                <div style=" margin-bottom: 7vh; display: flex; justify-content: center; align-items: center;">
                    <a href="<?= url("guibai") ?>">
                        <img style="border-radius: 5px;width:100%;max-width: 200p;max-height:  121px;"
                            src="./public/banner-image/guibai.png" alt="Giới thiệu">
                    </a>


                </div>

            </div>
            <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">
            </div>
            <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">

            </div>

        </div>
    </div>
    <?php require_once(BASE_PATH . '/template/app/layouts/banner-right.php') ?>

</div>
<div>
    <div style="margin-left: 3%; margin-top: 2vh;">
        <h3 style="text-align: left;  color: #0C548A;font-weight: 700; font-size: 1.7vw;">Các số đã xuất bản</h3>
    </div>
    <div style="margin-left: 8%; margin-right:6%">


        <div style="  /* display: flex;*/
    flex-wrap: wrap;
    /*justify-content: center;*/ /* căn giữa các sản phẩm */
    margin-left: -20px;
    margin-right: -20px;
   
    margin-bottom: 50px;">
            <div class="image-container-parent">
                <button id="scrollLeftBtn">&#10094;</button>
                <div class="image-container-parent">




                    <div class="image-container">

                        <?php foreach ($posts as $datas): ?>
                            <div class="image-item">
                                <?php $id = $datas['id'] ?>
                                <a href="<?= url('khcn/chi-tiet/' . $id) ?>">
                                    <img class="image" src="<?php echo $datas['image'] ?>" alt="Nhà xuất bản">
                                     <p  style="font-size:1vw;color: #000000;"><?= $datas['title']?></p>
                                </a>
                   

                            </div>
                        <?php endforeach; ?>

                    </div>

                </div>
                <button id="scrollRightBtn">&#10095;</button>
            </div>

        </div>
    </div>

</div>
<script>
    const scrollLeftBtn = document.getElementById("scrollLeftBtn");
    const scrollRightBtn = document.getElementById("scrollRightBtn");
    const imageContainer = document.querySelector(".image-container");

    const scrollAmount = 300; 
    const autoScrollInterval = 2500;
    let currentPosition = 0;

    const scrollToPosition = (position) => {
        if (position < 0) {
            position = imageContainer.scrollWidth - imageContainer.clientWidth;
        } else if (position > imageContainer.scrollWidth - imageContainer.clientWidth) {
            position = 0;
        }
        imageContainer.scrollTo({ left: position, behavior: 'smooth' });
        currentPosition = position;
    };

    scrollLeftBtn.addEventListener("click", () => {
        scrollToPosition(currentPosition - scrollAmount);
    });

    scrollRightBtn.addEventListener("click", () => {
        scrollToPosition(currentPosition + scrollAmount);
    });

    const autoScroll = () => {
        scrollToPosition(currentPosition + scrollAmount);
    };

    let autoScrollTimer = setInterval(autoScroll, autoScrollInterval);

  
    imageContainer.addEventListener("mouseenter", () => {
        clearInterval(autoScrollTimer);
    });

   
    imageContainer.addEventListener("mouseleave", () => {
        autoScrollTimer = setInterval(autoScroll, autoScrollInterval);
    });
</script>


<!-- start footer Area -->
<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>