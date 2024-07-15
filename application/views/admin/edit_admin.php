<?php
   defined("BASEPATH") or exit("no direct script access allowed");
   ?>
<div class="container">
   <div class="page-inner">
      <div class="page-header d-flex justify-content-between">
         <h3 class="fw-bold mb-1">Admin Information</h3>
         <ul class="breadcrumbs mb-3 ">
            <li class="nav-home">
               <a href="#" >
               <i class="icon-home"></i>
               </a>
            </li>
            <li class="separator">
               <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
               <a href="<?= base_url() ?>admincontroller/">Dashboard</a>
            </li>
            <li class="separator">
               <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
               <a href="#">Admin Details</a>
            </li>
         </ul>
      </div>
      <div class="row" style="margin-top:-20px">
         <div class="col-md-12">
            <div class="card">
               <form action="<?= base_url() ?>admincontroller/update_admin_info" enctype="multipart/form-data" method="post">
                <input type="text" name="admin_id" value="<?= $admin_data[0]['admin_id'] ?>" id="">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Admin Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email2"
                                name="admin_name"
                                placeholder="Enter Admin Name"
                                value="<?= $admin_data[0]['admin_name'] ?>" required
                                />
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Admin Mobile</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email2"
                                name="admin_mobile"
                                placeholder="Enter Admin Mobile"
                                value="<?= $admin_data[0]['admin_mobile'] ?>" required
                                />
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Admin Email</label>
                            <input
                                type="email"
                                class="form-control"
                                id="email2"
                                name="admin_email"
                                placeholder="Enter Admin Email"
                                value="<?= $admin_data[0]['admin_email'] ?>" required
                                />
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Admin Password</label>
                            <input
                                type="password"
                                class="form-control"
                                id="email2"
                                name="admin_password"
                                placeholder="Enter Admin Password"
                                value="<?= $admin_data[0]['admin_password'] ?>" required
                                />
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Admin Image</label>
                            <input
                                type="file"
                                class="form-control"
                                id="email2"
                                name="admin_img"
                                value=""
                                />
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                        <a href="<?= base_url() ?>public/upload/admin_image/<?= $admin_data[0]['admin_img'] ?>" target="__blank">
                            <img src="<?= base_url() ?>public/upload/admin_image/<?= $admin_data[0]['admin_img'] ?>" style="height:100px;width:100px;object-fit:contain" alt="">
                        </a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="card-action">
                    <button class="btn btn-success">Save</button>
                  </div>
                </form>
            </div>
         </div>
        
      </div>
   </div>
</div>

