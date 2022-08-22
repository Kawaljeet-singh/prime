<!doctype html>
<html lang="en">

 <head>
        
        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
    
        <!-- Bootstrap Css -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url('assets/css/icons.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url('assets/css/app.min.css')?>" id="app-style" rel="stylesheet" type="text/css" />

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>

		<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
    </head>
	<header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box" style="border-right:1px solid #bbb5b5">
                            <a href="<?php echo base_url('dashboard');?>" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo base_url('assets/images/logo.png');?>" alt="" height="60">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url('assets/images/logo.png');?>" alt="" height="60">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo base_url('assets/images/logo.png');?>" alt="" height="60">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url('assets/images/logo.png');?>" alt="" height="60">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="search form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>

                        
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="search form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                       

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell bx-tada"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="<?php echo base_url('Notification');?>" class="small" > View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                <?php foreach(getall_notifications() as $nt){?>
                                    <a href="<?php echo base_url($nt->noti_url);?>" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-user-plus"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-your-order"><?php echo $nt->noti_title?></h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer"><?php echo $nt->noti_msg?></p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago"><?php echo date_new($nt->noti_date)?></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <?php } ?>
                                    
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="<?php echo base_url('Notification');?>">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span> 
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?php echo base_url('profile/');get_media();?>"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry"><?php  echo get_user('user_name');?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href=""><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="<?php echo base_url('logout')?>"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>

                       
                    </div>
                </div>
    </header>
	<div class="vertical-menu" style="border-right:1px solid #bbb5b5">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
								<li>
									<a href="<?php echo base_url('dashboard');?>" class="waves-effect">
										<i class="bx bx-home-circle"></i>
										<span key="t-dashboards">Dashboard</span>
									</a>
								</li>
								
								<li>
									<a href="javascript: void(0);" class="has-arrow waves-effect">
										<i class="bx bx-user-circle "></i>
										<span key="t-layouts">Staff</span>
									</a>
									<ul class="sub-menu" aria-expanded="true">
										<li>
											<a href="<?php echo base_url('members');?>" class=" waves-effect">
												<i class="bx bxs-user-detail"></i>
												<span key="t-contacts">Staff list</span>
											</a>
										</li>
										<li>
										 <a href="<?php echo base_url('add_teacher');?>" class=" waves-effect">
											 <i class="bx bxs-user-plus "></i>
											<span key="t-contacts">Add Teacher</span>
										</a>
										</li>
									</ul>
									
								</li>
								<li>
									<a href="javascript: void(0);" class="has-arrow waves-effect">
										<i class="bx bx bx-user "></i>
										<span key="t-layouts">Walkin</span>
									</a>
									<ul class="sub-menu" aria-expanded="true">
										<li>
											<a href="<?php echo base_url('add_walkins');?>" class=" waves-effect">
												 <i class="bx bxs-user-plus "></i>
												<span key="t-contacts">Walkin Entry</span>
											</a>
											<a href="<?php echo base_url('walkins_list');?>" class=" waves-effect">
												<i class="bx bxs-user-detail"></i>
												<span key="t-contacts">Walkin list</span>
											</a>
										</li>
									</ul>
									
								</li>
                                <li>
									<a href="javascript: void(0);" class="has-arrow waves-effect">
										<i class="bx bx bx-user "></i>
										<span key="t-layouts">Student</span>
									</a>
									<ul class="sub-menu" aria-expanded="true">
										<li>
											<a href="<?php echo base_url('Student_list');?>" class=" waves-effect">
												<i class="bx bxs-user-detail"></i>
												<span key="t-contacts">Student list</span>
											</a>
										</li>
                                        <li>
											<a href="<?php echo base_url('Visa_info_list');?>" class=" waves-effect">
												<i class="bx bxs-user-detail"></i>
												<span key="t-contacts">Student Visa list</span>
											</a>
										</li>
										<li>
											<a href="<?php echo base_url('Old_Student_list');?>" class=" waves-effect">
												<i class="bx bxs-user-detail"></i>
												<span key="t-contacts">Old Student</span>
											</a>
										</li>
									</ul>
									
								</li>
									<li>
									<a href="javascript: void(0);" class="has-arrow waves-effect">
										<i class="bx bx bx-cylinder "></i>
										<span key="t-layouts">Stock</span>
									</a>
									<ul class="sub-menu" aria-expanded="true">
										<li>
											<a href="<?php echo base_url('add_items');?>" class=" waves-effect">
												 <i class="bx bxs-add-to-queue "></i>
												<span key="t-contacts">Add Stock Item</span>
											</a>
											<a href="<?php echo base_url('stock_list');?>" class=" waves-effect">
												 <i class="mdi mdi-database-plus-outline"></i>
												<span key="t-contacts">Add Quantity</span>
											</a>
											
											
										</li>
									</ul>
									
								</li>
								
                           <li>
									<a href="javascript: void(0);" class="has-arrow waves-effect">
										<i class="bx bx-rupee"></i>
										<span key="t-layouts">Fee</span>
									</a>
									<ul class="sub-menu" aria-expanded="true">
										<li>
											<a href="<?php echo base_url('add_fee');?>" class=" waves-effect">
												 <i class="bx bxs-add-to-queue "></i>
												<span key="t-contacts">Add Fee</span>
											</a>
											<a href="<?php echo base_url('list_fee');?>" class=" waves-effect">
												 <i class="bx bx bx-list-ul "></i>
												<span key="t-contacts">All Fee list</span>
											</a>
											<a href="<?php echo base_url('pending_fee');?>" class=" waves-effect">
												 <i class="bx bx bx-rupee"></i>
												<span key="t-contacts">Pending Fee</span>
											</a>
											
											
										</li>
									</ul>
									
								</li>
 <li>
									<a href="javascript: void(0);" class="has-arrow waves-effect">
										<i class="bx bx-book-open "></i>
										<span key="t-layouts">Course</span>
									</a>
									<ul class="sub-menu" aria-expanded="true">
										<li>
											<a href="<?php echo base_url('add_course');?>" class=" waves-effect">
												 <i class="bx bxs-add-to-queue "></i>
												<span key="t-contacts">Manage Course</span>
											</a>
											<a href="<?php echo base_url('add_batch');?>" class=" waves-effect">
												 <i class="bx bxs-add-to-queue "></i>
												<span key="t-contacts">Manage Batch</span>
											</a>
											<a href="<?php echo base_url('duration');?>" class=" waves-effect">
												 <i class="bx bxs-add-to-queue "></i>
												<span key="t-contacts">Manage Duration</span>
											</a>
											<a href="<?php echo base_url('schedule');?>" class=" waves-effect">
												 <i class="bx bxs-add-to-queue "></i>
												<span key="t-contacts">Manage Schedule</span>
											</a>
										</li>
									</ul>
									
								</li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
			<?php echo $maincontent;?>
		<footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © CyberCreations.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by CyberCreations
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                        <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url('assets/libs/jquery/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/metismenu/metisMenu.min.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/simplebar/simplebar.min.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/node-waves/waves.min.js');?>"></script>

        <!-- apexcharts -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js');?>"></script>

        <!-- dashboard blog init -->
        <script src="<?php echo base_url('assets/js/pages/dashboard-blog.init.js');?>"></script>
        <script src="<?php echo base_url('assets/js/pages/form-repeater.int.js');?>"></script>
        <script src="<?php echo base_url('assets/js/pages/form-advanced.init.js');?>"></script>
        <script src="<?php echo base_url('assets/js/pages/datatables.init.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/datatables.net/js/jquery.dataTables.min.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js');?>"></script>
 
        <script src="<?php echo base_url('assets/libs/jszip/jszip.min.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/pdfmake/build/pdfmake.min.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/pdfmake/build/vfs_fonts.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.html5.min.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.print.min.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js');?>"></script>
        
        <!-- Responsive examples -->
        <script src="<?php echo base_url('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js');?>"></script>
        <script src="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js');?>"></script>

        <!-- Datatable init js -->
      <script type="text/javascript">

    $(".remove").click(function(){

        var id = $(this).parents("tr").attr("id");
        var url = $(this).attr("data-url");

    

       swal({

        title: "Are you sure?",

        text: "You will not be able to recover this data!",

        type: "warning",

        showCancelButton: true,

        confirmButtonClass: "btn-danger",

        confirmButtonText: "Yes, delete it!",

        cancelButtonText: "No, cancel plx!",

        closeOnConfirm: false,

        closeOnCancel: false

      },

      function(isConfirm) {

        if (isConfirm) {

          $.ajax({

             url: '<?php echo base_url();?>/'+ url +'/'+id,

             type: 'DELETE',

             error: function() {

                alert('Something is wrong');

             },

             success: function(data) {

                  $("#"+id).remove();

                  swal("Deleted!", "Your data has been deleted.", "success");

             }

          });

        } else {

          swal("Cancelled", "Your data is safe :)", "error");

        }

      });

     

    });

    

</script>
        <script src="  https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script src="<?php echo base_url('assets/js/app.js');?>"></script>
        <script src="<?php echo base_url('assets/js/pages/profile.init.js');?>"></script>
<script>
									!function(s){"use strict";var e,t=localStorage.getItem("language"),n="en";function a(e){document.getElementById("header-lang-img")&&("en"==e?document.getElementById("header-lang-img").src="assets/images/flags/us.jpg":"sp"==e?document.getElementById("header-lang-img").src="assets/images/flags/spain.jpg":"gr"==e?document.getElementById("header-lang-img").src="assets/images/flags/germany.jpg":"it"==e?document.getElementById("header-lang-img").src="assets/images/flags/italy.jpg":"ru"==e&&(document.getElementById("header-lang-img").src="assets/images/flags/russia.jpg"),localStorage.setItem("language",e),null==(t=localStorage.getItem("language"))&&a(n),s.getJSON("assets/lang/"+t+".json",function(e){s("html").attr("lang",t),s.each(e,function(e,t){"head"===e&&s(document).attr("title",t.title),s("[key='"+e+"']").text(t)})}))}function c(){for(var e=document.getElementById("topnav-menu-content").getElementsByTagName("a"),t=0,s=e.length;t<s;t++)"nav-item dropdown active"===e[t].parentElement.getAttribute("class")&&(e[t].parentElement.classList.remove("active"),null!==e[t].nextElementSibling&&e[t].nextElementSibling.classList.remove("show"))}function r(e){1==s("#light-mode-switch").prop("checked")&&"light-mode-switch"===e?(s("html").removeAttr("dir"),s("#dark-mode-switch").prop("checked",!1),s("#rtl-mode-switch").prop("checked",!1),s("#dark-rtl-mode-switch").prop("checked",!1),s("#bootstrap-style").attr("href","<?php echo base_url()?>/assets/css/bootstrap.min.css"),s("#app-style").attr("href","<?php echo base_url()?>/assets/css/app.min.css"),sessionStorage.setItem("is_visited","light-mode-switch")):1==s("#dark-mode-switch").prop("checked")&&"dark-mode-switch"===e?(s("html").removeAttr("dir"),s("#light-mode-switch").prop("checked",!1),s("#rtl-mode-switch").prop("checked",!1),s("#dark-rtl-mode-switch").prop("checked",!1),s("#bootstrap-style").attr("href","<?php echo base_url()?>/assets/css/bootstrap-dark.min.css"),s("#app-style").attr("href","assets/css/app-dark.min.css"),sessionStorage.setItem("is_visited","dark-mode-switch")):1==s("#rtl-mode-switch").prop("checked")&&"rtl-mode-switch"===e?(s("#light-mode-switch").prop("checked",!1),s("#dark-mode-switch").prop("checked",!1),s("#dark-rtl-mode-switch").prop("checked",!1),s("#bootstrap-style").attr("href","assets/css/bootstrap-rtl.min.css"),s("#app-style").attr("href","assets/css/app-rtl.min.css"),s("html").attr("dir","rtl"),sessionStorage.setItem("is_visited","rtl-mode-switch")):1==s("#dark-rtl-mode-switch").prop("checked")&&"dark-rtl-mode-switch"===e&&(s("#light-mode-switch").prop("checked",!1),s("#rtl-mode-switch").prop("checked",!1),s("#dark-mode-switch").prop("checked",!1),s("#bootstrap-style").attr("href","assets/css/bootstrap-dark-rtl.min.css"),s("#app-style").attr("href","assets/css/app-dark-rtl.min.css"),s("html").attr("dir","rtl"),sessionStorage.setItem("is_visited","dark-rtl-mode-switch"))}function l(){document.webkitIsFullScreen||document.mozFullScreen||document.msFullscreenElement||(console.log("pressed"),s("body").removeClass("fullscreen-enable"))}s("#side-menu").metisMenu(),s("#vertical-menu-btn").on("click",function(e){e.preventDefault(),s("body").toggleClass("sidebar-enable"),992<=s(window).width()?s("body").toggleClass("vertical-collpsed"):s("body").removeClass("vertical-collpsed")}),s("#sidebar-menu a").each(function(){var e=window.location.href.split(/[?#]/)[0];this.href==e&&(s(this).addClass("active"),s(this).parent().addClass("mm-active"),s(this).parent().parent().addClass("mm-show"),s(this).parent().parent().prev().addClass("mm-active"),s(this).parent().parent().parent().addClass("mm-active"),s(this).parent().parent().parent().parent().addClass("mm-show"),s(this).parent().parent().parent().parent().parent().addClass("mm-active"))}),s(document).ready(function(){var e;0<s("#sidebar-menu").length&&0<s("#sidebar-menu .mm-active .active").length&&(300<(e=s("#sidebar-menu .mm-active .active").offset().top)&&(e-=300,s(".vertical-menu .simplebar-content-wrapper").animate({scrollTop:e},"slow")))}),s(".navbar-nav a").each(function(){var e=window.location.href.split(/[?#]/)[0];this.href==e&&(s(this).addClass("active"),s(this).parent().addClass("active"),s(this).parent().parent().addClass("active"),s(this).parent().parent().parent().addClass("active"),s(this).parent().parent().parent().parent().addClass("active"),s(this).parent().parent().parent().parent().parent().addClass("active"),s(this).parent().parent().parent().parent().parent().parent().addClass("active"))}),s('[data-bs-toggle="fullscreen"]').on("click",function(e){e.preventDefault(),s("body").toggleClass("fullscreen-enable"),document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement?document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen&&document.webkitCancelFullScreen():document.documentElement.requestFullscreen?document.documentElement.requestFullscreen():document.documentElement.mozRequestFullScreen?document.documentElement.mozRequestFullScreen():document.documentElement.webkitRequestFullscreen&&document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT)}),document.addEventListener("fullscreenchange",l),document.addEventListener("webkitfullscreenchange",l),document.addEventListener("mozfullscreenchange",l),s(".right-bar-toggle").on("click",function(e){s("body").toggleClass("right-bar-enabled")}),s(document).on("click","body",function(e){0<s(e.target).closest(".right-bar-toggle, .right-bar").length||s("body").removeClass("right-bar-enabled")}),function(){if(document.getElementById("topnav-menu-content")){for(var e=document.getElementById("topnav-menu-content").getElementsByTagName("a"),t=0,s=e.length;t<s;t++)e[t].onclick=function(e){"#"===e.target.getAttribute("href")&&(e.target.parentElement.classList.toggle("active"),e.target.nextElementSibling.classList.toggle("show"))};window.addEventListener("resize",c)}}(),[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function(e){return new bootstrap.Tooltip(e)}),[].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map(function(e){return new bootstrap.Popover(e)}),[].slice.call(document.querySelectorAll(".offcanvas")).map(function(e){return new bootstrap.Offcanvas(e)}),window.sessionStorage&&((e=sessionStorage.getItem("is_visited"))?(s(".right-bar input:checkbox").prop("checked",!1),s("#"+e).prop("checked",!0),r(e)):sessionStorage.setItem("is_visited","light-mode-switch")),s("#light-mode-switch, #dark-mode-switch, #rtl-mode-switch, #dark-rtl-mode-switch").on("change",function(e){r(e.target.id)}),s("#password-addon").on("click",function(){0<s(this).siblings("input").length&&("password"==s(this).siblings("input").attr("type")?s(this).siblings("input").attr("type","input"):s(this).siblings("input").attr("type","password"))}),null!=t&&t!==n&&a(t),s(".language").on("click",function(e){a(s(this).attr("data-lang"))}),s(window).on("load",function(){s("#status").fadeOut(),s("#preloader").delay(350).fadeOut("slow")}),Waves.init(),s("#checkAll").on("change",function(){s(".table-check .form-check-input").prop("checked",s(this).prop("checked"))}),s(".table-check .form-check-input").change(function(){s(".table-check .form-check-input:checked").length==s(".table-check .form-check-input").length?s("#checkAll").prop("checked",!0):s("#checkAll").prop("checked",!1)})}(jQuery);
                                    profile_pic.onchange = evt => {
												  const [file] = profile_pic.files
												  if (file) {
													blah.src = URL.createObjectURL(file)
												  }
												}
												</script>
    </body>

</html>
