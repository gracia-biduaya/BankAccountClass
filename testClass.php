<?php
require("BankAccount.php");
require("CurrentAcc.php");

// $David = new BankAcc("David", 1325698745);
// $David -> Checkbalance();
// $David -> deposit(200);
// // $David ->  act_withdraw(50);
// //S$David -> Checkbalance();


$Gracia = new currentAccount ("Gracia", 1236563);
$Gracia-> Checkbalance();
$Gracia-> deposit(200);
$Gracia-> withdrawal(150);

?>