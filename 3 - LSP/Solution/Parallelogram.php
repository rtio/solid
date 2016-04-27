<?php
namespace Foo\Bar;
// LSP Solution
abstract class Parallelogram {
   private $height;
   private $widht;
   private $area;

   public function __construct(double $height, double $widht) {
      $this->height = $height;
      $this->widht = $widht;
   }

   public function getHeight():double {
      return $this->height;
   }
   public function getWidht():double {
      return $this->widht;
   }
   public function getArea():double {
      return $this->height * $this->widht;
   }
}