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
            <!-- create table slider_tbl(slider_id integer primary key auto_increment,slider_title varchar(2000),slider_sub_title varchar(3000),slider_image text); -->
               <form action="<?= base_url() ?>admincontroller/save_admin_info" enctype="multipart/form-data" method="post">
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
                                value="" required
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
                                value="" required
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
                                value="" required
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
                                value="" required
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
                                value="" required
                                />
                            
                          </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="card-action">
                    <button class="btn btn-success">Save</button>
                  </div>
                </form>
            </div>
         </div>
         <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Admin Table</div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table mt-3 table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Update</th>
                                <th scope="col"> Name</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">img</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(count($admin_data)>0){
                                foreach($admin_data as $key=>$row){
                                    ?>
                                    <tr>
                                        <td class="d-flex">
                                            <a href="<?= base_url() ?>admincontroller/edit_admin/<?= $row['admin_id'] ?>">
                                                <button class="btn btn-success btn-sm"><i class="ri-edit-box-line"></i></button>
                                            </a>&nbsp;&nbsp;
                                            <a href="<?= base_url() ?>admincontroller/delete_admin/<?= $row['admin_id'] ?>">
                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')"><i class="ri-delete-bin-5-line"></i></button>
                                            </a>
                                        </td>
                                        <td><?= $row['admin_name'] ?></td>
                                        <td><?= $row['admin_mobile'] ?></td>
                                        <td><?= $row['admin_email'] ?></td>
                                        <td><?= $row['admin_password'] ?></td>
                                        <?php
                                        if($row['admin_img']){
                                            ?>
                                            <td>
                                                <a href="<?= base_url() ?>public/upload/admin_image/<?= $row['admin_img'] ?>" target="__blank">
                                                    <img src="<?= base_url() ?>public/upload/admin_image/<?= $row['admin_img'] ?>" style="height:100px;width:100px;object-fit:contain" alt="">
                                                </a>
                                            </td>
                                            <?php
                                        }else{
                                            ?>
                                            <td>NA</td>
                                            <?php
                                        }
                                        ?>
                                        
                                    </tr>
                                    <?php
                                }
                            }else{
                                ?>
                                <tr>
                                    <td class="text-center" colspan="20">No Record Found</td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                        
                    </table>
                </div>
            </div>
         </div>
         
      </div>
   </div>
</div>

