            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                       
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                         <div class="row mb-5">
                                    <div class="col-12">
                                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0 font-size-18">Add Course</h4>
                                            <?php echo $this->session->flashdata('message');?>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                     <form method="POST" action="<?php echo base_url('Manage_course/save_course');?>" autocomplete="off">
											<div class="row">
												<div class="col-md-8">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">Course Name</label>
														<input type="text" class="form-control" name="c_name" id="formrow-firstname-input">
                                                    </div>
												</div>
												<div class="col-md-8">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">Course Type (Offline/Online)</label>
														<input type="text" class="form-control" name="c_type" id="formrow-firstname-input">
                                                    </div>
												</div>
											</div>
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </form>
                                </div>
                                   
                                        
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                    </div> <!-- container-fluid -->
                </div>