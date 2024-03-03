<?php
   include '../configtwo.php';
   
   $submit = $_REQUEST['submit'];
   $create_at = date('Y-m-d h:i:s');
   $update_at = date('Y-m-d h:i:s');
   
   switch ($submit) {
      case 'submit':
         $u_id = mysqli_real_escape_string($db, $_REQUEST['u_id']);
         $img_type = mysqli_real_escape_string($db, $_REQUEST['type']);
         $img = mysqli_real_escape_string($db, $_REQUEST['img']);
         
         $data = $db->query("SELECT * FROM `task` WHERE type = '$img_type' AND img = '$img'");
         
         if ($data->num_rows > 0) {
            $value = $data->fetch_object();
            $imgstatus = $value->img_status;

            if ($imgstatus == 0) {
               $u_id = $value->u_id;

               $update_id = $value->update_id;

               $uploadimg = $_FILES['uploadimg']['name'];

               if ($uploadimg == '') {
               } else {
                  $expbanner = explode('.', $uploadimg);
                  $bannerexptype = end($expbanner);
                  $allowedTypes = array("jpg", "png", "jpeg", "webp");

                  if (!in_array($bannerexptype, $allowedTypes)) {
                     echo 'Invalid file type';
                     die();
                  } else {
                     $rand2 = rand(100, 999);
                     $encname2 = 'image-' . $rand2;
                     $bannername = $encname2 . '.' . $bannerexptype;
                     $bannerpath = "../projectimg/" . $bannername;
                     
                     move_uploaded_file($_FILES["uploadimg"]["tmp_name"], $bannerpath);
                  }
               }
            } else {
               echo "Image status is not 0";
            }
         } else {
            echo "No image found";
         }
         
         header("Location: ../image.php");
         break;
      
      default:
         echo "Invalid status value";
         break;
   }
?>
