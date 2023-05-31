<div class="table-responsive">

    <form action="" method="post">
        <table class="table table-bordered" border="0">
            <?php
        $hd = new hoadon();
        $result = $hd->getOrder($_SESSION['sohd']);
        $sohdon = $result['masohd'];
        $ngay = $result['ngaydat'];
        $ten = $result['tenkh'];
        $diachi=$result['diachi'];
        $dt=$result['sodienthoai'];
        $d=new DateTime($ngay);
        ?>

            <tr>
                <td colspan="4">
                    <h2 style="color: red;">HÓA ĐƠN</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">Số Hóa đơn:<?php echo $sohdon;?> </td>
                <td colspan="2"> Ngày lập:<?php echo $d->format('d/m/Y');?></td>
            </tr>
            <tr>
                <td colspan="2">Họ và tên:</td>
                <td colspan="2"><?php echo $ten?></td>
            </tr>
            <tr>
                <td colspan="2">Địa chỉ: </td>
                <td colspan="2"><?php echo $diachi ?></td>
            </tr>
            <tr>
                <td colspan="2">Số điện thoại: </td>
                <td colspan="2"><?php echo $dt ?></td>
            </tr>
        
        </table>
        <!-- Thông tin sản phầm -->
        <table class="table table-bordered">
            <thead>

                <tr class="table-success">
                    <th>Số TT</th>
                    <th>Thông Tin Sản Phẩm</th>
                    <th>Tùy Chọn Của Bạn</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>
                <?php
            $j=0;
            $result = $hd->getOrderDetail($_SESSION['sohd']);
            while($set=$result->fetch()):
            $j++;
          ?>

                <tr>
                    <td><?php echo $j;?></td>
                    <td><?php echo $set['tenhh'];?></td>
                    <td>Màu: <?php echo $set['mausac'];?> Size: <?php echo $set['size'];?></td>
                    <td>Đơn Giá:<?php echo $set['dongia'];?> - Số Lượng:<?php echo $set['soluongmua'];?> <br />
                    </td>
                </tr>
                <?php
          endwhile;
            
            ?>

                <tr>
                    <td colspan="3">
                        <b>Tổng Tiền</b>
                    </td>
                    <td style="float: right;">
                        <b>
                            <?php
                $gh = new giohang();
                echo $gh->getTotal();
                ?>
                            <sup><u>đ</u></sup></b>
                    </td>

                </tr>
            </tbody>
        </table>
    </form>

</div>
</div>