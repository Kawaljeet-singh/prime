
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Enrollment Visa report</h4>
                                    <?php echo $this->session->flashdata('message');?>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                         <form method="POST" action="<?php echo base_url('Manage_study_visa/enroll_visa_info');?>">
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">First name</label>
														<input type="text" name="s_first_name" class="form-control" id="formrow-firstname-input" value="<?php echo $get_info->stu_fname;?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">last name</label>
														<input type="text" name="s_last_name" class="form-control" id="formrow-firstname-input" value="<?php echo $get_info->stu_lname;?>">
													</div>
												</div>
                                            </div>

                                            <div class="row">
                                                
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-email-input" class="form-label">Email</label>
                                                        <input type="email" name="s_email" class="form-control" id="formrow-email-input" value="<?php echo $get_info->stu_email;?>">
                                                    </div>
                                                </div>
												
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-password-input" class="form-label">Phone number</label>
                                                        <input type="text" name="s_phone_a" class="form-control" id="formrow-password-input" value="<?php echo $get_info->stu_phone_a;?>">
                                                    </div>
                                                </div>
												 <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-password-input" class="form-label">Alternative number</label>
                                                        <input type="text" name="s_phone_b" class="form-control" id="formrow-password-input" value="<?php echo $get_info->stu_phone_b;?>">
                                                    </div>
                                                </div>
                                            </div>
											<div class="row">
												<div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputState" class="form-label">Qualification</label>
                                                        <select id="formrow-inputState" name="s_qual" class="form-select">
                                                            <option>10th</option>
                                                            <option>12th</option>
                                                            <option>Diploma</option>
                                                            <option>Graduation</option>
                                                            <option>Post Graduation</option>
                                                        </select>
                                                    </div>
                                                </div>
												<div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Detail study (Bsc,B-tech etc)</label>
                                                        <input type="text" name="s_study" class="form-control" id="formrow-inputCity" value="<?php echo $get_info->stu_study;?>">
                                                    </div>
                                                </div>
											
											 <div class="col-lg-6">
											 
													<div class="mb-3">
                                                        <label class="d-block mb-3">Gender :</label>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input"  <?php if($get_info->stu_gender == 'Male') { echo 'checked="checked"' ; } ?>  type="radio" name="s_gender" id="inlineRadio1" value="Male">
                                                            <label class="form-check-label" for="inlineRadio1">Male</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" <?php if($get_info->stu_gender == "Female") { echo 'checked="checked"' ; } ?>type="radio" name="s_gender" id="inlineRadio2" value="Female">
                                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                                        </div>                                                          
                                                    </div>
                                                </div>
												 <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Date of Birth</label>
                                                        <input type="date" name="s_dob" value="<?php echo $get_info->stu_DOB;?>" class="form-control"  id="formrow-inputCity">
                                                    </div>
                                                </div>
												
                                             
											</div>
											<div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Full Address (House/village/Town)</label>
                                                        <input type="text" name="s_address" value="<?php echo $get_info->stu_address;?>" class="form-control" id="formrow-inputCity">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">City</label>
                                                        <input type="text" name="s_city" value="<?php echo $get_info->stu_city;?>" class="form-control" id="formrow-inputCity">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputState" class="form-label">State</label>
                                                        <select id="formrow-inputState" name="s_state" class="form-select">
                                                            <option selected>Choose...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputZip" class="form-label">Zip</label>
                                                        <input type="text" name="s_zip" value="<?php echo $get_info->stu_zip;?>" class="form-control" id="formrow-inputZip">
                                                    </div>
                                                </div>
												
                                            </div>
											
                                         
                                            <div>
                                             
                                            </div>
                                       
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                          
                            <!-- end col -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        	<div class="row">
												<div class="col-md-6">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">Country Interested In</label>
                                                        <select id="sel_course" name="int_country" class="form-select">
                                                        <option value="0">- Select -</option>
                                                           <option value="canada">Canada</option>
                                                           <option value="UK">UK</option>
                                                           <option value="england">England</option>
                                                        </select>
													</div>
												</div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">City</label>
                                                        <input type="text" name="stu_city" class="form-control">
                                                    </div>
												</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">Latest Study</label>
                                                        <input type="text" name="latest_study" class="form-control">
                                                    </div>
												</div>
                                            </div>
                                         
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="hidden" name="stu_uuid"  class="form-control" value="<?php echo $get_info->stu_uid; ?>" >
                                                  <button type="submit" class="btn btn-primary w-md" id="submit_button">Submit</button>
                                                </div>
                                            </div>
										    
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                        
                        </div>
                      
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                