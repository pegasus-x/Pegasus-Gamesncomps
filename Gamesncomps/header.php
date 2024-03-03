<?php 
   session_start();
   include 'backend/admin/configtwo.php';
   $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    global $url;
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> Online Computer Store| Gaming Accessories | Gamesncomps </title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="icon" type="image/icontype" href="./images/favicongamescomp.jpg">
      <script src="https://use.fontawesome.com/a76c9b6021.js"></script>
      <script src="https://use.fontawesome.com/1dbabcd041.js"></script>
      <script src="https://kit.fontawesome.com/d701b199cd.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css"/>

   </head>
   <body>
      <!--left & right details-->
      <div class="container">
         <div class="row">
            <div class="col-md-5">
               <a href="tel:0172-5077178" class="phn" title="Phone: 0172-5077178">Phone: 0172-5077178</a>
               <a href="mailto:sales@gamesncomps.com" class="mai" title="Email: sales@gamesncomps.com"> Email: sales@gamesncomps.com</a>
            </div>
            <div class="col-md-5">
               <a href="" title="Track Your Order" class="ord">Track Your Order</a>
               <a href="" title="My account" class="acc">My Account</a>
            </div>
         </div>
      </div>
      <hr>
      <!-- end of details -->
      <!-- logo & details-->
      <div class="container">
         <div class="logo">
            <a href="index.php"><img src="./images/logo-retailer.webp" class="logo" alt=""></a>
         </div>
      </div>
      <!-- end of logo & details-->
      <!-- Searchbar -->
      <section class="search-form">
         <div class="search-bar">
            <div class="searchlt">
               <form>
                  <input type="text" class="searchin" id="#srh" placeholder=" Search for Products ">
               </form>
            </div>
            <div class="searchrt">
               <div class="input-group">
                  <div class="input-search-field">
                     <div class="input-group-search-categories d-block">
                        <select name="product_cat" id="search_categories" class="product_select">
                           <option value="">All Products</option>
                           <?php 
                              $data = $db->query("SELECT * FROM `products`");
                              while($value = $data->fetch_object()){
                              ?>
                           <option value="keyboards"><?=$value->p_name;?></option>
                           <?php }?>
                        </select>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </section>
      <!--Icons-->
      <div class="header_icons">
         <div class="comp" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Compare"><i class="fa-solid fa-code-compare fa-lg compare"></i></div>
         <div class="love" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Wishlist"><i class="fa-regular fa-heart fa-lg heart"></i></div>
         <div class="user" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="My account"><a href="login.php" style="color: black;"><i class="fa-regular fa-user fa-lg accou"></i></a></div>
         <div class="crt" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Cart"><a href="cart.php" style="color: black;"><i class="fa-solid fa-bag-shopping fa-lg shopp"></i></a></div>
      </div>
      <!--Icons End-->
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg p-4" style="background-color:#EA1B25;height: 38px;">
         <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="toggle" data-bs-target="#navbartoggle">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="#navbartoggle">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link" href="index.php" title="Home">Home</a>
                  </li>
                  <li class="nav-item dropdown dropdown-hover position-static">
                     <a class="nav-link dropdown-toggle" href="#" id="#navbartoggle1" role="button" data-mdb-toggle="dropdown" title="Components">Components</a>
                     <div class="dropdown-menu w-85" style="border-top-left-radius: 10px;border-top-right-radius:10px">
                        <div class="container">
                           <div class="row md-6">
                              <div class="col-md-6 col-lg-2 mb-4 mb-lg-0">
                                 <div class="list-group list-group-flush">
                                    <?php 
                                       $data = $db->query("SELECT * FROM `subcategory` LIMIT 0,1");
                                       while($value= $data->fetch_object()){
                                       ?>
                                    <a href="" class="list-group-item list-group-item-action cpu" style="font-weight: bold;"><?=$value->c_name;?></a>
                                    <a href="" class="list-group-item list-group-item-action"><?=$value->sc_name;?></a>
                                    <?php }?>
                                    <a href="" class="list-group-item list-group-item-action memory" style="font-weight: bold;">Memory</a>
                                    <a href="" class="list-group-item list-group-item-action">DDR3 RAM</a>
                                    <a href="" class="list-group-item list-group-item-action cpu-cooler" style="font-weight: bold;">CPU Cooler</a>
                                    <a href="" class="list-group-item list-group-item-action">AIR COOLERS</a>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-2 mb-3 mb-lg-0">
                                 <div class="list-group list-group-flush">
                                    <?php 
                                       $data = $db->query("SELECT * FROM `subcategory` LIMIT 1,2");
                                       while($value= $data->fetch_object()){
                                       ?>
                                    <a href="" class="list-group-item list-group-item-action motherboard" style="font-weight:bold;"><?=$value->c_name;?></a>
                                    <a href="" class="list-group-item list-group-item-action"><?=$value->sc_name;?></a>
                                    <?php }?>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-2 mb-3 mb-lg-0">
                                 <div class="list-group list-group-flush">
                                    <a href="" class="list-group-item list-group-item-action gc" style="font-weight:bold;">Graphic Card</a>
                                    <a href="" class="list-group-item list-group-item-action">NVIDIA</a>
                                    <a href="" class="list-group-item list-group-item-action stg" style="font-weight:bold;">Storage</a>
                                    <a href="" class="list-group-item list-group-item-action">Desktop Hard Drive</a>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-2 mb-3 mb-lg-0">
                                 <div class="list-group list-group-flush">
                                    <a href="" class="list-group-item list-group-item-action cb" style="font-weight:bold;">Cabinet</a>
                                    <a href="" class="list-group-item list-group-item-action">Full Tower</a>
                                    <a href="" class="list-group-item list-group-item-action kb" style="font-weight:bold;">Keyboard</a>
                                    <a href="" class="list-group-item list-group-item-action">Mechanical Gaming KB</a>
                                    <a href="" class="list-group-item list-group-item-action mouse" style="font-weight:bold;">Mouse</a>
                                    <a href="" class="list-group-item list-group-item-action">RGB Gaming Wired Mouse</a>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-2 mb-3 mb-lg-0">
                                 <div class="list-group list-group-flush">
                                    <a href="" class="list-group-item list-group-item-action mn" style="font-weight:bold;">Monitor</a>
                                    <a href="" class="list-group-item list-group-item-action">15.6 inch</a>
                                    <a href="" class="list-group-item list-group-item-action">
                                    19 inch</a>
                                    <a href="" class="list-group-item list-group-item-action">27 inch</a>
                                    <a href="" class="list-group-item list-group-item-action">28 inch</a>
                                    <a href="" class="list-group-item list-group-item-action">31.5 inch</a>
                                    <a href="" class="list-group-item list-group-item-action">
                                    32 inch</a>
                                    <a href="" class="list-group-item list-group-item-action">
                                    34 inch</a>
                                    <a href="" class="list-group-item list-group-item-action">
                                    43 inch</a>
                                    <a href="" class="list-group-item list-group-item-action">
                                    48 inch</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="productlistpage.php" title="Products">Products</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="" title="Assemble your PC">Assemble your PC</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="" title="Apple Accessories">Apple Accessories</a>
                  </li>
                  <li class="nav-item dropdown dropdown-hover position-static">
                     <a class="nav-link dropdown-toggle" href="#Accessories" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" title="Accessories">Accessories</a>
                     <div class="dropdown-menu w-85">
                        <div class="container m-2 p-2">
                           <div class="row md-6">
                              <div class="col-md-6 col-lg-2 mb-3 mb-lg-0">
                                 <div class="list-group list-group-flush">
                                    <a class="list-group-item-ac list-group-item-action" href="">Gaming Accessories</a>
                                    <a class="list-group-item-ac list-group-item-action" href="">Presentation Remote</a>
                                    <a class="list-group-item-ac list-group-item-action" href="">Converter</a>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-2 mb-3 mb-lg-0">
                                 <div class="list-group list-group-flush">
                                    <a class="list-group-item-ac list-group-item-action" href="">Chasis Fan</a>
                                    <a class="list-group-item-ac list-group-item-action" href="">RGB Contoller</a>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-2 mb-3 mb-lg-0">
                                 <div class="list-group list-group-flush">
                                    <a class="list-group-item-ac list-group-item-action" href="">CPU Thermal Paste</a>
                                    <a class="list-group-item-ac list-group-item-action" href="">Connecting Cables</a>
                                    <a class="list-group-item-ac list-group-item-action" href="">Gaming Chair</a>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-2 mb-3 mb-lg-0">
                                 <div class="list-group list-group-flush">
                                    <a class="list-group-item-ac list-group-item-action" href="">Web Cam</a>
                                    <a class="list-group-item-ac list-group-item-action" href="">Mouse Pad</a>
                                    <a class="list-group-item-ac list-group-item-action" href="">Panel</a>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-2 mb-3 mb-lg-0">
                                 <div class="list-group list-group-flush">
                                    <img src="./images/accessories-300x150.jpg" alt="" class="accesimg">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#exp" role="button" data-bs-toggle="dropdown" title="Experience Zone">
                     Experience Zone
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Logitech Experience</a></li>
                        <li><a class="dropdown-item" href="">Intel Experience</a></li>
                        <li><a class="dropdown-item" href="">WD Black</a></li>
                        <li><a class="dropdown-item" href="">11th Gen Intel</a></li>
                        <li><a class="dropdown-item" href="">12th Gen Intel</a></li>
                        <li><a class="dropdown-item" href="">13th Gen Intel</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="" title="Brands">Brands</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- start of cart -->
   <div class="cartcanvas">
      <button type="button" class="btn badge" data-bs-toggle="offcanvas" data-bs-target="#offcanvasright"><img src="./images/shopping-basket_1.png" alt="" class="icon-cart">
      </button>
      <div class="offcanvas offcanvas-end" tabindex="0" id="offcanvasright" data-bs-backdrop="true">
         <div class="offcanvas-header">
            <img src="./images/cart1.png" alt="" class="cartone">
            <img src="./images/1.png" alt="" class="onepng">
            <h5 class="offcanvas-title">Your Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
         </div>
         <div class="offcanvas-body">
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
            <div>
               <img src="backend/admin/projectimg/<?=$value->p_img?>" alt="ngp" class="rtx_a">
               <p class="nvidia-text"><?=$value->p_name?> <a href="action/cart_manage.php?submit=delete_cart&cart_id=<?=$value->cart_id;?>&url=<?=$url;?>"><i class="fa-solid fa-trash fa-bounce fa-lg trash" style="color: #010204;"></i></a><br>
                  <?=$value->qty?> X ₹ <?=$value->p_price?> = ₹ <?=$value->p_price * $value->qty?> 
               </p>
            </div>
            <p class="subtot">Subtotal:₹ <?=$totals;?></p>
            <button type="button" class="btn btn-danger continue">Continue Shopping</button>
            <div>
               <a href="cart.php"> <button type="button" class="btn btn-danger cart">View Cart</button></a>
            </div>
            <div>
               <a href="checkout.php">
                <button type="button" class="btn btn-danger checkout">Checkout</button>
               </a>
            </div>
            <?php }  } ?>
         </div>
      </div>
   </div>
   <!-- end of cart -->
   </body>
   <!-- end of navbar -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" ></script>