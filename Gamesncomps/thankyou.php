<?php include 'header.php'?>
<style type="text/css">
   .thankyou-wrapper{
   width:100%;
   height:auto;
   margin:auto;
   background:#ffffff; 
   padding:10px 0px 50px;
   }
   .thankyou-wrapper h1{
   font:100px Arial, Helvetica, sans-serif;
   text-align:center;
   color:#333333;
   padding:0px 10px 10px;
   }
   .thankyou-wrapper p{
   font:26px Arial, Helvetica, sans-serif;
   text-align:center;
   color:#333333;
   padding:5px 10px 10px;
   }
   .thankyou-wrapper a{
   font:26px Arial, Helvetica, sans-serif;
   text-align:center;
   color:#ffffff;
   display:block;
   text-decoration:none;
   width:250px;
   background:#E47425;
   margin:10px auto 0px;
   padding:15px 20px 15px;
   border-radius: 10px;
   }
   .thankyou-wrapper a:hover{
   font:26px Arial, Helvetica, sans-serif;
   text-align:center;
   color:#ffffff;
   display:block;
   text-decoration:none;
   width:250px;
   background:black;
   margin:10px auto 0px;
   padding:15px 20px 15px;
   }
</style>
<section class="login-main-wrapper">
   <div class="main-container">
      <div class="login-process">
         <div class="login-main-container">
            <div class="thankyou-wrapper">
               <h1><img src="https://img.freepik.com/free-vector/thank-you-lettering-with-curls_1262-6964.jpg" alt="thanks" /></h1>
               <p style="font-family: cursive;">for placing your order, we will place your order soon... </p>
               <a href="index.php">Back to home</a>
            </div>
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