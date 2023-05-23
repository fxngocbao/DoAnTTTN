<?php 
    $act='sanpham';
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
    }
    switch($act) {
        case 'sanpham':
            include './View/front/sanpham.php';
            break;
        case 'khuyenmai':
            include './View/front/sanpham.php';
            break;
        case 'detail':
            include './View/front/sanphamchitiet.php';
            break;
        case 'giohang':
            include './View/front/cart.php';
            break;
    }
?>
