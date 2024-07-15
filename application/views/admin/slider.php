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
               <a href="#">Slider</a>
            </li>
         </ul>
      </div>
      <div class="row" style="margin-top:-20px">
         <div class="col-md-12">
            <div class="card">
            <!-- create table slider_tbl(slider_id integer primary key auto_increment,slider_title varchar(2000),slider_sub_title varchar(3000),slider_image text); -->
               <form action="<?= base_url() ?>admincontroller/save_slider_info" enctype="multipart/form-data" method="post">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Slider Title</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email2"
                                name="slider_title"
                                placeholder="Enter Slider Title"
                                value="" required
                                />
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Slider Sub Title</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email2"
                                name="slider_sub_title"
                                placeholder="Enter Slider Sub Title"
                                value="" required
                                />
                            
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Slider Image</label>
                            <input
                                type="file"
                                class="form-control"
                                id="email2"
                                name="slider_image"
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
                                <th scope="col">Slider Title</th>
                                <th scope="col">Slider Sub Title</th>
                                <th scope="col">Slider Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(count($slider_data)>0){
                                foreach($slider_data as $key=>$row){
                                    ?>
                                    <tr>
                                        <td class="d-flex">
                                            <a href="<?= base_url() ?>admincontroller/edit_slider/<?= $row['slider_id'] ?>">
                                                <button class="btn btn-success btn-sm">
                                                <i class="ri-edit-box-line"></i>
                                                </button>
                                            </a> &nbsp;&nbsp;
                                            <a href="<?= base_url() ?>admincontroller/delete_slider/<?= $row['slider_id'] ?>">
                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">
                                                <i class="ri-delete-bin-5-line"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td><?= $key+1 ?></td>
                                        <td><?= $row['slider_title'] ?></td>
                                        <td><?= $row['slider_sub_title'] ?></td>
                                        <td>
                                            <a href="<?= base_url() ?>public/upload/slider_image/<?= $row['slider_image'] ?>">
                                                <img src="<?= base_url() ?>public/upload/slider_image/<?= $row['slider_image'] ?> " style="height:100px;width:100px;object-fit:contain" alt="" target="__blank">
                                            </a>
                                        </td>
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

