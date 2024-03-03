<?php 
session_start();
   include '../configtwo.php';
   $submit = $_REQUEST['submit_lg'];
   $create_at = date('Y-m-d h:i:s');
   $update_at = date('Y-m-d h:i:s');
   
   switch ($submit) {
      case 'submit_login':
         $r_mle= mysqli_real_escape_string($db, $_REQUEST['email']);
         $password = mysqli_real_escape_string($db, $_REQUEST['password']);
         
         $data = $db->query("SELECT * FROM `login` WHERE email = '$r_mle' AND password = '$password'");

         if ($data->num_rows > 0) {
            $value = $data->fetch_object();
            $act_status = $value->act_status;

            if ($act_status == 0) { 
               $u_id = $value->u_id;
               $session_id = session_id();

               
               $db->query("UPDATE `cart` SET u_id = '$u_id' WHERE session_id = '$session_id'");

               $_SESSION['u_id'] = $u_id;
               $_SESSION['msg'] = 'Account login Successfully';
               $_SESSION['bg_color'] = 'success';
               header("Location:../dashboard.php");
             

            }else{
               $_SESSION['msg'] = 'Please contact to customer care';
               $_SESSION['bg_color'] = 'danger';

             header("Location:../login.php");
             exit();
            }
         }
         else{
             $_SESSION['msg'] ='Invalid email id & password';
             $_SESSION['bg_color'] = 'warning';
             
            header("Location:../login.php");

            }


      break;
      case 'logout':
      unset($_SESSION['u_id']);

          $_SESSION['msg'] = 'Logout Successfully';
         $_SESSION['bg_color'] = 'success';
             
            header("Location:../login.php");
      break;   
      default:
         echo "not found";
         break;
   }
   
   ?>