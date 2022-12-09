<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;

class Myshop extends BaseController
{
    public function index()
    {
        return view('Shop');
    }
	public function product()
	{
		return view('Product');
	}
	public function product1($type,$productid)
	{
		echo'<h2>This is a product of our shop:'.$type.' With id '.$productid.'</h2>';
	}
}
