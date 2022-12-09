<?php
namespace App\Models;
use CodeIgniter\Model;
class adminmodel extends Model
{
//    protected $table='transaction';
//    protected $primaryKey='transactionid';
//   protected $useAutoIncrement=false;
//    protected $allowedFields = ['transactionid', 'acceptedqty','discardedqty'];

   public function getNewOrder(){
      $db= \config\Database::connect();
      $query = $db->query('SELECT * FROM `transaction`where status="not accepted"');
      $result = $query->getResult();
     // $ordercount=count($result);
     // print_r($ordercount);
      if(count($result)>0)
      {
         return $result;
      }
      else
      {
         return false;
      }

   }
   public function getNew($transactionid){
      $db= \config\Database::connect();
      //$query = $this->$db->getWhere(`transaction`,['$transactionid' => $transactionid]);
      $query = $db->query('SELECT * FROM `transaction` where transactionid='.$transactionid);
      $result= $query->getRow();
      //print_r($result);
     return $result;
     
     
   }

   public function updatenew($data,$transactionid){
      $db= \config\Database::connect();
      $query = $db->query('UPDATE `transaction` SET acceptedqty='.$data['acceptedqty'].', discardedqty='.$data['discardedqty'].',status="preparation" where transactionid= '.$transactionid) or die($db->mysqli_error());
      return $query; 
   }
   public function getpre($transactionid){
      $db= \config\Database::connect();
      //$query = $this->$db->getWhere(`transaction`,['$transactionid' => $transactionid]);
      $query = $db->query('SELECT * FROM `transaction` where transactionid='.$transactionid);
      $result= $query->getRow();
      //print_r($result);
     return $result;
     
     
   }

   public function getpreparation(){
      $db= \config\Database::connect();
      $query = $db->query('SELECT * FROM `transaction`where status="preparation"');
      $result = $query->getResult();
     // $ordercount=count($result);
     // print_r($ordercount);
      if(count($result)>0)
      {
         return $result;
      }
      else
      {
         return false;
      }

   }
   public function updatepre($transactionid){
      $db= \config\Database::connect();
      $query = $db->query('UPDATE `transaction` SET status="invoice" where transactionid= '.$transactionid) or die($db->mysqli_error());
      return $query; 
   }

   public function updatedis($data,$transactionid){
      $db= \config\Database::connect();
      // print_r($data);
      $query = $db->query('UPDATE `transaction` SET acceptedqty="0", discardedqty='.$data['orderedqty'].',status="discarded" where transactionid= '.$transactionid) or die($db->mysqli_error());
      return $query; 
   }
   public function getinv(){
      $db= \config\Database::connect();
      $query = $db->query('SELECT * FROM `transaction`where status="invoice"');
      $result = $query->getResult();
     // $ordercount=count($result);
     // print_r($ordercount);
      if(count($result)>0)
      {
         return $result;
      }
      else
      {
         return false;
      }
   }
      public function updateinv($transactionid){
         $db= \config\Database::connect();
         $query = $db->query('UPDATE `transaction` SET status="shipped" where transactionid= '.$transactionid) or die($db->mysqli_error());
         return $query; 
      }

      public function getship(){
         $db= \config\Database::connect();
         $query = $db->query('SELECT * FROM `transaction`where status="shipped"');
         $result = $query->getResult();
        // $ordercount=count($result);
        // print_r($ordercount);
         if(count($result)>0)
         {
            return $result;
         }
         else
         {
            return false;
         }
      }
      public function getdiscard(){
         $db= \config\Database::connect();
         $query = $db->query('SELECT * FROM `transaction`where status="discarded"');
         $result = $query->getResult();
        // $ordercount=count($result);
        // print_r($ordercount);
         if(count($result)>0)
         {
            return $result;
         }
         else
         {
            return false;
         }
      }
  
}
