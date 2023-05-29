<?php 
    $act='sanpham';
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
    }
    switch($act) {
        case 'sanpham':
            include './View/sanpham.php';
            break;
        case 'khuyenmai':
            include './View/sanpham.php';
            break;
        case 'detail':
            include './View/sanphamchitiet.php';
            break;
        case 'giohang':
            include './View/cart.php';
            break;
    }
?>
