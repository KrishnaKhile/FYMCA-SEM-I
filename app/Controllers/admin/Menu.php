<?php

namespace App\Controllers\admin;
use App\Models\adminmodel;
use App\Controllers\BaseController;

class Menu extends BaseController
{
    public function index()
    {
        echo view('Product');
		
    }
    public function new()
    {
        $data=['meta-title'=>'new data',
        'title'=>'Create new Student record',];


        if($this->request->getmethod()=='post')
        {
        $model=new adminmodel();
        $model->save($_POST);
        }
        return view('shop.php',$data);
    }
   

}
