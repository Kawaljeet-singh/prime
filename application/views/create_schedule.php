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
                                     <form method="POST" action="<?php echo base_url('Manage_course/save_batch');?>" autocomplete="off">
											<div class="row">
												<div class="col-md-8">
													<div class="mb-3 ">
													    	<label for="formrow-firstname-input" class="form-label">Select course</label>
													    <select class="form-control" id="s_id" name="s_id">
													        <?php foreach($get_schedule as $cs)
													        {
				echo '<option value="'.$cs->due_id.'">'.$cs->cr_name.'  >>  '.$cs->bt_name .'  >>  '.$cs->due_name.'</option>';
													        }?>
													    </select>
                                                    </div>
												</div>
												<div class="col-md-8">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">Batch Name</label>
														<input type="text" class="form-control" name="b_name" id="formrow-firstname-input">
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
                                                 <tr id="<?php echo $item->bt_uuid; ?>">
                                                    <td> <?php echo $i;?></td>
                                                   <td><h5><?php echo $item->cr_name;?> >> <?php echo $item->bt_name;?></h5></td>
                                                      <td> <button type="submit" data-url="delete_batch" class="btn btn-danger remove"> Delete</button></td>
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