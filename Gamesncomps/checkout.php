<?php include 'header.php';
if (empty($_SESSION['u_id'])) {
   echo '<script>window.location.replace("login.php")</script>';
   exit();
}
?>
<link rel="stylesheet" type="text/css" href="css/checkout.css">
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
<div class="container">
   <nav class="home mt-4">
      <a href="index.php" class="lik">Home &nbsp</a>
      <span class="del">
      <i class="fa fa-angle-right"></i>
      </span>
      &nbsp Checkout
   </nav>
</div>
<div class="billing mt-3">
   <form action="action/checkout_action.php" method="POST" enctype="multipart/form-data">
      <div class="container">
         <div class="row row-cols-4">
            <div class="col-lg-7" id="#customer-details">
               <h3 class="bill">Billing & Shipping</h3>
               <div class="biiling-field">
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
                  <p>
                     <label for="username" class="lbl mt-2">
                     Email Address
                     <span class="req">*</span>
                     </label>
                     <input type="email" name="email" class="uslg" id="#user">
                  </p>
                  <p>
                     <label for="firstname" class="lbl mt-2">
                     First Name
                     <span class="req">*</span>
                     </label>
                     <input type="text" name="f_name" class="uslg_name" id="#f_name" placeholder value autocomplete ="given-name">
                  </p>
                  <p>
                     <label for="lastname" class="lbl mt-2">
                     Last Name
                     <span class="req">*</span>
                     </label>
                     <input type="text" name="last_name" class="uslg_name" id="#l_name" placeholder value autocomplete ="family-name">
                  </p>
                  <p>
                     <label for="country/region" class="lbl mt-2">
                     Country/Region
                     <span class="req">*</span>
                     </label>
                     <select name="billing_country" id="billing_country" class="uslg" autocomplete="country" data-placeholder="Select a country / region…" data-label="Country / Region" tabindex="-1">
                        <option value="">Select a country / region…</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Åland Islands</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="PW">Belau</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo (Brazzaville)</option>
                        <option value="CD">Congo (Kinshasa)</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CW">Curaçao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="SZ">Eswatini</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard Island and McDonald Islands</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN" selected="selected">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="CI">Ivory Coast</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macao</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia</option>
                        <option value="MD">Moldova</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="KP">North Korea</option>
                        <option value="MK">North Macedonia</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PS">Palestinian Territory</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russia</option>
                        <option value="RW">Rwanda</option>
                        <option value="ST">São Tomé and Príncipe</option>
                        <option value="BL">Saint Barthélemy</option>
                        <option value="SH">Saint Helena</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="SX">Saint Martin (Dutch part)</option>
                        <option value="MF">Saint Martin (French part)</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia/Sandwich Islands</option>
                        <option value="KR">South Korea</option>
                        <option value="SS">South Sudan</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syria</option>
                        <option value="TW">Taiwan</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TH">Thailand</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom (UK)</option>
                        <option value="US">United States (US)</option>
                        <option value="UM">United States (US) Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VA">Vatican</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="VG">Virgin Islands (British)</option>
                        <option value="VI">Virgin Islands (US)</option>
                        <option value="WF">Wallis and Futuna</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                     </select>
                  </p>
                  <p>
                     <label for="address" class="lbl mt-2">
                     Street Address
                     <span class="req">*</span>
                     </label>
                     <input type="address" name="address" class="uslg" id="#street" placeholder = "House number and street name">
                     <input type="address" name="addresstwo" class="uslg mt-4" id="#street2" placeholder = "Apartment,suite,unit,etc.(optional)">
                  </p>
                  <div class="row">
                     <p class="col-md-2">
                        <label for="town" class="lbl">
                        Town/City 
                        <span class="req">*</span>
                        </label>
                        <input type="text" name="town" class="uslg_name" id="#town" >
                     </p>
                     <p class="col-md-2">
                        <label for="state" class="lbl" style="transform: translateX(202px);">
                        State
                        <span class="req">*</span>
                        </label>
                        <select name="billing_state" id="billing_state" class="uslg_country" autocomplete="country" data-placeholder="Select a state…" data-label="State" tabindex="-1">
                           <option value="">Select a state</option>
                           <option value="AP">Andhra Pradesh</option>
                           <option value="AR">Arunachal Pradesh</option>
                           <option value="AS">Assam</option>
                           <option value="BR">Bihar</option>
                           <option value="CT">Chhattisgarh</option>
                           <option value="GA">Goa</option>
                           <option value="GJ">Gujarat</option>
                           <option value="HR">Haryana</option>
                           <option value="HP">Himachal Pradesh</option>
                           <option value="JK">Jammu and Kashmir</option>
                           <option value="JH">Jharkhand</option>
                           <option value="KA">Karnataka</option>
                           <option value="KL">Kerala</option>
                           <option value="LA">Ladakh</option>
                           <option value="MP">Madhya Pradesh</option>
                           <option value="MH">Maharashtra</option>
                           <option value="MN">Manipur</option>
                           <option value="ML">Meghalaya</option>
                           <option value="MZ">Mizoram</option>
                           <option value="NL">Nagaland</option>
                           <option value="OR">Odisha</option>
                           <option value="PB">Punjab</option>
                           <option value="RJ">Rajasthan</option>
                           <option value="SK">Sikkim</option>
                           <option value="TN">Tamil Nadu</option>
                           <option value="TS">Telangana</option>
                           <option value="TR">Tripura</option>
                           <option value="UK">Uttarakhand</option>
                           <option value="UP">Uttar Pradesh</option>
                           <option value="WB">West Bengal</option>
                           <option value="AN">Andaman and Nicobar Islands</option>
                           <option value="CH">Chandigarh</option>
                           <option value="DN">Dadra and Nagar Haveli</option>
                           <option value="DD">Daman and Diu</option>
                           <option value="DL">Delhi</option>
                           <option value="LD">Lakshwadeep</option>
                           <option value="PY">Pondicherry (Puducherry)</option>
                        </select>
                     </p>
                  </div>
                  <div class="row">
                     <p class="col-md-4">
                        <label for="Pincode" class="lbl">
                        Pincode 
                        <span class="req">*</span>
                        </label>
                        <input type="text" name="pincode" class="uslg_name" id="#pin" >
                     </p>
                     <p class="col-md-4">
                        <label for="phn" class="lbl" style="transform: translate(70px,20px);">
                        Phone
                        <span class="req">*</span>
                        <input type="tel" name="mobile" class="uslg_name" id="#phn">
                        </label>
                     </p>
                  </div>
               </div>
               <h3 class="bill">Additional Information</h3>
               <label for= "order" class="lbl mt-2 me-3">Order Notes(optional)</label>
               <textarea class="form-control " id="exampleFormControlTextarea1" name="add_info" rows="15" cols="40" style="width:550px; height:140px;" placeholder="Notes about your order, e.g special notes for delivery"></textarea>
            </div>
            <div class="col-lg-5">
               <?php include 'msg.php'?>
               <h3 class="bill">Your Order</h3>
               <input type="hidden" name="">
               <div class="order-details"> <?php 
                     if (empty($_SESSION['u_id'])) {
                       $session_id = session_id();
                       $data = $db->query("SELECT * FROM `cart` WHERE  sts = 0 AND session_id = '$session_id'");
                     }else{
                       $u_id = $_SESSION['u_id'];
                       $data = $db->query("SELECT * FROM `cart` WHERE sts = 0 AND u_id = '$u_id'");
                     }
                     if ($data->num_rows > 0) {
                       
                     ?>
                  <table class="table table-condensed table-responsive">
                     <thead>
                        <tr>
                           <th>Product Name</th>
                           <th>Subtotal</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php while($value = $data->fetch_object()){
                         $totals += $value->p_price * $value->qty;
                        ?>
                        <tr>
                           <td> <?=$value->p_name;?><strong>×&nbsp <?=$value->qty?></strong></td>
                           <td>
                              <span style="color: red;">₹<?=$value->p_price;?></span>
                              <del>₹53,200.00</del>
                           </td>
                        </tr>
                        <input type="hidden" name="cart_id[]" value="<?=$value->cart_id;?>">
                     <?php } ?>

                     </tbody>
                     <tfoot>
                        <tr>
                           <td>Subtotal</td>
                           <td>₹<?=$totals;?></td>
                        </tr>
                        <tr>
                           <th>Taxes & Charges</th>
                           <td>Tax->₹1324.00 <br>Shipping Charges->₹124.00</td>
                        </tr>
                        <tr>
                           <th>Total</th>
                           <td><?=$totals;?></td>
                        </tr>
                     </tfoot>
                  </table>
                     <?php } else { ?>
                        <div style="width:100%;height:0;padding-bottom:100%;position:relative;"><iframe src="https://giphy.com/embed/ez1QgBv3LAzwcYiGDK" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p></p>
                     <?php } ?>
                  <div id="payment" class="checkout-payment">
                     <ul class="payment_methods">
                        <li class="payment_method-cod">
                           <input id="payment_method_wc-cod" type="radio" class="input-radio" name="payment_method" value="wc-cod" checked="checked" data-order_button_text="Proceed to Payment">
                           <label for="payment_method_wc-cod">
                           Pay with Cash on Delivery(COD)</label>
                        </li>
                        <li class="payment_method-upi">
                           <input id="payment_method_wc-upi" type="radio" class="input-radio" name="payment_method" value="wc-upi" checked="checked" data-order_button_text="Proceed to Payment">
                           <label for="payment_method_wc-upi">
                           Pay with UPI QR Code <img src="./images/payment.gif" alt="Pay with UPI QR Code"> </label>
                           <div class="payment_box payment_method_wc-upi">
                           </div>
                        </li>
                        <li>
                           <input id="payment_method_ccavenue" type="radio" class="input-radio" name="payment_method" value="ccavenue" data-order_button_text="">
                           <label for="payment_method_ccavenue">
                           Credit Card, Debit Card, Net Banking </label>
                           <div class="payment_box payment_method_ccavenue" style="display:none;">
                              <p>Pay securely by Credit or Debit card or internet banking through CCAvenue Secure Servers.</p>
                           </div>
                        </li>
                     </ul>
                     <div class="form-row place-order">
                        <div class="terms-and-conditions">
                           <div class="privacy-policy-text">
                              <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href=""style="text-decoration:none;">privacy policy</a>.</p>
                           </div>
                           <p class="form-row validate-required">
                              <label class="form__label-for-checkbox checkbox">
                              <input type="checkbox" name="terms" id="terms">
                              <span>I have read and agree to the website <a href="" style="text-decoration:none;">terms and conditions</a></span>&nbsp;<abbr class="required" title="required">*</abbr>
                              </label>                           
                           </p>
                           <button type="submit" class="btn btn-lg po" name="order" value="order_place">Place Order</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
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
<!-- End of Trending Products -->
<?php include 'footer.php'?>