            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Add Item</h4>
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
                                    <form method="POST" action="<?php echo base_url('Manage_stock/save_stock_info');?>">
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">Item Name</label>
														<input type="text" class="form-control" name="item_name" id="formrow-firstname-input">
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