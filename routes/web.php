<?php

/**
 * Admin Panel Routes
 */

// Admin Dashboard
$router->get('/admin', 'Admin\DashboardController@index');
$router->get('/admin/dashboard', 'Admin\DashboardController@index');
