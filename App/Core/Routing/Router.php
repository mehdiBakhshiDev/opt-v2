<?php
namespace App\Core\Routing;

use App\Core\Routing\Route;
use App\Core\Request;

class Router
{
   public $Routes;
   public $Request;

   public function __construct()
   {
    $this->Routes = Route::routes();
    $this->Request = new Request;
   }

   public function CheckRoute()
   { 
       $result ='';
       $status =  array_walk($this->Routes,function($value,$key){          
                ($value['method'] == $this->Request->GetMethod() && $value['uri'] == $this->Request->GetUri())? $result = $value['uri'] : '';
              });

              ($status == 1)? $result = true:$result = false;

              return $result;
   }

   public function CallRoute()
   {
    
   }







}