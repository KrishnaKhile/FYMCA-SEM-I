<?php
namespace App\Controllers;

class Hello3 extends BaseController
{
	public function index()
	{
		$a=56;
		$b=10;
		$c=$a+$b;
		echo "<br>Sum of a & b is :".$c;
	}
}
?>