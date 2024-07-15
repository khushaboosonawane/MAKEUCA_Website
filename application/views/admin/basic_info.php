<?php
   defined("BASEPATH") or exit("no direct script access allowed");
   ?>
<div class="container">
   <div class="page-inner">
      <div class="page-header d-flex justify-content-between">
         <h3 class="fw-bold mb-1">Basic Information Of Website</h3>
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
               <a href="#">Forms</a>
            </li>
            <li class="separator">
               <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
               <a href="#">Basic Form</a>
            </li>
         </ul>
      </div>
      
      <div class="row" style="margin-top:-20px">
         <div class="col-md-12">
            <div class="card">
            <!-- create table basic_info_tbl(basic_id integer primary key auto_increment,important_info varchar(3000),franchise_number varchar(10),enquire_number varchar(10),whatsapp_number varchar(10),email_address varchar(2000),facebook text,twitter text,insta_link text,about_information varchar(3000),map_link text,class_add varchar(2000),class_logo text) -->
               <form action="<?= base_url() ?>admincontroller/update_basic_info" enctype="multipart/form-data" method="post">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2" class="text-danger">Important Information</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email2"
                                name="important_info"
                                placeholder="Enter Important Information"
                                value="<?= $basic_info[0]['important_info'] ?>" required
                                />
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Franchise Enquiry Number</label>
                            <input
                                type="number"
                                class="form-control"
                                id="email2"
                                name="franchise_number"
                                placeholder="Enter Franchise Enquiry Number"
                                value="<?= $basic_info[0]['franchise_number'] ?>" required
                                />
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Student Enquiry</label>
                            <input
                                type="number"
                                class="form-control"
                                id="email2"
                                name="enquire_number"
                                placeholder="Enter Student Enquiry Number"
                                value="<?= $basic_info[0]['enquire_number'] ?>" required
                                />
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Whatsapp Number</label>
                            <input
                                type="number"
                                class="form-control"
                                id="email2"
                                name="whatsapp_number"
                                placeholder="Enter Whatsapp Number"
                                value="<?= $basic_info[0]['whatsapp_number'] ?>" required
                                />
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Email Address</label>
                            <input
                                type="email"
                                class="form-control"
                                id="email2"
                                name="email_address"
                                placeholder="Enter Email Address"
                                value="<?= $basic_info[0]['email_address'] ?>" required
                                />
                            
                          </div>
                      </div>
                    
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Facebook Link</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email2"
                                name="facebook"
                                placeholder="Enter Facebook Link"
                                value="<?= $basic_info[0]['facebook'] ?>" required
                                />
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Twitter Link</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email2"
                                name="twitter"
                                placeholder="Enter Twitter Link"
                                value="<?= $basic_info[0]['twitter'] ?>" required
                                />
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Instagram Link</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email2"
                                name="insta_link"
                                placeholder="Enter Instagram Link"
                                value="<?= $basic_info[0]['insta_link'] ?>" required
                                />
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Class About Information</label>
                            <textarea
                                class="form-control"
                                id="email2"
                                name="about_information"
                                placeholder="Write Short Description About Class" required
                                ><?= $basic_info[0]['about_information'] ?></textarea>
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-6">
                          <div class="form-group">
                            <label for="email2"> Google Map Link</label>
                            <textarea
                                class="form-control"
                                id="email2"
                                name="map_link"
                                placeholder="Enter Google Map Link" required
                                ><?= $basic_info[0]['map_link'] ?></textarea>
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-6">
                          <div class="form-group">
                            <label for="email2">Class Address</label>
                            <textarea
                                class="form-control"
                                id="email2"
                                name="class_add"
                                placeholder="Enter class Address" required
                                ><?= $basic_info[0]['class_add'] ?></textarea>
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">class Logo</label>
                            <input
                                type="file"
                                class="form-control"
                                id="email2"
                                name="class_logo"
                                />
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                        <a href="<?= base_url() ?>public/upload/class_logo/<?= $basic_info[0]['class_logo'] ?>" target="__blank" >
                           <img src="<?= base_url() ?>public/upload/class_logo/<?= $basic_info[0]['class_logo'] ?>" style="height:100px;width:100px;object-fit:contain" alt="">
                        </a>
                        
                      </div>
                    </div>
                  </div>
                  <div class="card-action">
                    <button class="btn btn-success" type="submit">Update</button>
                  </div>
                </form>
            </div>
         </div>
      </div>
   </div>
</div>
