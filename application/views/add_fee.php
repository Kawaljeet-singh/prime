            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Add Fee</h4>
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
                                        <?php if (!isset($stu_detail)) {?><form method="POST" action="">
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">Student ID</label>
														<input type="text" class="form-control" name="stu_id" id="formrow-firstname-input">
                                                    </div>
												</div>
											</div>
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </form>
                                        <?php } if (isset($stu_detail)){ ?>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                         <td><h5>Profile Photo</h5></td>
                                                   <?php if ($stu_detail->attachment_id!=''){?> <img src="<?php echo base_url('profile/'.get_photo($stu_detail->attachment_id));?>" alt="" style="max-width:200px" class="rounded   d-block"><?php }?>
                                                  
                                                        </tr>
                                                <tr>
                                                    <td>Name</td>
                                                    <td><h5><?php echo $stu_detail->stu_fname.'&nbsp;'.$stu_detail->stu_lname;?></h5></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td><h5><?php echo $stu_detail->stu_email;?></h5></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone</td>
                                                    <td><h5><?php echo $stu_detail->stu_phone_a;?></h5>
                                                        <h5><?php echo $stu_detail->stu_phone_b;?></h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sex</td>
                                                    <td>
                                                        <a href="javascript: void(0);" id="inline-dob" ><?php echo $stu_detail->stu_gender;?></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Date of Birth</td>
                                                    <td>
                                                        <a href="javascript: void(0);" id="inline-dob" ><?php echo $stu_detail->stu_DOB;?></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Total Fee</td>
                                                    <td>
                                                        <h5 class="text-success"><?php  echo fee_format($stu_detail->fee_fees);?></h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pending Fee</td>
                                                    <td>
                                                        <?php if($stu_detail->fee_status == 0) { echo '<h5 class="text-success">Paid</h5>'; } else {echo '<h5 class="text-danger">'.fee_format($stu_detail->fee_status).'</h5> <div class="col-xl-3 col-lg-4 col-sm-6"><button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal">Add Fee</button></div>';}?>
                                                   
                                                   <!-- First modal dialog -->
                                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Add Fee</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                       <?php if($stu_detail->fee_status < $stu_detail->fee_fees) { ?>
                                                                            <form method="POST" action="<?php echo base_url('update_fee');?>">
                                    											<div class="row">
                                    												<div class="col-md-6">
                                    													<div class="mb-3 ">
                                    														<label for="formrow-firstname-input" class="form-label">Add fee</label>
                                    														<input type="text" class="form-control" name="fee_amt" value="<?php echo $stu_detail->fee_status?>" id="formrow-firstname-input">
                                    														<input type="hidden" name="fee_id" value="<?php echo $stu_detail->fee_uuid;?>">
                                    														<input type="hidden" name="st_id" value="<?php echo $stu_detail->stu_id;?>">
                                                                                        </div>
                                    											        <div class="mb-3">
                                                                                            <label for="formrow-inputState" class="form-label">Mode of Payment</label>
                                                                                                <select id="formrow-inputState" name="mode" class="form-select">
                                                                                                <?php foreach($mode as $sys) {
                                                                                                    echo '<option value="'.$sys->sc_id.'">'.$sys->sc_name.'</option>';
                                                                                                }?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                    											</div>
                                                                                <div>
                                                                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                                                                </div>
                                                                            </form>
                                                                            <?php }?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <?php } ?>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                    </div> <!-- container-fluid -->
                </div>