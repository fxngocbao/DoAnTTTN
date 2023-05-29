
      <div class="card mt-3">
        <div class="card-header info">
          QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">
        
        <form action="index.php?action=loai&act=loai_action" method="post" enctype="multipart/form-data">
          <input type="file" name="file"/>
          <input type="submit" name="submit_file" value="Submit">
        </form>
        <form>
            <div class="form-group">
              
                
                <label for="">Mã danh mục</label>
                <input type="text" readonly name="maloai" value="<?php if(isset($maloai)) echo $maloai;?>" class="form-control" >
              </div>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="tenloai" value="<?php if(isset($tenloai)) echo $tenloai;?>" class="form-control">

              </div>
              <div class="form-group">
                <label for="">Menu số:</label>
                <input type="text" name="idmenu"  value="<?php if(isset($idmenu)) echo $idmenu;?>" class="form-control">

              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Lưu</button>
                  <a href="index.php?action=hanghoa&act=editloaisp" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
