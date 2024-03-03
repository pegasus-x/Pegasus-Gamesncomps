<?php include 'header.php'?>
<style>
   .xseries{
   width: 45rem;
   }
   .yseries{
   width: 45rem;
   }
   .ctg{
   font-weight: 600;
   font-size: 25px;
   margin-left: 30px;
   margin-top: 10px;
   position: relative;
   padding-bottom: 0.6em;
   border-bottom: 1px solid #dadada;
   }
   .ctg:after{
   content: ' ';
   width: 4.56em;
   border-bottom: 2px solid transparent;
   display: block;
   position: absolute;
   bottom: -1px;
   border-color: #ea1b25;
   }
   .pbg{
   font-size: 25px;
   color: black;
   }
   .adm{
   text-decoration: none;
   background: 0 0;
   border-color: #e4e5e7;
   border-style: solid;
   border-width: 1px;
   color: #565656;
   display: inline-block;
   font-size: 1em!important;
   line-height: 1;
   margin: 0 .457em .731em 0;
   padding: 15px;
   }
   .adm:hover{
   background: red;
   color: ghostwhite;
   }
   .tg-lt:hover{
   transform: scale(1.1);
   color: grey;
   }
   .lr{
   font-weight: 400;
   font-size: 25px;
   margin-left: 30px;
   margin-top: 10px;
   position: relative;
   padding-bottom: 0.6em;
   border-bottom: 1px solid #dadada; 
   }
   .lr:after{
   content: ' ';
   width: 4.56em;
   border-bottom: 2px solid transparent;
   display: block;
   position: absolute;
   bottom: -1px;
   border-color: #ea1b25;
   }
</style>
</head>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<body>
   <div class="container">
      <nav class="home mt-4">
         <a href="#" class="lik">Home</a>
         <span class="dele">
         &nbsp&nbsp<i class="fa fa-angle-right"></i>
         </span>
         &nbsp&nbsp<a href="" style="text-decoration:none; color: black;">Blog</a> 
      </nav>
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
   <div class="container mt-3">
      <div class="row">
         <div class="col-md-8">
            <a href="insideofblog.php" target="_self" style="text-decoration:none;">
               <img src="./images/Unveiling-the-RTX-4060.jpg" alt="img" class="xseries">
               <p class="pbg mt-3">Unveiling the RTX 4060: The Latest Graphics Card for Unparalleled<br>Gaming Performance </p>
            </a>
            <p>Technology . 1 Dec 2023 . Gamesncomps</p>
            <hr>
            <p>Introduction: In the ever-evolving world of gaming, technology continues to push boundaries, offering<br> gamers more immersive and realistic experiences. NVIDIA, the leading graphics card manufacturer, has once again<br> taken a leading manufacturer.</p>
            <a href="insideofblog.php" target="_self"><button class="btn btn-dark" type="button">Read More</button></a>
            <div class="container mt-4">
               <a href="insideofblog2.php" target="_self" style="text-decoration:none;">
                  <img src="./images/setup.jpg" alt="setup" class="yseries">
                  <p class="pbg mt-3">Mastering the Art of Customized PC Selection</p>
               </a>
               <p>Technology . 15 Dec 2023 . Gamesncomps</p>
               <hr>
               <p>Introduction:Building a customised PC tailored to your specific needs is an exciting endeavour.It allows you to<br> create a powerful system that caters to your unique requirements, whether you’re</p>
               <a href="insideofblog2.php" target="_self"><button class="btn btn-dark mb-4" type="button">Read More</button></a>
            </div>
         </div>
         <div class="col-md-4">
            <div class="side">
               <div class="row">
                  <div class="input-group col-md-4">
                     <input class="form-control py-2" type="search" value="search" id="example-search-input">
                  </div>
               </div>
               <div class="categories">
                  <p class="ctg mt-3">Categories</p>
                  <ul class="ctg-list">
                     <li class="tg-lt"><i class="fa fa-angle-right"> &nbsp&nbsp</i>Accessories</li>
                     <li class="tg-lt"><i class="fa fa-angle-right"> &nbsp&nbsp</i>AMD CPU</li>
                     <li class="tg-lt"><i class="fa fa-angle-right"> &nbsp&nbsp</i>AMD Radeon</li>
                     <li class="tg-lt"><i class="fa fa-angle-right"> &nbsp&nbsp</i>Best gaming PC</li>
                     <li class="tg-lt"><i class="fa fa-angle-right"> &nbsp&nbsp</i>Cooler</li>
                     <li class="tg-lt"><i class="fa fa-angle-right"> &nbsp&nbsp</i>CPU</li>
                     <li class="tg-lt"><i class="fa fa-angle-right"> &nbsp&nbsp</i>Gaming Keyboard</li>
                     <li class="tg-lt"><i class="fa fa-angle-right"> &nbsp&nbsp</i>Gigabyte</li>
                     <li class="tg-lt"><i class="fa fa-angle-right"> &nbsp&nbsp</i>GPU</li>
                     <li class="tg-lt"><i class="fa fa-angle-right"> &nbsp&nbsp</i>Intel</li>
                     <li class="tg-lt"><i class="fa fa-angle-right"> &nbsp&nbsp</i>Intel GPU</li>
                     <li class="tg-lt"><i class="fa fa-angle-right"> &nbsp&nbsp</i>Intel's 10th Gen</li>
                     <li class="tg-lt"><i class="fa fa-angle-right"> &nbsp&nbsp</i>Monitor</li>
                     <li class="tg-lt"><i class="fa fa-angle-right"> &nbsp&nbsp</i>NVIDIA GPU</li>
                     <li class="tg-lt"><i class="fa fa-angle-right"> &nbsp&nbsp</i>PC Building</li>
                  </ul>
               </div>
               <div class="tags clouds">
                  <p class="ctg mt-3">Tags Clouds</p>
                  <a href="#" class="adm">AMD Radeon</a>
                  <a href="" class="adm">AMD Ryzen</a>
                  <a href="" class="adm">Benq</a>
                  <a href="" class="adm">Best Gaming PC</a>
                  <a href="" class="adm">Cooler</a>
                  <a href="" class="adm">CPU</a>
                  <a href="" class="adm">Desktop</a>
                  <a href="" class="adm">Gigabyte</a>
                  <a href="" class="adm">i9-9900K</a>
                  <a href="" class="adm">Keyboards</a>
                  <a href="" class="adm">Monitor</a>
                  <a href="" class="adm">Motherboard</a>
                  <a href="" class="adm">Ryzen</a>
                  <a href="" class="adm">Z590 Aorus Master</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
<?php include 'footer.php'?>