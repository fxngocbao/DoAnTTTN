<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;

    }
</script>
<section>
    <div class="row">
        <div class="col-lg-12 text-center">
            <div style="padding-bottom: 50px;  text-align: center">
                <button style="color: white; width: 100%;height: 60px  ;text-decoration: none;" class="btn-danger">CHI TIẾT SẢN PHẨM</button>
            </div>
        </div>
    </div>
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="index.php?action=giohang" method="post">
                    <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->

                    <div class="preview col-md-6">
                        <div class="tab-content">
                            <?php
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $dt = new hanghoa();
                                $results = $dt->getHangHoaId($id);
                                $mahh = $results['mahh'];
                                $tenhh = $results['tenhh'];
                                $dongia = $results['dongia'];
                                $hinh = $results['hinh'];
                                $mota = $results['mota'];
                                $nhom = $results['Nhom'];
                            }
                            ?>

                            <div class="tab-pane active" id=""><img src="<?php echo '../Assets/Front/images/' . $hinh; ?>" alt="" width="200px" height="350px">
                            </div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <?php
                            $results = $dt->getHangNhom($nhom);
                            while ($set = $results->fetch()) {
                            ?>
                                <li class="active">
                                    <a href="#<?php echo $set['hinh']; ?>" data-toggle="tab">
                                        <img src="<?php echo '../Assets/Front/images/' . $set['hinh']; ?>" alt="Học thiết kế web bán hàng Online">
                                    </a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $mahh; ?>" />
                        <h3 class="product-title"><?php echo $tenhh ?></h3>
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="product-description">
                            <?php echo $mota ?>
                        </p>
                        <h4 class="price">Giá bán: <?php echo number_format($dongia) ?>đ</h4>

                        <h5 class="colors">Màu:
                            <select name="mymausac" class="form-control" style="width:150px;">
                                <?php
                                $results = $dt->getHangNhom($nhom);
                                while ($set = $results->fetch()) {
                                ?>
                                    <option value="<?php echo $set['mausac']; ?>">
                                        <?php echo $set['mausac']; ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select><br>
                            <!-- Form sẽ lấy value input xử lí bằng js-->
                            <input type="hidden" name="size" id="size" value="0" />
                            <!-- Kích Thước:
                            <?php
                            $results = $dt->getHangHoaSize($nhom);
                            while ($set = $results->fetch()) {
                            ?>
                            <button type="button" name="<?php echo $set['size']; ?>"
                                onclick="chonsize('<?php echo $set['size']; ?>')"
                                class="btn btn-default-hong btn-circle" id="hong" value="<?php echo $set['size']; ?>">
                                <?php echo $set['size']; ?>
                            </button> -->
                        <?php
                            }
                        ?>
                        </br></br>
                        Số Lượng:

                        <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />
                        </h5>

                        <div class="action">

                            <button class="add-to-cart btn btn-default" type="submit" data-toggle="modal" data-target="#myModal">MUA NGAY
                            </button>

                            <a href="http://hocwebgiare.com/" target="_blank"> <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
    </article>
</section>

<p class="float-left"><b>BÌnh luận </b></p>
<hr>
</div>
<form action="" method="post">
    <div class="row">
        <?php
        if (isset($_SESSION['makh'])) {
        ?>
            <input type="hidden" name="txtmahh" value="<?php echo $mahh ?>" />
            <img src="../Assets/Front/images/people.png" width="50px" height="50px" ; />
            <textarea class="input-field comment" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
            <input type="submit" class="btn btn-primary button comment_btn" id="submitButton" style="float: right;" value="Bình Luận" />

        <?php
        } else {
        ?>
            <div class="comment_container">
                <div class="comment_content">
                    <img src="../Assets/Front/images/people.png" width="50px" height="50px" ;  class="comment_avatar">
                    <h5>Mời bạn đăng nhập để bình luận</h5>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</form>
<div class="row">

    <?php
    if (isset($_GET['id'])) {
        $mahh = $_GET['id'];
        $usr = new user();
        $sum = $usr->getCountComment($mahh);
    }
    ?>
    <p class="float-left"><b>Các bình luận <?php echo $sum; ?></b></p>
    <hr>
    <?php
    if ($sum > 0) {
        $result = $usr->getNoiDungComment($mahh);
        while ($set = $result->fetch()) {
    ?>
            <div class="p-1 flex input-comment">
                <!-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="comment_avatar"> -->
                <div class="bg-dark text-light area-info-comment">
                    <p><b><a href="#" class="text-danger"><?php echo $set['username'] ?></a> <br> <?php echo $set['ngaybl'] ?> </b><br>
                    </p>
                </div>
                <div class="area-text-comment text-light bg-dark scroll">
                    <p><?php echo $set['noidung'] ?></p>
                </div>
            </div>
    <?php
        }
    } 
    // else {
    //     echo '<h5 class="">Chưa có bình luận nào !!</h5>';
    // }
    ?>
</div>
<div class="row">
    <br />
</div>
</div>
</section>