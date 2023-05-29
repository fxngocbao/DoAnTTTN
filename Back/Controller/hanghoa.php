<?php
$act = "hanghoa";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'hanghoa':
        include "./View/hanghoa.php";
        break;

    case 'edit':
        include "./View/edithanghoa.php";
        break;
    case 'editloai':
        include "./View/editloaisanpham.php";
        break;
    case 'themsp':
        include "./View/edithanghoa.php";
        break;
    case 'edit_action':
        if (isset($_GET['id'])) {
            $mahh = $_GET['id'];
            $tenhh = $_POST['tenhh'];
            $dongia = $_POST['dongia'];
            $giamgia = $_POST['giamgia'];
            $hinh = $_FILES['image']['name'];
            $Nhom = $_POST['nhom'];
            $maloai = $_POST['maloai'];
            $dacbiet = $_POST['dacbiet'];
            $soluotxem = $_POST['slx'];
            $ngaylap = $_POST['ngaylap'];
            $mota = $_POST['mota'];
            $soluongton = $_POST['slt'];
            $mausac = $_POST['mausac'];
            $size = $_POST['size'];
            // yêu cầu update dựa mã hh
            $hh = new hanghoa();
            $check = $hh->updatesp(
                $mahh,
                $tenhh,
                $dongia,
                $giamgia,
                $hinh,
                $Nhom,
                $maloai,
                $dacbiet,
                $soluotxem,
                $ngaylap,
                $mota,
                $soluongton,
                $mausac,
                $size
            );
            // echo var_dump($check);
            if ($check !== false) {
                uploadimage();
                echo '<script> alert("Update thành công")</script>';
                include "./View/hanghoa.php";
            } else {
                echo '<script> alert("Update ko thành công")</script>';
                include "./View/edithanghoa.php";
            }
        }
        break;
    case 'themsp_action':
        $tenhh = $_POST['tenhh'];
        $dongia = $_POST['dongia'];
        $giamgia = $_POST['giamgia'];
        $hinh = $_FILES['image']['name'];
        $Nhom = $_POST['nhom'];
        $maloai = $_POST['maloai'];
        $dacbiet = $_POST['dacbiet'];
        $soluotxem = $_POST['slx'];
        $ngaylap = $_POST['ngaylap'];
        $mota = $_POST['mota'];
        $soluongton = $_POST['slt'];
        $mausac = $_POST['mausac'];
        $size = $_POST['size'];
        $hh = new hanghoa();
       
        $checlinsert = $hh->insertsp($tenhh, $dongia, $giamgia, $hinh, $Nhom, $maloai, $dacbiet, $soluotxem, $ngaylap, $mota, $soluongton, $mausac, $size);
        if ($checlinsert !== false) {
            uploadimage();
            echo '<script> alert("Insert thành công")</script>';
            include "./View/hanghoa.php";
        } else {
            echo '<script> alert("Insert ko thành công")</script>';
            include "./View/edithanghoa.php";
        }
        break;
        
    case 'themloaisp':
        include "./View/addloaisanpham.php";
        break;
    case 'editloaisp':
        include "./View/loaihh.php";
        break;
        
    case 'themloaisp_action':
        $tenloai = $_POST['tenloai'];
        $idmenu = $_POST['idmenu'];

        $hh = new hanghoa();
        $checlinsert = $hh->insertloaisp($tenloai, $idmenu);
        if ($checlinsert !== false) {

            echo '<script> alert("Insert thành công")</script>';
            include "./View/loaihh.php";
        } else {
            echo '<script> alert("Insert ko thành công")</script>';
            include "./View/editloaisanpham.php";
        }
        break;
       
    case 'editloai_action':
        if (isset($_GET['id'])) {
            $maloai = $_GET['id'];
            $tenloai = $_POST['tenloai'];
            $idmenu = $_POST['idmenu'];

            // yêu cầu update dựa mã hh
            $hh = new hanghoa();
            $check = $hh->updateloaisp($maloai, $tenloai, $idmenu);
            // echo var_dump($check);
            if ($check !== false) {

                echo '<script> alert("Update thành công")</script>';
                include "./View/loaihh.php";
            } else {
                echo '<script> alert("Update ko thành công")</script>';
                include "./View/editloaisanpham.php";
            }
        }
        break;

    case 'hoadon':
        include "./View/hoadon.php";
        break;
    case 'cthoadon':
        include "./View/cthoadon.php";
        break;
    case'deletesp':
        if(isset($_GET['id']))
        {
           $id=$_GET['id'];
           $hh=new hanghoa();
           $hh->deletesp($id);
           echo'<script> alert ("Xóa thành công")</script>';
           include "./View/hanghoa.php";     
        }
        break;
  
}
?>
