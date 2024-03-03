<?php 
   session_start();
      include '../configtwo.php';
      include '../backend/admin/data_function.php';
      $submit = $_REQUEST['submit'];
      $create_at = date('Y-m-d h:i:s');
      $update_at = date('Y-m-d h:i:s');
      
      switch ($submit) {
         case 'add_to_cart':
            $p_id = mysqli_real_escape_string($db, $_REQUEST['p_id']);
            $url = mysqli_real_escape_string($db, $_REQUEST['url']);
            $p_name = getproduct($db, $p_id,1);
            $p_price = getproduct($db, $p_id,2);
            $p_img = getproduct($db, $p_id,3);
            $slug = getproduct($db, $p_id,4);
            $order_id = 'CD' .rand(1122,9999);
            $session_id = session_id();  // iha pe automattically session id GEnerate ho raha he 
            if (!empty($_SESSION['u_id'])) {
               $u_id = $_SESSION['u_id'];
            }else{
               $u_id = '';
            }
            $qty = mysqli_real_escape_string($db, $_REQUEST['qty']);
            
                   if (empty($_SESSION['u_id'])) {
                     $session_id = session_id();
                     $data = $db->query("SELECT * FROM `cart` WHERE session_id = '$session_id' AND p_id = '$p_id'");
                   }else{
            $u_id = $_SESSION['u_id'];
                     $data = $db->query("SELECT * FROM `cart` WHERE u_id = '$u_id' AND p_id = '$p_id'");
                   }

                   if ($data->num_rows == 0) {
                      // code...
                $cart_id = mysqli_real_escape_string($db , $_REQUEST['cart_id']);
               $url = mysqli_real_escape_string($db , $_REQUEST['url']);


            $db->query("INSERT INTO `cart`(`cart_id`, `p_id`, `p_name`, `p_price`, `p_img`, `session_id`, `u_id`, `sts`, `qty`, `create_at`) VALUES(NULL, '$p_id','$p_name','$p_price','$p_img','$session_id','$u_id',0,'$qty',NOW())");


                   } else{ 
                     $value = $data->fetch_object();
                     $cart_id = $value->cart_id;
                     $old_qty = $value->qty;
                     $new_qty = $old_qty + $qty;


                     $db->query("UPDATE `cart` SET p_id = '$p_id' , p_name = '$p_name' , p_img = '$p_img' , session_id = '$session_id' , u_id = '$u_id' , qty = '$new_qty' WHERE cart_id = '$cart_id'");

                   }
               
               

               $_SESSION['msg'] = 'Product Added Successfully';
               $_SESSION['bg_color'] = 'success';
               header("Location:".$url);
               break;

            case 'delete_cart':
               $cart_id = mysqli_real_escape_string($db , $_REQUEST['cart_id']);
               $url = mysqli_real_escape_string($db , $_REQUEST['url']);
               $db->query("DELETE FROM `cart` WHERE cart_id = '$cart_id'");
               $_SESSION['msg'] = 'Item Deleted Successfully';
               $_SESSION['bg_color'] = 'Danger';
               header("Location:".$url);
            break;

         default:
            echo "not found";
            break;

          $_SESSION['msg'] = 'Thank You for add_to_cart';
         $_SESSION['bg_color'] = 'success';
             
            header("Location:./productdetails.php");
      }
      ?>