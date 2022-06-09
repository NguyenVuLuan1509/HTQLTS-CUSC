<div class="col-md-9 mainWeb">
    <h3>Thêm người dùng mới</h3>
    <div class="formThemNguoiDung">
        <form action="admin.php?xulythemnguoidung=xulythemnguoidung" method="POST" style="padding-left: 320px;"
            onsubmit="return kiemtra()">
            <br>
            <h3 style="color:red;">THÔNG TIN ĐĂNG NHẬP</h3><br>
            <div class="col-md-6">
                <label>Tên đăng nhập:</label>
                <input type="text" class="form-control shadow-none" name="tendangnhap">
                <label></label>Mật khẩu:</label>
                <input type="password" class="form-control shadow-none" name="matkhau">
                <label></label>Nhập lại mật khẩu:</label>
                <input type="password" class="form-control shadow-none" name="nhaplaimatkhau">
            </div>
            <br>
            <h3 style="color:red;">THÔNG TIN NGƯỜI DÙNG</h3><br>
            <div class="col-md-6">
                <label>Nhóm người dùng:</label>
                <select class="form-select shadow-none" aria-label="Default select example">
                    <option selected>Chọn nhóm người dùng</option>
                    <option value="1">User Manager</option>
                    <option value="2">Admin</option>
                </select>
                <label></label>Số điện thoại:</label>
                <input type="text" class="form-control shadow-none" name="sdt">
                <label></label>Họ và tên:</label>
                <input type="text" class="form-control shadow-none" name="hoten">
                <label></label>Email:</label>
                <input type="email" class="form-control shadow-none" name="email">
                <label></label>Địa chỉ:</label>
                <input type="text" class="form-control shadow-none" name="diachi">

                <br>
                <button type="submit" class="btn btn-success">
                    <i class="fa-solid fa-plus">&nbsp;</i>Thêm người dùng
                </button>
            </div>

            <!-- Nơi báo lỗi -->
            <p> <label></label> <span class="baoloi"></span> </p>
        </form>
    </div>
</div>