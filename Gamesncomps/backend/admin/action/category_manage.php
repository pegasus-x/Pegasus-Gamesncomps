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

   switch ($submit) {
      case 'submit_form':
         $categoryname = mysqli_real_escape_string($db,$_REQUEST['c_name']);
         $slug = slug($categoryname); 
         $categorydescp = mysqli_real_escape_string($db, $_REQUEST['description']);
   
         $db->query("INSERT INTO `category`(`c_id`,`c_name`,`description`,`create_at`) VALUES(
            NULL, '$categoryname','$categorydescp','$create_at')");
         $c_id = $db->insert_id;
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
               $rand2=rand(10000,99999);
               $encname2='image-'.$rand2;// image name, random no
               $bannername=$encname2.'.'.$bannerexptype; //extension type
               $bannerpath="../projectimg/".$bannername; // file location
               move_uploaded_file($_FILES["uploadimg"]["tmp_name"],$bannerpath);
               $db->query("UPDATE `category` SET c_img = '$bannername' WHERE c_id = '$c_id'");
            }
         }
   
      $_SESSION['msg'] = 'Data Added Successfully';
      $_SESSION['bg_color'] = 'success';

   
        header("Location:../category.php");
   
        break;
   
        case 'delete':
            $cat_id = $_REQUEST['category_id'];  // jo v id 
            $data = $db->query("SELECT * FROM `category` WHERE c_id = '$cat_id'");  // usks pura data
            if ($data->num_rows > 0 ) {  //  check kar rhe he ki wo id ara he usme data he ya nahi
               $value = $data->fetch_object();
               $uploadimg = $value->c_img;  //  image name nikale
               $location = 'projectimg/'.$uploadimg;  // complete path call kiye 
                  unlink($location);  //  usko path me wo image ko dediye jismee delete kar diya wo path me jake 

         $db->query("DELETE FROM `category` WHERE c_id ='$cat_id'");

          $_SESSION['msg'] = 'Deleted Successfully';
          $_SESSION['bg_color'] = 'danger';


            }else{
            $_SESSION['msg'] = 'Data not found';
            $_SESSION['bg_color'] = 'danger';



            }
             header("Location:../category.php"); 
            break;
   
            case 'update_form':
            $category_id = mysqli_real_escape_string($db,$_REQUEST['category_id']);

            $category_name = mysqli_real_escape_string($db,$_REQUEST['c_name']);
            $slug = slug($category_name);

            $category_descp = mysqli_real_escape_string($db,$_REQUEST['description']);
   
            $db->query("UPDATE `category` SET `c_name` = '$category_name',`slug` = '$slug', `description`='$category_descp' WHERE c_id = '$category_id'");

            $c_id = $db->insert_id;

         $uploadimg = $_FILES['uploadimg']['name'];
         if ($uploadimg == '') {
         }else{
            $expbanner=explode('.',$uploadimg);
            $bannerexptype=$expbanner[1];
            $allowedTypes = array("jpg","png","jpeg","webp");
            $detectedType = exif_imagetype($_FILES['uploadimg']['tmp_name']);

   
             
   
            if (!in_array($bannerexptype,$allowedTypes)) {
               echo 'Not Found';
               die();
            }else{
               $rand2=rand(100,999);
               $encname2='image-'.$rand2;// image name, random no
               $bannername=$encname2.'.'.$bannerexptype; //extension type
               $bannerpath="../projectimg/".$bannername; // file location
               move_uploaded_file($_FILES["uploadimg"]["tmp_name"],$bannerpath);
               $db->query("UPDATE `category` SET c_img = '$bannername' WHERE c_id = '$category_id'");
            }
         }
   
   
   
            header("Location:../category.php");
            break;
      
      default:
         echo "No category added";
         break;
   }
   
   ?>