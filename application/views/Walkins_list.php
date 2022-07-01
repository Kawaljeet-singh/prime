<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">walkin list</h4>

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
                                                    <th scope="col">Enroll</th>
                                                </tr>
                                            </thead>
        
        
                                            <tbody>
                                            
											<?php 
                             $i=0;
                            foreach($all_walkins as $walkins){
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
                                                            <h5 class="font-size-14 mb-1"><a href="<?php echo base_url('profile')?>" class="text-dark"><?php echo $walkins->stu_fname.'&nbsp;'.$walkins->stu_lname?></a></h5>
                                                            <p class="text-muted mb-0"><?php get_sys($walkins->stu_interest)?></p>
                                                        </td>
                                                        <td><?php echo $walkins->stu_email?></td>
                                                        <td><?php echo $walkins->stu_phone_a .'<br>'.$walkins->stu_phone_b?></td>
                                                       
                                                         
                                                        <td>
                                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                                                <li class="list-inline-item px-2">
                                                                    <a href="" title="Edit"><i class="bx bx-edit-alt"></i></a>
                                                                </li>
                                                                <li class="list-inline-item px-2">
                                                                    <a href="<?php echo base_url('preview/'.$walkins->stu_uid);?>" title="Profile"><i class="bx bx-user-circle"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td><a href="<?php if($walkins->stu_interest == 4) { echo base_url('study_visa/'.$walkins->stu_uid);} else if($walkins->stu_interest == 3) {  echo base_url('enroll/'.$walkins->stu_uid); }?>" class="btn btn-success waves-effect waves-light">Enroll</a></td>
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