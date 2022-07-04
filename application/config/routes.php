<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'AdminLogin';
$route['404_override'] = '';
$route['dashboard'] = 'Dashboard/dashboard';
$route['members'] = 'Manage_staff';
$route['profile/(:any)'] = 'Manage_staff/view_teacher/$1';
$route['profile'] = 'Dashboard/profile';
$route['walkins_list'] = 'Manage_walkins';
$route['add_teacher'] = 'Manage_staff/add_teacher';
$route['study_visa/(:any)'] = 'Manage_study_visa/Enroll/$1';
$route['stock_list'] = 'Manage_stock';
$route['add_items'] = 'Manage_stock/add_items';
$route['detail/(:any)'] = 'Manage_stock/item_detail/$1';
$route['add_quantity/(:any)'] = 'Manage_stock/add_quantity/$1';
$route['save_quantity/(:any)']='Manage_stock/save_quantity/$1';
$route['delete_items/(:any)']='Manage_stock/delete_items/$1';

$route['add_walkins'] = 'Manage_walkins/add_walkins';
$route['preview/(:any)'] = 'Manage_walkins/preview/$1';
$route['enroll/(:any)'] = 'Manage_walkins/Enroll/$1';
$route['fetch_batch'] = 'Manage_walkins/fetch_batch';
$route['fetch_duration'] = 'Manage_walkins/fetch_duration';
$route['fetch_fee'] = 'Manage_walkins/fetch_fee';

$route['list_fee'] = 'Manage_fee';
$route['pending_fee']='Manage_fee/pending_fee';
$route['add_fee']='Manage_fee/add_fee';
$route['add_fee/(:any)']='Manage_fee/add_fee/$1';
$route['update_fee']='Manage_fee/update_fee';

$route['fee_detail/(:any)'] = 'Manage_fee/fee_detail/$1';
$route['month']='API/month';
$route['Notification'] = 'Manage_noti';
$route['Notification/(:any)'] = 'Manage_noti/view/$1';

$route['course_list'] = 'Manage_course';
$route['add_course'] = 'Manage_course/create_course';
$route['delete_course/(:any)'] = 'Manage_course/delete_course/$1';
$route['add_batch'] = 'Manage_course/create_batch';
$route['duration'] = 'Manage_course/create_duration';
$route['schedule'] = 'Manage_course/create_schedule';
$route['delete_batch/(:any)'] = 'Manage_course/delete_batch/$1';
$route['delete_due/(:any)'] = 'Manage_course/delete_due/$1';

$route['Student_list']='Manage_student';
$route['Visa_info_list']='Manage_study_visa';
$route['idcard/(:any)']='Manage_student/idcard/$1';
$route['student/(:any)']='Manage_student/student_info/$1';
$route['walkins'] = 'Dashboard/walkins';
$route['logout'] = 'Dashboard/logout';
$route['admin_login_check'] = 'AdminLogin/admin_login_check';

$route['translate_uri_dashes'] = FALSE;
