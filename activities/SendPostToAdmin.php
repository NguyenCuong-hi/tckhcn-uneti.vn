<?php

namespace App;

use Auth\Auth;
use Database\DataBase;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class SendPostToAdmin
{


    public function index()
    {

        $db = new DataBase();

        $get_image_sidebar = $db->select('SELECT * FROM banners WHERE id IN (10, 11, 12)');
        require_once(BASE_PATH . '/template/app/gui-bai.php');
    }

    public function sendPost()
    {

        $name = $_FILES['fileToUpload'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $mail_recipient = "phamanhdung2k2@gmail.com"; // mail nhận
        $subject = "Bạn nhận được bài viết mới";

//        ---------------------------- Làm vs Auth() ----------------
        //Todo gửi mail làm với Auth()

        $mail = new Auth();

        if (isset($_POST['submit'])) {
            // Đường dẫn thư mục lưu trữ file tải lên
            $target_dir = "public/upload/";

            // Tạo tên file mới dựa trên thời gian để tránh trùng lặp
            $target_file =  basename($_FILES["fileToUpload"]["name"]);

            // Kiểm tra kiểu file (ở đây, chỉ cho phép tải lên file PDF và DOC)
            $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            if ($fileType === "pdf" || $fileType === "doc" || $fileType === "docx") {
                // Di chuyển file vào thư mục lưu trữ
//                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

                $message_ = "Email người gửi: ".$email ."<br>"."Tên tác giả: ".$message;

                $mail_ = $mail->sendMail($mail_recipient, $email, $subject, $message_, $target_file);
                if ($mail_) {
                    echo "<script>window.location.href = '" . url("guibai") . "'; alert('Đã gửi bài thành công!');</script>";
                } else {
                    echo "<script>window.location.href = '" . url("guibai") . "'; alert('Gửi thất bại'.$mail->ErrorInfo);</script>";

                }
            } else {
                echo 'Chỉ cho phép tải lên file PDF và DOC.';
            }
        }

//------------------------ Làm chay --------------------------
        /*  Todo gửi mail làm chay

            if (isset($_POST['submit'])) {
                // Đường dẫn thư mục lưu trữ file tải lên
                $target_dir = "/upload";
                // Tạo tên file mới dựa trên thời gian để tránh trùng lặp
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                // Kiểm tra kiểu file (ở đây, chỉ cho phép tải lên file PDF và DOC)
                $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                if ($fileType == "pdf" || $fileType == "doc" || $fileType == "docx") {
                    // Di chuyển file vào thư mục lưu trữ
                    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

                    // Gửi email
                    try {
                        $mail = new PHPMailer(true);
                        $mail->isSMTP();
                        $mail->SMTPAuth = true;

                        $mail->Host = 'smtp.gmail.com';
                        $mail->Port = 587;

                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;


                        $mail->Username = 'anhdungg.it@gmail.com'; // Thay thế bằng địa chỉ email của bạn
                        $mail->Password = 'ftngkokamqjqceea'; // Thay thế bằng mật khẩu email của bạn
                        $mail->SMTPSecure = 'tls';

                        $mail->setFrom($email); // Thay thế bằng địa chỉ email của bạn
                        $mail->addAddress("phamanhdung2k2@gmail.com", "AnhDUng"); // Địa chỉ email nhận

                        $mail->isHTML(true); //Set email format to HTML
                        $mail->Subject = 'Ban nhan duoc File bai dang moi';
                        // $mail->Body = $message;
                        $mail->Body = $message;
                        $mail->addAttachment($target_file); // Đính kèm file đã tải lên

                        if ($mail->send()) {
                            echo "<script>window.location.href = '" . url("guibai") . "'; alert('Đã gửi bài thành công!');</script>";
                        } else {

                            echo "<script>window.location.href = '" . url("guibai") . "'; alert('Gửi thất bại'.$mail->ErrorInfo);</script>";

                        }
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        return false;
                    }
                }

            }
        */

        require_once(BASE_PATH . '/template/app/gui-bai.php');
    }


}