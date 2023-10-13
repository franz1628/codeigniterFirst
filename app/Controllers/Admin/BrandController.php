<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BrandModel;

class BrandController extends BaseController
{
    private $model;

    public function __construct(){
        $this->model = new BrandModel();
    }

    public function index()
    {
        //Brand list
        $list = (new BrandModel())->where("state","1")->findAll();

        $data = [
            'title' => 'Home',
            'content' => view('admin/brand/list',['list'=>$list]),
            
        ];

        return view('templates/templateDashboard', $data);
    }

    public function edit($id)
    {
        //Brand list
        $model = $this->model->find($id);

        $data = [
            'title' => 'Edit',
            'content' => view('admin/brand/edit',['model'=>$model]),
            
        ];

        return view('templates/templateDashboard', $data);
    }
}
