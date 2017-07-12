<?php
namespace App\Processor;

class MyProcessor
{

  public function process($string)
  {
    return ucfirst(strtolower($string));
  }

}