<?php
    function uploadimage()
    {
        // B1: tạo đường dẫn chứa hình
        $target_dir="../WebBC/Content/img/";
        
        // b2: lấy tên hình về để vào đường dẫn
        //"Content/imagetourdien/giaycongso.jpg"
        $target_file=$target_dir.basename($_FILES['image']['name']);
        // b3: lấy phần mở rộng để kiểm tra xem có phải là hình hay không
        $targetFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // b4: kiểm tra file đó có thật sự tồn tại trên server hay không
        $uploadhinh=1;
        if(isset($_POST["submit"]))
        {
            $check=getimagesize($_FILES['image']['name']);
            if($check!=false)
            {
                $uploadhinh=1;
            }
            else
            {
                $uploadhinh=0;
                echo '<script> alert("Hình ko tồn tại");</script>';
            }
        }
        // kiểm tra hình có tồn tại hay chưa
        if(file_exists( $target_file))
        {
            $uploadhinh=0;
            echo '<script> alert("Hình đã tồn tại");</script>';
        }
        // kiểm tra kích thước hình, 500kb
        if($_FILES['image']['size']>500000)
        {
            $uploadhinh=0;
            echo '<script> alert("Hình vượt kích thước");</script>';
        }
        // kiểm tra có phải là hình hay ko
        if($targetFileType!='jpg' && $targetFileType!='jpeg' && $targetFileType!='png' 
        && $targetFileType!='gif')
        {
            $uploadhinh=0;
            echo '<script> alert("ko là hình");</script>';
        }
        if($uploadhinh==1)
        {
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file))
            {
                echo '<script> alert("upload hình thành công");</script>';
            }
            else
            {
                echo '<script> alert("upload hình ko thành công");</script>';
            }
        }


    }
?>