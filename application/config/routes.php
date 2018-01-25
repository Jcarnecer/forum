<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route["default_controller"] = "SiteController/index";

$route['post'] = "PostController/index";
$route['post/create']['POST'] = "PostController/create";
$route['post/delete']['POST'] = "PostController/delete";
$route['post/get']['GET'] = "PostController/get_company_posts";
$route['post/view/(:any)'] = "PostController/view/$1";
$route['post/view'] = "PostController/view";
$route['post/create']['GET'] = "PostController/create_page";

# api
$route['post/create']['POST'] = "PostController/create";
$route['post/reply/(:any)']['POST'] = "PostController/create_reply/$1";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;