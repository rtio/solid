<?php
namespace Foo\Bar;
// LSP Violation
class Rectangle {
   private $height;
   private $widht;
   
   // getters and setters

   public function area() : double{
      return $this->height * $this->widht;
   }
}