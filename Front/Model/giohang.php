<?php 
    class giohang {
        function add_item($key, $quantity, $mycolor, $size) {
            $prod = new hanghoa();
            $pros = $prod->getHangHoaId($key);
            $flag=false;
            foreach($_SESSION['cart'] as $key1=>$value)
            {
                if($value['mahh']==$key && $value['mausac']==$mycolor)
                {
                    $quantity+=$value['soluong'];
                    $gh=new giohang();
                    $gh->update_items($key1, $quantity);
                    $flag=true;
                }
            }
           if($flag==false)
           {
            $hinh=$pros["hinh"];
            $ten=$pros["tenhh"];
            $cost=$pros["dongia"];
            $total= $quantity*$cost;
            // Tạo 1 đối tượng , kiểu array
            $item=array(
                'mahh'=> $key,
                'hinh'=>$hinh,
                'name'=>$ten,
                'mausac'=>$mycolor,
                'size'=> $size,
                'soluong'=>$quantity,
                'dongia'=>$cost,
                'total'=>$total,
            );

            // đưa đối tượng vào trong session ('cart);
            $_SESSION['cart'][] = $item;
           }
        }

        function getTotal() {
            $subtotal = 0;
            foreach($_SESSION['cart'] as $item) {
                $subtotal += $item['total'];
            }
            return number_format($subtotal, 2);
        }

        function delete_items($key) {
            unset($_SESSION['cart'][$key]);
        }

        function update_items($key, $quantity) {
            if($quantity <= 0) {
                $this->delete_items($key);
            } else {
                $_SESSION['cart'][$key]['soluong'] = $quantity;
                $total_new = $_SESSION['cart'][$key]['soluong']*$_SESSION['cart'][$key]['dongia'];
                $_SESSION['cart'][$key]['total'] = $total_new;
            }
        }
    }
?>