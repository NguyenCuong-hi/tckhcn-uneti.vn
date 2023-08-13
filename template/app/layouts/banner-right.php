<?php

use Database\DataBase;
$db = new DataBase();
$guibai = $db->select('SELECT * FROM banners WHERE id = 319')->fetch();
$bocongthuong = $db->select('SELECT * FROM banners WHERE id = 308 ')->fetch();
$truongdaihoc = $db->select('SELECT * FROM banners WHERE id = 309 ')->fetch();
$tuyensinh = $db->select('SELECT * FROM banners WHERE id = 317 ')->fetch();

?>
<style>
  .img_lienket  button:hover {
 
  cursor: pointer;
}

.img_lienket button{
    width: 97%;
  background-color: #2487C8;
  color: white;
  border: 2px solid #2487C8;
  padding: 1vh 2vw;
  font-size: 1.2vw;
  border-radius:0.5vw ;
  cursor: pointer;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);

}
.img{
    border: 2px solid #2487C8;
}

  .author-guide {
      flex-direction: column;
      border: 2.3px solid #93b6c8;
      padding: 4px;
      border-radius: 1px;
  }

  .guide-title {
      margin-bottom: 7px;
      font-size: 0.78vw;
      font-family: 'Times New Roman';
      border-bottom: 1px solid #ccc;
      font-weight: bold;
      padding-bottom: 5px;

  }

  .author-guide .guide-link {
      display: block;
      color: #007bff;
      margin-bottom: 5px;
      font-size: 0.9vw;
      float: left;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      text-decoration: none;
      text-align: left;
  }

  .author-guide .guide-link::before {
      content: "• ";
      color: #0b0b0b;
      font-size: medium;
  }

  .send-button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 5px 10px;
      /*border-radius: 0.1px;*/
      cursor: pointer;
      margin-top: 10px;
  }

  .send-button:hover {
      background-color: #0056b3;
  }

</style>
<div class="img_lienket" style = "width: 15%; text-align: center; margin-top: 2vh;" >

    <div class="author-guide">
        <h3 class="guide-title">HƯỚNG DẪN DÀNH CHO TÁC GIẢ</h3>
        <a href="<?=url("thongtintraodoi")?>" class="guide-link">Hướng dẫn gửi bài</a>
        <a href="https://phongkhcn.uneti.edu.vn/vi/contact/" class="guide-link">Liên hệ tạp chí</a>
        <a href="<?= url("thongtintraodoi") ?>" class="guide-link">Mẫu quy cách bài viết</a>
        <a href="#" class="guide-link" style="">Đạo đức và công bố thông tin khi xuất bản</a>

        <a href="<?= url("guibai") ?>"><button style="border-radius: 0.1vw; font-weight: bold; font-size: 0.9vw; padding: 7px 0px 7px;
" class="send-button"; >GỬI BÀI VIẾT</button></a>
    </div>
    <H4 style="font-size: 1.1vw; color: #155fa2; font-family: 'Times New Roman', Times, serif;  padding-top: 10px"> LIÊN KẾT
        WEBSITE </H4>



    <!--    <a href="--><?php //= $guibai['url'] ?><!--"><img  class=" img-responsive img-fluid " style="width: 100%" src="--><?php //= url($guibai['image']) ?><!--"></a>-->
    <a href="<?= $bocongthuong['url'] ?>"><img class=" img-responsive" style="width: 102%" src="<?= url($bocongthuong['image']) ?>"></a>
    <a href="<?= $truongdaihoc['url'] ?>"><img class=" img-responsive" style="width: 101%" src="<?= url($truongdaihoc['image']) ?>"></a>
    <a href="<?= $tuyensinh['url'] ?>"> <img class=" img-fluid img-responsive" style="width: 12.26vw; height: 17.18vh ;border: 2.3px solid #93b6c8; " src="<?= url($tuyensinh['image']) ?>"> </a>
    </div >