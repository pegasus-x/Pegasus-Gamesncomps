<?php 
   session_start();
      include '../configtwo.php';
      $submit = $_REQUEST['order'];
      $create_at = date('Y-m-d h:i:s');
      $update_at = date('Y-m-d h:i:s');
      
      switch ($submit) {
         case 'order_place':
            $c_mle = mysqli_real_escape_string($db, $_REQUEST['email']);
            $f_name = mysqli_real_escape_string($db, $_REQUEST['f_name']);
            $lname = mysqli_real_escape_string($db, $_REQUEST['last_name']);
            $country = mysqli_real_escape_string($db, $_REQUEST['billing_country']);
            $address = mysqli_real_escape_string($db, $_REQUEST['address']);
            $addresstwo = mysqli_real_escape_string($db, $_REQUEST['addresstwo']);
            $town = mysqli_real_escape_string($db, $_REQUEST['town']);
            $state = mysqli_real_escape_string($db, $_REQUEST['billing_state']);
            $pincode = mysqli_real_escape_string($db, $_REQUEST['pincode']);
            $mobile = mysqli_real_escape_string($db, $_REQUEST['mobile']);
            $info = mysqli_real_escape_string($db, $_REQUEST['add_info']);
            $order_id = 'RS' .rand(1122,9999);
            $status = mysqli_real_escape_string($db, $_REQUEST['status']);
            $create_at = mysqli_real_escape_string($db, $_REQUEST['create_at']); 
            
            
            $db->query("INSERT INTO `checkout`(`o_id`,`email`,`f_name`,`last_name`,`billing_country`,`address`,`addresstwo`,`town`,`billing_state`,`pincode`,`mobile`,`add_info`,`status`,`create_at`) VALUES(NULL, '$c_mle','$f_name','$lname','$country','$address','$addresstwo','$town','$state','$pincode','$mobile','$info','$status','$create_at')");

            $o_id = $db->insert_id;

            $i = 0;
            $carts_id = $_REQUEST['cart_id'];
            foreach ($carts_id as $val) {
               $cart_id = $_REQUEST['cart_id'][$i];
               $db->query("INSERT INTO `checkout_data`(`ck_id`, `cart_id`,`ch_id`,`order_id`,`create_at`) VALUES(NUll, '$cart_id','$o_id', '$order_id', NOW())");
               $db->query("UPDATE `cart` SET sts = 1 WHERE cart_id = '$cart_id'");

               $i++;
            }
               $session_id = session_id();

               $_SESSION['o_id'] = $o_id;
               $_SESSION['msg'] = 'Order Placed';
               $_SESSION['bg_color'] = 'success';
               header("Location:../checkout.php");
               break;
         default:
            echo "not found";
            break;
      }
      ?>