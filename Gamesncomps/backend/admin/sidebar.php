<?php include 'header.php'?>
   <body class="  ">
      <div class="iq-sidebar  sidebar-default  ">
         <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
            <a href="backend/index.html" class="header-logo">
            <img src="assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
            <img src="assets/images/logo-dark.png" class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo">
            <span>Admin Panel</span>            
            </a>
            <div class="side-menu-bt-sidebar-1">
               <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
               </svg>
            </div>
         </div>
         <div class="data-scrollbar" data-scroll="1">
            <nav class="iq-sidebar-menu">
               <ul id="iq-sidebar-toggle" class="side-menu">
                  <li class="active sidebar-layout">
                     <a href="dashboard.php" class="svg-icon">
                        <i class="">
                           <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                           </svg>
                        </i>
                        <span class="ml-2">Dashboard</span>
                     </a>
                  </li>
                  <li class="px-3 pt-3 pb-2">
                     <span class="text-uppercase small font-weight-bold">Pages</span>
                  </li>
                  <li class=" sidebar-layout">
                     <a href="#app3" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i>
                       <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 384 512"><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg>
                        </i><span class="ml-2">Page Section</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                     </a>
                     <ul id="app3" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout">
                           <a href="bannerimg.php" class="svg-icon">
                              <i class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                 </svg>
                              </i>
                              <span class="">Manage Banner Image</span>
                           </a>
                        </li>
                        <li class=" sidebar-layout">
                           <a href="" class="svg-icon">
                              <i class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                 </svg>
                              </i>
                              <span class="">Blogs</span>
                           </a>
                        </li>
                        <li class=" sidebar-layout">
                           <a href="" class="svg-icon">
                              <i class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                 </svg>
                              </i>
                              <span class="">FAQs</span>
                           </a>
                        </li>
                        <li class=" sidebar-layout">
                           <a href="" class="svg-icon">
                              <i class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                 </svg>
                              </i>
                              <span class="">Contact US</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" sidebar-layout">
                     <a href="#app4" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i>
                        <img src="assets/images/category.svg"> 
                        </i><span class="ml-2">Category</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                     </a>
                     <ul id="app4" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout">
                           <a href="category.php" class="svg-icon">
                              <i class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                 </svg>
                              </i>
                              <span class="">Add Category</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="sidebar-layout">
                     <a href="#app1" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i>
                           <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                           </svg>
                        </i>
                        <span class="ml-2">Subcategory</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                     </a>
                     <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout">
                           <a href="subcategory.php" class="svg-icon">
                              <i class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                 </svg>
                              </i>
                              <span class="">Add Subcategory</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="sidebar-layout">
                     <a href="#app6" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i>
                           <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                           </svg>
                        </i>
                        <span class="ml-2">Product</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                     </a>
                     <ul id="app6" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout">
                           <a href="product.php" class="svg-icon">
                              <i class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                 </svg>
                              </i>
                              <span class="ml-2"> Add Product</span>
                           </a>
                        </li>
                        <li class=" sidebar-layout">
                           <a href="producteximg.php" class="svg-icon">
                              <i class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824 2.167a1 1 0 111.414 1.414m-1.414-1.414L3 3m8.293 8.293l1.414 1.414" />
                                 </svg>
                              </i>
                              <span class="ml-2">Add Multiple Images</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="sidebar-layout">
                     <a href="#app7" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i>
                           <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                           </svg>
                        </i>
                        <span class="ml-2">Order Section</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                     </a>
                     <ul id="app7" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout">
                           <a href="" class="svg-icon">
                              <i class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                 </svg>
                              </i>
                              <span class="ml-2"> New Order </span>
                           </a>
                        </li>
                        <li class=" sidebar-layout">
                           <a href="ordermanage.php" class="svg-icon">
                              <i class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824 2.167a1 1 0 111.414 1.414m-1.414-1.414L3 3m8.293 8.293l1.414 1.414" />
                                 </svg>
                              </i>
                              <span class="ml-2">Manage Order</span>
                           </a>
                        </li>
                        <li class=" sidebar-layout">
                           <a href="" class="svg-icon">
                              <i class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824 2.167a1 1 0 111.414 1.414m-1.414-1.414L3 3m8.293 8.293l1.414 1.414" />
                                 </svg>
                              </i>
                              <span class="ml-2">Complete Order</span>
                           </a>
                        </li>
                        <li class=" sidebar-layout">
                           <a href="" class="svg-icon">
                              <i class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824 2.167a1 1 0 111.414 1.414m-1.414-1.414L3 3m8.293 8.293l1.414 1.414" />
                                 </svg>
                              </i>
                              <span class="ml-2">Cancel Order</span>
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </nav>
            <div class="pt-5 pb-5"></div>
         </div>
      </div>
   </body>
      <?php include 'footer.php'?>