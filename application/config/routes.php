<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route["default_controller"]            = "SiteController/index";

$route['post']                          = "ForumController/index";
$route['post/delete']['POST']           = "ForumController/delete";
$route['post/get']['GET']               = "ForumController/get_company_posts";
$route['post/view/(:any)']              = "ForumController/view/$1";
$route['post/view']                     = "ForumController/view";
$route['post/create/(:any)']['GET']     = "ForumController/create_page/$1";

# project
$route['project/(:any)']                = "ForumController/project/$1";
# api
$route['post/create/(:any)']['POST']    = "ForumController/create/$1";
$route['post/reply/(:any)']['POST']     = "ForumController/create_reply/$1";

$route['api/post/react']['POST']        = "ForumController/react";

$route['404_override']                  = '';
$route['translate_uri_dashes']          = FALSE;