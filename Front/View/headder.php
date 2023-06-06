<header class="row no-gutters">
    <!-- dang ky -->
    <section>
        <nav class="navbar navbar-expand-sm navbar-dark bg-danger fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0)" style="font-size:20px;  margin-left: 100px; margin-top: 20px;">MUSIC LIFE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse container" id="mynavbar">
                    <ul class="navbar-nav me-auto" style="font-size:17px; ">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=home">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Cửa hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Liên hệ</a>
                        </li>
                        <li>
                            <a class="nav-link" href="index.php?action=dangky">Tài Khoản</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?action=dangnhap&act=logout" class="nav-link">Đăng Xuất</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=giohang">Giỏ hàng</a>
                        </li>
                        <li>
                            <?php
                            $dem = 0;
                            if (isset($_SESSION['cart'])) {
                                $dem = count($_SESSION['cart']);
                            } else {
                                $dem = 0;
                            }
                            ?>
                            <p style="color: yellow; margin-top: 20px; margin-left: 0px;">(<?php echo $dem; ?>)</p>

                        </li>
                        <li>
                            <?php
                            if (isset($_SESSION['makh']) && isset($_SESSION['tenkh'])) :
                                $name = $_SESSION['tenkh'];
                            ?>
                                <p style="color: white; margin-top: 20px; margin-left: 0px;"><?php echo "Xin chào ! " . $name; ?>
                                </p>
                            <?php
                            else :
                                echo '<p style="color: yellow; margin-top: 20px; margin-left: 0px;">' . "Xin Chào!" . '</p>';
                            ?>
                            <?php
                            endif;
                            ?>
                        </li>
                    </ul>
                    <form class="" method="post">
                        <div class="input-group">
                            <input type="text" name="txtsearch" action="index.php?action=sanpham&act=timkiem" class="form-control" placeholder="Tìm Kiếm" />
                            <input class="input-group-text" style="height: 35px;" type="submit" id="btsearch" value="Tìm Kiếm" />
                        </div>
                    </form>
                    <span></span>
                </div>
            </div>
        </nav>

    </section>


</header>
<!-- dang ky -->

<!-- hinh dộng -->
<div class="row">

    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="2"></li>

                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner z-depth-1-half" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../Assets/Front/images/bn3.jpg" style="height: 400px;" alt=" First slide">
                        </div>
                        <!--/First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../Assets/Front/images/bn1.jpg" style="height: 400px;" alt="Second slide">
                        </div>
                        <!--/Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../Assets/Front/images/bn2.jpg" alt="Third slide" style="height: 400px;">
                        </div>

                        <!--/Third slide-->
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
            </div>
        </div>

    </div>
</div>