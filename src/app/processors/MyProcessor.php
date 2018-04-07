<?php
namespace App\Processor;
#This is a comment
class MyProcessor
{

  public function process($string)
  {
    return ucfirst(strtolower($string));
  }

}