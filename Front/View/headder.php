<header class="row no-gutters">
    <!-- nav san pham -->
    <section class="col-12" style="height:40px;">
        <div class="col-12">
            <div class="row">

                <!-- test -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top scrolling-navbar" style="margin-bottom: 0px;">

                    <div class="collapse navbar-collapse" id="basicExampleNav">

                        <!-- Links -->
                        <ul class="navbar-nav mr-auto smooth-scroll">

                        </ul>
                    </div>
                </nav>
                <!-- end test -->
            </div>
        </div>

    </section>
    <!-- dang ky -->
    <section class="col-12">

        <div class="col-12">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-warning bg-warning fixed-top" style="margin-bottom: 0px;">

                    <!-- Right -->
                    <a class="navbar-brand" href="#">
                        <img src="../Assets/Front/images/sol.png" alt="Avatar Logo" style="width:40px; margin-left: 100px;" class="rounded-pill">
                    </a>
                    <ul class="navbar-nav ml-auto">
                        </li>
                        <li class="nav-item">
                            <a href="index.php?action=home" class="nav-link"><i class="bi bi-house-door-fill"></i>Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="bi bi-bag-fill"></i>Cửa hàng</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="bi bi-telephone-fill"></i>Liên hệ</a>
                        </li>
                        <!-- <div class="dropdown">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                Dropdown button
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Normal</a></li>
                                <li><a class="dropdown-item active" href="#">Active</a></li>
                                <li><a class="dropdown-item disabled" href="#">Disabled</a></li>
                            </ul>
                        </div> -->
                        <li class="nav-item">
                            <a href="index.php?action=dangky" class="nav-link">Đăng Ký</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?action=dangnhap" class="nav-link">Đăng Nhập</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?action=dangnhap&act=logout" class="nav-link">Đăng Xuất</a>
                        </li>
                        <li>
                            <a href="index.php?action=giohang" class="nav-link"><img src="../Assets/Front/images/cartx2.png" width="30px" height="30px" alt=""></a>
                        </li>
                        <!-- <li>
                            <p style="color: red; margin-top: 20px; margin-left: 0px;">(0)</p>

                        </li> -->
                        <li>
                        <?php 
                                    $dem = 0;
                                    if(isset($_SESSION['cart'])) {
                                        $dem = count($_SESSION['cart']);
                                    } else {
                                        $dem = 0;
                                    }
                                ?>
                            <p style="color: red; margin-top: 20px; margin-left: 0px;">(<?php echo $dem;?>)</p>

                        </li>
                        <li>
                            <?php
                                if(isset($_SESSION['makh']) && isset($_SESSION['tenkh'])):
                                    $name=$_SESSION['tenkh'];   
                                ?>
                            <p style="color: red; margin-top: 20px; margin-left: 0px;"><?php echo "Xin chào !".$name ;?>
                            </p>
                            <?php
                                else:
                                    echo '<p style="color: red; margin-top: 20px; margin-left: 0px;">'."Xin Chào!".'</p>';
                                ?>
                            <?php
                                endif;
                                ?>
                        </li>
                        <li>
                            <form class="form-inline" action="" method="post">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <!-- <a href="Trangchu.php?trang=tk"> -->
                                        <input class="input-group-text" style="height: 35px;" type="submit" id="btsearch" value="Tìm Kiếm" />
                                        <!-- </a> -->
                                        <!-- <span class="input-group-text">@</span> -->
                                        <input type="text" name="txtsearch" class="form-control" placeholder="Tìm Kiếm" />
                                    </div>

                            </form>
                    </ul>
                </nav>

                <!-- <nav class="navbar navbar-expand-sm bg-danger navbar-dark sticky-top"> -->
            </div>
        </div>

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