
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
								</div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">

                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                
                                                <div class="d-flex flex-wrap">
                                                    <div class="me-3">
                                                        <p class="text-muted mb-2">Total Walkins</p>
                                                        <h5 class="mb-0"><?php echo $ttl_w; ?></h5>
                                                    </div>
    
                                                    <div class="avatar-sm ms-auto">
                                                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                            <i class="bx bxs-book-bookmark"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="card blog-stats-wid">
                                            <div class="card-body">

                                                <div class="d-flex flex-wrap">
                                                    <div class="me-3">
                                                        <p class="text-muted mb-2">Enrolled</p>
                                                        <h5 class="mb-0"><?php echo $ttl_e; ?></h5>
                                                    </div>
    
                                                    <div class="avatar-sm ms-auto">
                                                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                            <i class="bx bxs-note"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card blog-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex flex-wrap">
                                                    <div class="me-3">
                                                        <p class="text-muted mb-2">Pending</p>
                                                        <h5 class="mb-0"><?php echo $ttl_w-$ttl_e; ?></h5>
                                                    </div>
    
                                                    <div class="avatar-sm ms-auto">
                                                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                            <i class="bx bxs-message-square-dots"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-start">
                                            <h5 class="card-title me-2">Walkins</h5>
                                            <div class="ms-auto">
                                                <div class="toolbar d-flex flex-wrap gap-2 text-end">
                                                    <button type="button" data-value="all" id="all" class="btn btn-light btn-sm">
                                                        ALL
                                                    </button>
                                                    <button type="button" data-value="month" id="month" class="btn btn-light btn-sm">
                                                        1M
                                                    </button>
                                                    <button type="button" data-value="six_month" id="six_month" class="btn btn-light btn-sm">
                                                        6M
                                                    </button>
                                                    <button type="button" data-value="year" id="year" class="btn btn-light btn-sm active">
                                                        1Y
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row text-center">
                                            <div class="col-lg-4">
                                                <div class="mt-4">
                                                    <p class="text-muted mb-1">Today</p>
                                                    <h5><?php echo $today; ?></h5>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4">
                                                <div class="mt-4">
                                                    <p class="text-muted mb-1">This Month</p>
                                                    <h5><?php echo $month; ?></h5>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mt-4">
                                                    <p class="text-muted mb-1">This Year</p>
                                                    <h5><?php echo $year; ?> </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="mb-4">
                                        
                                        <div class="apex-charts" id="area-chart" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
							<div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-start">
                                            <div class="me-2">
                                                <h5 class="card-title mb-3">Enroll progress</h5>
                                            </div>
                                           
                                        </div>
                                     

                                        <hr>

                                        <div>
                                            <ul class="list-group list-group-flush">
                                                <?php 
                                                $indexedArray = array("bg-warning", "bg-success", "bg-info", "bg-danger");
												function get_percentage($total, $number)
                                                            {
                                                              if ( $total > 0 ) {
                                                               return round(($number * 100) / $total, 2);
                                                              } else {
                                                                return 0;
                                                              }
                                                            }
                                                foreach($get_counselor as $stk) 
                                                    {
                                                        
                                                        $a=$dashboard->work($stk->staff_uid);
                                                        
                                                        
                                                ?>
                                                <li class="list-group-item">
                                                    <div class="py-2">
                                                        <h5 class="font-size-14"><?php echo $stk->s_first_name.'&nbsp;'.$stk->s_last_name;?><span class="float-end"><?php echo get_percentage($ttl_w,$a).'%'; ?></span></h5>
                                                        <div class="progress animated-progess progress-sm">
                                                            <div class="progress-bar <?php echo $indexedArray[array_rand($indexedArray)];?>" role="progressbar" style="width: <?php echo get_percentage($ttl_w,$a).'%';?>" aria-valuenow="<?php echo get_percentage($ttl_w,$a)?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>    
                                                <?php }?>
                                            </ul>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- end col -->
						</div>
                        <!-- end row -->

                        
                        <!-- end row -->
                        

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="me-2">
                                                <h5 class="card-title mb-4">Activity</h5>
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a class="text-muted font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>
                                              
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">1 Week</a>
                                                    <a class="dropdown-item" href="#">1 month</a>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div data-simplebar class="mt-2" style="max-height: 280px;">
                                            <ul class="verti-timeline list-unstyled">
                                                 <?php foreach(getall_notifications() as $nt){?>
                                                <li class="event-list active">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <h5 class="font-size-14"><?php echo date('d M',strtotime($nt->noti_date));?> <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <span class="fw-semibold"><?php echo $nt->noti_msg;?></span> <?php echo $nt->noti_title;?> <a href="<?php echo base_url($nt->noti_url);?>">View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                                
                                            </ul>
                                        </div>
                                        
                                        <div class="text-center mt-4"><a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="me-2">
                                                <h5 class="card-title mb-4">Stock Details</h5>
                                            </div>
                                           
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <tr>
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Item</th>
                                                    <th scope="col">Total Items</th>
													  <th class="align-middle">View Details</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                <tbody>
                                                    <?php $i=0; 
                                                    foreach($get_stock as $stk) 
                                                    {
                                                        $i++;?>
                                                    <tr id="<?php echo $stk->st_uid;?>">
                                                    <td><?php echo $i?></td>
                                                    <td>
                                                        <h5 class="text-truncate font-size-14"><a href="javascript: void(0);" class="text-dark"><?php echo $stk->st_item?></a></h5>
													</td>
                                                    <td><?php echo $stk->st_quantity?></td>
                                                   
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                           <a class="btn btn-primary btn-sm btn-rounded" href="<?php echo base_url('detail/'.$stk->st_uid);?>">
                                                                View Details
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex gap-3">
                                                                <a href="<?php echo base_url('add_quantity/'.$stk->st_uid);?>" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                <button data-url="delete_items" class="bg-white border-0 text-danger"><i class="mdi mdi-delete font-size-18"></i></button>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                            <div class="text-center mt-4"><a href="<?php echo base_url('stock_list');?>" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div>
                                    
                                              
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

     