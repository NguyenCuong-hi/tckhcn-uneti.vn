<?php

use Database\DataBase;
$db = new DataBase();
$bocongthuong = $db->select('SELECT * FROM banners WHERE id = 308 ')->fetch();
$truongdaihoc = $db->select('SELECT * FROM banners WHERE id = 309 ')->fetch();
$tuyensinh = $db->select('SELECT * FROM banners WHERE id = 310 ')->fetch();

?>
<div class="img_lienket" style = "width: 15%; text-align: center; margin-top: 2vh;" >
        <H4 style = "font-size: 1.1vw; color: #155fa2; font-family: 'Times New Roman', Times, serif; " > LIÊN KẾT
            WEBSITE </H4 >

        <img style = "width: 100%" src = "<?=url($bocongthuong['image'])?>" >
        <img style = "width: 100%" src = "<?=url($truongdaihoc['image'])?>" >
        <img style = "width: 100%" src = "<?=url($tuyensinh['image'])?>" >
    </div >