<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BrandModel;

class BrandController extends BaseController
{
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
}
