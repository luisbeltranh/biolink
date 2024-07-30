<?php

namespace App\Controllers;

class Ejemplo extends BaseController
{
    public function index()
    {
        $datos['estaLogeado'] = auth()->loggedIn();
        $datos['estilo'] = '';
        echo view('templates/head-ejemplo', $datos);
        //echo view('templates/topmenu');
        //echo view('templates/navmenu');
        echo view('ejemplo');
        echo view('templates/footer-ejemplo');
    }
    public function square()
    {
        $datos['estaLogeado'] = auth()->loggedIn();
        $datos['estilo'] = 'square';
        echo view('templates/head-ejemplo', $datos);
        //echo view('templates/topmenu');
        //echo view('templates/navmenu');
        echo view('ejemplo-square');
        echo view('templates/footer-ejemplo');
    }
    public function video()
    {
        $datos['estaLogeado'] = auth()->loggedIn();
        $datos['estilo'] = 'video';
        echo view('templates/head-ejemplo', $datos);
        //echo view('templates/topmenu');
        //echo view('templates/navmenu');
        echo view('ejemplo-video');
        echo view('templates/footer-ejemplo');
    }
    public function gradiente()
    {
        $datos['estaLogeado'] = auth()->loggedIn();
        $datos['estilo'] = 'gradiente';

        echo view('templates/head-ejemplo', $datos);
        //echo view('templates/topmenu');
        //echo view('templates/navmenu');
        echo view('ejemplo-gradient');
        echo view('templates/footer-ejemplo');
    }
    public function tema1()
    {
        $datos['estaLogeado'] = auth()->loggedIn();
        $datos['estilo'] = 'tema1';

        echo view('templates/head-ejemplo', $datos);
        //echo view('templates/topmenu');
        //echo view('templates/navmenu');
        echo view('tema1');
        echo view('templates/footer-tema');
    }
}
