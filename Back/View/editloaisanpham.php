<?php
    if(isset($_GET['id']))
    {
      $id=$_GET['id'];//1
      $hh=new hanghoa();
      $result=$hh->getLoaiHangHoaID($id);
      $maloai=$result['maloai'];
      $tenloai=$result['tenloai'];
      $idmenu=$result['idmenu'];


    }
  ?>
  <?php
    echo '<form name="frmloaihang" enctype="multipart/form-data" action="index.php?action=hanghoa&act=editloai_action&id='.$id.'" method="post">';
  ?>

  <div class="card mt-3">
    <div class="card-header">
      QUẢN LÝ LOẠI HÀNG
    </div>
    <div class="card-body">
      <table class="table table-striped table">
        <thead>
          <tr class="bg-info">
            <th scope="col"></th>
            <th scope="col">Mã loại</th>
            <th scope="col">Tên loại</th>
            <th scope="col">idMenu</th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody>
        
                    <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="chonX" value="" ></th>
                      <td><input type="text" class="form-control" name="maloai" value="<?php if(isset($maloai)) echo $maloai;?>"  readonly/></td>
                      <td><input type="text" class="form-control" name="tenloai" value="<?php if(isset($tenloai)) echo $tenloai;?>"/></td>
                      <td><input type="text" class="form-control" name="idmenu" value="<?php if(isset($idmenu)) echo $idmenu;?>"/></td>
                      <td>
                        <!-- <a href="" class="btn btn-warning">Xoá</a> -->
                        <input type="submit" class="btn btn-info" value="Sửa"></input>
                      </td>
                    </tr>
					
          <input type="hidden" name="xoa" value="" />
          
        </tbody>
      </table>
    </div>
    <div class="card-footer">
      <a href="" class="btn btn-info">Chọn tất cả</a>
      <button class="btn btn-info" onclick="">Chọn tất cả(javascript)</button>
      <a href="" class="btn btn-info">Bỏ chọn</a>
      <a href="" class="btn btn-info">Xóa danh mục đã chọn</a>
      <button class="btn btn-info" onclick="">Xóa danh mục đã chọn test</button>
      <!-- <button type="submit" class="btn btn-info">Xoá danh mục đã chọn</button> -->
      <a href="" class="btn btn-info">Thêm mới</a>
    </div>
  </div>
</form>
