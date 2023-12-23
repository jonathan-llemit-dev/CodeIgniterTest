<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// default routes
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// route for hello function on SampleController that only echo "Hello World"
$route['hello'] = 'SampleController/hello';

// route for sample function on SampleController that displays sample_page on view
$route['sample'] = 'SampleController/sample';

// route for aboutMe function on SampleController that accepts parameter for $name
$route['about/(:any)'] = 'SampleController/aboutMe/$1';

// route for aboutMeView function on SampleController that accepts multi parameters and display it on view
$route['aboutMeView/(:any)/(:num)/(:any)'] = 'SampleController/aboutMeView/$1/$2/$3';

// route for index function on StudentsController that uses model
$route['students'] = 'StudentsController/index';

// main table
$route['students_portal'] = 'students_portal/StudentsPortalController/index';
// add student page
$route['student/add'] = 'students_portal/StudentsPortalController/create';
// add student function
$route['student/store'] = 'students_portal/StudentsPortalController/store';
// edit student page
$route['student/edit/(:num)'] = 'students_portal/StudentsPortalController/edit/$1';
// edit student function
$route['student/update/(:num)'] = 'students_portal/StudentsPortalController/update/$1';
// student delete function
$route['student/delete/(:num)'] = 'students_portal/StudentsPortalController/delete/$1';

// login
$route['login'] = 'auth/AuthController/index';
