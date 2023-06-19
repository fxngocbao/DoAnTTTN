  <!-- quảng cáo -->
  <?php
    // include "quangcao.php";

    // B1: tim tong so record( so san pham trong database hanghoa1)
    $hh  = new hanghoa();
    // $count = $hh -> getCountRecode() // 19
    $result  = $hh->getHangHoaAll(); //$result la bang chua 19 sp
    $count = $result->rowCount(); //19

    // b2: cho limit tu cho dua vao thiet ke
    $limit = 8;

    // b3: tinh ra so trang va start
    $p = new page();
    // tinh ra tong so trang
    $page = $p->findPage($count, $limit); // 19,8 $page= 3
    // lay ra start
    $start = $p->findStart($limit); //8
    //b4: thiet lap trang hien tai
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    ?>


  <!-- end quảng cáo -->
  <?php
    if (isset($_GET["act"]) == 'khuyenmai') {
        $ac = 0;
    } else {
        $ac = 1;
    }
    ?>
  <!-- Hàm tìm kiếm-->
  <?php
    if ($act == "timkiem") {
        $ac = 1;
    } else if ($act == 'filterproduct') {
        $ac = 2;
    } else {
        $ac = 0;
    }
    ?>


  <!-- end số lượt xem san phẩm -->
  <!-- sản phẩm-->


  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-md-12 text-center">
              <?php
                if ($ac == 0) {
                    echo '<button style="color: white; width: 100%;height: 60px  ;text-decoration: none;" class="btn-danger">TẤT CẢ SẢN PHẨM</button>';
                } else {
                    echo '<button style="color: white; width: 100%;height: 60px  ;text-decoration: none;" class="btn-danger">SẢN PHẨM KHUYẾN MÃI</button>';
                }
                ?>
          </div>
      </div>

      <!-- dang ky -->
      <section>
          <nav class="navbar navbar-expand-sm navbar-dark bg-warning">
              <div class="container-fluid">
                  <div class="collapse navbar-collapse container" id="mynavbar">
                      <ul class="navbar-nav me-auto" style="font-size:17px; ">
                          <li class="nav-item">
                              <form class="filter_pro flex" action="index.php?action=sanpham&act=filterproduct" method="post">
                                  <select class="search_content" name="ValueFilterType" id="ValueFilter" onchange="this.form.submit()">
                                      <option value="">Tìm kiếm theo loại:</option>

                                      <?php
                                        $result = $hh->getLoai();
                                        while ($set = $result->fetch()) {
                                            $tloai = $hh->getTenLoai($set['maloai']);
                                            $tenloai = $tloai['tenloai'];
                                        ?>
                                          <option value="<?php echo $set['maloai'] ?>"><?php echo $tenloai ?></option>
                                      <?php
                                        }
                                        ?>
                                  </select>
                              </form>
                          </li>
                          <li>
                              <form class="filter_pro flex" action="index.php?action=sanpham&act=filterproduct" method="post">
                                  <select class="search_content" name="ValueFilter" id="ValueFilter" onchange="this.form.submit()">
                                      <option value="">Sắp xếp theo:</option>
                                      <option value="price_up">Giá tăng dần</option>
                                      <option value="price_down">Giá giảm dần</option>
                                  </select>
                              </form>
                          </li>
                          <li class="nav-item">
                              <form class="search_content" action="index.php?action=sanpham&act=timkiem" method="post">
                                  <input type="text" class="search_product" placeholder="Search here..." name="searchtxt">
                                  <i class='bx bx-search search_icon'></i>
                              </form>
                          </li>
                      </ul>
                      <span></span>
                  </div>
              </div>
          </nav>

      </section>

      <!--Grid row-->
      <div class="row mt-5">
          <?php
            $hh = new hanghoa();
            if ($ac == 1) {
                // getHangHoaAll
                $result = $hh->getHangHoaAllPage($start, $limit); //8,8 
            } else {
                $result = $hh->getHangHoaSale();
            }
            while ($set = $result->fetch()) {
            ?>

              <!--Grid column-->
              <div class="card card-footer col-lg-3 col-md-4 mb-3 text-left">
                  <img src="../Assets/front/images/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                  <!-- <div class="view overlay z-depth-1-half">
                      <div class="mask rgba-white-slight mt-2"><?php echo $set['tenhh']; ?></div>
                  </div> -->
                  <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh']; ?>">
                      <span style="font-size:17px; color:black; align-items: center; display: flex; justify-content: center;">
                          <b><?php echo $set['tenhh'] ?></b>
                      </span>
                  </a>

                  <?php
                    if ($ac == 1) {
                        echo '<h5 class="my-4 font-weight-bold" style="color: red;">
                    ' . number_format($set['dongia']) . '<sup><u>đ</u></sup><br>
                    </h5>';
                    } else {
                        echo '<h5 class="my-4 font-weight-bold" style="color: red;">
                    <font color="red">
                    ' . number_format($set['giamgia']) . '<sup><u>đ</u></sup>
                    </font>
                    <strike>
                        ' . number_format($set["dongia"]) . '
                    </strike>
                        <sup><u>đ</u></sup>
                    </h5>';
                    }
                    ?>

                  <form class="d-flex me-2" style="align-items: center; display: flex; justify-content: center;  display: block; margin: 0 auto;">
                      <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh']; ?>">
                          <div class="btn btn-primary me-2">Xem ngay</div>
                      </a>
                  </form>
              </div>
          <?php
            }
            ?>
      </div>

      <!--Grid row-->

  </section>


  <!-- end sản phẩm mới nhất -->


  <div class="col-md-6 div col-md-offset-3">
      <ul class="pagination">
          <?php

            // lui
            if ($current_page > 1 && $page > 1) {
                echo "<li><a href='index.php?action=sanpham&page=" . ($current_page - 1) . "'><</a></li>";
            }
            for ($i = 1; $i < $page; $i++) {
            ?>
              <li><a href="index.php?action=sanpham&page=<?php echo $i ?>"><?php echo $i ?></a></li>
          <?php
            }
            // lui
            if ($current_page < $page && $page > 1) {
                echo "<li><a href='index.php?action=sanpham&page=" . ($current_page + 1) . " '>></a></li>";
            }
            ?>

      </ul>
  </div>