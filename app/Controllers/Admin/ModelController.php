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
        $list = (new ModelModel())->where("state", "1")->findAll();

        $data = [
            'title' => 'Home',
            'content' => view('admin/model/list', ['list' => $list]),

        ];

        return view('templates/templateDashboard', $data);
    }
}
