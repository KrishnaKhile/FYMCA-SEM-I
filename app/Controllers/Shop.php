<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('Shop');
    }
	public function product1($type,$productid)
	{
		echo'<h2>This is a product of our shop:'.$type.' With id '.$productid.'</h2>';
	}
}
