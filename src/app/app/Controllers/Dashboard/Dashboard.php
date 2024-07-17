<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;


class Dashboard extends BaseController
{
    public function index()
    {
        $datos['estaLogeado'] = auth()->loggedIn();
        echo view('dashboard/templates/head', $datos);
        echo view('dashboard/templates/topmenu');
        echo view('dashboard/templates/sidebar');
        echo view('dashboard/templates/breadcrumbs');
        echo view('dashboard/dashboard');
        echo view('dashboard/templates/footer');
    }
    public function ver()
    {
        die('ver');
    }
}
