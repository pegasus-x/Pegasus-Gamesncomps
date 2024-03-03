<?php 
session_start();
   include '../configtwo.php';
   $submit = $_REQUEST['submit'];
   $create_at = date('Y-m-d h:i:s');
   $update_at = date('Y-m-d h:i:s');
   
   switch ($submit) {
      case 'submit_form':
         $a_email = mysqli_real_escape_string($db, $_REQUEST['email']);
         $password = mysqli_real_escape_string($db, $_REQUEST['password']);
      
         $data = $db->query("SELECT * FROM `admin` WHERE a_email = '$a_email' AND password = '$password'");
         if ($data->num_rows > 0) { // data verify kar raha hai ki data match ho raha hai ki nhi
            $value = $data->fetch_object();
            $a_status = $value->a_status;

            if ($a_status == 0) {  // check karuchi account thik achi na nhi
               $a_id = $value->a_id;
               $_SESSION['a_id'] = $a_id;
               $_SESSION['msg'] = 'Account Login Successfully';
               $_SESSION['bg_color'] = 'success';
               header("Location:../dashboard.php");
               exit();

            }else{
               $_SESSION['msg'] = 'Please contact to customer care';
               $_SESSION['bg_color'] = 'danger';

             header("Location:../index.php");
             exit();
            }
         }
         else{
             $_SESSION['msg'] = 'email id and password not match';
             $_SESSION['bg_color'] = 'warning';
             
            header("Location:../index.php");

            }
           
          
         
          
   
   
         break;
         case 'logout':
         unset($_SESSION['a_id']);

          $_SESSION['msg'] = 'Logout Successfully';
             $_SESSION['bg_color'] = 'success';
             
            header("Location:../index.php");
         break;

           
      default:
         echo "not found";
         break;
   }
   
   ?>