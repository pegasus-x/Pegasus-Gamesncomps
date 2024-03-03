<?php include 'header.php';
   $slug = mysqli_real_escape_string($db, $_REQUEST['slug']);
   if (empty($slug)) {
     echo'<script>window.location.replace("index.php")</script>';
   } else {
     $product = $db->query("SELECT * FROM `products` WHERE slug = '$slug'");
     if ($product->num_rows == 0) {
       echo '<script>window.location.replace("index.php")</script>';
     }
     else {
       $product_value = $product->fetch_object();
       $p_id=$product_value->p_id;
     }
   }
   
   
   ?>
<link rel="stylesheet" type="text/css" href="css/productdetails.css">

   <div class="container">
      <nav class="home mt-4">
         <a href="index.php" class="lik">Home</a>
         <span class="dele">
         &nbsp&nbsp<i class="fa fa-angle-right"></i>
         </span>
         &nbsp&nbsp<a href="productdetails.php" class="la">Products</a>
         <span class="dele">
         &nbsp&nbsp<i class="fa fa-angle-right"></i>
         </span>
         &nbsp&nbsp <?=$product_value->p_name;?>
      </nav>
   </div>
   <div class="container">
      <div class="row row-col-1">
         <div class="col ms-5 me-5">
            <span class="sle">
            -40%
            </span>
            <div>
               <a href="#" class="magn">🔍</a>
            </div>
            <div class="prd">
               <img src="backend/admin/projectimg/<?=$product_value->p_image;?>" alt="" class="prd_img" id="productimg">
            </div>
            <div class="lirow">
               <div class="licol">
                  <img src="backend/admin/projectimg/<?=$product_value->p_image;?>" alt="" class="smallimg">
               </div>
               <?php 
                  $pex_img =$db->query("SELECT * FROM `productextraimg` WHERE p_id='$p_id' LIMIT 3");
                    if ($pex_img->num_rows == 0) {
                    }
                    else{
                    while( $pex_value = $pex_img->fetch_object()){?>
               <div class="licol">
                  <img src="backend/admin/projectimg/<?=$pex_value->pex_img;?>" alt="" class="smallimg">
               </div>
               <?php }} ?>
            </div>
         </div>
         <div class="col mt-4 me-5 ">
            <div class="brv">
               <p class="dt">
                  <?=$product_value->p_name;?>
               </p>
            </div>
            <div class="brand">
               <a href="">
               <img src="./images/gigabyte.png" alt="" class="gi">
               </a>
            </div>
            <hr class="product_line">
            <div class="act_but">
               <div class="aw">
                  <a href="">
                  <span>
                  Add to Wishlist
                  </span>
                  </a>
               </div>
               <div class="cm">
                  <a href="">
                  <span>
                  &nbsp&nbspCompare
                  </span>
                  </a>
               </div>
            </div>
            <div class="descp">
               <ul>
                  <li>
                     <?=$product_value->l_descp;?>    
                  </li>
                  <li>
                     <?=$product_value->l_descp;?>    
                  </li>
               </ul>
            </div>
            <p class="cost">
               <span class="dist">
               ₹<?=$product_value->s_price;?>
               </span>
               <span class="aic">
               ₹<?=$product_value->m_price;?>
               </span>
            </p>
            <div class="pay">
               <span>
               Or Pay
               <b>₹0 now.</b>
               </span>
               <span>
               Rest in
               <b>0% interest EMIs</b>
               </span>
               <b>
               <img src="./images/Logo (1).svg" alt="" class="snp">
               <img src="./images/info.png" alt="" class="spn">
               </b>
            </div>
            <div class="crde">
               <span>Credit card NOT required, Online approval in 2 minutes</span>
            </div>
            <div class="bxe">
               <div class="pye_option">
                  <div class="bnpy">
                     <img src="./images/widget-bnpl.svg" alt="" class="vcv">
                  </div>
               </div>
               <div>
                  <p class="by">Buy Now Pay Later</p>
                  <div>Select from Flexible EMIs<br><b>Pay as low as ₹11660/month</b></div>
               </div>
               <div>
                  <button class="emi">View EMI options</button>
               </div>
            </div>
            <div class="ctr">
               <form action="action/cart_manage.php" >
                  <input type="hidden" name="p_id" value="<?=$product_value->p_id;?>">
                  <input type="hidden" name="url" value="<?=$url;?>">
                  <div class="slt">
                     <input type="number" class="ip" title="qty" min="1" name="qty" value="1">
                  </div>
                  <button class="stb mt-4" name="submit" value="add_to_cart" type="submit">Add to cart</button>
                  <a href="#" class="stb" style="text-decoration:none;">Buy Now</a>
               </form>
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
      <img src="https://static.vecteezy.com/system/resources/previews/018/930/746/original/whatsapp-logo-whatsapp-icon-whatsapp-transparent-free-png.png" alt="" class="wp-icon">
   </div>
   <section class="grevs">
      <div class="container">
         <div class="col">
            <div class="rtg">
               <p class="ex">Excellent</p>
            </div>
            <span class="stars"><i class="bi bi-star-fill" style="font-size: 2rem; color: yellow;"></i></span>
            <span class="stars"><i class="bi bi-star-fill" style="font-size: 2rem; color: yellow;"></i></span>
            <span class="stars"><i class="bi bi-star-fill" style="font-size: 2rem; color: yellow;"></i></span>
            <span class="stars"><i class="bi bi-star-fill" style="font-size: 2rem; color: yellow;"></i></span>
            <span class="stars"><i class="bi bi-star-half" style="font-size: 2rem; color: yellow;"></i></span>
         </div>
         <div class="rtg-txt">
            <span>Based on <strong>868 reviews</strong></span>
         </div>
         <div class="g">
            <img src="./images/google.jpg" alt="" class="gl">
         </div>
      </div>
      <div class="container">
         <div class="row align-items-center">
            <div class="col">
               <div class="review">
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
               <div class="review">
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
               <div class="review">
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
               <div class="review">
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
               <div class="review">
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
   </section>
   <div class="container">
      <div class="brief">
         <div class="dpr">
            <h4 class="dsc">Description</h4>
            <div class="box_dsc mt-4">
               <div class="about">
                  <h1 style="font-size: 1.643em; line-height: 1.543em; margin-bottom: 1em;">
                     GIGABYTE AERO XE4 Core i7 12th Gen 16GB RAM 1TB SSD RTX 3070 Ti 8GB GPU 15.6<br> Inch Laptop – AERO 5 XE4-73IN614SO
                  </h1>
                  <h2 class="heading">
                     Elevate Your Vision: A Classic Reborn
                  </h2>
                  <p class="para">Deeply rooted in the classics, the inspiration of the AERO 16 Creator Laptop stems from previous generations and designs, evolutionary thinness and humanism aesthetics. Combining the 12th generation Intel® Core™ i9 processor, NVIDIA® GeForce RTX™ 30 Series GPUs, and a remarkable 4K+ HDR ultra-wide view in one compact chassis. It offers high efficiency with the utmost beauty, driven by the core tenets of performance with minimalist yet detailed designs, granting all creators efficiency, precision, and exceptional form and function on their creative journey.</p>
                  <h2 class="heading">
                     Sum of the Light Spectrum
                  </h2>
                  <p class="para">
                     The aesthetics formula of AERO 16 consists of polished details and graceful simplicity. The arc body is complemented with neat edges, removing any needless complexities. The CNC aluminum-alloy unibody is much more sophisticated than the traditional 15″ laptop. Just as a prism disperses light into its constituent spectral colors, the AERO 16 is the personification of an inverted prism, uniting the colorful and exquisite qualities of life into one rich sum experience.
                  </p>
                  <h2 class="heading">
                     Capturing Your Creative Mind
                  </h2>
                  <p class="para">
                     Before revealing the powerful specification details of AERO, we would like to emphasize that the core concept of the AERO 16 Creator Laptops, is “Creativity starts here.” We believe that the reduced processing time for images or files thanks to AERO’s power, will be the key for inspirations to come to life with efficiency.
                  </p>
                  <h2 class="heading">
                     12th Gen Intel® Core™ Processors
                  </h2>
                  <p class="para">
                     Do it as swiftly as you prefer – the realization of creativity can be enhanced with computing power. AERO is upgraded with the latest 12th Gen Intel® Core™ Processors, growing 35%1 in performance from the previous generations, reaching the highest clock rate of 5.0GHz – achieving premium multitasking performance, empowering both your creativity and productivity.
                  </p>
                  <h2 class="heading">
                     FAST-TRACK YOUR CREATIVITY
                  </h2>
                  <p class="para">
                     Do more, wait less with GPUs.
                     Whether you’re an aspiring artist or an industry veteran looking to do your best work, NVIDIA GPUs make it happen—fast. Render quicker. Broadcast clearer. Edit videos better. From ray tracing and VR up to AI-powered 8K video editing, NVIDIA GPUs in Studio laptops and desktops boost workflows. And they’re backed by exclusive, free Studio Drivers that bring out the best in your creative apps.
                  </p>
                  <h2 class="heading">
                     The NVIDIA Studio Platform
                  </h2>
                  <p class="para">
                     Supporting aspiring artists and industry professionals alike, the NVIDIA Studio platform supercharges your creative process. NVIDIA Studio provides resources like creative apps & tools, NVIDIA Studio drivers, and videos and tutorials from top artists to help you pursue your most ambitious projects yet.
                  </p>
                  <h2 class="heading">
                     MAX FPS. MAX QUALITY. POWERED BY AI.
                  </h2>
                  <p class="para">
                     DLSS 2.0 is now available for real-time creative apps such as Unreal Engine 4 and D5 Render, using AI to boost frame rates while generating accurate, crisp images. Maximize render settings, increase resolution outputs, and explore designs in real-time.
                  </p>
                  <h2 class="heading">
                     MORE IMMERSIVE EXPERIENCES
                  </h2>
                  <p class="para">
                     Ray tracing simulates how light behaves in the real-world to produce the most realistic and immersive graphics for gamers and creators. GeForce RTX 30 Series has 2nd generation RT Cores for maximum ray tracing performance.
                  </p>
                  <h2 class="heading">
                     OPTIMIZED POWER AND PERFORMANCE
                  </h2>
                  <p class="para">
                     NVIDIA Max-Q is a suite of technologies powered by AI that optimize laptops to deliver high performance in thin form factors.<br><br>
                     To provide the best performance for our clientele, GIGABYTE and Microsoft collaborated and introduced the world’s first and only laptop AI. It can learn the energy consumption details of every software and adjust the wattage consumption of the CPU and GPU accordingly, allowing the user to effortlessly enjoy the top performance. It will also determine the best screen brightness as different environments are detected. The best part is that with the accumulated learning data, AERO 16 will configure CPU/GPU for each software with more precision, saving up more time for you at multimedia processing and manual setting.
                  </p>
                  <h2 class="heading">
                     We care! Eye Care!
                  </h2>
                  <p class="para">
                     GIGABYTE’s exclusive AI Eye Care technology adjusts the screen brightness automatically when you work with the laptop for a long time. AI Eye Care protects your eyes and reduces your fatigue!
                  </p>
                  <h2 class="heading">
                     Soundless Dedication at Every Second
                  </h2>
                  <p class="para">
                     GIGABYTE’s unique cooling technology includes two 59-blade fans, 5 heat pipes, and multi-face heat dissipation fins. This allows the laptop to operate with a total thermal design power (TDP) up to 125 watts (45 watts for the processor and 80 watts for the graphics card) under “Performance Mode” as this thermal solution can quickly dissipate heat, ensuring a calm and stable throttle-free performance under heavy loads of gaming or multimedia processing.
                  </p>
                  <h2 class="heading">
                     WiFi 6E – Battle-Ready for the Next-Gen 6G Universe
                  </h2>
                  <p class="para">
                     It is imperative to transmit your creativity to the world instantaneously. With the next-gen Wi-Fi 6E, the brand-new AERO 16 laptops support not only the Wi-Fi 6 and the 2.4GHz and 5GHz bands of the previous generation, but also the 6GHz frequency band, enabling faster speed and lower delays. This allows users to enjoy zero lag in AR/VR experiences and massive document downloading, diffusing creativity to the far beyond and exploring the future of the metaverse.
                  </p>
                  <h2 class="heading">
                     Thin yet Boundless 16″ 4K+ OLED Display
                  </h2>
                  <p class="para">
                     The AERO 16 comes with the most beautiful OLED, never compromising with any precise visual effects details through the most dazzling 16”4K+ OLED screen and 4K+ miniLED screen in GIGABYTE’s history. With the 16:10 golden ratio screen size, the brilliant images become even more vivid and colorful, not only maximizing the working area but also offering users better brightness and premium contrast. It supports 100% DCI-P3 color gamut, displaying 30% more of the sRGB color gamut. Be ready to welcome the world’s richest visual experience ever.
                  </p>
                  <h2 class="heading">
                     Speedy Demands Require Speedy Solutions
                  </h2>
                  <p class="para">
                     Time is money, don’t waste it on waiting. AERO 16 comes with two slots fully supporting DDR5 memory. Having the advantages of low power consumption, high transmission speed, and high stability, it can fully support multi-tasking and smoothly handle model files of any size.
                  </p>
                  <h2 class="heading">
                     All the AERO Hub for Expansion
                  </h2>
                  <p class="para">
                     With the included AERO HUB, complex interface is replaced by just three USB-C, converging all port functions into the AERO HUB. This creator intended hub offers HDMI, MiniDP, USB Type-A, and RJ45. With the advantage in flexibility, expansion capacity, and easy storage, you can set up your mobile workshop whenever and wherever you want.
                  </p>
               </div>
            </div>
            <div class="spec">
               <h2 class="scp mt-5">Specifications</h2>
               <div class="scp_dl mt-5">
                  <h2 class="heading">
                     GIGABYTE AERO XE4 Core i7 12th Gen 16GB RAM 1TB SSD RTX 3070 Ti 8GB GPU 15.6 Inch Laptop - AERO 5 XE4-73IN614SO
                  </h2>
                  <table class="table table-hover">
                     <tbody>
                        <tr>
                           <td class="fea">Weight</td>
                           <td>
                              ~2.30 kg<br>
                              ~5.07 lb<br>
                              *The weight of the laptop may vary according to the configuration, manufacturing process<br> and measurement method, please refer to the actual situation.
                           </td>
                        </tr>
                        <tr>
                           <td class="fea">Brands</td>
                           <td>GIGABYTE</td>
                        </tr>
                        <tr>
                           <td class="fea">OS</td>
                           <td>
                              Windows 11 Pro – GIGABYTE recommends Windows 11 Pro for business.<br>
                              Windows 11 Home
                           </td>
                        </tr>
                        <tr>
                           <td class="fea">CPU</td>
                           <td>
                              12th Gen Intel® Core™ i7-12700H (2.3GHz~4.7GHz)<br>
                              Base Core Frequency: 2.3GHz<br>
                              Performance-core Max Turbo Frequency: 4.7GHz<br>
                              Efficient-core Max Turbo Frequency: 3.5GHz
                           </td>
                        </tr>
                        <tr>
                           <td class="fea">Video Graphics</td>
                           <td>
                              Intel® Iris®Xe Graphics<br>
                              NVIDIA® GeForce RTX™ 3070 Ti Laptop GPU 8GB GDDR6<br>
                              Boost Clock 1035 MHz / Maximum Graphics Power 105 W<br>
                              *May vary by scenario.<br>
                              Supports NVIDIA Max-Q Technologies:<br>
                              CPU Optimizer, Rapid Core Scaling, Optimal Playable Settings, Dynamic Boost 2.0, Resizable BAR, and<br> Optimus™ Technology.
                           </td>
                        </tr>
                        <tr>
                           <td class="fea">Display</td>
                           <td>
                              16.0″ Thin Bezel UHD+ 3840×2400 Samsung AMOLED Display<br>
                              (VESA DisplayHDR 500 True Black, 100% DCI-P3)<br>
                              *X-Rite™ Certified, individually factory calibrated & Pantone® Validated Color Accuracy<br>
                              16.0″ Thin Bezel QHD+ 2560×1600 miniLED Display<br>
                              (VESA DisplayHDR 1000, 100% DCI-P3, 165Hz Refresh Rate)<br>
                           </td>
                        </tr>
                        <tr>
                           <td class="fea">System Memory</td>
                           <td>
                              2x DDR4 Slots (DDR4-3200, Max 64GB)
                           </td>
                        </tr>
                        <tr>
                           <td class="fea">Storage</td>
                           <td>
                              2x M.2 SSD slots (Type 2280, supports 2x NVMe PCIe Gen4)<br>
                              *The storage capacity may differ by country and region. Please contact your local dealers or retailers for the latest product information.<br>
                              **If there is any abnormality that cannot be attributed to Gigabyte/AORUS during the warranty period, it is not covered by the warranty. More info: https://member.aorus.com/global/productwarranty
                           </td>
                        </tr>
                        <tr>
                           <td class="fea">Keyboard</td>
                           <td>
                              Backlit Keyboard (Single Color, white)
                           </td>
                        </tr>
                        <tr>
                           <td class="fea">I/O Port</td>
                           <td>
                              2x Thunderbolt™ 4 Support DP / one port support Power delivery<br>
                              1x USB 3.2 Gen2 (Type-C) Support DP<br>
                              1x 3.5mm Audio Combo<br>
                              1x DC-in Jack<br>
                              *Due to the performance laptops sometimes run with higher power consumption, we recommend the specification of the power adapter must be higher than 80W for the power delivery function to be practical.
                           </td>
                        </tr>
                        <tr>
                           <td class="fea">Audio</td>
                           <td>
                              2x 2W Speaker<br>
                              Microphone<br>
                              DTS:X® Ultra Audio Technology
                           </td>
                        </tr>
                        <tr>
                           <td class="fea">Communication</td>
                           <td>
                              WIFI: Intel® Wi-Fi 6E AX210 (Gig+) Wireless (802.11ax, a/b/g/n/ac/ax compatible)<br>
                              Bluetooth: Bluetooth® V5.2
                           </td>
                        </tr>
                        <tr>
                           <td class="fea">Webcam</td>
                           <td>
                              HD Webcam<br>
                              Build-in Dual Microphone<br>
                              Support Windows Hello Face Authentication
                           </td>
                        </tr>
                        <tr>
                           <td class="fea">Security</td>
                           <td>Firmware-based TPM, supports Intel® Platform Trust Technology (Intel® PTT)</td>
                        </tr>
                        <tr>
                           <td class="fea">Battery</td>
                           <td>
                              Li Polymer 99Wh
                           </td>
                        </tr>
                        <tr>
                           <td class="fea">Adapter</td>
                           <td>
                              230W
                           </td>
                        </tr>
                        <tr>
                           <td class="fea">Dimensions</td>
                           <td>
                              35.6(W) x 24.85(D) x 2.24 (H) cm<br>
                              14.02(W) x 9.78(D) x 0.88(H) inch<br>
                              *The dimensions of the laptop may vary according to the configuration, manufacturing process and measurement method, please refer to the actual situation.
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <!-- Latest Procducts  -->
            <div class="container mt-3 mb-5">
               <p class="rct">Latest Products</p>
               <div class="row row-cols-4 row-cols-sm-4 row-cols-md-4 ">
                  <div class="col">
                     <div class="card">
                        <a href="#">
                           <img src="backend/admin/projectimg/<?=$product_value->p_image;?>" alt="" class="frtpnl">
                           <p class="brief"><?=$product_value->sc_name;?></p>
                           <p class="det"><?=$product_value->p_name;?></p>
                        </a>
                        <p class="pri">Rs <?=$product_value->s_price;?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
<!-- JS for product img -start-->
<script type="text/javascript">
   let productimg = document.getElementById( 'productimg' );
   smallimg = document.getElementsByClassName( 'smallimg' );
   
   
   for ( let i = 0; i <= smallimg.length; i++ ) {
   
   
     smallimg[ i ].onclick = function () {
       productimg.src = smallimg[ i ].src;
     }
   }
</script>
<?php include 'footer.php'?>