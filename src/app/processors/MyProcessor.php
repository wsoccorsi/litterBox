<?php
namespace App\Processor;
#This is a comment
#this is another comment
class MyProcessor
{

  public function process($string)
  {
    return ucfirst(strtolower($string));
  }

}