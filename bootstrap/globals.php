<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 3/8/17
 * Time: 4:05 PM
 */

// Globalize the Auth module to access it within template partials
$view->getEnvironment()->addGlobal('auth', [
    'check'         	=>  $container->auth->check(),
    'user'          	=>  $container->auth->user(),
    'profile'       	=>  $container->auth->profile(),
    'userMaster'        =>  $container->auth->userMaster()
]);

$view->getEnvironment()->addGlobal('HR', [
    'countries'			=>	$container->HR->allCountries(),
    'states'            =>  $container->HR->allStates(),
    'cities'			=>  $container->HR->allCities(),
    'applicants'        =>  $container->HR->allApplicants(),        // Security
    'languages'         =>  $container->HR->allLanguages(),
    'departments'       =>  $container->HR->allDepartments(),
    'departmentHeads'   =>  $container->HR->allDepartmentHeads(),   // Security
    'employees'         =>  $container->HR->allEmployees(),         // Security
    'titles'            =>  $container->HR->allTitles()
]);

$view->getEnvironment()->addGlobal('OPS', [
    'Brands'            =>  $container->OPS->allBrands(),
    'Categories'        =>  $container->OPS->allCategories()
]);

// Add the flash message
$view->getEnvironment()->addGlobal('flash', $container->flash);
