<?php
session_start();
// set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
// spl_autoload_extensions('.php');
// spl_autoload_register();
// include "./Config/Connect.php";
set_include_path(get_include_path() . PATH_SEPARATOR . 'Model/'); // dang ky duong nhan voi model
spl_autoload_extensions('.php'); //lay doi co ten .php 
spl_autoload_register();
include "./Config/Connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--Link bootrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- end link đăng nhập -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <script type="text/javascript" src="./Assets/front/js/menu.js"></script>

    <!-- duong link icon cua boostrap4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--duong link logo facbook  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="./Assets/front/css/header.css">
    <link rel="shortcut icon" href="./Assets/front/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./Assets/front/css/footer.css">
    <title>Đồ Án Tốt Nghiệp</title>
</head>
<style>
    body {
        background-image: url('./Assets/front/images/body.jpg');
    }
</style>

<body>

    <!-- header -->
    <?php
    include "./View/front/header.php";
    ?>
    <div class="margin">
        <?php
        // include "./View/front/menu.php";
        ?>
        <!-- hiên thi noi dung -->
        <div class="container">
            <div class="row">
                <!-- hien thi noi dung đây -->
                <?php
                $ctrl = "home";
                if (isset($_GET["action"]))
                    $ctrl = $_GET["action"];
                include "Controller/" . $ctrl . ".php";
                ?>
            </div>
        </div>
        <!-- hiên thị footer -->
        <?php
        include "./View/front/footer.php";
        ?>
    </div>
</body>

</html>