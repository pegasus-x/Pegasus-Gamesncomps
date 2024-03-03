<?php include 'header.php';?>
<!-- carousel slides -->
<div class="container mt-3 ">
   <div id="carouselSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
         <?php 
            $sl = -1;
            $data = $db->query("SELECT * FROM `bannerimg`");
            while($value = $data->fetch_object()){
              $sl++;
            ?>
         <button type="button" data-bs-target="#carouselSlidesOnly" data-bs-slide-to="<?=$sl;?>" class="<?php if($sl == 0){echo 'active';} ?>"></button>
         <?php } ?>
      </div>
      <div class="carousel-inner">
         <?php 
            $sl = -1;
            $data = $db->query("SELECT * FROM `bannerimg`");
            while($value = $data->fetch_object()){
              $sl++;
            ?>
         <div class="carousel-item <?php if($sl == 0){echo 'active';} ?>">
            <a href=""><img src="backend/admin/projectimg/<?=$value->b_img;?>" alt="" class="d-block w-100"></a>
         </div>
         <?php } ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlidesOnly" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselSlidesOnly" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </button>
   </div>
</div>
<!-- end of carousel slides -->
<!--  Product Category -->
<div class="container mt-5">
   <div class="owl-carousel owl-theme">
      <?php
         $data = $db->query("SELECT * FROM `category`");
         while($value =$data->fetch_object()){
         ?>
      <div class="item">
         <div class="card pv">
            <a href="productlistpage.php?slug<?=$value->slug;?>"><img src="backend/admin/projectimg/<?=$value->c_img;?>" class="card-img-top" alt=""></a>
            <h5><?=$value->c_name;?></h5>
         </div>
      </div>
      <?php }?>
   </div>
</div>
<!-- end of product category-->
<!-- Trending Products-->
<?php include 'msg.php'?>
<div class="container mt-4 mb-2 p-2">
   <h3 class="trend">Trending Products</h3>
   <div class="owl-carousel owl-theme">
      <?php 
         $data =$db->query("SELECT * FROM `products` LIMIT 0,5");
         while($value = $data->fetch_object()){
         ?>
      <div class="item p-3">
         <div class="card" style="height:25rem;">
            <a href="productlistpage.php?slug<?=$value->slug;?>">
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
<!-- End of Trending Products -->
<!-- Deals just for you -->
<div class="container mt-4 mb-2 p-2">
   <h3 class="deals">Deals Just For You</h3>
   <div class="owl-carousel owl-theme">
      <?php 
         $data =$db->query("SELECT * FROM `products` LIMIT 6,10");
         while($value = $data->fetch_object()){
         ?>
      <div class="item p-3">
         <div class="card" style="height:25rem;">
            <a href="productlistpage.php?slug<?=$value->slug;?>">
               <img src="backend/admin/projectimg/<?=$value->p_image;?>" alt="" class="pdt-img">
               <p class="tle"><?=$value->p_name;?></p>
            </a>
            <p class="price_tag">Rs <?=$value->s_price;?></p>
            <h6 style="text-decoration: line-through;">Rs <?=$value->m_price;?></h6>
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
<!-- End of Deals just for you -->
<!-- Banner Images -->
<div class="container mt-5 mb-5 me-2 p-2">
   <div class="row">
      <div class="col">
         <a href=""><img src="./images/cockpit.jpg" alt="" class="cockpeet"></a>
         <a href=""><img src="./images/G29.jpg" alt="" class="driving-twonine"></a>
      </div>
   </div>
   <div class="row">
      <div class="col">
         <a href=""><img src="./images/RX-6400.jpg" alt="" class="graphics_RX"></a>
         <a href=""><img src="./images/GP100.jpg" alt="" class="wiredgp"></a>
      </div>
   </div>
</div>
<div class="container mt-4 p-3">
   <div class="row">
      <div class="col">
         <div class="bannerimg">
            <a href=""><img src="./images/2000D-Cabinet-Banner-scaled.jpg" alt="" class="bneimg"></a>
         </div>
      </div>
      <div class="col mt-4">
         <div class="bannerimgtwo">
            <a href=""><img src="./images/samsung-monitor-banner-1.jpg" alt="" class="bneimg"></a>
         </div>
      </div>
      <div class="col mt-4">
         <div class="bannerimgthree">
            <a href=""><img src="./images/PSU-Banner.jpg" alt="" class="bneimg"></a>
         </div>
      </div>
   </div>
</div>
<!-- End of Banner Images -->
<div class="container">
   <div class="row">
      <div class="col-5 p-4">
         <div class="logo">
            <img src="./images/google.jpg" alt="" class="google-img">
         </div>
         <div class="rates">
            <i class="fa fa-star fa-2x gx"></i>
            <i class="fa fa-star fa-2x gx"></i>
            <i class="fa fa-star fa-2x gx"></i>
            <i class="fa fa-star fa-2x gx"></i>
            <i class="fa fa-star-half-o fa-2x" style="color:#fffc00;transform: translate(10px,-20px);"></i>
            <p style="text-align: center;transform: translate(-140px, -10px); font-weight: 700 ;">EXCELLENT<br>Based on 868 reviews</p>
         </div>
      </div>
   </div>
</div>
<div class="container">
   <div class="features row row-cols-lg-5">
      <div class="fea">
         <div class="left">
            <img src="./images/100.webp" alt="" class="feat">
            <span>Original Products</span>
         </div>
      </div>
      <div class="fea">
         <div class="left">
            <img src="./images/Layer-48.webp" alt="" class="feat">
            <span>Shop All Top Brands</span>
         </div>
      </div>
      <div class="fea">
         <div class="left">
            <img src="./images/Layer-65.webp" alt="" class="feat">
            <span>Secure Payments</span>
         </div>
      </div>
      <div class="fea">
         <div class="left">
            <img src="./images/Layer-50.webp" alt="" class="feat">
            <span>Best Price Guarantee</span>
         </div>
      </div>
      <div class="fea">
         <div class="left">
            <img src="./images/Layer-51.webp" alt="" class="feat">
            <span>99% Positive Feedback</span>
         </div>
      </div>
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
   <a href="https://wa.me/9438112679" target="blank"><img src="https://static.vecteezy.com/system/resources/previews/018/930/746/original/whatsapp-logo-whatsapp-icon-whatsapp-transparent-free-png.png" alt="" class="wp-icon"></a>
</div>
<div class="container">
   <div class="row align-items-center">
      <div class="col">
         <div class="rvs">
            <img src="./images/unnamed.png" class="ard" alt="">
            <h5>Aarvind Dhyani</h5>
            <p>2023-05-16</p>
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <p class="rev_text">Excellent solution provider</p>
         </div>
      </div>
      <div class="col">
         <div class="rvs">
            <img src="./images/unnamed(1).png" class="ard" alt="">
            <h5>Kartheek Chukk...</h5>
            <p>2023-05-08</p>
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <p class="rev_text">Amazing Built Quality & Timely Delivery by Gamesncomps</p>
         </div>
      </div>
      <div class="col">
         <div class="rvs">
            <img src="./images/unnamed(2).png" class="ard" alt="">
            <h5>Devwrat</h5>
            <p>2023-05-05</p>
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <p class="rev_text">Originality at its best. ps: lower prices compared to any other shop either online or offline</p>
         </div>
      </div>
      <div class="col">
         <div class="rvs">
            <img src="./images/unnamed(3).png" class="ard" alt="">
            <h5>Pradeep A</h5>
            <p>2023-05-05</p>
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <p class="rev_text">Best price that you can get compared to any other ecommerce site.</p>
         </div>
      </div>
      <div class="col">
         <div class="rvs">
            <img src="./images/unnamed(4).png" class="ard" alt="">
            <h5>Khusbu Nagar</h5>
            <p>2023-05-05</p>
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <img src="./images/f.svg" alt="" class="star">
            <p class="rev_text">Excellent Service</p>
         </div>
      </div>
   </div>
</div>
<div class="container mt-4 p-3">
   <h2 style="color:#C1272F; text-align: center; font-weight: bold;">Shop By Brand</h2>
   <div class="row mt-3 p-4">
      <div class="col">
         <div class="card" style="width:12vw; border-radius: 15px;">
            <a href=""><img src="./images/image-13.png" class="card-img-top" alt=""></a>
         </div>
         <h4 style="text-align:center;" class="company_name">Intel</h4>
      </div>
      <div class="col">
         <div class="card" style="width: 12vw; border-radius: 15px;">
            <a href=""><img src="./images/image-11.png" class="card-img-top" alt=""></a>
         </div>
         <h4 style="text-align:center;" class="company_name">Gigabyte</h4>
      </div>
      <div class="col">
         <div class="card" style="width: 12vw; border-radius: 15px;">
            <a href=""><img src="./images/image-10.png" class="card-img-top" alt=""></a>
         </div>
         <h4 style="text-align:center;" class="company_name">AMD</h4>
      </div>
      <div class="col">
         <div class="card" style="width: 12vw; border-radius: 15px;">
            <a href=""><img src="./images/image-12.png" class="card-img-top" alt=""></a>
         </div>
         <h4 style="text-align:center;" class="company_name">Logitech</h4>
      </div>
      <div class="col">
         <div class="card" style="width: 12vw; height: 23vh; border-radius: 15px;">
            <a href=""><img src="./images/image-14.png" style="margin:13px; width: 10vw;" class="card-img-top" alt=""></a>
         </div>
         <h4 style="text-align:center;" class="company_name">NVIDIA</h4>
      </div>
      <div class="col">
         <div class="card" style="width: 12vw; background-color: #D9D9D9;border-radius: 15px;">
            <a href=""><img src="./images/image-9-1.png" class="card-img-top" alt=""></a>
         </div>
         <h4 style="text-align:center;" class="company_name">View All</h4>
      </div>
   </div>
</div>
<?php include 'footer.php';?>