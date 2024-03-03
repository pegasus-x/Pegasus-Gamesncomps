<?php include 'header.php' ?>
<link rel="stylesheet" type="text/css" href="css/login.css">
 <div class="container">
    <nav class="home mt-4">
      <a href="#" class="hmr">Home &nbsp&nbsp&nbsp</a>
      <span class="lgi">
        <i class="fa fa-angle-right"></i>
      </span>
      &nbsp&nbsp&nbsp&nbsp&nbspMy Account
    </nav>
    <div class="ctm_login">
      <span class="or_txt">or</span>
    </div>
    <div class="customer-login" id="#cstlogin">
      <div class="cst col_1 mt-5">
        <p class="lgn">Login</p>
        <form class="frm" action="action/login_manage.php" method="POST" enctype="multipart/form-data"> <?php include 'msg.php'?>
          <p class="wc">Welcome back! Sign in to your account.</p>
          <p>
            <label for="username" class="lbl">
              Username or email Address
              <span class="req">*</span>
            </label>
            <input type="text" name="email" id="#user" class="uslg">
          </p>
          <p>
            <label for="password" class="psw">
              Password
              <span class="psd">*</span>
            </label>
            <input type="password" class="uslg" id="#swp" name="password">
          </p>
          <p class="frm">
            <label for="remember" class="rmb">
              <input type="checkbox" name="cb" type="checkbox" name="rememberme" id="#cb">
              <span>Remember me</span>
            </label><br>
            <button type="submit" class="btn btn-lg rtn" name="submit_lg" value="submit_login">Log In</button>
          </p>
          <p class="lp"><a href="">Lost your password?</a></p>
        </form>
      </div>
      <div class="cst col_2 reg mt-5">
        <p class="rgs">Register</p>
        <form class="frm" action="action/register_manage.php" method="POST" enctype="multipart/form-data">
          <?php include 'msg.php'?>
          <p class="wc">Create new account today to reap the benefits of a personalized shopping experience.</p>
          <p>
            <label for="email" class="ml">
              Email address
              <span class="req">*</span>
            </label>
            <input type="email" name="email" class="uslg" id="#mal">
             <label for="email" class="ml mt-3">
              password
              <span class="req">*</span>
            </label>
            <input type="password" name="password" class="uslg" id="#mal">
          </p>
          <p>A link to set a new password will be sent to your email address.</p>
          <div class="term">
            <p>Your personal data will be used to support your experience<br> throughout this website, to manage access to your account,<br> and for other purposes described in our <a href="https://gamesncomps.com/terms-and-conditions/" class="pir">privacy policy.</a></p>
          </div>
          <button type="submit" class="btn btn-lg rtn" name="submit" value="submit_register">Register</button>
          <div class="register_benefits mt-3">
            <p class="">&nbsp&nbsp&nbsp&nbsp&nbspSign Up today and you will be able to:</p>
            <ul>
              <li><i class="fa-solid fa-check" style="color: #198754;"></i> Speed your way through checkout</li>
              <li> <i class="fa-solid fa-check" style="color: #198754;"></i> Track your orders easily</li>
              <li> <i class="fa-solid fa-check" style="color: #198754;"></i> Keep a record of all your purchases</li>
            </ul>
          </div>
        </form>
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
    <img src="https://static.vecteezy.com/system/resources/previews/018/930/746/original/whatsapp-logo-whatsapp-icon-whatsapp-transparent-free-png.png" alt="" class="wp-icon">
  </div>
  <div class="container mt-4 mb-2 p-2">
    <h3 class="trend">Recently Viewed Products</h3>
    <div class="row mt-3">
      <div class="col">
        <div class="card">
          <a href="">
            <p class="tle">Logitech MX Master 3S Wireless<br>Mouse Graphite</p>
            <img src="./images/Logitechj.jpg" alt="" class="card-img-top">
            <span class="percentage">-33%</span>
          </a>
          <p class="price_tag">₹8,599.00</p>
          <h6 style="text-decoration: line-through;">₹12,500.00</h6>
        </div>
      </div>
    </div>
  </div>
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
  </div>
  </div>
  </div>
  </div>
  <?php include 'footer.php'?>
