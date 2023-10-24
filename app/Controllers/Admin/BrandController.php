<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BrandModel;

class BrandController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new BrandModel();
    }

    public function index()
    {
        //Brand list
        $list = (new BrandModel())->where("state", "1")->findAll();

        $data = [
            'title' => 'Home',
            'content' => view('admin/brand/list', ['list' => $list]),

        ];

        return view('templates/templateDashboard', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create',
            'content' => view('admin/brand/create'),

        ];

        return view('templates/templateDashboard', $data);
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $validation = \Config\Services::validation();

            $rules = [
                'description' => 'required|min_length[3]'
            ];

            if ($this->validate($rules)) {
                $description = $this->request->getPost('description');

                $this->model->insert([
                    "description" => $description
                ]);

                return redirect()->to('admin/brand');
            } else {
                $data = [
                    'title' => 'Edit',
                    'content' => view('admin/brand/add'),

                ];

                return view('templates/templateDashboard', $data);
            }
        } else {
            $data = [
                'title' => 'Edit',
                'content' => view('admin/brand/add'),

            ];

            return view('templates/templateDashboard', $data);
        }
    }

    public function edit($id)
    {
        $model = $this->model->find($id);

        if ($this->request->is('post')) {
            $validation = \Config\Services::validation();

            $rules = [
                'description' => 'required|min_length[3]'
            ];

            if ($this->validate($rules)) {
                $description = $this->request->getPost('description');

                $this->model->update($id, [
                    "description" => $description
                ]);

                return redirect()->to('admin/brand');
            } else {

                $data = [
                    'title' => 'Edit',
                    'content' => view('admin/brand/edit', ['model' => $model]),

                ];

                return view('templates/templateDashboard', $data);
            }
        } else {

            $data = [
                'title' => 'Edit',
                'content' => view('admin/brand/edit', ['model' => $model]),

            ];

            return view('templates/templateDashboard', $data);
        }
    }

    public function delete($id)
    {
        $model = $this->model->find($id);

        if ($model) {
            $this->model->update($id, ["state" => "0"]);
        } else {
           
        }
        return redirect()->to('admin/brand');
    }
}
