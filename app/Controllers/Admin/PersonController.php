<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PersonModel;
use Faker\Provider\ar_EG\Person;

class PersonController extends BaseController
{
    public function index()
    {
         //Brand list
         $list = (new PersonModel())->where("state","1")->findAll();

         $data = [
             'title' => 'Home',
             'content' => view('admin/brand/list',['list'=>$list]),
             
         ];
 
         return view('templates/templateDashboard', $data);
    }
}
