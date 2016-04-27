<?php
namespace Foo\Bar;
// OCP Solution
class DebitCheckingAccount extends DebitAccount{
    public function debit(double $value, string $conta) : string {
      // Deducts Checking Account
      return formatTransaction();
   }
}