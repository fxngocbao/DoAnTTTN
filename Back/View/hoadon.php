
<div  class="col-md-4 col-md-offset-4"><h3 ><b>THỐNG KÊ HÓA ĐƠN</b></h3></div>
<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã số hoá đơn</th>
        <th>Mã khách hàng</th>
        <th>Ngày đặt</th>
        <th>Tổng tiền</th>
        
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $hh=new hanghoa();
        $result=$hh->getHoaDonAll();
        while($set=$result->fetch()):
      ?>
      <tr>
      <td><?php echo $set['masohd'];?> </td>
        <td><?php echo $set['makh'];?></td>
        <td><?php echo $set['ngaydat'];?></td>
        <td><?php echo $set['tongtien'];?></td>
        
        <td><a href="">Cập nhật</a></td>
        <td><a href="">Xóa</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>