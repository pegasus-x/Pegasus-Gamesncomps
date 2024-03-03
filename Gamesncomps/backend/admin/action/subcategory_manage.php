<?php
  session_start();
   include '../configtwo.php';
   $submit = $_REQUEST['submit'];
   $create_at = date('Y-m-d h:i:s');
   $update_at = date('Y-m-d h:i:s');
     function slug($name)
    {
      $string = str_replace(' ', '-', $name);  //  Sara Space ko Replace kar raha he -
      $string = strtolower($string); //  String to lower case kar raha he 
      $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
      return preg_replace('/-+/','-',$string);

    }
   
   
   switch ($submit){
      case 'submit_form':
            $subcategoryname = mysqli_real_escape_string($db,$_REQUEST['sc_name']);
            $slug = slug($subcategoryname);
            $categoryname = mysqli_real_escape_string($db,$_REQUEST['c_name']);
            $subcategorydescp = mysqli_real_escape_string($db, $_REQUEST['description']);
            $c_id = mysqli_real_escape_string($db,$_REQUEST['c_name']);
         
            $db->query("INSERT INTO `subcategory`(`sc_id`,`c_id`,`sc_name`,`c_name`,`description`,`create_at`) VALUES(
              NULL,'$subcategoryname','$categoryname','$subcategorydescp','$c_id','$create_at')");
   
           $sc_id = $db->insert_id;
         $uploadimg = $_FILES['uploadimg']['name'];
         if ($uploadimg == '') {
         }else{
            $expbanner=explode('.',$uploadimg);
            $bannerexptype=$expbanner[1];
            $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF, IMAGETYPE_WEBP,);
            $detectedType = exif_imagetype($_FILES['uploadimg']['tmp_name']);
   
            if (!in_array($detectedType, $allowedTypes)) {
               echo 'Not Found';
               die();
            }else{
               $rand2=rand(10000,99999);
               $encname2='image-'.$rand2;// image name, random no
               $bannername=$encname2.'.'.$bannerexptype; //extension type
               $bannerpath="../projectimg/".$bannername; // file location
               move_uploaded_file($_FILES["uploadimg"]["tmp_name"],$bannerpath);
               $db->query("UPDATE `subcategory` SET sc_img = '$bannername' WHERE sc_id = '$sc_id'");
            }
         }
          $_SESSION['msg'] = 'Data Added Successfully';
          $_SESSION['bg_color'] = 'success';
   
           header("Location:../subcategory.php");
   
           break;
           case 'delete':
              $subcategory_id = $_REQUEST['subcategory_id'];
              $db->query("DELETE FROM `subcategory` WHERE sc_id = '$subcategory_id'");
             
   
               $_SESSION['msg'] = 'Deleted Successfully';
               $_SESSION['bg_color'] = 'danger';
   
              header("Location:../subcategory.php");  
              break;
              case 'update_form':
              $subcategory_id = mysqli_real_escape_string($db, $_REQUEST['sc_id']);
              $subcategory_id = mysqli_real_escape_string($db,$_REQUEST['subcategory_id']);
              $subcategoryname = mysqli_real_escape_string($db,$_REQUEST['sc_name']);
              $slug = slug($subcategoryname);
              $categoryname = mysqli_real_escape_string($db,$_REQUEST['c_name']);
              $subcategorydescp = mysqli_real_escape_string($db, $_REQUEST['description']);   
   
            $db->query("UPDATE `subcategory` SET `sc_name` = '$subcategoryname', `slug` = '$slug', `c_name` = '$categoryname',`description`='$subcategorydescp' WHERE sc_id = '$subcategory_id'");

   
              $sc_id = $db->insert_id;
             $uploadimg = $_FILES['uploadimg']['name'];
            if ($uploadimg == '') {

             }else{ 


            $expbanner=explode('.',$uploadimg);
            $bannerexptype=$expbanner[1];
            $allowedTypes = array("jpg","png","jpeg","webp");
   
            if (!in_array($bannerexptype, $allowedTypes)) {
               echo 'Not Found';
               die();
            }else{
               $rand2=rand(100,999);
               $encname2='image-'.$rand2;// image name, random no
               $bannername=$encname2.'.'.$bannerexptype; //extension type
               $bannerpath="../projectimg/".$bannername; // file location
               move_uploaded_file($_FILES["uploadimg"]["tmp_name"],$bannerpath);
               $db->query("UPDATE `subcategory` SET sc_img = '$bannername' WHERE sc_id = '$subcategory_id'");
            }
         }
   
   
   
            header("Location:../subcategory.php");
            break;
   
              default:
              echo "No subcategory found";
              break;
   }
   ?>