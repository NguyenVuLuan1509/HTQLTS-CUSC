<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="shortcut icon" type="image/png" href="../images/iconLogo.png">
    <title>Admin HTQL Tuyển sinh CUSC</title>
</head>
<body>
    <!-- Logo Website -->
    <div class="container logoWeb">
        <img src="../images/logo.png" alt="logoweb">
    </div>

    <!-- Menu Website -->
    <?php
        include('../include/menu.php');
    ?>

    <!-- Phần nội dung Website -->
    <div class="container-fruid homeWeb">
        <div class="row">
            <!-- Sidebar Website -->
            <?php
                include('../include/sidebar.php');
            ?>

            <!-- Main website -->
            <?php
                include('../include/main.php');
            ?>
        </div>
    </div>

    <!-- Footer Website -->
    <?php
        include('../include/footer.php');
    ?>
</body>
</html>