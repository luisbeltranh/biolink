<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;


class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('dashboard/dashboard');
    }
}
