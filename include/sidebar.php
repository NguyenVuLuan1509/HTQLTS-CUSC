<div class="col-md-3 sidebarWeb">
    <button class="btn btn-warning shadow-none inconHome" type="button"
        style="height: 55px; width: 100%; margin-top: 10px; ">
        <a style="text-decoration: none; font-size: 24px;" href="admin.php?route=trangchu"><i
                class="fa-solid fa-house"></i>&nbsp;TRANG CHỦ</a>
    </button>

    <!-- Quản lý người dùng -->
    <div class="dropdown itemSidebarWeb" style="margin-top: 30px;">
        <button class="btn btn-warning dropdown-toggle shadow-none" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-users"></i> &nbsp;QUẢN LÝ NGƯỜI DÙNG
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="admin.php?route=hienthinguoidung">Danh sách người dùng</a></li>
            <li><a class="dropdown-item" href="admin.php?route=themnguoidung">Thêm người dùng</a></li>
            <li><a class="dropdown-item" href="admin.php?route=phanquyennguoidung">Phân quyền người dùng</a></li>
        </ul>
    </div>

    <!-- Quản lý dữ liệu -->
    <div class="dropdown itemSidebarWeb">
        <button class="btn btn-warning dropdown-toggle shadow-none" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-database"></i>&nbsp; QUẢN LÝ DỮ LIỆU
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="admin.php?route=danhsachdulieu">Danh sách dữ liệu</a></li>
            <li><a class="dropdown-item" href="admin.php?route=themdulieu">Thêm dữ liệu</a></li>
            <li><a class="dropdown-item" href="admin.php?route=phanchiadulieu">Phân chia dữ liệu</a></li>
        </ul>
    </div>

    <!-- Thống kê dữ liệu -->
    <div class="dropdown itemSidebarWeb">
        <button class="btn btn-warning dropdown-toggle shadow-none" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-calculator"></i>&nbsp; THỐNG KÊ DỮ LIỆU
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="admin.php?route=tkdl-theongay">Thống kê dữ liệu theo ngày</a></li>
            <li><a class="dropdown-item" href="admin.php?route=tkdl-theotuan">Thống kê dữ liệu theo tuần</a></li>
            <li><a class="dropdown-item" href="admin.php?route=tkdl-theokqkt">TK-DL theo kết quả khai thác</a></li>
            <li><a class="dropdown-item" href="admin.php?route=tkdl-theosoluonggoi">TK-DL theo số lượng gọi</a></li>
        </ul>
    </div>

    <!-- Tính tổng thời gian đăng nhập -->
    <div class="dropdown itemSidebarWeb">
        <button class="btn btn-warning dropdown-toggle shadow-none" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-clock"></i>&nbsp;TÍNH TỔNG THỜI GIAN ĐĂNG NHẬP
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="admin.php?route=tongtgdn-theotuan">Tổng TG-DN theo tuần</a></li>
            <li><a class="dropdown-item" href="admin.php?route=tongtgdn-theothang">Tổng TG-DN theo tháng</a></li>
        </ul>
    </div>

    <!-- Xem nhật ký thay đổi -->
    <div class="dropdown itemSidebarWeb">
        <button class="btn btn-warning shadow-none" type="button">
            <a href="admin.php?route=xemnhatky" style="text-decoration: none; color: black;">
                <i class="fa-solid fa-book"></i>&nbsp; XEM NHẬT KÝ THAY ĐỔI
            </a>
        </button>
    </div>
</div>