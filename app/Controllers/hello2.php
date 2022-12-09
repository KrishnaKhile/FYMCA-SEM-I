<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Hello2 extends Controller
{
	public function index()
	{
		$data['msg']="Hello krishna from codeigniter view...!";
		echo view('helloview',$data);
	}
}
?>
