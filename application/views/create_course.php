            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                       
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                         <div class="row mb-5">
                                    <div class="col-12">
                                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0 font-size-18">Add Course</h4>
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
							
							
							 <div class="col-lg-6">
                                <div class="card">
                                <div class="card-body">
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Course Name</th>
                                                    <th scope="col">Course Type</th>
                                                    <th scope="col">Action</th>
                                                     
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; foreach($all_courses as $item) { $i++;?>
                                                <tr id="<?php echo $item->cr_uuid; ?>">
                                                    <td><?php echo $i;?></td>
													<td>
                                                        <h5><?php echo $item->cr_name;?></h5>
													</td>
                                                    <td><h5><?php echo $item->cr_type;?></h5></td>
                                                    <td><button type="submit" data-url="delete_cource" class="btn btn-danger remove"> Delete</button></td>
                                                </tr>
                                               <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container-fluid -->
                </div>