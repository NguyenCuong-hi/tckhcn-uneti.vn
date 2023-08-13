<html>

</html>

<style>
    body {
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;

    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    form {
    /*    width: 400px;*/
        padding: 20px;
        background-color: #f0f0f0;
        border-radius: 5px;
        /* margin-left: 30px; */
        font-size: 1vw;

    }

    .input_, textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 20%;
        background-color: #2487C8;
        color: white;
        cursor: pointer;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    input[type="submit"]:hover {
        background-color: #299be4;
    }
</style>
<?php

use App\SendPostToAdmin;

require_once(BASE_PATH . '/template/app/layouts/header.php');

?>

<div class="body_getdata" style="display: flex;  margin-top: 45px; margin-right: 32px">
    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

    <div class="body_data" style="width: 62%; display: flex;  flex-direction: column;
         padding: 10px 3vw; box-sizing: border-box">
        <div style="width: 100%; display: flex; justify-content: center">


            <form action="<?= url("guibai/post") ?>" method="post" enctype="multipart/form-data">
                <label for="email">Email tác giả</label>
                <input class="input_" type="email" id="email" name="email"  required>
                

                <label for="file" >Chọn file:</label>
                <input class="input_"  multiple="multiple" type="file" id="file" name="fileToUpload" required>

                <label for="content">Nội dung:</label>
                <textarea id="content" name="message" rows="4" cols="50" placeholder="Nhập tên tác giả" required></textarea>
                <div style="margin: 2vh 0; text-align: center;" >
                    <input  class="input_" type="submit" name="submit" value="Submit">
                </div>
                
            </form>
        </div>


    </div>
    <?php require_once(BASE_PATH . '/template/app/layouts/banner-right.php') ?>


</div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>