<?php include 'header.php'?>
<head>
   <style type="text/css">
      .my-account.myaccount-order {
      display: flex;
      padding-bottom: 0px;
      }
      .my-account {
      padding: 30px 0;
      }
      .my-account .my-account-profile {
      padding: 20px 20px!important;
      text-align: center;
      width: 250px;
      height: 200px;
      background: #d5d5d5;
      }
      .my-account .my-account-profile p.short-name {
      font-size: 50px;
      margin: auto;
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background: #141414;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      text-transform: uppercase;
      }
      .my-account .my-account-profile p.username {
      font-style: normal;
      font-weight: 400;
      font-size: 20px;
      line-height:24px;
      color: #070707;
      text-transform: uppercase;
      margin-top: 10px;
      margin-bottom: 5px;
      }
      .my-account-profile a.Beyoungster {
      font-style: normal;
      font-weight: 300;
      font-size: 14px;
      line-height: 17px;
      color:black;
      }
      .my-account .myaccount-navigation {
      padding: 0px 10px;
      border: 1px solid #d4d5d5;
      }
      .myaccount-navigation ul li {
      padding: 20px 0px;
      border-bottom: 1px solid #d5d5d5;
      }
      .myaccount-navigation ul li a.active {
      font-weight: 600;
      color: #000;
      }
      .myaccount-navigation ul li a  {
      color: #746f6f;
      text-transform: capitalize;
      }
      a {
      cursor: pointer;
      text-decoration: none;
      }
      .my-account.myaccount-order .my-order {
      margin-left: 120px;
      }
      ul {
      list-style: none;
      }
      .my-account.myaccount-order .empty-wishlist{
      width: 500px;
      }
      .my-account.myaccount-order .empty-wishlist .empty-main {
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      }
      img {
      max-width: 100%;
      }.my-account.myaccount-order .empty-wishlist .empty-main p {
      font-size: 30px;
      border-bottom: 1px solid;
      display: inline-block;
      }
      .my-account.myaccount-order .empty-wishlist .empty-main span {
      color: #000;
      margin-top: 20px;
      font-size: 14px;
      }
      .my-account.myaccount-order .empty-wishlist .best-selling-product .best-seller-view-all {
      font-size: 16px;
      font-weight: 600;
      margin-top: 50px;
      display: flex;
      justify-content: space-between;
      }
      .my-account.myaccount-order .empty-wishlist .best-selling-product-main {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px 20px;
      border: 1px solid #afaeb7;
      margin: 10px 0px;
      }
      .my-account.myaccount-order .empty-wishlist .best-seller {
      width: 30%;
      }
      .my-account.myaccount-order .empty-wishlist .Continue.Shopping a {
      background: #feeb00;
      color: #000;
      border: none;
      border-radius: 8px;
      padding: 12px 20px;
      text-transform: uppercase;
      font-size: 15px;
      width: 50%;
      margin: auto;
      text-align: center;
      margin-top: 30px;
      display: block;
      }
      .my-account.myaccount-order .empty-wishlist .best-selling-product .best-seller-view-all a {
      border: none;
      color: #000;
      border-radius: 0px;
      text-transform: capitalize;
      letter-spacing: 0px;
      padding: 0px;
      }
      .myaccout-logout .container a.logout-button {
      background: red;
      padding: 3% 38%;
      font-style: normal;
      font-weight: 400;
      font-size: 16px;
      line-height: 53px;
      color: whitesmoke;
      text-transform: uppercase;
      width: 100%;
      border-radius: 8px;
      }
   </style>
</head>
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
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
   <div class="container">
      <nav class="home mt-4">
         <a href="#" class="lik">Home</a>
         <span class="dele">
         &nbsp&nbsp<i class="fa fa-angle-right"></i>
         </span>
         &nbsp&nbsp<a href="" class="la">My Account</a> 
      </nav>
   </div>
   <!DOCTYPE html>
   <html lang="en">
      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            }
            .dashboard-container {
            max-width: 1200px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .user-details {
            display: flex;
            align-items: center;
            }
            .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 10px;
            }
            .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            }
            .user-info {
            flex-grow: 1;
            }
            .menu {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
            }
            .menu-item {
            text-align: center;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            }
            .menu-item:hover {
            background-color: #0056b3;
            }
            .content {
            margin-top: 20px;
            }
         </style>
      </head>
      <body>
         <div class="container">
            <div class="my-account myaccount-order">
               <div class="myaccont-navigation ">
                  <div class="my-account-profile">
                     <p class="short-name">RR</p>
                     <p class="username">Rati Ranjan</p>
                  </div>
                  <div class="myaccount-navigation">
                     <ul>
                        <li><a class="active" href="dashboard.php">
                           Order</a>
                        </li>
                        <li> <a href="">
                           Address</a>
                        </li>
                        <li><a href="profile.php">
                           Profile</a>
                        </li>
                        <li> <a href="wishlist.php">
                           Wishlist</a>
                        </li>
                     </ul>
                     <div class="myaccout-logout">
                        <div class="container">
                           <a class="logout-button" href="index.php">Logout</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="my-order">
                  <ul>
                     <div class="empty-wishlist">
                        <div class="empty-main">
                           <img src="./images/empty.gif" style="width: 250px; height: 250px;">
                           <p>Haven't ordered yet?</p>
                           <span>Explore and shop the coolest fashion now!</span>
                        </div>
                     </div>
                  </ul>
               </div>
            </div>
         </div>
      </body>
   </html>
   <?php include 'footer.php'?>