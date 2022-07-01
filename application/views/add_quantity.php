            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Add Quantity</h4>
                                    <?php echo $this->session->flashdata('message');?>
                                    <div class="page-title-right">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                    <form method="POST" action="<?php echo base_url('save_quantity/'.$getitem_info->st_uid);?>">
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3 ">
														<h1><?php echo $getitem_info->st_item?></h1>
                                                        <h4>Total: <?php echo $getitem_info->st_quantity?> in stock.</h4>
														<label for="formrow-firstname-input" class="form-label">Add Quantity</label>
														<input type="text" class="form-control" name="quantity" id="formrow-firstname-input">
                                                        <input type="hidden" name="instock" value="<?php echo $getitem_info->st_quantity?>">
                                                         <input type="hidden" name="item" value="<?php echo $getitem_info->st_item?>">
                                                    </div>
												</div>
											</div>
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                    </div> <!-- container-fluid -->
                </div>