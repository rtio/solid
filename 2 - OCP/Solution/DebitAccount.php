<?php
namespace Foo\Bar;
// OCP Solution
abstract class DebitAccount {
   private $transactionNumber;

   public abstract function debit(double $value, string $conta) : string;
   
   public function formatTransaction() : string {
      $this->transactionNumber = md5(uniqid(rand(), true));
      return $this->transactionNumber;
   }
}