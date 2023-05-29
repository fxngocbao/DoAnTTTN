  <!-- quang cao -->
  <?php
   include "quangcao.php";
  ?>
  <!-- sản phẩm Mới nhất -->

  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
              <h3 class="mb-5 font-weight-bold" style="color: red;">TẤT CẢ SẢN PHẨM KHUYẾN MÃI</h3>
          </div>
          <!-- <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=sanpham&act=sanpham">
                  <span style="color: gray;">Xem chi tiết</span></div>
          </a> -->


      </div>
      <!--Grid row-->
      <div class="row">
         
      <!--Grid row-->
      <div class="row">
          <?php
            $hh = new HangHoa();
            $results = $hh->getHangHoaAllSale();
            while ($set = $results->fetch()) :
            ?>

              <!--Grid column-->

              <div class="card card-footer col-lg-3 col-md-4 mb-3 text-left">
                  <img src="./Assets/front/images/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
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
                              <button class="btn btn-primary me-2">Mua hàng</button>
                      </form>




                  </div>
              </div>
<!-- 
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <img src="<?php echo './Assets/Front/images/' . $set['hinh'] ?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>

                  <h5 class="my-4 font-weight-bold">
                      <font color="red"><?php echo number_format($set['giamgia']) ?><sup><u>đ</u></sup></font>
                      <strike><?php echo number_format($set['dongia']) ?></strike><sup><u>đ</u></sup>
                  </h5>

                  <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh'] ?>">
                      <span><?php echo $set['tenhh'] . '-' . $set['mausac'] ?></span></br></a>
                  <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                  <h5>Số lượt xem:<?php echo $set['soluotxem'];?></h5>
              </div> -->
          <?php
                
            endwhile;
            ?>
      </div>

      <!--Grid row-->

  </section>
  <!-- end sản phẩm khuyến mãi -->