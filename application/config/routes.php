<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route["default_controller"] = "SiteController/index";

$route['post'] = "PostController/index";
$route['post/create']['POST'] = "PostController/create";
$route['post/delete']['POST'] = "PostController/delete";
$route['post/get']['GET'] = "PostController/get_company_posts";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;