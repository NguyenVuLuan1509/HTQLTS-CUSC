<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
    <section class="container">
        <div class="login">
            <h1>ĐĂNG NHẬP</h1>

            <!-- Logoweb -->
            <div>
                <img src="../images/iconLogo.png" alt="logowweb" style="width: 100%; height: 100px;">
            </div><br>

            <!-- Form đăng nhập -->
            <form method="post" action="index.php">
                <input class="w3-radio" type="radio" name="nguoidung" value="user" checked>
                <label>User</label>
                <input class="w3-radio" type="radio" name="nguoidung" value="usermanager">
                <label>User Manager</label>
                <input class="w3-radio" type="radio" name="nguoidung" value="admin">
                <label>Admin</label>
                <p><input type="text" name="tendangnhap" value="" placeholder="Tên đăng nhập"></p>
                <p><input type="password" name="matkhau" value="" placeholder="Mật khẩu"></p>

                <p class="remember_me">
                    <label>
                        <input type="checkbox" name="remember_me" id="remember_me">
                        Ghi nhớ đăng nhập
                    </label>
                </p>
                <p class="submit"><input type="submit" name="commit" value="Đăng nhập"></p>
            </form>
        </div>

        <div class="login-help">
            <p>Quên mật khẩu? <a href="index.php" style="color: red;">Lấy lại mật khẩu</a></p>
        </div>
        <div class="login-help">
            <p>Đăng ký <a href="index.php" style="color: red;">Đăng ký tài khoản mới</a></p>
        </div>
    </section>
</body>

</html>