<?php
namespace Foo\Bar;
// LSP Solution
class Square extends Parallelogram {

   public function __construct(double $height, double $widht){
      parent::__construct($height, $widht);
      if ($height != $widht)
         throw new Exception('Not is a square');
   }
}