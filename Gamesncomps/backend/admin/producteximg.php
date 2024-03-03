<?php 
session_start();
include 'configtwo.php';
include 'sidebar.php';
include 'data_function.php';
?>

 <body>
      <div class="content-page">
         <div class="container-fluid">
            <div class="row">
               <!-- add catagory start hear add -->
               <div class="col-lg-5 col-md-12">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Add Multiple Images for Products</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <?php
                                 if (!empty($_REQUEST['productextraimg_id'])) {
                                     $productimg_id = $_REQUEST['productextraimg_id'];
                                  }else {
                                   $productimg_id = '';
                                  }
                                  $cd = $db->query("SELECT * FROM `productextraimg` WHERE pei_id = '$productimg_id '"); 
                                  $cd_value =$cd->fetch_object();
                                 ?>
                              <form action="action/extra_img_manage.php" method="POST" enctype="multipart/form-data">
                                 <div class="form-group">
                                    <label for="exampleInputText1"> Select Product </label>
                                    <select class="form-control" id="p_id" name="p_id">
                                        <option value="">Select Product</option>
                                       <?php
                                          $data = $db->query("SELECT * FROM `products`");
                                          while($value = $data->fetch_object()){ 
                                          ?>

                                       <option <?php if(!empty($cd_value->p_id) AND $cd_value->p_id == $value->p_id) { echo 'selected'; }?> value="<?=$value->p_id;?>"><?=$value->p_name;?></option>
                                       <?php }?>
                                    </select>
                                 </div>
                                 <div class="input-group">
                                    <input type="file" class="custom-file-input" id="customfile" name="pex_img">
                                    <label class="custom-file-label" for="customFile">Choose File</label>
                                 </div>
                                 <?php 
                                    if (empty($_REQUEST['productextraimg_id'])) {
                                    ?>
                                 <button type="submit" class="btn btn-primary mr-2 mt-3" value="upload_img" name="upload">Upload</button>
                                 <?php } else { ?>
                                 <input type="hidden" name="productextraimg_id" value="<?=$_REQUEST['productextraimg_id']?>">
                                 <button type="submit"class="btn bg-success mt-3" name="upload" value="update_img">Edit</button>
                                 <?php } ?>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- rightside table created here -->
               <div class="col-lg-7 col-md-8">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title"> Product IMG Datatables</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <?php include 'msg.php'; ?>
                        <div class="table-responsive">
                           <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th>Product Name</th>
                                    <th>Image</th>
                                    <th>Action </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    $pei_id = 0;
                                    $data = $db->query("SELECT * FROM `productextraimg` INNER JOIN `products` ON productextraimg.p_id = products.p_id ");

                                      $kc =$data->num_rows;
                                      if($kc == 0){ 
                                    ?>
                                 <?php
                                    } else {
                                      while ($value = $data->fetch_object()){
                                      $pei_id++;
                                    ?>

                                 <tr>
                                    <td>
                                     
                                    <?php 
                                    //  echo getproduct($db, $value->p_id , 1);
                                     
                                     echo $value->p_name;

                                    ?>
                                    
                                    </td>
                                    <td>
                                       <?php 
                                          if (empty($value->pex_img)) {
                                             echo 'Not Uploaded';
                                          }else{
                                          ?>
                                       <img src="./projectimg/<?=$value->pex_img;?>" alt="img" width="150">
                                       <?php } ?>
                                    </td>
                                    <td>
                                       <a href="action/extra_img_manage.php?upload=delete&productextraimg_id=<?=$value->pei_id?>" class="btn btn-danger btn-sm">Delete</a> 
                                       <a href="producteximg.php?productextraimg_id=<?=$value->pei_id?>" class="btn btn-success btn-sm ">Update</a> 
                                    </td>
                                 </tr>
                                 <?php } } ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
<?php include 'footer.php'?>