<?php
namespace App\Core\Routing;

use App\Core\Routing\Route;
use App\Core\Request;

class Router
{
   public $Routes;
   public $Cr;
   public $Request;

   public function __construct()
   {
    $this->Routes = Route::routes();
    $this->Request = new Request;
    $this->Cr = $this->Request->GetUri();
   }
   public function CheckRoute()
   {
      foreach($this->Routes as $key => $val)
      {
       
        if(($val['uri'] == $this->Cr) || ($val['uri'].'/' == $this->Cr))
        {
            $Cr = $val['uri'];
            break;
        }else{
            $Cr = 'uri not found!';
        }
        
      }   
      return $Cr;
   }




}