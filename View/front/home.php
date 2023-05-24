  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <a href="index.php?action=sanpham">
              <button style="color: white; background-color: #dc3545; width: 100%;height: 60px  ;text-decoration: none; font-size: 16px;">XEM TẤT CẢ SẢN PHẨM
                  <P style="color: gray;">Xem chi tiết</P>
              </button>
          </a>


      </div>
      <p></p>
      <!--Grid row-->
      <div class="row">
          <?php
            $hh = new hanghoa();
            $result = $hh->getHangHoaNew();
            while ($set = $result->fetch()) {
            ?>

              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left" style="border:2px ;">

                  <div class="view overlay z-depth-1-half">
                      <img src="./Assets/front/images/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>

                  <h5 class="my-4 font-weight-bold" style="color: red;">
                      <?php echo number_format($set['dongia']); ?> <sup><u>đ</u></sup></br>
                  </h5>

                  <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh']; ?>">
                      <span><?php echo $set['tenhh'] ?></span></br>
                  </a>

                  <button class="btn btn-danger my-3" id="may4" value="lap 4">Xem</button>
                  <!-- <h5>Số lượt xem:<?php echo $set['soluotxem']; ?></h5> -->
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
          <a href="index.php?action=sanpham&act=khuyenmai">
              <button style="color: white; background-color: #dc3545; width: 100%;height: 60px  ;text-decoration: none; font-size: 16px;">SẢN PHẨM KHUYẾN MÃI
                  <P style="color: gray;">Xem chi tiết</P>
              </button>
          </a>

      </div>
      <p></p>
      <!--Grid row-->
      <div class="row">
          <?php
            $hh = new hanghoa();
            $result = $hh->getHangHoaSale();
            while ($set = $result->fetch()) {
            ?>

              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <img src="./Assets/front/images/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>

                  <h5 class="my-4 font-weight-bold">
                      <font color="red">
                          <?php echo number_format($set['dongia']); ?>
                          <sup><u>đ</u></sup>
                      </font>
                      <strike><?php echo number_format($set['giamgia']); ?></strike><sup><u>đ</u></sup>
                  </h5>

                  <a href="">
                      <span><?php echo $set['tenhh']; ?></span></br>
                  </a>
                  <button class="btn btn-danger my-4" id="may4" value="lap 4">New</button>
                  <h5>Số lượt xem: <?php echo $set['soluotxem']; ?></h5>

              </div>
          <?php
            }
            ?>
      </div>

      <!--Grid row-->

  </section>
  <!-- end sản phẩm khuyến mãi -->