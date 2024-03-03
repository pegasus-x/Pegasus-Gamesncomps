<?php 
   session_start();
   if (empty($_SESSION['a_id'])) {
   $_SESSION['msg'] = 'Please enter email and password';
   $_SESSION['bg_color'] = 'warning';
   exit();
   }
   include 'configtwo.php';
   include 'sidebar.php';
   include 'function.php';
   ?>
<link rel="stylesheet" href="backendcc.css">
<div class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 mb-4 mt-1">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
               <h4 class="font-weight-bold">Overview</h4>
            </div>
         </div>
         <div class="col-lg-8 col-md-12">
            <div class="row">
               <div class="col-lg-3">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex align-items-center">
                           <div class="">
                              <p class="mb-2 text-secondary">Today Order</p>
                              <div class="d-flex flex-wrap justify-content-start align-items-center">
                                 <h5 class="mb-0 font-weight-bold"><?php echo $_SESSION['a_id']; ?></h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex align-items-center">
                           <div class="">
                              <p class="mb-2 text-secondary">Completed Order</p>
                              <div class="d-flex flex-wrap justify-content-start align-items-center">
                                 <h5 class="mb-0 font-weight-bold">$12,789</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex align-items-center">
                           <div class="">
                              <p class="mb-2 text-secondary">Canceled Order</p>
                              <div class="d-flex flex-wrap justify-content-start align-items-center">
                                 <h5 class="mb-0 font-weight-bold">13,984</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex align-items-center">
                           <div class="">
                              <p class="mb-2 text-secondary">Total Earning</p>
                              <div class="d-flex flex-wrap justify-content-start align-items-center">
                                 <h5 class="mb-0 font-weight-bold">13,984</h5>
                                 <p class="mb-0 ml-3 text-danger font-weight-bold"><?php $currentDateTime = new DateTime('now');$currentDate = $currentDateTime->format('d-m-y');echo $currentDate;?></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <table id="datatable" class="table data-table table-striped table-bordered" >
         <thead>
            <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Mobile</th>
               <th>Subject</th>
               <th>Message</th>
               <th>Action</th>
               <th>Date</th>
            </tr>
         </thead>
         <tbody>
      </table>
   </div>
</div>
<?php include 'footer.php'?>