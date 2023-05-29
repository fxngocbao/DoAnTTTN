<?php
 class dangnhap{
    function __construct(){}
    // pt kiểm tra admin
    function getAdmin($user,$pass)
    {
        $db=new connect();
        $select="select * from admin where user='$user' and password='$pass'";
        $result=$db->getInstance($select);
        return $result;
    }
    function doiMk($op)
    {
        $db=new connect();
        $select="select * from admin where password='$op'";
        $result=$db->getInstance($select);
        return $result;
    }
 }
?>