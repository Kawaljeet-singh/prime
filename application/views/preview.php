<div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Profile</h4>

                                    <div class="page-title-right">
                                       
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card overflow-hidden">
                                    <div class="bg-primary bg-soft">
                                        <div class="row">
                                            <div class="col-7">
                                            </div>
                                            <div class="col-5 align-self-end">
                                                <img src="<?php echo base_url('assets/images/profile-img.png')?>" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                           <div class="col-sm-10">
                                                <div class="pt-4">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                           <p class="text-muted mb-0">Name</p>
                                                           <h5 class="font-size-15 text-truncate"><?php echo $get_info->stu_fname . '&nbsp;'. $get_info->stu_lname;?></h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <p class="text-muted mb-0">Sex</p>
                                                            <h5 class="font-size-15"><?php echo $get_info->stu_gender?></h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <p class="text-muted mb-0">Date of Birth</p>
                                                            <h5 class="font-size-15"><?php  echo date("d-M-Y", strtotime($get_info->stu_DOB));?></h5>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <!-- end card -->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Personal Information</h4>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Full Name :</th>
                                                        <td><?php echo $get_info->stu_fname . '&nbsp;'. $get_info->stu_lname;?></td>
                                                     </tr>
                                                    <tr>
                                                        <th scope="row">Mobile :</th>
                                                        <td><?php echo $get_info->stu_phone_a.'&nbsp; , &nbsp;'.$get_info->stu_phone_b?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">E-mail :</th>
                                                        <td><?php echo $get_info->stu_email?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Qualification :</th>
                                                        <td><?php echo get_sys($get_info->stu_quali).'&nbsp; ('.$get_info->stu_study.')'?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Location :</th>
                                                        <td><?php echo $get_info->stu_city.'&nbsp; , &nbsp;'.$get_info->stu_state.'&nbsp; , &nbsp;'.$get_info->stu_address.'&nbsp; , &nbsp;'.$get_info->stu_zip.'&nbsp;.'?></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->

                        
                                <!-- end card -->
                            </div>         
                            
                           
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>