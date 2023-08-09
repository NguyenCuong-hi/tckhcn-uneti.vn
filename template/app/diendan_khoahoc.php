<html>

</html>
<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');

?>

<style>

    .modal-4 a {
        margin: 0 5px;
        padding: 0;
        width: 30px;
        height: 30px;
        line-height: 30px;
        -moz-border-radius: 100%;
        -webkit-border-radius: 100%;
        border-radius: 100%;
        /* background-color: #3498DB; */
        font-size: 18px;
        color: #ffffff;
    }

    .modal-4 div {
        margin: 0 5px;
        padding: 0;
        width: 30px;
        height: 30px;
        line-height: 30px;
        -moz-border-radius: 100%;
        -webkit-border-radius: 100%;
        border-radius: 100%;
        background-color: #3498DB;
        font-size: 18px;
        color: #ffffff;
    }

    .modal-4 div.prev {
        background-color: #3498DB;
        -moz-border-radius: 50px 0 0 50px;
        -webkit-border-radius: 50px;
        border-radius: 50px 0 0 50px;
        width: 100px;
    }

    .modal-4 div.next {
        background-color: #3498DB;
        -moz-border-radius: 0 50px 50px 0;
        -webkit-border-radius: 0;
        border-radius: 0 50px 50px 0;
        width: 100px;
    }

    .modal-4 div:hover {
        background-color: #CDCD00;
    }

    .modal-4 div.active, .modal-4 div:active {
        background-color: #003333;
    }
    .btntimkiem{
        margin-left: 3px;
         background-color: #ddd; 
         border: none;
                            
         height: 3vh;  
         border-radius: 4px; 
         font-size: 1.1vw;
         width: 9.2vw;

    }
    .btntimkiem:hover{
        background-color: #ccc; 
        cursor: pointer;
    }
    @media screen and (min-width: 768px) {
        .btntimkiem{
            margin-left: 3px;
         background-color: #ddd; 
         border: none;
                        
         height: 4vh;  
         border-radius: 4px; 
         font-size: 1.1vw;
         width: 6vw;

    }

}
    /* Kiểu mặc định của thanh tìm kiếm */
    .search-bar {
      width: 100%;
      height: 25px;
  
   
    }

    /* Kiểu khi màn hình có chiều rộng nhỏ hơn 600px */
    @media (max-width: 600px) {
      .search-bar {
        height: 15px;
   
        
      }
    }

</style>
<div style="display: flex;  margin-top: 45px; margin-right: 32px">

    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>
    <div style="width: 62%; display: flex;  flex-direction: column;
         padding:1vh 3vw 1vh 2.3vw; box-sizing: border-box">
        <div style="width: 100%; display: flex; justify-content: center">
            <form method="GET" action="<?= url('diendankhoahoc') ?>"
                  style="display: flex; margin-right: 8px ; width: 100%;">
                <div  style="display: flex; align-items: center; width: 50%;">
                    <div style="font-size: 16px; margin-right: 0.3vh; display: flex;
                    flex-direction: column ; width: 100%">
                        <input class="search-bar"  type="text" name="keyword"
                             />
                        <button class = "btntimkiem" type="submit"
                                >
                            Tìm kiếm
                        </button>
                    </div>
                </div>

                <div style="font-size: 1.1vw;display: flex; width: 50%">
                    <label style="width: 100%">
                        <input  type="radio" name="title"> Tiêu đề
                    </label>
                    <label style="width: 100%">
                        <input  type="radio" name="author"> Tác giả
                    </label>
                </div>

            </form>

        </div>
        <div>
            <?php foreach ($data as $datas): ?>
                <div style="font-size: 1.1vw; font-weight: 500; border-bottom: 2px dotted red;
                border-left: 2px solid rgb(241,243,244); padding-left: 3vw; padding-top: 1vw;">
                    <span>
                        <?php $id = $datas['id'] ?>
                        <a style=" font-weight: 600; font-size: 1.3vw"
                             href="<?=url('ddkh/chi-tiet/' . $id) ?>"><?php echo $datas['title'] ?></a></span>
                    <div style=" margin-bottom: 8px; ">
                        <ul style="list-style-type: circle; margin-bottom: 8px">
                            <?php $str = $datas['title'];
                            $pos = strrpos($str, " ");
                            if ($pos !== false) {
                                $so = substr($str, $pos + 1);
                            }
                            ?>
                            <li>Số tạp chí: <?php echo "Số " . $so; ?></li>
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
                    <div class="footer-element" style="text-align: end; margin-bottom: 8px; display: flex;
    justify-content: flex-end;">
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
            <?php endforeach; ?>

        </div>

    </div>

    <?php require_once(BASE_PATH . '/template/app/layouts/banner-right.php') ?>

</div>

<?php
require_once(BASE_PATH . '/template/app/layouts/phantrang.php')
?>

<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>