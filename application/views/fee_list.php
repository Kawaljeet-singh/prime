
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Fee List</h4>

                                    <div class="page-title-right">
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                <div class="card-body">
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Student Name</th>
                                                    <th scope="col">Total Fee</th>
                                                    <th scope="col">Paid Fee</th>
                                                    <th scope="col">Pending</th>
													  <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; foreach($all_fee as $item) { $i++;?>
                                                <tr>
                                                    <td> <?php echo $i;?></td>
                                                    <td><h3><?php echo $square->getname($item->fee_stu_id); ?></h3></td>
                                                    <td>
                                                        <h5><?php echo fee_format($item->fee_fees);?></h5>
													</td>
                                                    <td><h5 class="text-success"><?php echo fee_format($item->fee_enroll);?></h5></td>
                                                    <td><?php if($item->fee_status ==0) { echo '<h5 class="text-info"> Full Paid';} else { echo '<h5 class="text-danger">'.fee_format($item->fee_status);}?></h5></td>
                                                   
                                                    <td>
                                                            <!-- Button trigger modal -->
                                                            <a class="btn btn-primary btn-sm btn-rounded" href="<?php echo base_url('add_fee/'.$item->fee_stu_id);?>">
                                                                Add Fee
                                                            </a>
                                                    </td>
                                                </tr>
                                               <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->