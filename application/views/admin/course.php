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
               <form action="<?= base_url() ?>admincontroller/save_course" enctype="multipart/form-data" method="post">
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
                    <div class="card-title">Slider Table</div>
                </div>
                <div class="card-body">
                    <table class="table mt-3 table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Update</th>
                                <th scope="col">ID</th>
                                <th>Course Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(count($course_data)>0){
                                foreach($course_data as $key=>$row){
                                    ?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url() ?>admincontroller/edit_course/<?= $row['course_id'] ?>">
                                                <button class="btn btn-success btn-sm">Edit</button>
                                            </a>
                                            <a href="<?= base_url() ?>admincontroller/delete_course/<?= $row['course_id'] ?>">
                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">Delete</button>
                                            </a>
                                        </td>
                                        <td><?= $key+1 ?></td>
                                        <td><?= $row['course_name'] ?></td>
                                        
                                    </tr>
                                    <?php
                                }
                            }else{
                                ?>
                                <tr>
                                    <td colspan="20" class="text-center">No Record Found</td>
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

