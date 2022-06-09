<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="shortcut icon" type="image/png" href="images/iconLogo.png">
    <title>HTQL tuyển sinh CUSC</title>
</head>

<body>
    <!-- Logo Website -->
    <div class="container logoWeb">
        <img src="images/logo.png" alt="logoweb">
    </div>

    <!-- Menu Website -->
    <div class="container menuWeb">
        <nav class="navbar navbar-expand-xl navbar-text bg-success ">
            <div class=" container navbar-collapse " style="height: 30px;" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active list-menu" aria-current="page" href="#">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link list-menu" href="#">MENU 01</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link list-menu" href="#">MENU 02</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link list-menu" href="#">LIÊN HỆ</a>
                    </li>
                </ul>

                <!-- Ô tìm kiếm -->
                <form action="page/timkiem/giasutimkiemlop.php" method="GET">
                    <input class="form-control me-2" name="noidungtim" type="text" placeholder="Bạn cần gì hôm nay?"
                        style="float: left; width: 200px;">
                    <button class="btn btn-danger" name="giasutimkiem" type="submit"
                        style="float: left;">Search</button>
                </form>

                <!-- Đăng xuất -->
                <button class="btn btn-warning btn-sm">
                    <a href="#">Đăng xuất</a>
                </button>
            </div>
        </nav>
    </div>

    <!-- Phần nội dung Website -->
    <div class="container homeWeb">

    </div>

    <!-- Footer Website -->
    <div class="container-fruid footerWeb">

    </div>
</body>

</html>