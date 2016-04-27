<?php
namespace Foo\Bar;
// LSP Solution
class Square extends Parallelogram {

   public function __construct(double $height, double $widht){
      parent::__construct($height, $widht);
   }
}