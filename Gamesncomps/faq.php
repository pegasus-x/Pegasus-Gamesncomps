<?php include 'header.php'?>
<body>
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
   <!-- start of cart -->
   <div class="cartcanvas">
      <button type="button" class="btn badge" data-bs-toggle="offcanvas" data-bs-target="#offcanvasright"><img src="./images/shopping-basket_1.png" alt="" class="icon-cart">
      </button>
      <div class="offcanvas offcanvas-end" tabindex="0" id="offcanvasright">
         <div class="offcanvas-header">
            <img src="./images/cart1.png" alt="" class="cartone">
            <img src="./images/1.png" alt="" class="onepng">
            <h5 class="offcanvas-title">Your Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
         </div>
         <div class="offcanvas-body">
            <img src="./images/5img.webp" alt="ngp" class="rtx_a">
            <p class="nvidia-text">GIGABYTE AERO XE4 Core <i class="fa-solid fa-trash fa-bounce fa-lg trash" style="color: #010204;"></i><br>i7 12th Gen 16GB RAM 1TB <br>SSD RTX 3070 Ti 8GB GPU<br> 15.6 Inch Laptop &nbsp&nbsp&nbsp <br><br>
               1 X ₹185,490.00<br>= ₹185,490.00 <span class="dis" style="text-decoration:line-through;">₹185,490.00</span>
            </p>
            <p class="subtot">Subtotal:₹185,490.00</p>
            <button type="button" class="btn btn-danger continue">Continue Shopping</button>
            <div>
               <button type="button" class="btn btn-danger cart">View Cart</button>
            </div>
            <div>
               <button type="button" class="btn btn-danger checkout">Checkout</button>
            </div>
         </div>
      </div>
   </div>
   <!-- end of cart -->
   <div class="container">
      <nav class="home mt-4">
         <a href="#" class="lik">Home</a>
         <span class="dele">
         &nbsp&nbsp<i class="fa fa-angle-right"></i>
         </span>
         &nbsp&nbsp<a href="" style="text-decoration:none; color: black;">FAQs</a> 
      </nav>
   </div>
   <div class="container">
   	<h3 style="text-align:center;">Frequently Asked Questions</h3>
   	<p class="ship mt-5 ms-5">What Shipping Methods Are Available?<br>We ship products with India’s leading courier partners and as per your location whichever courier provider is available.</p>
   	<p class="ship mt-5 ms-5">How Long Will it Take To Get My Package?<br>Normally it takes 5 to 8 days and it depends on the location of your delivery address.</p>
   	<p class="ship mt-5 ms-5">How Do I Track My Order?<br>After shipping your package we add a tracking id to your orders page and also we send an email to your given email address where you can track<br> your parcel.</p>
   	<p class="ship mt-5 ms-5">How Should i Contact you if I Have Any Queries?<br>If you have any other questions, feel free to <a href="contactus.php" style="text-decoration:none; color:black;"><strong>Contact Us.</strong></a></p>
   </div>
</body>
<?php include 'footer.php'?>