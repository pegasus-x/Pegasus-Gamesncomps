<?php 
session_start();
   include 'configtwo.php';
   include 'sidebar.php';
   include 'function.php';
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Subcategory</title>
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
                                 <h4 class="card-title">Add Sub-Category</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <?php  
                                 if(!empty($_REQUEST['subcategory_id'])){
                                     $subcategory_id = $_REQUEST['subcategory_id'];
                                 }else {
                                    $subcategory_id = '';
                                 }
                                  
                                  $sd = $db->query("SELECT * FROM `subcategory` WHERE sc_id = '$subcategory_id'");
                                  $sd_value =$sd->fetch_object();
                                 ?>
                              <form action="action/subcategory_manage.php" method="POST" enctype="multipart/form-data">
                                 <div class="form-group">
                                    <label for="Sub-Category">Select Category</label>
                                    <select class="form-control" id="c_id" name="c_name">
                                        <option value="">Select Category</option>
                                       <?php
                                          $data = $db->query("SELECT * FROM `category`");
                                          while($value = $data->fetch_object()){ 
                                          ?>
                                       
                                       <option <?php if(!empty($sd_value->c_id) AND $sd_value->c_id == $value->c_id) { echo 'selected'; }?> value="<?=$value->c_id;?>"><?=$value->c_name;?></option>
                                       <?php }?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputText1">Enter Sub-Category Name</label>
                                    <input type="text" class="form-control" id="exampleInputText1"
                                       placeholder="Enter subcategory" name="sc_name"
                                       value="<?php if (!empty($sd_value->sc_name)) {
                                          echo  $sd_value->sc_name;} ?>">
                                 </div> 
                                 <div class="input-group">
                                    <input type="file" class="custom-file-input" id="customfile" name="uploadimg">
                                    <label class="custom-file-label" for="customFile">Choose File</label>
                                 </div>
                                 <div class="form-group mt-2">
                                    <label for="exampleFormControlTextarea1"> Description </label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"><?php if (!empty($sd_value->description)) {echo  $sd_value->description;} ?></textarea>
                                 </div>
                                 <?php 
                                    if (empty($_REQUEST['subcategory_id'])) {
                                    ?>
                                 <button type="submit" class="btn btn-primary mr-2" value="submit_form" name="submit">Submit</button>
                                 <?php } else { ?>
                                 <input type="hidden" name="subcategory_id" value="<?=$subcategory_id;?>">
                                 <button type="submit" class="btn bg-danger" value="update_form" name="submit">Edit</button>
                                 <?php } ?>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- rightside table created hear -->
               <div class="col-lg-7 col-md-8">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Sub-Category Table</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <?php include 'msg.php'; ?>
                        <div class="table-responsive">
                           <table class="table table-bordered" >
                              <thead>
                                 <tr>
                                    <th>Category Name </th>
                                    <th>Sub-Category Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    $sc_name = 0;
                                    $data = $db->query("SELECT * FROM `subcategory`");
                                      $kc =$data->num_rows;
                                      if($kc == 0){ 
                                    ?>
                                 <?php
                                    } else {
                                      while ($value = $data->fetch_object()){
                                      $sc_name++;
                                    ?>
                                 <tr>
                                    <td>
                                       <?php 
                                          $c_id = $value->c_id;
                                          $category = $db->query("SELECT * FROM `category` WHERE c_id = '$c_id'");
                                          $check = $category->num_rows;
                                          if ($check > 0) {
                                             $cat_value = $category->fetch_object();
                                                   echo $cat_value->c_name;
                                          }else{
                                                   echo '404 N/F';
                                             }
                                          
                                          ?>
                                    </td>
                                    <td><?=$value->sc_name;?></td>
                                    <td>
                                       <?php 
                                          if (empty($value->sc_img)) {
                                             echo 'Not Uploaded';
                                          }else{
                                          ?>
                                       <img src="./projectimg/<?=$value->sc_img;?>" alt="img" width="100">
                                       <?php } ?>
                                    </td>
                                    <td><?php echo $value->description;?></td>
                                    <td> 
                                       <a href="action/subcategory_manage.php?submit=delete&subcategory_id=<?=$value->sc_id?>" class="btn btn-danger btn-sm">Delete</a> 
                                       <a href="subcategory.php?subcategory_id=<?=$value->sc_id?>" class="btn btn-success btn-sm mt-2">Edit</a> 
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