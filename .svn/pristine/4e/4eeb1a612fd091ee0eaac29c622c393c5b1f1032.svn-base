<?php
    /* Vinh*/
    function connect(){
        $host="localhost";
        $user="root";
        $pass="";
        $database="htqltuyensinh";
        $conn=new mysqli($host,$user,$pass,$database);
        return $conn;
    }
    function layDanhSachNguoiDung($conn,&$danhsachAdmin,&$danhsachUserManager){
        $sql1="SELECT * FROM admin";
        $sql2="SELECT * FROM usermanager";
        $rs1=$conn->query($sql1);
        $rs2=$conn->query($sql2);
        $i=0;
        $danhsach[$i]=0;
        while ($result1=$rs1->fetch_assoc()){
            $danhsachAdmin[$i]=$result1;
            $i=$i+1;
        }
        while ($result2=$rs2->fetch_assoc()){
            $danhsachUserManager[$i]=$result2;
            $i=$i+1;
        }
    }
?>