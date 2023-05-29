<?php
    class hanghoa{
        function __construct(){}
        // pt kiểm tra admin
        function getHangHoaAll()
        {
            $db=new connect();
            $select="select * from hanghoa";
            $result=$db->getList($select);
            return $result;
        }
        // pt lấy thông tin của 1 sp
        function getHangHoaID($id)
        {
            $db=new connect();
            $select="select * from hanghoa where mahh=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        function getLoaiHangHoaID($id)
        {
            $db=new connect();
            $select="select * from loai where maloai=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        //pt update mã hàng hóa
        function updatesp($id,$tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$dacbiet,$soluotxem,$ngaylap,$mota,$soluongton,$mausac,$size)
        {
            $db=new connect();
            $query="update hanghoa
                    set tenhh='$tenhh',
                    dongia=$dongia,
                    giamgia=$giamgia,
                    hinh='$hinh',
                    Nhom=$Nhom,
                    maloai=$maloai,
                    dacbiet=$dacbiet,
                    soluotxem=$soluotxem,
                    ngaylap='$ngaylap',
                    mota='$mota',
                    soluongton=$soluongton,
                    mausac='$mausac',
                    size=$size
                    where mahh=$id
            ";
            
            $db->exec($query);
        }
        // thêm sp
        function insertsp($tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$dacbiet,$soluotxem,$ngaylap,$mota,$soluongton,$mausac,$size)
        {
            $date=new DateTime($ngaylap);
            $ngay=$date->format("Y-m-d");
            $db=new connect();
            $query="insert into hanghoa(mahh,tenhh,dongia,giamgia,hinh,Nhom,maloai,dacbiet,soluotxem,ngaylap,mota,soluongton,mausac,size)
                    values (NULL,'$tenhh',$dongia,$giamgia,'$hinh',$Nhom,$maloai,$dacbiet,$soluotxem,'$ngay','$mota',$soluongton,'$mausac',$size)";
            echo "$query";
            $db->exec($query);
        }

        function getLoaiHangHoaAll()
        {
            $db=new connect();
            $select="select * from loai";
            $result=$db->getList($select);
            return $result;
        }
        function insertloaisp($tenloai,$idmenu)
        {
            
            $db=new connect();
            $query="insert into loai(maloai,tenloai,idmenu)
                    values (NULL,'$tenloai',$idmenu)";
            
            $db->exec($query);
        }
        function updateloaisp($id,$tenloai,$idmenu)
        {
            $db=new connect();
            $query="update loai
                    set tenloai='$tenloai',
                    idmenu=$idmenu 
                    where maloai=$id
            ";
            
            $db->exec($query);
        }
        function getHoaDonAll()
        {
            $db=new connect();
            $select="select * from hoadon1";
            $result=$db->getList($select);
            return $result;
        }
        function getCTHoaDonAll()
        {
            $db=new connect();
            $select="select * from cthoadon1";
            $result=$db->getList($select);
            return $result;
        }
        //pt xóa 1 sp
        public function deletesp($id)
        {
           $db=new connect();
           $query="delete from hanghoa where mahh=$id";
           $db->exec($query);
        }
        //thống kê sp bán được
        function getThongKeMatHang()
        {
            $db=new connect();
            $select="SELECT a.tenhh,sum(b.soluongmua) as soluong 
            from hanghoa a, cthoadon1 b where a.mahh=b.mahh GROUP by a.tenhh";
            $result=$db->getList($select);
            return $result;
        }
       
    }
?>