<?php 
    class hanghoa{
        //thuộc tính
        // hàm tạo

        function __construct(){

        }
        // Lấy dữ liệu từ database về để  View lấy nó và hiện thị lên
        // pt lấy ra 12 sản phẩm mới nhất

        function getHangHoaNew(){
            //b1: kết nối với database
            $db =  new connect();
            $select = "select *  from hanghoa ORDER by mahh desc LIMIT 12";
            $result =$db -> getList($select);
            return $result;
        }

        function getHangHoaSale(){
            //b1: kết nối với database
            $db =  new connect();
            $select = "select *  from hanghoa where giamgia > 0 LIMIT 4";
            $result =$db ->getList($select);
            return $result;

        }

        function getHangHoaAll(){
            //b1: kết nối với database
            $db =  new connect();
            $select = "select *  from hanghoa";
            $result =$db ->getList($select);
            return $result;
        }

        function getHangHoaId($id){
            //b1: kết nối với database
            $db =  new connect();
            $select = "select *  from hanghoa where mahh=$id";
            $result =$db ->getInstance($select);
            return $result;
        }

        function getHangHoaNhom($id){
            //b1: kết nối với database
            $db =  new connect();
            $select = "select *  from hanghoa where mahh=$id";
            $result =$db ->getInstance($select);
            return $result;
        }

        function getHangNhom($nhom) {
            //b1: kết nối với database
            $db =  new connect();
            $select = "SELECT DISTINCT mausac, hinh FROM `hanghoa` WHERE nhom=$nhom";
            $result =$db ->getList($select);
            return $result;
        }

        function getHangHoaSize($nhom) {
            //b1: kết nối với database
            $db =  new connect();
            $select = "SELECT DISTINCT size FROM `hanghoa` WHERE nhom=4 ORDER BY size";
            $result =$db->getList($select);
            return $result;
        }

        // phan trang
        function getHangHoaAllPage($start ,$limit) {
            //b1: kết nối với database
            $db =  new connect();
            $select = "select * from hanghoa limit $start, $limit";
            $result =$db->getList($select);
            return $result;
        }

    }
