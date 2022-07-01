
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Stock Item</h4>

                                    <div class="page-title-right">
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                	<div class="mb-3 ">
														<h1><?php echo $getitem_info->st_item?></h1>
                                                        <h4>Total: <?php echo $getitem_info->st_quantity?> in stock.</h4>
													
                                                    </div>
                                <div class="card">
                                <div class="card-body">
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Issue to /Added</th>
                                                    <th scope="col">Quantity</th>
													<th class="align-middle">Date</th>
                                                    </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; foreach($getitem_detail as $item) { $i++;?>
                                                <tr>
                                                    <td> <?php echo $i;?></td>
                                                    <td>
                                                        <h5 class="text-truncate font-size-14"><a href="javascript: void(0);" class="text-dark"><?php echo $square->getname($item->log_issue_to); ?></a></h5>
													</td>
                                                    <td><h5 class="<?php if($item->log_user_type ==0) { echo 'my-0 text-success';} else { echo 'my-0 text-danger'; }?>"> <?php echo $item->log_qty;?></h5></td>
                                                    <td><?php echo date("d-m-Y h:i",strtotime($item->log_date));?></td>
                                                   
                                                 
                                                       
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