<?php

/**
 * Admin Panel Routes
 * 
 * Note: In production, these routes should be protected with authentication middleware:
 * Route::middleware(['auth', 'admin'])->group(function () { ... });
 */

// Admin Dashboard
Route::get('/admin', 'Admin\DashboardController@index');
Route::get('/admin/dashboard', 'Admin\DashboardController@index');
