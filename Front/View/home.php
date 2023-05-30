  <!--Section: Examples-->
  <script type="text/javascript">
function chonsize(a) {
    document.getElementById("size").value = a;

}
</script>
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
              <h3 class="mb-5 font-weight-bold" style="color: red;">SẢN PHẨM MỚI NHẤT</h3>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=sanpham">
                <span style="color: gray;">Xem chi tiết</span>
            </a>
          </div>


      </div>
      <!--Grid row-->
      <div class="row">
          <?php 
            $hh = new hanghoa();
            $result = $hh -> getHangHoaNew();
                while($set = $result -> fetch()){
            ?>

          <!--Grid column-->
          <!-- <div class="col-lg-3 col-md-4 mb-3 text-left">

              <div class="view overlay z-depth-1-half">
                  <img src="../Assets/Front/images/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                  <div class="mask rgba-white-slight"></div>
              </div>

              <h5 class="my-4 font-weight-bold" style="color: red;">
                  <?php echo number_format($set['dongia']); ?> <sup><u>đ</u></sup></br>
              </h5>

              <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh'];?>">
                  <span><?php echo $set['tenhh']."-".$set["mausac"]?></span></br>
              </a>

              <button class="btn btn-danger my-3" id="may4" value="lap 4">Xem</button>
              <h5>Số lượt xem:<?php echo $set['soluotxem']; ?></h5>
          </div> -->

          <div class="card card-footer col-lg-3 col-md-4 mb-3 text-left">
                  <img src="../Assets/front/images/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                  <div class="card-body" style="justify-content: center;  display: block; margin: 0 auto;">
                      <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh']; ?>">
                          <span style="font-size:17px; color:black; align-items: center; display: flex; justify-content: center;">
                              <b><?php echo $set['tenhh'] ?></b>
                          </span>
                      </a>
                      <h5 class="my-4 font-weight-bold" style="color: red; align-items: center; display: flex; justify-content: center;">
                          <?php echo number_format($set['dongia']); ?> <sup><u>đ</u></sup>
                      </h5>
                      <form class="d-flex me-2" style="align-items: center; display: flex; justify-content: center;  display: block; margin: 0 auto;">
                              <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh']; ?>">
                                  <div class="btn btn-primary me-2">Xem ngay</div>
                              </a>
                              <!-- <div class="btn btn-primary me-2">Mua hàng</div> -->
                      </form>




                  </div>
              </div>

          <?php  
          }
          ?>

      </div>

      <!--Grid row-->

  </section>
  <!-- end sản phẩm mới nhất -->
  <!-- sản phẩm khuyến mãi -->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
              <h3 class="mb-5 font-weight-bold" style="color: red;">SẢN PHẨM KHUYẾN MÃI</h3>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=sanpham&act=khuyenmai">
                  <span style="color: gray;">Xem chi tiết</span>
          </div>
          </a>

      </div>
      <!--Grid row-->
      <div class="row">
          <?php 
            $hh = new hanghoa();
            $result = $hh -> getHangHoaSale();
                while($set = $result -> fetch()){
            ?>

          <!--Grid column-->

          <div class="card card-footer col-lg-3 col-md-4 mb-3 text-left">
                  <img src="../Assets/front/images/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                  <div class="card-body" style="justify-content: center;  display: block; margin: 0 auto;">
                      <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh']; ?>">
                          <span style="font-size:17px; color:black; align-items: center; display: flex; justify-content: center;">
                              <b><?php echo $set['tenhh'] ?></b>
                          </span>
                      </a>
                      <h5 class="my-4 font-weight-bold" style="color: red; align-items: center; display: flex; justify-content: center;">
                          <?php echo number_format($set['dongia']); ?> <sup><u>đ</u></sup>
                      </h5>
                      <form class="d-flex me-2" style="align-items: center; display: flex; justify-content: center;  display: block; margin: 0 auto;">
                              <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh']; ?>">
                                  <button class="btn btn-primary me-2">Xem ngay</button>
                              </a>
                              <!-- <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh']; ?>">
                                <button class="btn btn-primary me-2">Mua hàng</button>
                              </a> -->

                      </form>
                  </div>
              </div>

          <?php  
          }
          ?>
      </div>

      <!--Grid row-->

  </section>
  <!-- end sản phẩm khuyến mãi -->