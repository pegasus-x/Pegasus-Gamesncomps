<?php 
   include 'configtwo.php';
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Bootstrap 5 Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   </head>
   <body>
      <div class="container-fluid p-5 bg-primary text-white text-center">
         <h1>Ecommerce Image Uploading Method</h1>
      </div>
      <div class="container mt-5">
         <div class="row">
            <div class="col-sm-6">
               <h3>Form</h3>
               <?php
                 if (!empty($_REQUEST['u_id'])) {
                  $u_id = $_REQUEST['u_id'];
                   }else {
                     $u_id = '';
                    }
                     $cd = $db->query("SELECT * FROM `task` WHERE u_id = '$u_id'"); 
                     $cd_value =$cd->fetch_object();
               ?>
               <form action="action/image_action.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                     <label for="">Upload Image</label>
                     <input type="file" name="img" class="form-control">
                  </div>
                  <div class="form-group">
                     <label for="">Select Type Image</label>
                     <select name="type" class="form-control" id="img">
                        <option value="">Select</option>
                        <option value="1">Big Image</option>
                        <option value="2">Small Image</option>
                     </select>
                  </div>
                  <button class="btn btn-primary mt-3" type="submit" value="Upload">Upload</button>
               </form>
            </div>
            <div class="col-sm-6">
               <h3>View Image</h3>
               <div class="big_image">
                  
                  <img src="./projectimg/<?=$cd_value->img;?>" class="img-fluid" alt="" id="big_img">
               </div>
               <div class="small_image">
                  <div class="row">
                     <div class="col-md-3 mt-3"> 
                        <img src="../projectimg/image-914.jpg" alt="" class="sml_img" width="150">
                     </div>
                     <div class="col-md-3 mt-3">
                        <img src="../projectimg/image-861.webp" alt="" class="sml_img" width="150">
                     </div>
                     <div class="col-md-3 mt-3">
                        <img src="../projectimg/image-437.jpg" alt="" class="sml_img" width="150">
                     </div>
                     <div class="col-md-3 mt-3">
                        <img src="../projectimg/image-419.png" alt="" class="sml_img" width="150">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
   <script type="text/javascript">
      let big_img = document.getElementById( 'big_img' );
      sml_img = document.getElementsByClassName( 'sml_img' );
      
      
      for ( let i = 0; i < sml_img.length; i++ ) {
      
      
        sml_img[ i ].onclick = function () {
          big_img.src = sml_img[ i ].src;
        }
      }
    </script>
</html>