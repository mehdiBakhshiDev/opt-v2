<?php
namespace App\Controllers;

class HomeController
{

    public function __construct()
    {
        echo 'hello im home controler';
    }
  public function index()
  {
    echo 'hello im index method';
  }
}