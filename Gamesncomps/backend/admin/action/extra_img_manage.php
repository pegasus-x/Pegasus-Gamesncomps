<?php 
   session_start();
   include '../configtwo.php';
    $upload = $_REQUEST['upload'];
    $create_at = date('Y-m-d h:i:s');
    $update_at = date('Y-m-d h:i:s');
   

   
   switch ($upload) {
      case 'upload_img':
         $producttitle = mysqli_real_escape_string($db,$_REQUEST['p_id']);
   
         $db->query("INSERT INTO `productextraimg`(`pei_id`,`p_id`,`create_at`) VALUES(
            NULL, '$producttitle','$create_at')");
         $pei_id = $db->insert_id;
         $uploadimg = $_FILES['pex_img']['name'];
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
               move_uploaded_file($_FILES["pex_img"]["tmp_name"],$bannerpath);
               $db->query("UPDATE `productextraimg` SET pex_img = '$bannername' WHERE pei_id = '$pei_id'");
            }
         }
   
      $_SESSION['msg'] = 'Image Added Successfully';
      $_SESSION['bg_color'] = 'success';
   
   
        header("Location:../producteximg.php");
   
        break;
   
        case 'delete':
            $cat_id = $_REQUEST['productextraimg_id'];  
            $data = $db->query("SELECT * FROM `productextraimg` WHERE pei_id = '$cat_id'");  
            if ($data->num_rows > 0 ) {  
               $value = $data->fetch_object();
               $uploadimg = $value->pex_img;  
               $location = 'projectimg/'.$uploadimg;  
                  unlink($location); 
   
         $db->query("DELETE FROM `productextraimg` WHERE pei_id ='$cat_id'");
   
          $_SESSION['msg'] = 'Deleted Successfully';
          $_SESSION['bg_color'] = 'danger';
   
   
            }else{
            $_SESSION['msg'] = 'Image not found';
            $_SESSION['bg_color'] = 'danger';
   
   
   
            }
             header("Location:../producteximg.php"); 
            break;
   
            case 'update_img':
            $banner_id = mysqli_real_escape_string($db,$_REQUEST['productextraimg_id']);
            $producttitle = mysqli_real_escape_string($db,$_REQUEST['p_name']);
   
            $db->query("UPDATE `productextraimg` SET `p_name` = '$producttitle' WHERE pei_id = '$banner_id'");
   
   
              $update_id = $db->insert_id;
             $uploadimg = $_FILES['pex_img']['name'];
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
               move_uploaded_file($_FILES["pex_img"]["tmp_name"],$bannerpath);
               $db->query("UPDATE `productextraimg` SET pex_img = '$bannername' WHERE pei_id = '$banner_id'");
            }
         }
   
   
   
            header("Location:../producteximg.php");
            break;
      
      default:
         echo "No category added";
         break;
   }
   
   ?>