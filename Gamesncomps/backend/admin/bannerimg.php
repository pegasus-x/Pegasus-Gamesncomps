<?php
   session_start();
    include 'sidebar.php';
    include 'configtwo.php'
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title></title>
      <link rel="stylesheet" href="backendcc.css">
   </head>
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
                                 <h4 class="card-title">Add Banner Image</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <?php
                                 if (!empty($_REQUEST['banner_id'])) {
                                     $banner_id = $_REQUEST['banner_id'];
                                  }else {
                                   $banner_id = '';
                                  }
                                  $cd = $db->query("SELECT * FROM `bannerimg` WHERE b_id = '$banner_id'"); 
                                  $cd_value =$cd->fetch_object();
                                 ?>
                              <form action="action/bannerimg_manage.php" method="POST" enctype="multipart/form-data">
                                 <div class="form-group">
                                    <label for="exampleInputText1">Enter Image Title </label>
                                    <input type="text" class="form-control" id="exampleInputText1" placeholder="Enter title"
                                       name="b_title" value="<?php if (!empty($cd_value->b_title)) {
                                          echo  $cd_value->b_title;} ?>">
                                 </div>
                                 <div class="input-group">
                                    <input type="file" class="custom-file-input" id="customfile" name="b_img">
                                    <label class="custom-file-label" for="customFile">Choose File</label>
                                 </div>
                                 <?php 
                                    if (empty($_REQUEST['banner_id'])) {
                                    ?>
                                 <button type="submit" class="btn btn-primary mr-2 mt-3" value="upload_img" name="upload">Upload</button>
                                 <?php } else { ?>
                                 <input type="hidden" name="banner_id" value="<?=$_REQUEST['banner_id']?>">
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
                           <h4 class="card-title">Banner Datatables</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <?php include 'msg.php'; ?>
                        <div class="table-responsive">
                           <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th>Banner Name</th>
                                    <th>Image</th>
                                    <th>Action </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    $b_name = 0;
                                    $data = $db->query("SELECT * FROM `bannerimg`");
                                      $kc =$data->num_rows;
                                      if($kc == 0){ 
                                    ?>
                                 <?php
                                    } else {
                                      while ($value = $data->fetch_object()){
                                      $b_name++;
                                    ?>
                                 <tr>
                                    <td><?php echo $value->b_title;?></td>
                                    <td>
                                       <?php 
                                          if (empty($value->b_img)) {
                                             echo 'Not Uploaded';
                                          }else{
                                          ?>
                                       <img src="./projectimg/<?=$value->b_img;?>" alt="img" width="150">
                                       <?php } ?>
                                    </td>
                                    <td>
                                       <a href="action/bannerimg_manage.php?upload=delete&banner_id=<?=$value->b_id?>" class="btn btn-danger btn-sm">Delete</a> 
                                       <a href="bannerimg.php?banner_id=<?=$value->b_id?>" class="btn btn-success btn-sm ">Update</a> 
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
</html>
<?php include 'footer.php'?>