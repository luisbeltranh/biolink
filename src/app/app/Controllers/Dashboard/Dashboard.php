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
        $modelo = new EnlaceModel();

        if ($this->request->getMethod() == 'POST') {
            $rules = [
                'titulo' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'El campo "Título" es requerido',
                    ]
                ],
                'enlace_url' => [
                    'rules' => 'required|valid_url_strict',
                    'errors' => [
                        'required' => 'El campo "URL del Enlace" es requerido',
                        'valid_url_strict' => 'El campo "URL del Enlace" debe ser una URL valida',
                    ]

                ],
            ];
            $data = $this->request->getPost(array_keys($rules));
            if ($this->validateData($data, $rules)) {
                $validData = $this->validator->getValidated();
                $modelo->insert($validData);
                return redirect()->to('/dashboard/links');
            }
            // return redirect()->to('/dashboard/new_link')->withInput();
            //return redirect()->back()->withInput();
        }

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
    public function erase_link($id = null)
    {
        if (isset($id)) {
            $modelo = new EnlaceModel();
            $enlace = $modelo->find($id);
            if ($enlace) {
                $modelo->delete($id);
            }
            return redirect()->to('/dashboard/links');
        }
    }
}
