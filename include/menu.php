<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 menuWeb">
            <!-- Ô tìm kiếm -->
            <form action="page/timkiem/giasutimkiemlop.php" method="GET" style="float: right; margin: 5px;">
                <input class="form-control me-2 shadow-none" name="noidungtim" type="text"
                    placeholder="Bạn cần gì hôm nay?" style="float: left; width: 500px;">
                <button class="btn btn-warning shadow-none" name="giasutimkiem" type="submit" style="float: left;"><i
                        class="fa-solid fa-magnifying-glass"></i> &nbsp;Tìm</button>
            </form>
        </div>

        <!-- Góc trái menu "Thông báo và thông tin cá nhân" -->
        <div class="col-md-4 menuWeb">
            <!-- Thông báo và tin nhắn -->
            <i class="fa-solid fa-bell thongbaotinnhan"></i>
            <i class="fa-solid fa-message"></i>

            <!-- Ảnh đại diện -->
            <img src="../images/user.png" alt="avt" class="avtuser">
            <!-- Icon xem thông tin cá nhân -->
            <div class="dropdown" style="margin-top: 10px; float: right;">
                <button class="dropdown-toggle shadow-none btntendangnhap" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Vũ Luân
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="admin.php?route=xemthongtincanhan">Thông tin cá nhân</a></li>
                    <li><a class="dropdown-item" href="admin.php?route=home">Đăng xuất</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>