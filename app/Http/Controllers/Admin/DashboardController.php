<?php

namespace App\Http\Controllers\Admin;

class DashboardController
{
    /**
     * Display the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }
}
