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
    elseif($tam== 'xemthongtincanhan'){
        include("../quanlythongtincanhan/xemthongtincanhan.php");
    }
    elseif($tam== 'suanguoidung'){
        include("../quanlynguoidung/suanguoidung.php");
    }
    elseif($tam== 'chitietnguoidung'){
        include("../quanlynguoidung/xemchitietnguoidung.php");
    }
    elseif($tam== 'xoanguoidung'){
        include("../quanlynguoidung/xoanguoidung.php");
    }
    elseif($tam== 'phanquyennguoidung'){
        include("../quanlynguoidung/phanquyennguoidung.php");
    }
    elseif($tam== 'suathongtincanhan'){
        include("../quanlythongtincanhan/suathongtincanhan.php");
    }
    elseif($tam== 'danhsachdulieu'){
        include("../quanlydulieu/danhsachdulieu.php");
    }
    elseif($tam== 'themdulieu'){
        include("../quanlydulieu/themdulieu.php");
    }
    elseif($tam== 'phanchiadulieu'){
        include("../quanlydulieu/phanchiadulieu.php");
    }
    elseif($tam== 'tkdl-theongay'){
        include("../thongkedulieu/thongkedulieutheongay.php");
    }
    elseif($tam== 'tkdl-theotuan'){
        include("../thongkedulieu/thongkedulieutheotuan.php");
    }
    elseif($tam== 'tkdl-theokqkt'){
        include("../thongkedulieu/tkdl-theokqkt.php");
    }
    elseif($tam== 'tkdl-theosoluonggoi'){
        include("../thongkedulieu/tkdl-theosoluonggoi.php");
    }
    elseif($tam== 'tongtgdn-theotuan'){
        include("../tongthoigiandangnhap/tongthoigiandangnhaptheotuan.php");
    }
    elseif($tam== 'tongtgdn-theothang'){
        include("../tongthoigiandangnhap/tongthoigiandangnhaptheothang.php");
    }
    elseif($tam== 'xemnhatky'){
        include("../xemnhatky/xemnhatky.php");
    }
    elseif($tam== 'chitietdulieu'){
        include("../quanlydulieu/chitietdulieu.php");
    }
    elseif($tam== 'suadulieu'){
        include("../quanlydulieu/suadulieu.php");
    }
    elseif($tam== 'xoadulieu'){
        include("../quanlydulieu/xoadulieu.php");
    }
    elseif($tam== 'trangchu'){
        include("home.php");
    }
    elseif(isset($_GET['timkiemdulieu'])){
        include("../quanlydulieu/timkiemdulieu.php");
    }
    elseif(isset($_GET['xulythemnguoidung'])){
        include("../quanlynguoidung/xulythemnguoidung.php");
    }
    else{
        include("home.php");
    };


    
?>