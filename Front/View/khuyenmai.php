  <!-- quang cao -->
  <?php
    include "quangcao.php";
    ?>
  <!-- sản phẩm Mới nhất -->

  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">

          <div class="col-lg-12 text-center">
              <div style="padding-bottom: 50px;  text-align: center">
                  <a href="index.php?action=sanpham&act=sanpham"><button style="color: white; width: 100%;height: 60px  ;text-decoration: none;" class="btn-danger">TẤT CẢ SẢN PHẨM KHUYÉN MÃI</button></a>
              </div>
          </div>

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
                          </form>




                      </div>
                  </div>
              <?php

                endwhile;
                ?>
          </div>

          <!--Grid row-->

  </section>
  <!-- end sản phẩm khuyến mãi -->