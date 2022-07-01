
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Notification List</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                <div class="card-body">
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Message</th>
                                                    <th class="col">View Details</th>
                                                    <th scope="col">Created by</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; foreach($all_noti as $item) { $i++;?>
                                                <tr>
                                                    <td> <?php echo $i;?></td>
                                                    <td>
                                                        <h5><?php echo $item->noti_title;?></h5>
													</td>
                                                     <td>
                                                        <h5><?php echo $item->noti_msg;?></h5>
													</td>
												
                                                    <td>
                                                        <a class="btn btn-primary btn-sm btn-rounded" href="<?php echo base_url($item->noti_url);?>">Open Url</a>
                                                    </td>
                                                    	<td>
                                                      <i>  <?php echo $item->s_first_name.'&nbsp;'.$item->s_last_name;?></i><a href="<?php echo base_url('Notification/'.$item->noti_created_by)?>">....View all</a>
													</td>
                                                </tr>
                                               <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->