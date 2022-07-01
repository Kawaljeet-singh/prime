
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
                                <div class="card">
                                <div class="card-body">
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Item</th>
                                                    <th scope="col">Total Items</th>
													  <th class="align-middle">View Details</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; foreach($all_items as $item) { $i++;?>
                                                <tr>
                                                    <td> <?php echo $i;?></td>
                                                    <td>
                                                        <h5 class="text-truncate font-size-14"><a href="javascript: void(0);" class="text-dark"><?php echo $item->st_item;?></a></h5>
													</td>
                                                    <td><?php echo $item->st_quantity;?></td>
                                                   
                                                  <td>
                                                            <!-- Button trigger modal -->
                                                            <a class="btn btn-primary btn-sm btn-rounded" href="<?php echo base_url('detail/'.$item->st_uid);?>">
                                                                View Details
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex gap-3">
                                                                <a href="<?php echo base_url('add_quantity/'.$item->st_uid);?>" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                <a href="<?php echo base_url('delete_items/'.$item->st_uid)?>" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                            </div>
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