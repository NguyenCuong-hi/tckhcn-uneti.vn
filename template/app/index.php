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
        margin:  3vh 0;
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
 
/* CSS for scrollLeftBtn and scrollRightBtn */
#scrollLeftBtn,
#scrollRightBtn {
    background-color:#c0c0c000;
    color: #DDDDDD;
    font-size: 24px;
    border: none;
    padding: 0.8vh 0.5vw;
    cursor: pointer;
    outline: none;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1;
   
}

#scrollRightBtn:hover{
    background-color: #C0C0C0;
    color: white;
    font-size: 24px;
    border: none;
    padding: 0.8vh 0.5vw;
    cursor: pointer;
    outline: none;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1;
   
}
#scrollLeftBtn:hover{
    background-color: #C0C0C0;
    color: white;
    font-size: 24px;
    border: none;
    padding: 0.8vh 0.8vw;
    cursor: pointer;
    outline: none;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1;
}
#scrollLeftBtn {
    left: 0;
    border-radius:  100% 100% 100% 100% ;
}

#scrollRightBtn {
    right: 0;
    border-radius:100% 100% 100% 100%;
}

/* CSS for the parent div wrapping the .image-container and buttons */
.image-container-parent {
    position: relative;
    display: flex;
    align-items: center;
    margin-left: 8%; /* Adjust the margin as needed */
    margin-right: 6%; /* Adjust the margin as needed */
    overflow: hidden; /* Hide the scroll buttons if not needed */
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


<div class="body_getdata" style="display: flex;  margin-top: 3vh; margin-right: 3.2vh">
    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

    <!-- _________________________________________________________________________________ -->
    <div style="width: 62%; margin: 0; padding: 4px; box-sizing: border-box">
        <div style="display: flex; flex: 1; justify-content: space-between">
            <!-- Cột giới thiệu -->
            <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 33%; flex-grow: 1;">

                <a style="text-decoration: none" href="<?= url('gioithieu') ?>">
                    <h3 style="text-align: center; text-transform: uppercase; color: #3734EA;font-weight: 700; font-size: 1.8vw;">
                        Giới thiệu</h3>

                    <div style=" margin-bottom: 7vh; display: flex; justify-content: center; align-items: center;">

                        <img style="border-radius: 5px; width:100%;max-width: 200px;max-height: 121px;"
                             src="./public/banner-image/gioithieu.png"
                             alt="Giới thiệu">
                    </div>
                </a>

            </div>
            <!-- Cột thông báo -->
            <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 33%; flex-grow: 1;">

                <a style="text-decoration: none" href="<?= url('thongbao') ?>">
                    <h3 style="text-align: center; text-transform: uppercase; color:#3734EA;font-weight: 700; font-size: 1.8vw;">
                        Thông báo</h3>


                    <div style=" margin-bottom: 7vh; display: flex; justify-content: center; align-items: center;">
                        <a href="<?= url("thongbao") ?>">
                            <img style="border-radius: 5px;width:100%; max-width: 200px;max-height: 121px;"
                                 src="./public/banner-image/thong-bao.png"
                                 alt="Giới thiệu">
                        </a>

                    </div>
                </a>


            </div>
            <!-- Cột sự kiện -->
            <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 33%; flex-grow: 1;">
                <a style="text-decoration: none" href="#">
                    <h3 style="text-align: center; text-transform: uppercase; color: #3734EA;font-weight: 700; font-size: 1.8vw; ">
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
                <h3 style="text-align: center; text-transform: uppercase; color: #0C548A;font-weight: 700; font-size: 1.8vw;">
                    Gửi bài</h3>

                <div style=" margin-bottom: 7vh; display: flex; justify-content: center; align-items: center;">
                    <a href="<?= url("guibai") ?>">
                        <img style="border-radius: 5px;width:100%;max-width: 200p;max-height:  121px;"
                             src="./public/banner-image/guibai.png"
                             alt="Giới thiệu">
                    </a>


                </div>

            </div>
            <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">
            </div>
            <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">

            </div>

        </div>
    </div>

    <div class="img_lienket" style="width: 15%; text-align: center; margin-top: 2vh;" >
        <H4 style="font-size: 1.1vw; color: #155fa2; font-family: 'Times New Roman', Times, serif; "> LIÊN KẾT
            WEBSITE</H4>
        <a href="https://moit.gov.vn/"><img style="width: 100%" src="./public/banner-image/bo-cong-thuong.png"> </a>
        <a href="https://uneti.edu.vn/"><img style="width: 100%" src="./public/banner-image/DHKTKTCN.png"></a>
        <a href=""><img style="width: 100%" src="./public/banner-image/khcn.png"></a>


    </div>
</div>
<!-- _________________________________________________________________________________ -->
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
    <div class="image-container">

                <?php foreach ($posts as $datas): ?>
                    <div class="image-item">
                        <?php $id = $datas['id'] ?>
                        <a href="<?= url('khcn/chi-tiet/' . $id) ?>">
                            <img class="image" src="<?php echo $datas['image'] ?>" alt="Nhà xuất bản 1">
                        </a>

                    </div>
                <?php endforeach; ?>
              
                </div>
    <button id="scrollRightBtn">&#10095;</button>
</div>

        </div>
    </div>
    <!-- <button id="scrollLeftBtn">&#10094;</button>
        <button id="scrollRightBtn">&#10095;</button> -->
       
   
</div>
<script>
    const imageContainer = document.querySelector('.image-container');
    let isMouseDown = false;
    let startX = 0;
    let scrollLeft = 0;

    function autoScroll() {
        const maxScrollLeft = imageContainer.scrollWidth - imageContainer.clientWidth;
        if (imageContainer.scrollLeft >= maxScrollLeft) {
            imageContainer.scrollLeft = 0;
        } else {
            imageContainer.scrollLeft += 1;
        }
    }


    setInterval(autoScroll, 3000); 

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


document.getElementById('scrollLeftBtn').addEventListener('click', () => {
    const scrollAmount = imageContainer.clientWidth * 1; 
    imageContainer.scrollLeft -= scrollAmount;


    if (imageContainer.scrollLeft <= 0) {
        const maxScrollLeft = imageContainer.scrollWidth - imageContainer.clientWidth;
        imageContainer.scrollLeft = maxScrollLeft;
    }
});


const imageItems = document.querySelectorAll('.image-item');
let totalImageWidth = 0;
imageItems.forEach((item) => {
    totalImageWidth += item.offsetWidth;
});

const containerWidth = imageContainer.offsetWidth;
const maxScrollLeft = totalImageWidth - containerWidth;


document.getElementById('scrollRightBtn').addEventListener('click', () => {
    const scrollAmount = imageContainer.clientWidth * 1; 
    imageContainer.scrollLeft += scrollAmount;

  
    if (imageContainer.scrollLeft >= maxScrollLeft) {
    
        imageContainer.scrollLeft = 0;
    }
});
 
</script>

<!-- start footer Area -->
<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>