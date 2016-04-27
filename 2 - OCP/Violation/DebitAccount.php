<?php
namespace Foo\Bar;
// OCP Violation
class DebitAccount{
   public function debit(double $value, string $account, AccountType $accountType){
      if($accountType == AccountType::CheckingAccount){
         // Deducts Checking Account
      }
      if($accountType == AccountType::SavingsAccount){
         // Validates Birthday Account
         // Deducts Savings Account
      }
   }
}