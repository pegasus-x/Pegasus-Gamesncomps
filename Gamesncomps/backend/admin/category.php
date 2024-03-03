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
                                 <h4 class="card-title">Add Category</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <?php
                                 if (!empty($_REQUEST['category_id'])) {
                                     $category_id = $_REQUEST['category_id'];
                                  }else {
                                   $category_id = '';
                                  }
                                  $cd = $db->query("SELECT * FROM `category` WHERE c_id = '$category_id'"); 
                                  $cd_value =$cd->fetch_object();
                                 ?>
                              <form action="action/category_manage.php" method="POST" enctype="multipart/form-data">
                                 <div class="form-group">
                                    <label for="exampleInputText1">Enter Category </label>
                                    <input type="text" class="form-control" id="exampleInputText1"placeholder="Enter category"
                                       name="c_name" value="<?php if (!empty($cd_value->c_name)) {
                                          echo  $cd_value->c_name;} ?>">
                                 </div>
                                 <div class="input-group">
                                    <input type="file" class="custom-file-input" id="customfile" name="uploadimg">
                                    <label class="custom-file-label" for="customFile">Choose File</label>
                                 </div>
                                 <div class="form-group mt-2">
                                    <label for="exampleFormControlTextarea1"> Description </label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"><?php if (!empty($cd_value->description)) {echo  $cd_value->description;} ?></textarea>
                                 </div>
                                 <?php 
                                    if (empty($_REQUEST['category_id'])) {
                                    ?>
                                 <button type="submit" class="btn btn-primary mr-2" value="submit_form" name="submit">Submit</button>
                                 <?php } else { ?>
                                 <input type="hidden" name="category_id" value="<?=$_REQUEST['category_id']?>">
                                 <button type="submit" class="btn bg-success" name="submit" value="update_form">Edit</button>
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
                           <h4 class="card-title">Category Datatables</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <?php include 'msg.php'; ?>
                        <div class="table-responsive">
                           <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Action </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    $c_name = 0;
                                    $data = $db->query("SELECT * FROM `category`");
                                      $kc =$data->num_rows;
                                      if($kc == 0){ 
                                    ?>
                                 <?php
                                    } else {
                                      while ($value = $data->fetch_object()){
                                      $c_name++;
                                    ?>
                                 <tr>
                                    <td><?php echo $value->c_name;?></td>
                                    <td>
                                       <?php 
                                          if (empty($value->c_img)) {
                                             echo 'Not Uploaded';
                                          }else{
                                          ?>
                                       <img src="./projectimg/<?=$value->c_img;?>" alt="img" width="100">
                                       <?php } ?>
                                    </td>
                                    <td><?=$value->description;?></td>
                                    <td>
                                       <a href="action/category_manage.php?submit=delete&category_id=<?=$value->c_id?>" class="btn btn-danger btn-sm">Delete</a> 
                                       <a href="category.php?category_id=<?=$value->c_id?>" class="btn btn-success btn-sm mt-2">Edit</a> 
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