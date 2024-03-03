<?php
   session_start();
   include 'configtwo.php';
   include 'sidebar.php';
?>

   <body>
      <div class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                  <?php include 'msg.php';?>
                                 <h4 class="card-title">ADD PRODUCT</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <?php  
                                 if(!empty($_REQUEST['product_id'])){
                                     $product_id = $_REQUEST['product_id'];
                                 }else {
                                    $product_id = '';
                                 }
                                  
                                  $sd = $db->query("SELECT * FROM `products` WHERE p_id = '$product_id'");
                                  $sd_value =$sd->fetch_object();
                                 ?>
                              <form action="action/product_manage.php" method="POST" enctype="multipart/form-data">
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="exampleInputText1"> Select Category </label>
                                       <select class="form-control" id="c_id" name="c_name">
                                          <option value="">Select Category</option>
                                          <?php
                                             $data = $db->query("SELECT * FROM `category`");
                                             while($value = $data->fetch_object()){ 
                                             ?> 
                                          <option value="<?=$value->c_id;?>"><?=$value->c_name;?></option>
                                          <?php }?>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="exampleInputText1"> Select Sub Category </label>
                                       <select class="form-control" id="sc_id" name="sc_name">
                                          <option value="">Select Sub-Category</option>
                                          <?php
                                             $data = $db->query("SELECT * FROM `subcategory`");
                                             while($value = $data->fetch_object()){ 
                                             ?> 
                                          <option value="<?=$value->sc_id;?>"><?=$value->sc_name;?></option>
                                          <?php }?>                                    
                                       </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="exampleInputText1">Product Name </label>
                                       <input type="text" class="form-control" id="exampleInputText1" value="<?php if(!empty($sd_value->p_name)) { echo $sd_value->p_name;} ?>"
                                          placeholder="Enter category" name="p_name">
                                    </div>
                                    <div class="input-group col-md-4 mt-4">
                                       <label class="custom-file-label" for="customFile">Choose File</label>
                                       <input type="file" class="custom-file-input" id="customfile" name="uploadimg">
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="exampleInputNumber1">Market Price</label>
                                       <input type="number" class="form-control" id="exampleInputnumber1" value="<?php if(!empty($sd_value->m_price)){echo $sd_value->m_price;}?> "
                                          placeholder="Enter market price" name="m_price">
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="exampleInputNumber1"> Selling Price</label>
                                       <input type="number" class="form-control" id="exampleInputnumber2" value="<?php if(!empty($sd_value->s_price)){echo $sd_value->s_price;}?>"
                                          placeholder="Enter Seling price" name="s_price">
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="exampleInputText1"> Stock </label>
                                       <input type="text" class="form-control" id="exampleInputText1" value="<?php if(!empty($sd_value->stock)){echo $sd_value->stock;}?>"
                                          placeholder="Stock" name="stock">
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="exampleInputText1"> Unit </label>
                                       <input type="text" class="form-control" id="exampleInputText1" value="<?php if(!empty($sd_value->unit)){echo $sd_value->unit;}?>"
                                          placeholder="unit" name="unit">
                                    </div>
                                    <div class="form-group  col-md-6">
                                       <label for="exampleFormControlTextarea1">Short Description</label>
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="s_descp"><?php if (!empty($sd_value->s_descp)) {echo  $sd_value->s_descp;} ?>
                                       </textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="exampleFormControlTextarea1">Long Description</label>
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="l_descp"><?php if (!empty($sd_value->l_descp)) {echo  $sd_value->l_descp;} ?></textarea>
                                    </div>
                                     <?php 
                                    if (empty($_REQUEST['product_id'])) {
                                    ?>
                                    <button type="submit" class="btn btn-primary mr-2" value="submit_form" name="submit">Submit</button>
                                    <?php } else { ?>
                                    <input type="hidden" name="product_id" value="<?=$product_id;?>">
                                    <button type="submit" class="btn bg-success" name="submit" value="update_form">Edit</button>
                                   <?php } ?>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                     <div class="card">
                        <div class="card-header d-flex justify-content-between">
                           <div class="header-title">
                              <h4 class="card-title">Product Table</h4>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-bordered" >
                                 <thead>
                                    <th>Category</th>
                                    <th>Sub-category</th>
                                    <th>Product Name</th>
                                    <th>File</th>
                                    <th>Market Price</th>
                                    <th>Selling Price</th>
                                    <th>Stock</th>
                                    <th>Unit</th>
                                    <th>Short Description</th>
                                    <th>Long Description</th>
                                    <th>Action</th>
                                 </thead>
                                 <tbody>
                                    <?php
                                       $c_name = 0;
                                       $data = $db->query("SELECT * FROM `products`");
                                         $kc =$data->num_rows;
                                         if($kc == 0){ 
                                       ?>
                                    <?php
                                       } else {
                                         while ($value = $data->fetch_object()){
                                         $c_name++;
                                       ?>
                                    <tr>
                                       <td>
                                          <?=$value->c_name;?>
                                       </td>
                                       <td>
                                          <?=$value->sc_name;?>
                                       </td>
                                       <td><?=$value->p_name;?></td>
                                       <td>
                                          <?php 
                                             if (empty($value->p_image)) {
                                                echo 'Not Uploaded';
                                             }else{
                                             ?>
                                          <img src="./projectimg/<?=$value->p_image;?>" alt="img" width="150">
                                          <?php } ?>
                                       </td>
                                       <td><?php echo $value->m_price;?></td>
                                       <td><?php echo $value->s_price;?></td>
                                       <td><?php echo $value->stock;?></td>
                                       <td><?php echo $value->unit;?></td>
                                       <td><?php echo $value->s_descp;?></td>
                                       <td><?php echo $value->l_descp;?></td>
                                       <td>
                                          <a href="action/product_manage.php?submit=delete&product_id=<?=$value->p_id?>" class="btn btn-danger btn-sm">Delete</a>
                                          <a href="product.php?product_id=<?=$value->p_id?>" class="btn btn-success btn-sm mt-3">Edit</a>
                                       </td>
                                       <?php } } ?>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
<?php include 'footer.php'?>