<?php 
    $act = 'dangnhap';
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
    }
    switch($act) {
        case 'dangnhap':
            include './View/front/login.php';
            break;
        case 'dangnhap_action':
            // gửi user và pass qua
            if(isset($_POST['txtusername']) && $_POST['txtpassword']) {
                $user = $_POST['txtusername'];
                $pass =md5($_POST['txtpassword']);
                // controler yêu cầu model kiểm tra user và pass
                $ur = new user();
                $test = $ur->login($user, $pass);
          
                if($test!=false) {
                    $_SESSION['makh'] = $test['makh'];
                    // echo $_SESSION['makh'];
                    $_SESSION['tenkh'] = $test['tenkh'];
                    $_SESSION['username'] = $test['username'];
                    
                     echo '<script>alert("Đăng nhập thành công")</script>';
                     echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
                } else {
                    echo '<script>alert("Đăng nhập ko thành công")</script>';
                    include './View/front/registration.php';
                }
            }
            break;
            case 'logout':
                if(isset($_SESSION['makh'])) {
                    unset($_SESSION['makh']);
                    unset($_SESSION['tenkh']);
                    unset($_SESSION['username']);
                    unset($_SESSION['cart']);
                }
                echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
                break;
    }
?>