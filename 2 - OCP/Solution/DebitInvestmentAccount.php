<?php
namespace Foo\Bar;
// OCP Solution
class DebitInvestmentAccount extends DebitAccount{
   public function debit(double $value, string $conta) : string {
      // Deducts Investment Account
      // Exempt Taxes
      return formatTransaction();
   }
}