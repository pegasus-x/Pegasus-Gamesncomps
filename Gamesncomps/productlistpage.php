<?php 
   include 'header.php';?>
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
<div class="container p-3">
   <?php include 'msg.php';?>
   <div class="row md-3">
      <div class="col-lg-2 col-md-6 col-lg-2 mb-3 mb-lg-0">
         <h6>Home > Products</h6>
         <h4 class="pcr mt-4">Price</h4>
         <form>
            <label for="customRange2" class="form-label"></label>
            <input type="range" class="form-range" min="0" max="5" id="customRange2">
         </form>
         <p class="pr">Price: ₹74,660 — ₹311,980</p>
         <button class="btn_filter">Filter</button>
         <select class="brd" id="#bder">
            <option value="">Choose Subcategory</option>
            <?php
               $data = $db->query("SELECT * FROM `subcategory`");
               while($value = $data->fetch_object()){
               ?> 
            <option value=""><?=$value->sc_name;?></option>
            <?php }?>
         </select>
         <div class="sidereview">
            <p class="rcv">Sub-Category</p>
            <ul class="product_list">
               <?php 
                  $data =$db->query("SELECT * FROM `subcategory`");
                  while($value = $data->fetch_object()){
                  ?>
               <div class="row">
                  <div class="col">
                     <li>
                        <a href="#" class="link">
                           <img src="backend/admin/projectimg/<?=$value->sc_img;?>" alt="" class="lgi">
                           <p class="logi"><?=$value->sc_name;?><br>
                              by droidnought7.0
                           </p>
                        </a>
                     </li>
                  </div>
               </div>
               <?php }?>
            </ul>
         </div>
      </div>
      <div class="col">
         <h3 class="lp mt-3">Products</h3>
         <p class="all_result">Showing all 12 results</p>
         <div class="shop-control-bar">
            <i class="fa-solid fa-align-justify fa-lg" style="cursor:pointer;"></i>
            <form>
               <select class="sort" id="#lad">
                  <option value="">Sort by latest</option>
                  <option value="">Sort by popularity</option>
                  <option value="">Sort by average rating</option>
                  <option value="">Sort by price:low to high</option>
                  <option value="">Sort by price:high to low</option>
               </select>
            </form>
         </div>
         <div class="container">
            <div class="row">
               <?php 
                  $data =$db->query("SELECT * FROM `products` ");
                  while($value = $data->fetch_object()){
                  ?>
               <div class="col md-3">
                  <?php 
                   if (!empty ($_REQUEST['slug']))
                    {
                
                     $slug = $_REQUEST['slug'];
                     $data = $db->query("SELECT * FROM `category` WHERE slug = '$slug'");
                     $value = $data->fetch_object();
                     $c_name = $value->c_name;
                     $data = $db->query("SELECT * FROM `products` WHERE  c_name = '$c_name'");
                   } else {
                      // code...
                   }
                   

                  ?>
                  <div class="card mt-3 vp">
                     <a href="productdetails.php?slug=<?=$value->slug?>">
                        <img src="backend/admin/projectimg/<?=$value->p_image;?>" alt="" class="giga-img">
                        <span class="percentage">-52%</span>
                        <p class="brief"><?=$value->sc_name;?></p>
                        <p class="det"><?=$value->p_name;?></p>
                     </a>
                     <p class="pri">Rs <?=$value->s_price;?></p>
                     <div class="ctr">
                        <form action="action/cart_manage.php" >
                           <input type="hidden" name="p_id" value="<?=$value->p_id;?>">
                           <input type="hidden" name="url" value="<?=$url;?>">
                           <input type="hidden" name="qty" value="1">
                           <button class="btn btn-outline-info" name="submit" value="add_to_cart" type="submit">Add to cart</button>
                        </form>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
         <p style="margin:23px 20px 0px 48px;">Showing all 12 results</p>
         <div class="container">
            <p class="rct">Recentlty Viewed Products</p>
            <div class="row">
               <div class="col">
                  <div class="card mt-3 vp">
                     <a href="productdetails.php">
                        <img src="./images/purple sata.webp" alt="" class="giga-img">
                        <span class="percentage">-60%</span>
                        <p class="brief">STORAGES,SURVEILLANCE</p>
                        <p class="det">Western Digital Purple<br>Pro 18TB</p>
                        <i class="fa fa-star-o fa-xs" style="color:grey; margin-left:10px;"></i>
                        <i class="fa fa-star-o fa-xs" style="color:grey;"></i>
                        <i class="fa fa-star-o fa-xs" style="color:grey;"></i>
                        <i class="fa fa-star-o fa-xs" style="color:grey;"></i>
                        <i class="fa fa-star-o fa-xs" style="color:grey;"></i>
                        (0)
                     </a>
                     <p class="pri">₹36,299.00</p>
                     <i class="fa-solid fa-circle-arrow-right fa-2xl read" style="color: #e8eaee;"></i>
                  </div>
               </div>
            </div>
         </div>
         <!-- Latest Procducts  -->
         <div class="container mt-3">
            <p class="rct">Latest Products</p>
            <div class="row">
               <?php 
                  $data =$db->query("SELECT * FROM `products` LIMIT 3 ");
                  while($value = $data->fetch_object()){
                  ?>
               <div class="col md-3">
                  <div class="card mt-3 vp">
                     <a href="productdetails.php?slug=<?=$value->slug?>">
                        <img src="backend/admin/projectimg/<?=$value->p_image;?>" alt="" class="frtpnl">
                        <p class="brief"><?=$value->sc_name;?></p>
                        <p class="det"><?=$value->p_name;?><br></p>
                     </a>
                     <p class="pri">Rs <?=$value->s_price;?></p>
                     <a href="">
                     <button type="button" class="btn btn-outline-info" value="add_to_cart" name="add_to_cart">Add to cart</button>
                     </a>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include 'footer.php';?>