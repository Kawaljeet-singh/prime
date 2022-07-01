<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Student Visa list</h4>

                                    <div class="page-title-right">
                                       
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
         
        
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Action</th>
                                                   
                                                </tr>
                                            </thead>
        
        
                                            <tbody>
                                            
											<?php 
                             $i=0;
                            foreach($all_student as $stu){
                                $i++;
                             ?>
                                            <tr>
                                                        <td>
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle">
                                                                   <?php echo $i;?>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1"><a href="<?php echo base_url('profile')?>" class="text-dark"><?php echo $stu->stu_fname.'&nbsp;'.$stu->stu_lname?></a></h5>
                                                            
                                                        </td>
                                                        <td><?php echo $stu->stu_email?></td>
                                                        <td><?php echo $stu->stu_phone_a .'<br>'.$stu->stu_phone_b?></td>
                                                       
                                                         
                                                        <td>
                                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                                                <li class="list-inline-item px-2">
                                                                    <a href="<?php echo base_url('preview/'.$stu->stu_uid);?>" title="Edit"><i class="bx bx-edit-alt"></i></a>
                                                                </li>
                                                                <li class="list-inline-item px-2">
                                                                    <a href="javascript: void(0);" title="Profile"><i class="bx bx-user-circle"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                       
                                                    </tr>
                                                   
							<?php }?>
                                                    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->