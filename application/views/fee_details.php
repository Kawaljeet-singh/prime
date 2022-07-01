            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Fee Detail</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3 ">
										<h1><?php echo $getitem_info->stu_fname.'&nbsp;'.$getitem_info->stu_lname;?></h1>
										<h4><?php echo fee_format($getitem_info->fee_fees);?></h4>
                                    </div>
                                <div class="card">
                                <div class="card-body">
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Fee Mode</th>
                                                    <th scope="col">Total Fee</th>
                                                    <th scope="col">Paid Fee</th>
                                                    <th scope="col">Balance</th>
                                                    <th class="align-middle">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; 
                                               $sum = 0;
                                                foreach($getitem_detail as $item) { $i++;?>
                                                <tr>
                                                    <td> <?php echo $i; ?></td>
                                                     <td><h5><?php echo get_sys($item->flog_mode);?></h5></td>
                                                     <td><h5><?php echo fee_format($getitem_info->fee_fees);?></h5></td>
                                                     <td><h5 class="text-success"><?php echo fee_format($item->flog_fee);?></h5></td>
                                                     <?php $sum += $item->flog_fee;?>
                                                     <td><?php  if($getitem_info->fee_fees == $sum) { echo '<h3 class="text-info">Full Paid </h3>';} else { echo '<h5 class="text-danger">'.fee_format($getitem_info->fee_fees-$sum).'</h5>';}?></h5></td>
                                                     <td><?php echo date("d-m-Y h:i",strtotime($item->flog_date));?></td>
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