<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    public function index(): string
    {
        $datos['estaLogeado'] = auth()->loggedIn();
        echo view('templates/head', $datos);
        echo view('templates/topmenu');
        //echo view('templates/navmenu');
        echo view('inicio');
        echo view('templates/footer');
    }
}
