<?php include 'header.php'?>
<link rel="stylesheet" type="text/css" href="css/cart.css">
<div class="container">
   <nav class="home mt-4">
      <a href="#" class="lik">Home &nbsp&nbsp&nbsp</a>
      <span class="del">
      <i class="fa fa-angle-right"></i>
      </span>
      &nbsp&nbsp&nbsp&nbsp&nbspCart
   </nav>
</div>
<?php include 'msg.php';?>
<section class="pt-5 pb-5">                             
   <div class="container">
      <div class="row w-100">
         <div class="col-lg-12 col-md-12 col-12">
            <h3 class="display-5 mb-2 text-center"> My Cart</h3>
            <p class="mb-5 text-center">
                 <?php
            if(!empty($_REQUEST['o_id']))
            {
               $o_id = $_REQUEST['o_id'];
            } else{
                  $o_id ='';
            }
            $cd = $db->query("SELECT * FROM `checkout` WHERE o_id = '$o_id'");
            $cd_value = $cd->fetch_object();
            ?>




            <?php 
         if (empty($_SESSION['u_id'])) {
           $session_id = session_id();
           $data = $db->query("SELECT * FROM `cart` WHERE  session_id = '$session_id' AND sts = 0");
         }else{
           $u_id = $_SESSION['u_id'];
           $data = $db->query("SELECT * FROM `cart` WHERE u_id = '$u_id' AND sts = 0");
         }
         if ($data->num_rows  ==  0) {
          
         }
         ?>
            <table id="shoppingCart" class="table table-condensed table-responsive">
               <thead>
                  <tr>
                     <th style="width:30%">Product</th>
                     <th style="width:30%">Price</th>
                     <th style="width:30%">Quantity</th>
                     <th style="width:30%">Subtotal</th>
                     <th style="width:30%">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     if (empty($_SESSION['u_id'])) {
                       $session_id = session_id();
                       $data = $db->query("SELECT * FROM `cart` WHERE session_id = '$session_id'");
                     }else{
                       $u_id = $_SESSION['u_id'];
                       $data = $db->query("SELECT * FROM `cart` WHERE u_id = '$u_id'");
                     }
                     if ($data->num_rows > 0) {
                       while($value = $data->fetch_object()){
                         global $totals;
                         $totals += $value->p_price * $value->qty;
                     ?>
                  <tr>
                     <td data-th="Product">
                        <div class="row">
                           <div class="col-md-3 text-left">
                              <img src="backend/admin/projectimg/<?=$value->p_img?>" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                           </div>
                           <div class="col-md-9 text-left mt-sm-2">
                              <p><?=$value->p_name;?></p>
                           </div>
                        </div>
                        <input type="hidden" name="cart_id[]" value="<?=$value->cart_id;?>">
                     </td>
                     <td data-th="Price">₹<?=$value->p_price;?></td>
                     <td data-th="Quantity">
                        <p><?=$value->qty?> X ₹ <?=$value->p_price?><br>= ₹ <?=$value->p_price * $value->qty?></p>
                     </td>
                     <td class="subtotal" data-th="Subtotal">
                        <p style="color: red;">₹<?=$value->p_price * $value->qty?> </p>
                     <td class="actions" data-th="Action">
                        <div class="text-right">
                           <a href="action/cart_manage.php?submit=delete_cart&cart_id=<?=$value->cart_id;?>&url=<?=$url;?>">
                           <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                           <i class="fas fa-trash"></i>
                           </button>
                           </a>
                        </div>
                     </td>
                     </td>
                  </tr>
                  <?php }  } ?>
               </tbody>
            </table>
         </div>
      </div>
      <div class="row mt-4 d-flex align-items-center">
         <div class="col-sm-6 order-md-2 text-right">
            <a href="checkout.php" class="btn mb-4 btn-lg po pl-5 pr-5">Checkout</a>
         </div>
         <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="productlistpage.php" class="btn mb-4 btn-lg po pl-5 pr-5">Continue Shopping</a>
         </div>
         <div class="col-sm-6 order-md-1 text-center">
            <a href="" class="btn mb-4 btn-lg po pl-5 pr-5">Update Cart</a>
         </div>
      </div>
   </div>
</section>
<!-- Trending Products-->
<div class="container mt-5 mb-3 p-2">
   <h3 class="trend">Trending Products</h3>
   <div class="owl-carousel owl-theme">
      <?php 
         $data =$db->query("SELECT * FROM `products` LIMIT 0,5");
         while($value = $data->fetch_object()){
         ?>
      <div class="item p-3">
         <div class="card" style="height:25rem;">
            <a href="">
               <img src="backend/admin/projectimg/<?=$value->p_image;?>" alt="" class="card-img-top">
               <p class="tle"><?=$value->p_name;?></p>
            </a>
            <p class="price_tag"> Rs <?=$value->s_price;?></p>
            <h6 style="text-decoration: line-through;"> Rs <?=$value->m_price;?></h6>
            <div class="ctr">
               <form action="action/cart_manage.php">
                  <input type="hidden" name="p_id" value="<?=$value->p_id;?>">
                  <input type="hidden" name="url" value="<?=$url;?>">
                  <input type="hidden" name="qty" value="1">
                  <button class="btn btn-outline-info" name="submit" value="add_to_cart" type="submit">Add to cart</button>
               </form>
            </div>
         </div>
      </div>
      <?php }?>
   </div>
</div>
<!--notification -->
<div class="notification">
   <div class="icon-img">
      <img src="./images/notification-bell.png" onclick="alert('Do you want to receive notifications?')" alt="" title="Notification Preferences" class="bell-icon">
   </div>
</div>
<!--notification end -->
<div class="whatsapp_chat">
   <img src="https://static.vecteezy.com/system/resources/previews/018/930/746/original/whatsapp-logo-whatsapp-icon-whatsapp-transparent-free-png.png" alt="" class="wp-icon">
</div>
<?php include 'footer.php'?>