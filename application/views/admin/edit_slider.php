<?php
   defined("BASEPATH") or exit("no direct script access allowed");
   ?>
<div class="container">
   <div class="page-inner">
      <div class="page-header d-flex justify-content-between">
         <h3 class="fw-bold mb-1">Slider Information</h3>
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
            <!-- create table slider_tbl(slider_id integer primary key auto_increment,slider_title varchar(2000),slider_sub_title varchar(3000),slider_image text); -->
               <form action="<?= base_url() ?>admincontroller/update_slider_info" enctype="multipart/form-data" method="post">
                <input type="hidden" name="slider_id" value="<?= $slider_data[0]['slider_id'] ?>" id="">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                          <div class="form-group">
                            <label for="email2">Slider Title</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email2"
                                name="slider_title"
                                placeholder="Enter Slider Title"
                                value="<?= $slider_data[0]['slider_title'] ?>"
                                />
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-6">
                          <div class="form-group">
                            <label for="email2">Slider Sub Title</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email2"
                                name="slider_sub_title"
                                placeholder="Enter Slider Sub Title"
                                value="<?= $slider_data[0]['slider_sub_title'] ?>"
                                />
                            
                          </div>
                      </div>
                      
                      
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                          <div class="form-group">
                            <label for="email2">Slider Image</label>
                            <input
                                type="file"
                                class="form-control"
                                id="email2"
                                name="slider_image"
                                value=""
                                />
                            
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <img src="<?= base_url() ?>public/upload/slider_image/<?= $slider_data[0]['slider_image'] ?>" style="height:100px;width:100px" alt="">
                        </div>
                    </div>
                  </div>
                  <div class="card-action">
                    <button class="btn btn-success">Update</button>
                  </div>
                </form>
            </div>
         </div>
         
      </div>
   </div>
</div>

