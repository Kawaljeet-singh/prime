
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Enter Walkin</h4>
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
                                         <form method="POST" action="<?php echo base_url('Manage_walkins/save_walkins_info');?>" enctype="multipart/form-data">
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">First name</label>
														<input type="text" name="s_first_name" class="form-control" id="formrow-firstname-input">
													</div>
												</div>
												<div class="col-md-6">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">last name</label>
														<input type="text" name="s_last_name" class="form-control" id="formrow-firstname-input">
													</div>
												</div>
                                            </div>

                                            <div class="row">
                                                
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-email-input" class="form-label">Email</label>
                                                        <input type="email" name="s_email" class="form-control" id="formrow-email-input">
                                                    </div>
                                                </div>
												
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-password-input" class="form-label">Phone number</label>
                                                        <input type="text" name="s_phone_a" class="form-control" id="formrow-password-input">
                                                    </div>
                                                </div>
												 <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-password-input" class="form-label">Alternative number</label>
                                                        <input type="text" name="s_phone_b" class="form-control" id="formrow-password-input">
                                                    </div>
                                                </div>
                                            </div>
											<div class="row">
												<div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputState" class="form-label">Qualification</label>
                                                        <select id="formrow-inputState" name="s_qual" class="form-select">
                                                        <?php foreach($quali as $sys) {
                                                            echo '<option value="'.$sys->sc_id.'">'.$sys->sc_name.'</option>';
                                                            }?>
                                                        </select>
                                                    </div>
                                                </div>
												<div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Detail study (Bsc,B-tech etc)</label>
                                                        <input type="text" name="s_study" class="form-control" id="formrow-inputCity">
                                                    </div>
                                                </div>
											</div>
											<div class="row">
											 <div class="col-lg-3">
											 
													<div class="mb-3">
                                                        <label class="d-block mb-3">Gender :</label>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="s_gender" id="inlineRadio1" value="Male">
                                                            <label class="form-check-label" for="inlineRadio1">Male</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="s_gender" id="inlineRadio2" value="Female">
                                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                                        </div>                                                          
                                                    </div>
                                                </div>
												 <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Date of Birth</label>
                                                        <input type="date" name="s_dob" class="form-control" id="formrow-inputCity">
                                                    </div>
                                                </div>
												  <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputState" class="form-label">Interest</label>
                                                        <select id="formrow-inputState" name="s_interest" class="form-select">
                                                        <?php foreach($course as $sys) {
                                                            echo '<option value="'.$sys->sc_id.'">'.$sys->sc_name.'</option>';
                                                            }?>
                                                        </select>
                                                    </div>
													</div>
                                               
                                              
                                                
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputZip" class="form-label">Assign to</label>
                                                        <select class="form-select" name="s_assign_to" id="inlineFormSelectPref">
															<option selected>Choose...</option>
                                                            <?php 
                                                                     $i=0;
                                                                    foreach($all_teacher as $single_teacher){
                                                                        $i++;
														             echo '<option value="'.$single_teacher->staff_uid.'">'.$single_teacher->s_first_name.'&nbsp;'.$single_teacher->s_last_name.'</option>';
														        }
                                                            ?>
														</select>
                                                    </div>
                                                </div>
											</div>
											<div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Full Address (House/village/Town)</label>
                                                        <input type="text" name="s_address" class="form-control" id="formrow-inputCity">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">City</label>
                                                        <input type="text" name="s_city" class="form-control" id="formrow-inputCity">
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
                                                        <input type="text" name="s_zip" class="form-control" id="formrow-inputZip">
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