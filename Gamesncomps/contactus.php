<?php include 'header.php'?>
<link rel="stylesheet" type="text/css" href="css/contact-us.css">
<div class="container">
   <nav class="home mt-4">
      <a href="#" class="lik">Home</a>
      <span class="dele">
      <i class="fa fa-angle-right"></i>
      </span>
      Contact Us
   </nav>
   <div class="row row-cols-4">
      <div class="col-sm-6 mt-3">
         <h1>Leave Us a Message</h1>
         <p>Your feedback will help us serve you better. In case you are experiencing<br> difficulty using our website, please leave a message and our team will<br> get back to you shortly.</p>
         <form action="action/contact_manage.php" method="POST" enctype="multipart/form-data">
            <div class="contact-form">
               <div class="col-lg-6">
                  <p>
                     <label class="ttx">
                     First Name
                     <span style="color: red;">*</span>
                     <br> 
                     </label>
                  <div class="form_ctc">
                     <input type="text" class="form-control" name="fname" id="exampleFormControlInput1" maxlength="30" minlength="6" required>
                  </div>
                  </p>
                  <p>
                     <label class="ttx">
                     Last Name
                     <span style="color: red;">*</span>
                     <br>
                     </label>
                  <div class="form_ctc">
                     <input type="text" class="form-control" name="lname" id="exampleFormControlInput1" required>
                  </div>
                  </p>
                  <p>
                     <label class="ttx">
                     Email
                     <span style="color: red;">*</span>
                     <br>
                     </label>
                  <div class="form_ctc">
                     <input type="email" class="form-control" name="mail" id="exampleFormControlInput1" required>
                  </div>
                  </p>
                  <p>
                     <label class="ttx">
                     Mobile No
                     <span style="color: red;">*</span>
                     <br>
                     </label>
                  <div class="form_ctc">
                     <input type="number" class="form-control" name="phn" id="exampleFormControlInput1" required>
                  </div>
                  </p>
                  <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
                     <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="15" cols="40" style="width:550px; height:250px;"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary sub" value="submit" name="submitct">Submit</button>
               </div>
            </div>
         </form>
      </div>
      <div class="col-sm-6 mt-3">
         <div class="wrapper">
            <div class="loc">
               <p>
                  <iframe loading="lazy" title="k25 computers" src="https://maps.google.com/maps?q=k25%20computers&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" width="555" height="228" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" aria-label="k25 computers" data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://maps.google.com/maps?q=k25%20computers&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" data-ll-status="loaded" class="entered lazyloaded"></iframe>
               </p>
            </div>
            <div class="address">
               <p class="str" style="color:black;">Our Store</p>
               <p>SCO 73, 1st Floor, Sector 20C, Chandigarh</p>
               <p>Hours of Operation</p>
            </div>
            <div class="time">
               <table class="table table-hover">
                  <tbody>
                     <tr>
                        <td>Monday</td>
                        <td>:</td>
                        <td>10AM-6PM</td>
                     </tr>
                     <tr>
                        <td>Tuesday</td>
                        <td>:</td>
                        <td>10AM-6PM</td>
                     </tr>
                     <tr>
                        <td>Wednesday</td>
                        <td>:</td>
                        <td>10AM-6PM</td>
                     </tr>
                     <tr>
                        <td>Thursday</td>
                        <td>:</td>
                        <td>10AM-6PM</td>
                     </tr>
                     <tr>
                        <td>Friday</td>
                        <td>:</td>
                        <td>10AM-6PM</td>
                     </tr>
                     <tr>
                        <td>Saturday</td>
                        <td>:</td>
                        <td>10AM-6PM</td>
                     </tr>
                     <tr>
                        <td>Sunday</td>
                        <td>:</td>
                        <td>Closed</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container mt-4 mb-2">
   <h3 class="deals">Deals Just For You</h3>
   <div class="owl-carousel owl-theme">
      <?php 
         $data =$db->query("SELECT * FROM `products` LIMIT 4");
         while($value = $data->fetch_object()){
         ?>
      <div class="item p-3">
         <div class="card" style="height:25rem;">
            <img src="backend/admin/projectimg/<?=$value->p_image;?>" alt="" class="pdt-img">
            <p class="tle"><?=$value->p_name;?></p>
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
</div>
</div>
</div>
</div>
<?php include 'footer.php'?>