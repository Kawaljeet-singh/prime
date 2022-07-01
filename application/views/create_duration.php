            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                       
                        <!-- end page title -->
 <div class="card">
                                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                               
                                         <div class="row mb-5">
                                    <div class="col-12">
                                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0 font-size-18">Add Batch</h4>
                                          
                                        </div>
                                    </div>
                                    <form method="POST" action="<?php echo base_url('Manage_course/save_duration');?>">
											<div class="row">
												<div class="col-md-8">
													<div class="mb-3 ">
													    	<label for="formrow-firstname-input" class="form-label">Select Batch</label>
													    <select class="form-control" id="b_id" name="b_id">
													        <?php foreach($all_batch as $cs)
													        {
													            echo '<option value="'.$cs->bt_uuid.'">'.$cs->bt_name.'</option>';
													        }?>
													    </select>
                                                    </div>
												</div>
												<div class="col-md-8">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">Duration</label>
													     <select class="form-control" id="duration" name="duration">
													           <option name="1 week">1 Week</option>
													           <option name="1 week">2 Week</option>
													           <option name="1 week">3 Week</option>
													           <option name="1 week">4 Week</option>
													           <option name="1 week">6 Week</option>
													           <option name="2 month">2 month</option>
													           <option name="3 month">3 month</option>
													      </select>
                                                    </div>
												</div>
												<div class="col-md-8">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">Fee</label>
														<input type="text" class="form-control" name="fee" id="formrow-firstname-input">
                                                    </div>
												</div>
											</div>
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </form>
                                </div>
                                   
                                        
                                 
                                <!-- end card -->
                            </div>
                            <div class="col-xl-6">
                                 <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th scope="col" >#</th>
                                                    <th scope="col">Name</th>
                                                     <th scope="col">Action</th>
                                                     
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; foreach($all_batch as $item) { $i++;?>
                                                <tr>
                                                    <td> <?php echo $i;?></td>
                                                   <td><h5><?php echo $item->cr_name;?> >> <?php echo $item->bt_name;?></h5></td>
                                                     <td><a href="<?php echo base_url('delete_batch/'.$item->bt_uuid);?>" >Delete</a></h5></td>
                                                </tr>
                                               <?php } ?>
                                            </tbody>
                                        </table>
                                </div>
                                   </div>
                                    <!-- end card body -->
                                </div>
                            <!-- end col -->
                        </div>
                    </div> <!-- container-fluid -->
                </div>