<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\EnlaceModel;
use CodeIgniter\Shield\Auth;

class Dashboard extends BaseController
{
    public function index()
    {
        $datos['estaLogeado'] = auth()->loggedIn();
        $datos['nombreUsuario'] = auth()->getUser()->username;
        $datos['titulo_breadcrumbs'] = "Dashboard";
        $datos['menu_activo'] = "dashboard";
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
    public function appearance()
    {
        $datos['estaLogeado'] = auth()->loggedIn();
        $datos['nombreUsuario'] = auth()->getUser()->username;
        $datos['titulo_breadcrumbs'] = "Apariencia";
        $datos['menu_activo'] = "apariencia";
        echo view('dashboard/templates/head', $datos);
        echo view('dashboard/templates/topmenu');
        echo view('dashboard/templates/sidebar');
        echo view('dashboard/templates/breadcrumbs');
        echo view('dashboard/appearance');
        echo view('dashboard/templates/footer');
    }
    public function links()
    {
        $modelo = new EnlaceModel();
        $enlaces = $modelo->findAll();
        $datos['estaLogeado'] = auth()->loggedIn();
        $datos['nombreUsuario'] = auth()->getUser()->username;
        $datos['titulo_breadcrumbs'] = "Enlaces";
        $datos['menu_activo'] = "enlaces";
        $datos['enlaces'] = $enlaces;
        echo view('dashboard/templates/head', $datos);
        echo view('dashboard/templates/topmenu');
        echo view('dashboard/templates/sidebar');
        echo view('dashboard/templates/breadcrumbs');
        echo view('dashboard/links');
        echo view('dashboard/templates/footer');
    }
    public function new_link()
    {
        helper('form');
        if ($this->request->getMethod() == 'POST') {
            $rules = [
                'tituloEnlace' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'El campo "Título" es requerido',
                    ]
                ],
                'urlEnlace' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'El campo "URL del Enlace" es requerido',
                    ]

                ],
            ];
            $data = $this->request->getPost(array_keys($rules));
            if ($this->validateData($data, $rules)) {
                $validData = $this->validator->getValidated();
                return redirect()->to('/dashboard/links');
            }

            // return redirect()->to('/dashboard/new_link')->withInput();
            //return redirect()->back()->withInput();
        }

        $modelo = new EnlaceModel();
        $enlaces = $modelo->findAll();
        $datos['estaLogeado'] = auth()->loggedIn();
        $datos['nombreUsuario'] = auth()->getUser()->username;
        $datos['titulo_breadcrumbs'] = "Nuevo Enlace";
        $datos['menu_activo'] = "enlaces";
        $datos['enlaces'] = $enlaces;
        echo view('dashboard/templates/head', $datos);
        echo view('dashboard/templates/topmenu');
        echo view('dashboard/templates/sidebar');
        echo view('dashboard/templates/breadcrumbs');
        echo view('dashboard/new_link');
        echo view('dashboard/templates/footer');
    }
    public function shop()
    {
        $datos['estaLogeado'] = auth()->loggedIn();
        $datos['nombreUsuario'] = auth()->getUser()->username;
        $datos['titulo_breadcrumbs'] = "Enlaces";
        $datos['menu_activo'] = "tienda";
        echo view('dashboard/templates/head', $datos);
        echo view('dashboard/templates/topmenu');
        echo view('dashboard/templates/sidebar');
        echo view('dashboard/templates/breadcrumbs');
        echo view('dashboard/shop');
        echo view('dashboard/templates/footer');
    }
}
