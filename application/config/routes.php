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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Dashboard
$route['dashboard'] = 'dashboard/main';
$route['region_view'] = 'dashboard/regionView';

//item management
$route['product'] = 'product/details';
$route['upload_prod'] = 'product/upload_prod';
$route['upload_product_batch'] = 'product/upload_product_batch';
$route['cetakpdf_produk'] = 'product/cetakpdf_produk';
$route['upload_single_product'] = 'product/upload_single_product';

//supplier management
$route['supplier'] = 'supplier/profile';
$route['negotiation'] = 'supplier/negotiation';
$route['supplier_search'] = 'supplier/supplier_search';
$route['upload_negotiation_batch'] = 'supplier/upload_batch';
$route['upload_single_negotiation'] = 'supplier/upload_single_negotiation';
$route['nego_approve'] = 'supplier/nego_approve';

//logistic management
$route['logistic'] = 'logistic/profile';
$route['upload_single_logistic'] = 'logistic/upload_single_logistic';
$route['upload_logistic_batch'] = 'logistic/upload_logistic_batch';
$route['logistic_search'] = 'logistic/search';
$route['upload_logistic'] = 'logistic/upload';
$route['inventory'] = 'logistic/inventory';

//shop management
$route['shop'] = 'shop/profile';
$route['stat_shop'] = 'shop/stat_shop';
$route['shop_search'] = 'shop/shop_search';

//customer management
$route['customer'] = 'customer/profile';
$route['stat_customer'] = 'customer/stat';
$route['loyalty'] = 'customer/loyalty';
$route['customer_search'] = 'customer/customer_search';

//human management
$route['upload_human'] = 'human/upload';
$route['update_human'] = 'human/update';
$route['upload_batch'] = 'human/upload_batch';

//ticketing
$route['ticket'] = 'ticket';
$route['cetakpdf_ticket']='ticket/cetakpdf_ticket';
$route['exportExcel'] = 'ticket/exportExcel';

$route['tracking_order'] = 'logistic/trackingOrder';
$route['user_registration'] = 'human/userRegistration';