<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TypeDocumentModel;

class TypeDocumentController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new TypeDocumentModel();
    }

    public function index()
    {
        //typeDocument list
        $list = (new TypeDocumentModel())->where("state", "1")->findAll();

        $data = [
            'title' => 'Home',
            'content' => view('admin/typeDocument/list', ['list' => $list]),

        ];

        return view('templates/templateDashboard', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create',
            'content' => view('admin/typeDocument/create'),

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

                return redirect()->to('admin/typeDocument');
            } else {
                $data = [
                    'title' => 'Edit',
                    'content' => view('admin/typeDocument/add'),

                ];

                return view('templates/templateDashboard', $data);
            }
        } else {
            $data = [
                'title' => 'Edit',
                'content' => view('admin/typeDocument/add'),

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

                return redirect()->to('admin/typeDocument');
            } else {

                $data = [
                    'title' => 'Edit',
                    'content' => view('admin/typeDocument/edit', ['model' => $model]),

                ];

                return view('templates/templateDashboard', $data);
            }
        } else {

            $data = [
                'title' => 'Edit',
                'content' => view('admin/typeDocument/edit', ['model' => $model]),

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
        return redirect()->to('admin/typeDocument');
    }
}
