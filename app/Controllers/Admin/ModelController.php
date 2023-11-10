<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelModel;

class ModelController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new ModelModel();
    }

    public function index()
    {
        $list = $this->model->getAllModel();

        $data = [
            'title' => 'Home',
            'content' => view('admin/model/list', ['list' => $list]),
        ];

        return view('templates/templateDashboard', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create',
            'content' => view('admin/model/create'),

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

                return redirect()->to('admin/model');
            } else {
                $data = [
                    'title' => 'Edit',
                    'content' => view('admin/model/add'),

                ];

                return view('templates/templateDashboard', $data);
            }
        } else {
            $data = [
                'title' => 'Edit',
                'content' => view('admin/model/add'),

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

                return redirect()->to('admin/model');
            } else {

                $data = [
                    'title' => 'Edit',
                    'content' => view('admin/model/edit', ['model' => $model]),

                ];

                return view('templates/templateDashboard', $data);
            }
        } else {

            $data = [
                'title' => 'Edit',
                'content' => view('admin/model/edit', ['model' => $model]),

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
        return redirect()->to('admin/model');
    }
}
