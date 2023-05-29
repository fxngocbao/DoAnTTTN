<?php
    $act="dangnhap";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'dangnhap':
            include "./View/dangnhap.php";
            break;
        
        case 'dangnhap_action':
            if(isset($_POST['txtusername'])&& isset($_POST['txtpassword']))
            {
                $user=$_POST['txtusername'];
                $pass=$_POST['txtpassword'];
                // kiểm tra xem user này có tồn tại hay không
                $usr=new dangnhap();
                $check=$usr->getAdmin($user,$pass);
                if($check!=false)
                {
                    $_SESSION['admin']=$check[0];
                    echo '<script> alert("Đăng nhập thành công");</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';
                }
                else
                {
                    echo '<script> alert("Đăng nhập ko thành công");</script>';
                    include "./View/dangnhap.php";
                }
            }
            break;

            case 'doimk':
                include "./View/doimk.php";
                break; 

            case 'doimk_action':
                if(isset($_POST['oldpass']) && isset($_POST['newpass']) && isset($_POST['cnewpass']))
            {
                $op=$_POST['oldpass'];
                $np=$_POST['newpass'];
                $cnp=$_POST['cnewpass'];
                // kiểm tra xem user này có tồn tại hay không
                $usr=new dangnhap();
                $check=$usr->getAdmin($user,$pass);
                if($check!=false)
                {
                    $_SESSION['admin']=$check[0];
                    echo '<script> alert("Đăng nhập thành công");</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';
                }
                else
                {
                    echo '<script> alert("Đăng nhập ko thành công");</script>';
                    include "./View/dangnhap.php";
                }
            }
                break;
    }
?>