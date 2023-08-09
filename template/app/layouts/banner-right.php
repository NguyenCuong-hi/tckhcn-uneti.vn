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

</style>
<div class="img_lienket" style = "width: 15%; text-align: center; margin-top: 2vh;" >
        <H4 style = "font-size: 1.1vw; color: #155fa2; font-family: 'Times New Roman', Times, serif; " > LIÊN KẾT
            WEBSITE </H4 >

    <a href="<?= $guibai['url'] ?>"><img  class=" img-responsive img-fluid " style="width: 100%" src="<?= url($guibai['image']) ?>"></a>
    <a href="<?= $bocongthuong['url'] ?>"><img class=" img-responsive" style="width: 103%" src="<?= url($bocongthuong['image']) ?>"></a>
    <a href="<?= $truongdaihoc['url'] ?>"><img class=" img-responsive" style="width: 103%" src="<?= url($truongdaihoc['image']) ?>"></a>
    <a href="<?= $tuyensinh['url'] ?>"> <img class=" img-fluid img-responsive" style="width: 103%" src="<?= url($tuyensinh['image']) ?>"> </a>
    </div >