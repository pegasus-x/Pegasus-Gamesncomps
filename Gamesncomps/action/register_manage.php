<?php 
   session_start();
      include '../configtwo.php';
      $submit = $_REQUEST['submit'];
      $create_at = date('Y-m-d h:i:s');
      $update_at = date('Y-m-d h:i:s');
      
      switch ($submit) {
         case 'submit_register':
            $r_mle = mysqli_real_escape_string($db, $_REQUEST['email']);
            $password = mysqli_real_escape_string($db, $_REQUEST['password']);
            
            
            $db->query("INSERT INTO `login`(`u_id`,`email`,`password`) VALUES(NULL, '$r_mle','$password')");

            $u_id = $db->insert_id;
               $session_id = session_id();

               
               $db->query("UPDATE `cart` SET u_id = '$u_id' WHERE session_id = '$session_id'");

                 $_SESSION['u_id'] = $u_id;
               $_SESSION['msg'] = 'New account created successfully';
               $_SESSION['bg_color'] = 'success';
               header("Location:../login.php");
         default:
            echo "not found";
            break;
      }
      ?>