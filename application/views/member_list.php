<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Member list</h4>

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
                                                        <th scope="col" style="width: 70px;">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Joining</th>
                                                        <th scope="col">Salary</th>
                                                        <th scope="col">View</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                            </thead>
        
        
                                            <tbody>
											<?php 
                        $i=0;
                            foreach($all_teacher as $single_teacher){
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
                                                            <h5 class="font-size-14 mb-1"><a href="<?php echo base_url('profile')?>" class="text-dark"><?php echo $single_teacher->s_first_name.'&nbsp;'.$single_teacher->s_last_name?></a></h5>
                                                            <p class="text-muted mb-0"><?php echo get_sys($single_teacher->s_designation);?></p>
                                                        </td>
                                                        <td><?php echo $single_teacher->s_email?></td>
                                                        <th scope="col"><?php echo date('d-M-Y',strtotime($single_teacher->s_date))?></th>
                                                        <th scope="col"><?php echo fee_format($single_teacher->s_salary)?></th>
                                                       
                                                          <td>
                                                           
															 <a href="<?php echo base_url('profile/'.$single_teacher->staff_uid)?>" class="btn btn-primary btn-sm btn-rounded"> View Profile</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex gap-3">
                                                                <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                            </div>
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