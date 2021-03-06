<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Default Routes
$route['default_controller'] = 'Post';

// Dashboard Routes
$route['dashboard/user'] = 'dashboard/users';
$route['dashboard/user/detail'] = 'dashboard/user_detail';

$route['dashboard/post'] = 'dashboard/posts';
$route['dashboard/post/create'] = 'dashboard/posts_create';
$route['dashboard/post/publish'] = 'dashboard/posts_publish';
$route['dashboard/post/drafts'] = 'dashboard/posts_drafts';
$route['dashboard/post/favorites'] = 'dashboard/posts_favorites';
$route['dashboard/post/trash'] = 'dashboard/posts_trash';

$route['dashboard/setting'] = 'dashboard/settings';

// Post Routes
$route['post/pdf'] = 'post/pdf';
$route['post/list'] = 'post/index';
$route['post/list/(:any)'] = 'post/index';
$route['post/create'] = 'post/create';
$route['post/(:any)'] = 'post/show/$1';
$route['post/(:any)/edit'] = 'post/edit/$1';
$route['post/delete/(:any)'] = 'post/delete';

// Post Comment Routes
$route['post/comment/(:any)/create'] = 'post/create_comment/$1';
$route['post/comment/(:any)/edit'] = 'post/edit_comment/$1';
$route['post/comment/(:any)/delete'] = 'post/delete_comment/$1';

// User Password Routes
$route['user/setting'] = 'user/index_setting';
$route['user/photo/edit'] = 'user/edit_photo';
$route['user/photo/delete'] = 'user/delete_photo';
$route['user/password/change'] = 'user/change_password';

// User Routes
$route['user/post'] = 'user/posts';
$route['user/(:any)'] = 'user/posts/$1';
$route['user/(:any)/(:any)'] = 'user/posts/$1';

// Login Routes
$route['login'] = 'login/index';
$route['login/store'] = 'login/store';
$route['logout'] = 'login/logout';
$route['register'] = 'user/create';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
