<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\adminmodel;

class ad extends BaseController
{
    public function index()
    {

        echo view('adminview/index');
    }
    public function login()
    {
        echo view('adminview/login');
    }
    public function register()
    {
        echo view('adminview/register');
    }
    public function preparation($transactionid)
    {
        $model = new adminmodel();
        $data['transactio'] = $model->getpreparation();
        $data['tran'] = $model->getpre($transactionid);

        if ($this->request->getMethod() == 'post') {
            $model = new adminmodel();
            $model->updatepre($transactionid);
        return redirect()->to(base_url('admin/ad/preparation/1')) ;

        }
       
        echo view('adminview/preparation', $data);
    }
   
    public function discarded($transactionid){
        if ($this->request->getMethod() == 'post') {
            $model = new adminmodel();
           
            $data=[
                // 'acceptedqty'=> $this->request->getPost('acceptedqty'),
                'orderedqty'=>  $this->request->getPost('orderedqty'),
                ];
            //     // print_r($transactionid);
            //     // print_r($data);
           
             print_r($data);
            $model->updatedis( $data,$transactionid);
            return redirect()->to(base_url('admin/ad/preparation/1')) ;
        }
        echo view('adminview/preparation');
    }
    public function neworder($transactionid)
    {
        $model = new adminmodel();
        $data['transactio'] = $model->getNewOrder();
        $data['tran'] = $model->getNew($transactionid);
        
        if ($this->request->getMethod() == 'post') {
            $model = new adminmodel();
           
            // $no = $model->Find($transactionid);
            $data=[
                'acceptedqty'=> $this->request->getPost('acceptedqty'),
                'discardedqty'=>  $this->request->getPost('discardedqty'),
                ];
                // print_r($transactionid);
                // print_r($data);
           

            $model->updatenew($data,$transactionid);
            return redirect()->to(base_url('admin/ad/neworder/1')) ;
           
        }
        echo view('adminview/neworder', $data);
    }
    

    public function invoice($transactionid)
    {
        $model = new adminmodel();
        $data['transactio'] = $model->getinv();
        $data['tran'] = $model->getpre($transactionid);

        if ($this->request->getMethod() == 'post') {
            $model = new adminmodel();
            $model->updateinv($transactionid);
        return redirect()->to(base_url('admin/ad/invoice/1')) ;

        }
       
        
        echo view('adminview/invoice',$data);
    }
    public function shipped($transactionid)
    {
        $model = new adminmodel();
        $data['transactio'] = $model->getship();
        $data['tran'] = $model->getpre($transactionid);

        // if ($this->request->getMethod() == 'post') {
        //     $model = new adminmodel();
        //     $model->updateinv($transactionid);
        // return redirect()->to(base_url('admin/ad/invoice/1')) ;

        // }
        echo view('adminview/shipped',$data);
    }
    public function discard($transactionid)
    {
        $model = new adminmodel();
        $data['transactio'] = $model->getdiscard();
        $data['tran'] = $model->getpre($transactionid);
        echo view('adminview/discard',$data);
    }
}
