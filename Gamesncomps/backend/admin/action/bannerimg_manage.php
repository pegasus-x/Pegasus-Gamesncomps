<?php 
   session_start();
   include '../configtwo.php';
    $upload = $_REQUEST['upload'];
    $create_at = date('Y-m-d h:i:s');
    $update_at = date('Y-m-d h:i:s');
   

   
   switch ($upload) {
      case 'upload_img':
         $bannertitle = mysqli_real_escape_string($db,$_REQUEST['b_title']);
   
         $db->query("INSERT INTO `bannerimg`(`b_id`,`b_title`,`create_at`) VALUES(
            NULL, '$bannertitle','$create_at')");
         $b_id = $db->insert_id;
         $uploadimg = $_FILES['b_img']['name'];
         if ($uploadimg == '') {
         }else{
            $expbanner=explode('.',$uploadimg);
            $bannerexptype=$expbanner[1];
            $allowedTypes = array("jpg","png","jpeg","webp");
   
            if (!in_array($bannerexptype, $allowedTypes)) {
               echo 'Not Found';
            }else{
               $rand2=rand(100,999);
               $encname2='image-'.$rand2;
               $bannername=$encname2.'.'.$bannerexptype; 
               $bannerpath="../projectimg/".$bannername;
               move_uploaded_file($_FILES["b_img"]["tmp_name"],$bannerpath);
               $db->query("UPDATE `bannerimg` SET b_img = '$bannername' WHERE b_id = '$b_id'");
            }
         }
   
      $_SESSION['msg'] = 'Image Added Successfully';
      $_SESSION['bg_color'] = 'success';
   
   
        header("Location:../bannerimg.php");
   
        break;
   
        case 'delete':
            $cat_id = $_REQUEST['banner_id'];  
            $data = $db->query("SELECT * FROM `bannerimg` WHERE b_id = '$cat_id'");  
            if ($data->num_rows > 0 ) {  
               $value = $data->fetch_object();
               $uploadimg = $value->b_img;  
               $location = 'projectimg/'.$uploadimg;  
                  unlink($location); 
   
         $db->query("DELETE FROM `bannerimg` WHERE b_id ='$cat_id'");
   
          $_SESSION['msg'] = 'Deleted Successfully';
          $_SESSION['bg_color'] = 'danger';
   
   
            }else{
            $_SESSION['msg'] = 'Image not found';
            $_SESSION['bg_color'] = 'danger';
   
   
   
            }
             header("Location:../bannerimg.php"); 
            break;
   
            case 'update_img':
            $banner_id = mysqli_real_escape_string($db,$_REQUEST['banner_id']);
            $bannertitle = mysqli_real_escape_string($db,$_REQUEST['b_title']);
   
            $db->query("UPDATE `bannerimg` SET `b_title` = '$bannertitle' WHERE b_id = '$banner_id'");
   
   
              $update_id = $db->update_id;
             $uploadimg = $_FILES['b_img']['name'];
            if ($uploadimg == '') {
   
             }else{ 
   
   
            $expbanner=explode('.',$uploadimg);
            $bannerexptype=$expbanner[1];
            $allowedTypes = array("jpg","png","jpeg","webp");
   
            if (!in_array($bannerexptype, $allowedTypes)) {
               echo 'Not Found';
            }else{
               $rand2=rand(100,999);
               $encname2='image-'.$rand2;// image name, random no
               $bannername=$encname2.'.'.$bannerexptype; //extension type
               $bannerpath="../projectimg/".$bannername; // file location
               move_uploaded_file($_FILES["b_img"]["tmp_name"],$bannerpath);
               $db->query("UPDATE `bannerimg` SET b_img = '$bannername' WHERE b_id = '$banner_id'");
            }
         }
   
   
   
            header("Location:../bannerimg.php");
            break;
      
      default:
         echo "No category added";
         break;
   }
   
   ?>