<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'content' => view('dashboard/home'),
        ];

        return view('templates/templateDashboard', $data);
    }
}
