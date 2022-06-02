<?php
    if(isset($_GET['route'])){
         $tam= $_GET['route'];
    }else{
        $tam= ''   ;
    }

    if($tam== 'hienthinguoidung'){
         include("../quanlynguoidung/hienthinguoidung.php");
    }
    elseif($tam== 'giasu'){
        include("page/giasu.php");
    }
    else{
        include("home.php");
    }
?>
