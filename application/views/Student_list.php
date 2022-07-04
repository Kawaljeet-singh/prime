<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Student list</h4>

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
                                                    <th scope="col">Joining</th>
                                                    <th scope="col">Ending</th>
                                                    <th scope="col">Course</th>
                                                   <th scope="col">Batch</th>
                                                   <th scope="col">Paid</th>
                                                   <th scope="col">Due</th>
                                                   <th scope="col">Total</th>
                                                   <th scope="col">View/ID card</th>
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
                                                        <td><?php echo date("d-M-Y", strtotime($stu->en_created_date));?></td>
                                                        <td><?php   
                                                                $du=get_duration($stu->en_duration);
                                                                $start_date = date("Y-M-d", strtotime($stu->en_created_date));  
                                                              
                                                                    // Add days to date and display it
                                                                    echo date('d-M-Y', strtotime($start_date. ' + '.$du));
                                                            ?>
                                                        </td>
                                                        <td><?php echo get_coursename($stu->en_course);?></td>
                                                        <td><?php echo get_batchname($stu->en_batch);?></td>
                                                        <td><?php echo $stu->fee_enroll;?></td>
                                                        <td><?php echo $stu->fee_status;?></td>
                                                        <td><?php echo $stu->fee_fees;?></td>
                                                        <td>
                                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                                            <li class="list-inline-item px-2">
                                                                    <a href="<?php echo base_url('student/'.$stu->stu_uid);?>" title="Profile"><i class="bx bx-user-circle"></i></a>
                                                                </li>
                                                                <li class="list-inline-item px-2">
                                                                    <a href="<?php echo base_url('idcard/'.$stu->stu_uid);?>" title="ID Card"><i class="bx bx-printer"></i></a>
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