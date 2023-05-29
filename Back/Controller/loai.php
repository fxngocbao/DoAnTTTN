<?php
    $act="loai";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch($act){
        case'loai':
            include "./View/addloaisanpham.php";
            break;


        case'loai_action':
            if(isset($_POST['submit_file']))
            {
                //b1: lấy file từ sever về
                $file=$_FILES['file']['tmp_name'];
                //b2: \xEF\xBB\xBF, thay thế nó
                file_put_contents($file,str_replace("\xEF\xBB\xBF","",file_get_contents($file)));
                //B3: mở file ra
                $file_open=fopen($file,"r");//a: binh chi
                //b4: đọc nội dung của file
                $loai=new loai();
                while(($csv=fgetcsv($file_open,1000,","))!==false)
                {
                    $maloai=$csv[0];//null
                    $tenloai=$csv[1];//túi xách ls
                    $idmenu=$csv[2];// 5
                    //thêm vào database
                    $loai->insertdata($maloai,$tenloai,$idmenu);
                }
                echo '<script> alert("Import thành công");</script>';
                include "./View/addloaisanpham.php";
            }
            break;
    }
?>