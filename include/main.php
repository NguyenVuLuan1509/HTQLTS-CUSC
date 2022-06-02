<?php
    if(isset($_GET['route'])){
         $tam= $_GET['route'];
    }else{
        $tam= ''   ;
    }

    if($tam== 'hienthinguoidung'){
         include("../quanlynguoidung/hienthinguoidung.php");
    }
    elseif($tam== 'themnguoidung'){
        include("../quanlynguoidung/themnguoidung.php");
    }
    else{
        include("home.php");
    }
?>