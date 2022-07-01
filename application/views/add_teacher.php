 
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Add Teacher</h4>
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
                                         <form method="POST" action="<?php echo base_url('Manage_staff/save_teacher_info');?>" enctype="multipart/form-data">
											<div class="row">
											<div class="col-md-3">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">Select Profile Photo</label>
														<img id="blah" class="img-fluid rounded me-2" src="assets/images/small/img-4.jpg" alt="your image" />
														<input type="file" class="form-control mt-3" name="photo" id="profile_pic">
													</div>
												</div>
												
												<div class="col-md-9">
													<div class="row">
														<div class="col-md-6">
															<div class="mb-3 ">
																<label for="formrow-firstname-input" class="form-label">First name</label>
																<input type="text" class="form-control" name="firstname" id="formrow-firstname-input">
															</div>
														</div>
														<div class="col-md-6">
															<div class="mb-3 ">
																<label for="formrow-firstname-input" class="form-label">last name</label>
																<input type="text" class="form-control" name="lastname" id="formrow-firstname-input">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="mb-3 ">
																<label for="formrow-email-input" class="form-label">Email</label>
																<input type="email" class="form-control" name="email" id="formrow-email-input">
															</div>
														</div>
														<div class="col-md-6">
															<div class="mb-3 ">
																<label for="formrow-password-input" class="form-label">Phone number</label>
																<input type="text" class="form-control" name="phone" id="formrow-password-input">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<div class="mb-3">
																<label for="formrow-inputCity" class="form-label">Date of Birth</label>
																<input type="date" name="dob" class="form-control" id="formrow-inputCity">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="mb-3">
															<label class="d-block mb-3">Gender :</label>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
																	<label class="form-check-label" for="inlineRadio1">Male</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
																	<label class="form-check-label" for="inlineRadio2">Female</label>
																</div>                                                          
															</div>
														</div>
													</div>
												</div>
                                            </div>

                                           <hr>
											<div class="row">
											<div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Date of Joining</label>
                                                        <input type="date" class="form-control" name="doj" id="formrow-inputCity">
                                                    </div>
                                                </div>
												  <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputState" class="form-label">Designation</label>
                                                        <select id="formrow-inputState" name="designation" class="form-select">
                                                           <?php foreach($system as $sys) {
                                                            echo '<option value="'.$sys->sc_id.'">'.$sys->sc_name.'</option>';
                                                            }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputZip" class="form-label">Paid Holidays</label>
                                                        <select class="form-select" name="holiday" id="inlineFormSelectPref">
															<?php foreach($holi as $sys) {
                                                            echo '<option value="'.$sys->sc_id.'">'.$sys->sc_name.'</option>';
                                                            }?>
														</select>
                                                    </div>
                                                </div>
												<div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputZip" class="form-label">Salary</label>
                                                        <input type="text" class="form-control" name="salary" id="formrow-inputZip">
                                                    </div>
                                                </div>
												<div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputZip" class="form-label">Security Kept</label>
                                                        <input type="text" class="form-control" name="security" id="formrow-inputZip">
                                                    </div>
                                                </div>
                                            </div>
											<hr>
											<div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">City</label>
                                                        <input type="text" class="form-control" name="city" id="formrow-inputCity">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputZip" class="form-label">Zip</label>
                                                        <input type="text" class="form-control" name="zip" id="formrow-inputZip">
                                                    </div>
                                                </div>
                                            </div>
											<div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Full Address (House/village/Town)</label>
                                                        <input type="text" class="form-control" name="address" id="formrow-inputCity">
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
                <!-- End Page-content -->
