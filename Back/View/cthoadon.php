
<div  class="col-md-4 col-md-offset-4"><h3 ><b>CHI TIẾT HÓA ĐƠN</b></h3></div>
<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã số hoá đơn</th>
        <th>Mã hàng hoá</th>
        <th>Số lượng mua</th>
        <th>Màu sắc</th>
        <th>Size</th>
        <th>Thành tiền</th>
        <th>Tình trạng</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $hh=new hanghoa();
        $result=$hh->getCTHoaDonAll();
        while($set=$result->fetch()):
      ?>
      <tr>
      <td><?php echo $set['masohd'];?> </td>
        <td><?php echo $set['mahh'];?></td>
        <td><?php echo $set['soluongmua'];?></td>
        <td><?php echo $set['mausac'];?></td>
        <td><?php echo $set['size'];?></td>
        <td><?php echo $set['thanhtien'];?></td>
        <td><?php echo $set['tinhtrang'];?></td>
        <td><a href="">Cập nhật</a></td>
        <td><a href="">Xóa</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>