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
<?php
if (isset($_SESSION['makh'])) {
?>
    <div class="comment_container">
        <div class="comment_content">
        <form class="comment_content" action="index.php?action=sanpham&act=comment&id=<?php echo $id ?>" method="post">
                <input type="hidden" name="txtmahh" value="<?php echo $mahh ?>" />
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="100px" class="comment_avatar">
                <textarea type="text" name="comment" class="input-field comment" rows="2" cols="70" placeholder="Thêm bình luận"></textarea>
                    <button class="button comment_btn btn btn-primary" type="submit" >Bình luận</button>
            </form>
        </div>
    </div>
<?php
} else {
?>
    <div class="comment_container">
        <div class="comment_content">
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="100px" class="comment_avatar">
            <h4>Mời bạn đăng nhập để bình luận</h4>
        </div>
    </div>
<?php
}
?>
<div class="area-comment">
    <?php
    if (isset($_GET['id'])) {
        $mahh = $_GET['id'];
        $usr = new user();
        $sum = $usr->getCountComment($mahh);
    }
    ?>
    <hr>
    <h5>
        <b>Toàn bộ bình luận <?php echo $sum; ?></b>
    </h5>

    <?php
    if ($sum > 0) {
        $result = $usr->getNoiDungComment($mahh);
        while ($set = $result->fetch()) {
    ?>
            <div class="p-1 flex input-comment">
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="50px" class="comment_avatar">
                <div class="bg-dark text-light area-info-comment">
                    <p><b><a href="#" class="text-danger"><?php echo $set['username'] ?></a></b><br> 
                    Ngày bình luận: <b><?php echo $set['ngaybl'] ?></b>
                    </p>
                    <p>Nội dung bình luận: <b><?php echo $set['noidung'] ?></b></p>
                </div>
            </div>
    <?php
        }
    }
    ?>
</div>

</div>
</section>