<?php 
   session_start();
      include '../configtwo.php';
      $submit = $_REQUEST['submitct'];
      $create_at = date('Y-m-d h:i:s');
      $update_at = date('Y-m-d h:i:s');
      
      switch ($submit) {
         case 'submit':
            $r_mle = mysqli_real_escape_string($db, $_REQUEST['fname']);
            $password = mysqli_real_escape_string($db, $_REQUEST['lname']);
            $maile = mysqli_real_escape_string($db,$_REQUEST['mail']);
            $phne = mysqli_real_escape_string($db,$_REQUEST['phn']);
            $msge = mysqli_real_escape_string($db,$_REQUEST['msge']);
            
            $db->query("INSERT INTO `contact-us`(`cn_id`,`first_name`,`last_name`,`email`,`phoneno`,`message`) VALUES(NULL, '$r_mle','$password','$maile','$phne','$msge')");
                header("Location:../contactus.php");
         default:
            echo "not found";
            break;

          $_SESSION['msg'] = 'Thank You for submitting respone';
         $_SESSION['bg_color'] = 'success';
             
            header("Location:./contactus.php");
      }
      ?>