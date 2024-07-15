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
               <a href="<?= base_url() ?>admincontroller/">Dashboard</a>
            </li>
            <li class="separator">
               <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
               <a href="#">Course</a>
            </li>
         </ul>
      </div>
      <div class="row" style="margin-top:-20px">
         <div class="col-md-12">
            <div class="card">
            <!-- create table slider_tbl(slider_id integer primary key auto_increment,slider_title varchar(2000),slider_sub_title varchar(3000),slider_image text); -->
               <form action="<?= base_url() ?>admincontroller/update_course" enctype="multipart/form-data" method="post">
                <input type="hidden" name="course_id" value="<?= $course_data[0]['course_id'] ?>" id="">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Course Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email2"
                                name="course_name"
                                placeholder="Enter Course Name"
                                value="<?= $course_data[0]['course_name'] ?>" required
                                />
                            
                          </div>
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

