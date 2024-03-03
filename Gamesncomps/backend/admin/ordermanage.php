<?php 
   session_start();
      include 'configtwo.php';
      include 'sidebar.php';
   ?>
<body>
   <div class="container mt-5">
      <div class="card">
         <div class="card-header d-flex justify-content-between">
            <div class="header-title">
               <h4 class="card-title">Order Manage Datatable</h4>
            </div>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table id="datatable" class="table data-table table-striped table-bordered">
                  <thead>
                     <tr>
                        <th>Sl no</th>
                        <th>User Details</th>
                        <th>Address</th>
                        <th>Order Details</th>
                        <th>Payment Details</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        $sl = 0;
                          
                           $data = $db ->query("SELECT * FROM `checkout` ORDER BY o_id DESC");
                           $check = $data->num_rows;
                           if ($check == 0){
                           
                           ?>
                     <tr>
                        <td colspan="" class="text-center">No Data Found</td>
                     </tr>
                     <?php
                        } else {
                          while ($value=$data->fetch_object()){
                            $sl++; 
                        ?>
                     <tr>
                        <td><?=$sl;?></td>
                        <td>
                           <?php 
                              $o_id = $value->o_id;
                              $user_data = $db->query("SELECT * FROM `checkout` WHERE o_id = '$o_id'");
                              $user_value = $user_data->fetch_object();
                              echo $user_value->f_name;
                              ?>
                        </td>
                        <td><?=$value->address;?>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                        </td>
                        <td>
                           <?php 
                              $status = $value->status;
                              if ($status == 0) {
                                 echo 'Not Update';
                              }elseif ($status == 1) {
                                 echo 'Order Recived';
                              }elseif ($status == 2) {
                                 echo 'Order Dispatch';
                              }elseif ($status == 3) {
                                 echo 'Order Delivered';
                              }elseif($status == 4){
                                 echo 'Order Canceled';
                              }
                              
                              ?>
                           <form action="action/order_action.php">
                              <label>Select Status</label>
                              <select class="form-select" name="status">
                                 <option>Select Update</option>
                                 <option value="1">Order Received</option>
                                 <option value="2">Order Dispatched</option>
                                 <option value="3">Order Delivered</option>
                                 <option value="4">Order Canceled</option>
                              </select>
                              <input type="hidden" name="o_id" value="<?=$value->o_id;?>">
                              <button  type="submit" class="btn btn-primary mt-2 btn-sm" name="submit" value="update_form">Update</button>
                           </form>
                        </td>
                        <td>
                           <a href="" class="btn btn-danger btn-sm">Cancel Order</a>
                           <a href="" class="btn btn-success btn-sm mt-3">Edit</a>
                        </td>
                     </tr>
                     <?php } } ?>  
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</body>
<?php include 'footer.php'?>