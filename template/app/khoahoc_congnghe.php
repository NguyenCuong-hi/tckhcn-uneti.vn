<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
?>

    <div class="body_getdata" style="display: flex;  margin-top: 30px; margin-right: 32px">
        <div class="menu_right" style="display: flex; padding-right: 32px; width: 20%; flex-direction: column; box-sizing: border-box; padding: 8px; color: white; font-size: 12px; font-weight: 700; color: white  ">
            <div style="width: 100%; margin: 8px 0">
                <Button style=" color: white;font-weight: 700; border-radius: 8px; background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                    Trang chủ
                </Button>
            </div>
            <div style="width: 100%; margin: 8px 0">
                <Button style="color: white; font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                    Khoa học - công nghệ
                </Button>
            </div>
            <div style="width: 100%; margin: 8px 0">
                <Button style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                    Kinh tế- xã hội
                </Button>
            </div>
            <div style="width: 100%; margin: 8px 0 ">
                <Button style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                    Diễn đàn khoa học
                </Button>
            </div>
            <div style="width: 100%; margin: 8px 0 ">
                <Button style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                    Thông tin trao đổi
                </Button>
            </div>
            <div style="width: 100%; margin: 8px 0">
                <Button style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                    Liên hệ
                </Button>
            </div>
        </div>

        <div class="body_data" style="width: 60%; display: flex; border: 1px solid #ddd; flex-direction: column; margin: 0 64px;
         padding: 4px; box-sizing: border-box">
            <div style="width: 100%; display: flex; justify-content: center">
                <form style="display: flex; margin-right: 8px">
                    <div style=" font-size: 16px; margin-right: 8px ">
                        <input style="padding-left: 8px" placeholder="Nhập từ khóa"/>
                    </div>
                    <label style="margin-right: 8px">
                        <input type="radio" name="title" value="title"> Tiêu đề
                    </label>
                    <label>
                        <input type="radio" name="author" value="author"> Tác giả
                    </label>
                </form>
                <button style=" margin-left: 8px; background-color: #ddd; border: none; height: 30px;  border-radius: 4px; font-size: 16px">
                    Tìm kiếm
                </button>
            </div>
            <?php foreach ($data as $datas): ?>
            <div>
                <div style="font-size: 16px; font-weight: 500; border-bottom: 2px dotted red">
                    <span>
                        <a style=" font-weight: 600; font-size: 18px" href="#"> <?php echo $datas['title']; ?>
                            </a>
                    </span>
                    <div style=" margin-bottom: 8px">
                        <ul style="list-style-type: square; margin-bottom: 8px">
                            <li>Số tạp chí: <?php echo $datas['code_name'] ?></li>
                            <li>Tác giả: <?php echo $datas['author_name']?></li>
                            <li>Tạp chí xuất bản: <?php echo $datas['cat_name'] ?></li>
                            <li><a href="#">Tóm tắt</a></li>
                        </ul>
                    </div>
                    <div style="text-align: end; margin-bottom: 8px">
                        foorter
                    </div>
                </div>

            </div>
            <?php endforeach;?>
        </div>

        <div class="img_lienket" style="width: 20%; padding-left: 32px">
            <img style="width: 100%" src="../../../public/banner-image/bo-cong-thuong.png"/>
            <img style="width: 100%" src="../../../public/banner-image/DHKTKTCN.png"/>
            <img style="width: 100%" src="../../public/banner-image/khcn.png"/>
        </div>

    </div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>