<?php
/**
*@author Gracia Biduaya
*@version 1.1
// creating the child class
*/
class currentAccount extends BankAcc
{
	private $min_bal = 300;
	/**
	*@param construct from parent table
	*/

	function __construct($name,$num)
	{
		$this-> acc_name = $name;
		$this-> acc_numb = $num;
		
		echo"Welcome to Ashesi Bank limited: ".$this-> acc_name.", Please here is your account number: ".$this-> acc_numb ."<br>";

	}
	/**
	*@param withdrawl specific to child table
	*/

	public function withdrawal($money)
	{

		if ($money <= $this-> acc_bal)
		{
			$this-> acc_bal -= $money;
			echo"You have withdrawn: ".$money." in your main account <br>";

		}elseif ($money>$this-> acc_bal && $money <= $this-> min_bal)
		{
			$this-> min_bal -= $money;
				echo" You have passed the withdrawal limit and you have withdrawn: ".$this-> min_bal." from the excess account <br>";
		}else
		{
			echo" Sorry you cannot withdaw again, you have exceeded";
			# code...
		}
		}
		
	}

?>