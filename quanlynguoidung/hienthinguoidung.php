<div class="col-md-9 mainWeb">
    <h2>Danh sách người dùng</h2>
    <!-- Ô tìm kiếm người  dùng -->
    <form class="d-flex" style="width: 400px; float: right;">
        <input class="form-control me-2 shadow-none" type="search" placeholder="Tìm kiếm người dùng?"
            aria-label="Search">
        <button class="btn btn-success" type="submit">Tìm</button>
    </form><br><br>

    <!-- Bảng dánh sách người dùng -->
    <table class="table table-success table-striped">
        <tr>
            <th>STT</th>
            <th>SDT</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Tùy chọn</th>

        </tr>

        <tr>
            <td>01</td>
            <td>0326551974</td>
            <td>Nguyễn Vũ Luân</td>
            <td>luannguyenhttt@gmail.com</td>
            <td>Nam</td>
            <td>abc</td>
            <td>
                <a href="admin.php?route=chitietnguoidung">Chi tiết</a><br>
                <a href="admin.php?route=suanguoidung">Sửa</a><br>
                <a href="admin.php?route=xoanguoidung">Xóa</a>
            </td>
        </tr>




    </table>
    <!-- Phân trang -->
    <nav aria-label="Page navigation example" style="float: right;">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</div>