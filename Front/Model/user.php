<?php 
    class user {
        // hàm tạo 
        function __construct(){}
        // phương thức insert vào bảng khách hàng
        // select là query thực thi 
        // insert, update, delete,... là exec thực thi
        // phương thức thêm
        function InsertUser($tenkh, $user, $matkhau, $email, $diachi, $dt) {
            $db = new connect();
            $query = "insert into khachhang1(makh, tenkh, username, matkhau, email, diachi, sodienthoai, vaitro)
            values(NULL, '$tenkh', '$user', '$matkhau', '$email', '$diachi', '$dt', default)";
            $db->exec($query);
        }
        
        // phương thức login
        function login($username, $password) {
            $db= new connect();
            $select = "select * from khachhang1 where username='$username' and matkhau='$password'";
            $result = $db->getList($select);
            $set = $result->fetch();
            return $set; 
        }
        // comment
        function insertcomment($mahh, $makh, $noidung)
        {
            $db = new connect();
            $date = new DateTime("now");
            $datecreate = $date->format("Y-m-d");
            $query = "insert into binhluan1(mabl, mahh, makh, ngaybl, noidung) 
            values(Null, $mahh, $makh, '$datecreate', '$noidung')";
            $db->exec($query);
        }

        function getCountComment($mahh)
        {
            $db = new connect();
            $select = "select count(mabl) from binhluan1 where mahh=$mahh";
            $result = $db->getInstance($select);
            return $result[0];
        }
        function getNoiDungComment($mahh)
        {
            $db = new connect();
            $select = "select username, noidung, ngaybl from khachhang1
            inner join binhluan1 b on makh=makh where mahh = $mahh";
            $result = $db->getList($select);
            return $result;
        }

        //kiểm tra email có tồn tại không 
    function getEmail($email)
    {
        $db = new connect();
        $select = "select * from khachhang1 where email = '$email'";
        $result = $db->getInstance($select);
        return $result;
    }

    function updateEmail($emailold, $passnew)
    {
        $db = new connect();
        echo $emailold;
        $query = "update khachhang1 set matkhau = '$passnew' where email = '$emailold'";
        $db->exec($query);
    }
    }
