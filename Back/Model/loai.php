<?php
    class loai{
        function __construct(){}
        // pt kiểm tra admin
        function getLoai()
        {
            $db=new connect();
            $select="select * from loai";
            $result=$db->getList($select);
            return $result;
        }
        //insert 
        function insertdata($maloai,$tenloai,$idmenu)
        {
            $db=new connect();
            $query="insert into loai (maloai,tenloai,idmenu) 
            values ($maloai,'$tenloai',$idmenu)";
            $db->exec($query);
        }
    }
?>