<?php 
   include 'configtwo.php';
   include 'sidebar.php';?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   <body>
      <div class="content-page">
         <div class="container-fluid">
            <div class="row">
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
                                       <img src="./projectimg/<?=$value->p_image;?>" alt="img" width="100">
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
                                       <a href="action/product_manage.php?product_id=<?=$value->p_id?>" class="btn btn-success btn-sm mt-3">Edit</a>
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
   </body>
</html>
<?php include 'footer.php'?>