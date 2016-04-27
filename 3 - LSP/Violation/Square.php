<?php
namespace Foo\Bar;
// LSP Violation
class Square extends Rectangle {

   // getters

   public function setHeight(double $height) {
      $this->height = $this->widht = $height;
   }

   public function setWidht(double $widht) {
      $this->widht = $this->height = $widht;
   }
}