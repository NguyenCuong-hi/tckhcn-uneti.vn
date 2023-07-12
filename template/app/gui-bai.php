<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
?>
<style>
    .menu_right {
        display: flex;
        padding-right: 32px;
        width: 20%;
        flex-direction: column;
        box-sizing: border-box;
        padding: 8px;
        color: white;
        font-size: 12px;
        font-weight: 700;
        color: white;
    }

    .menu_right > div {
        width: 100%;
        margin: 8px 0;
    }

    .menu_right button {
        color: white;
        font-weight: 700;
        border-radius: 8px;
        background-color: #348FDE;
        width: 100%;
        border: none;
        padding: 18px 18px;
    }

    /* Responsive */
    @media screen and (max-width: 768px) {
        .menu_right {
            width: 100%;
            padding-right: 0;
        }
    }
</style>

<style>
    .menu_right {
        list-style: none;
        padding: 10px;
    }

    .menu_right a {
        text-decoration: none;
        color: #fff;
        background-color: #3498db;
        padding: 20px 27px;
        border-radius: 5px;
        margin-bottom: 2%;
        text-align: center;
        font-size: medium;
    }

</style>
<div style="display: flex;  margin-top: 30px; margin-right: 32px">
    <div class="menu_right">
        <a href="<?= url('/') ?>">Trang chủ</a>
        <a href="<?= url('khoahoccongnghe') ?>">Khoa học - công nghệ</a>
        <a href="<?= url('kinhtexahoi') ?>">Kinh tế- xã hội</a>
        <a href="<?= url('diendankhoahoc') ?>">Diễn đàn khoa học</a>
        <a href="<?= url('thongtintraodoi') ?>">Thông tin trao đổi</a>
        <a href="<?= url('lienhe') ?>">Liên hệ</a>
    </div>

    <div style="width: 60%; display: flex; border: 1px solid #ddd; flex-direction: column; margin: 0 64px;
         padding: 4px; box-sizing: border-box">
        <div style="width: 100%; display: flex; justify-content: center">
            <form action="https://formsubmit.co/32170c71a95942ab43b04732dfc4bc2e" method="POST"
                  style="margin-right: 8px">
<!--                <input type="file" name="fileToUpload" id="fileToUpload">-->
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="email" name="Email" id="Email" placeholder="Nhập Email" required>
                <textarea name="Message" placeholder="Message" ></textarea>

                <input type="submit" value="Tải lên" name="submit">
            </form>
        </div>
    </div>


<!--    --><?php
    //
    //    $targetDir = "./database/uploads"; // Thư mục lưu trữ file tải lên
    //    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    //    $uploadOk = 1;
    //    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    //
    //    // Kiểm tra kích thước file
    //    if ($_FILES["fileToUpload"]["size"] > 5000000) {
    //        echo "File quá lớn.";
    //        $uploadOk = 0;
    //    }
    //
    //    // Chỉ cho phép tải lên các loại file nhất định
    //    $allowedTypes = array('doc', 'docx', 'pdf');
    //    if (!in_array($fileType, $allowedTypes)) {
    //        echo "Chỉ được phép tải lên các file có định dạng doc, docx hoặc pdf.";
    //        $uploadOk = 0;
    //    }
    //    var_dump($_FILES["fileToUpload"]["name"]);
    //    var_dump($uploadOk);
    //
    //    var_dump($_FILES["fileToUpload"]["tmp_name"]);
    //
    //    // Kiểm tra biến uploadOk để xem liệu có tải lên file không
    //    if ($uploadOk == 0) {
    //        echo "Không thể tải lên file.";
    //    } else {
    //        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    //            // Tải lên thành công, tiến hành gửi email
    //            $to = "ab12@gmail.com";
    //            $subject = "File đã được tải lên";
    //            $message = "Xin chào,\n\nĐã có một file được tải lên từ trang web của bạn.\n\nTrân trọng,\nYour Website";
    //            $headers = "From: tapchikhc@uneti.edu.vn" . "\r\n" .
    //                "Reply-To: tapchikhc@uneti.edu.vn" . "\r\n" .
    //                "X-Mailer: PHP/" . phpversion();
    //
    //            // Gửi email với file đính kèm
    //            $attachment = chunk_split(base64_encode(file_get_contents($targetFile)));
    //            $boundary = md5(time());
    //            $headers .= "MIME-Version: 1.0\r\n" .
    //                "Content-Type: multipart/mixed; boundary=\"" . $boundary . "\"\r\n\r\n";
    //            $message = "--" . $boundary . "\r\n" .
    //                "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n" .
    //                "Content-Transfer-Encoding: 7bit\r\n\r\n" .
    //                $message . "\r\n\r\n" .
    //                "--" . $boundary . "\r\n" .
    //                "Content-Type: application/octet-stream; name=\"" . basename($targetFile) . "\"\r\n" .
    //                "Content-Transfer-Encoding: base64\r\n" .
    //                "Content-Disposition: attachment\r\n\r\n" .
    //                $attachment . "\r\n\r\n" .
    //                "--" . $boundary . "--";
    //
    //            if (mail($to, $subject, $message, $headers)) {
    //                echo "File đã được tải lên thành công và gửi vào địa chỉ email ab12@gmail.com.";
    //                header('Location:./template/app/gui-bai.php');
    //            } else {
    //                echo "Có lỗi xảy ra trong quá trình gửi email.";
    //            }
    //        } else {
    //            echo "Có lỗi xảy ra khi tải lên file.";
    //        }
    //
    //
    //    }

    ?>


    <div class="img_lienket" style="width: 20%; padding-left: 32px">
        <?php foreach ($get_image_sidebar as $image): ?>
            <img style="width: 100%" src="<?php echo $image['image']; ?>">
        <?php endforeach; ?>
    </div>
</div>

<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>

