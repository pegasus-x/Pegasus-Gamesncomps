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
            $categoryname = mysqli_real_escape_string($db,$_REQUEST['c_name']);
            $subcategoryname = mysqli_real_escape_string($db,$_REQUEST['sc_name']);
           
            $productname = mysqli_real_escape_string($db,$_REQUEST['p_name']);
            $slug = slug($productname);
            $mprice = mysqli_real_escape_string($db,$_REQUEST['m_price']);
            $sprice = mysqli_real_escape_string($db,$_REQUEST['s_price']);
            $stock = mysqli_real_escape_string($db, $_REQUEST['stock']);
            $unit = mysqli_real_escape_string($db, $_REQUEST['unit']);
            $sdescp = mysqli_real_escape_string($db, $_REQUEST['s_descp']);
            $ldescp = mysqli_real_escape_string($db, $_REQUEST['l_descp']);
   
           $db->query("INSERT INTO `products`(`p_id`,`slug`,`c_id`,`sc_id`,`c_name`,`sc_name`,`p_name`,`m_price`,`s_price`,`stock`,`unit`,`s_descp`,`l_descp`) VALUES( NULL, '$slug','$categoryname','$subcategoryname','$productname','$mprice','$sprice','$stock','$unit','$sdescp','$ldescp','$create_at','$update_at')");

           $p_id = $db->insert_id;
         $uploadimg = $_FILES['uploadimg']['name'];
         if ($uploadimg == '') {
         }else{
            $expbanner=explode('.',$uploadimg);
            $bannerexptype=$expbanner[1];
            $allowedTypes = array("jpg","png","jpeg","webp");
            $detectedType = exif_imagetype($_FILES['uploadimg']['tmp_name']);

            if (!in_array($bannerexptype, $allowedTypes)) {
               echo 'Not Found';
               die();
            }else{
               $rand2=rand(10000,99999);
               $encname2='image-'.$rand2;// image name, random no
               $bannername=$encname2.'.'.$bannerexptype; //extension type
               $bannerpath="../projectimg/".$bannername; // file location
               move_uploaded_file($_FILES["uploadimg"]["tmp_name"],$bannerpath);
               $db->query("UPDATE `products` SET p_image = '$bannername' WHERE p_id = '$p_id'");
            }
         }
           $_SESSION['msg'] = 'Data Added Successfully';
           $_SESSION['bg_color'] = 'success';
   
           header("Location:../product.php");
   
           
   
           break;
           case 'delete':
              $products_id = $_REQUEST['product_id'];
              $db->query("DELETE FROM `products` WHERE p_id = '$products_id'");

               $_SESSION['msg'] = 'Deleted Successfully';
               $_SESSION['bg_color'] = 'danger';
   
              header("Location:../product.php");  
              break;

              case 'update_form':
                 $products_id = mysqli_real_escape_string($db,$_REQUEST['product_id']);
                 $c_id = mysqli_real_escape_string($db,$_REQUEST['c_id']);
                 $categoryname = mysqli_real_escape_string($db,$_REQUEST['c_name']);
                 $subcategoryname = mysqli_real_escape_string($db,$_REQUEST['sc_name']);
                 $product_id = mysqli_real_escape_string($db,$_REQUEST['p_id']);
                 $productname = mysqli_real_escape_string($db,$_REQUEST['p_name']);
                 $slug = slug($productname);
                 $mprice = mysqli_real_escape_string($db,$_REQUEST['m_price']);
                 $sprice = mysqli_real_escape_string($db,$_REQUEST['s_price']);
                 $stock = mysqli_real_escape_string($db, $_REQUEST['stock']);
                 $unit = mysqli_real_escape_string($db, $_REQUEST['unit']);
                 $sdescp = mysqli_real_escape_string($db, $_REQUEST['s_descp']);
                 $ldescp = mysqli_real_escape_string($db, $_REQUEST['l_descp']);


                  $db->query("UPDATE `products` SET `p_name` = '$productname', `c_name`= '$categoryname',`sc_name` = '$subcategoryname',`slug` = '$slug', `m_price` = '$mprice',`s_price` = '$sprice', `stock`= '$stock', `unit`='$unit', `s_descp`='$sdescp' ,`l_descp` = '$ldescp' WHERE p_id = '$products_id'");

                $p_id = $db->insert_id;
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
               $db->query("UPDATE `products` SET p_image = '$bannername' WHERE p_id = '$products_id'");
            }
         }

                header("Location:../product.php"); 

                 break;
                   
      default:
         echo "No product found";
         break;

   }
   ?>