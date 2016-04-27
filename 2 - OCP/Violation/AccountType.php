<?php
namespace Foo\Bar;
// OCP Violation
class AccountType extends SplEnum {
   const __default = self::CheckingAccount;
    
   const CheckingAccount = 1;
   const SavingsAccount = 2;
}