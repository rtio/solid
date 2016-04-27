<?php
namespace Foo\Bar;
// LSP Violation
class CalcArea {

   public function getRectangleAreaFormated(Rectangle $rectangle) {
      echo 'Rectangle Area: ' + $rectangle->area();
   }

   public function calc() {
      $square = new Square();
      $square->setHeight(10);
      $square->setWidht(5);
      getRectangleAreaFormated($square);
   }
}