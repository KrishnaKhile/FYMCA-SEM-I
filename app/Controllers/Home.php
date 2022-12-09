<?php

namespace App\Controllers;

use App\Controllers\admin\Myshop;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
	
	function validation()
{
$Shop=new Shop();
echo $Shop->product1('Laptop','HP');
$MyShop=new MyShop();
echo $MyShop->product1('Laptop1','HP1');
}

}
