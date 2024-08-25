<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\temaModel;
use CodeIgniter\Shield\Auth;


class Tema extends BaseController

{
    public function index($tema_nombre = null)
    {
        $datos['estaLogeado'] = auth()->loggedIn();
        $datos['estilo'] = $tema_nombre;
        echo view('templates/head-tema', $datos);
        //echo view('templates/topmenu');
        //echo view('templates/navmenu');
        echo view('tema');
        echo view('templates/footer-tema');
    }
    public function tema2()
    {
        $modelo = new temaModel();
        $temas = $modelo->find('1');

        $datos['estaLogeado'] = auth()->loggedIn();
        $datos['estilo'] = 'tema2';
        $datos['tema'] = $temas;
        echo view('templates/head-ejemplo', $datos);
        //echo view('templates/topmenu');
        //echo view('templates/navmenu');
        echo view('tema2');
        echo view('templates/footer-tema');
    }
}
