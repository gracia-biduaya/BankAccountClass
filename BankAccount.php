<?php
/** 
*@author Batusua Gracia
*@version 1.1

*/

class BankAcc{
	//Properties

	public $acc_numb = null;
	public $acc_name = null;
	public $acc_bal = 0;
	public $acc_min_bal = 50;
	
	function __construct($name,$num)
	{
		$this-> acc_name = $name;
		$this-> acc_numb = $num;
		
		//$this->acc_num = $num;
		echo"Welcome to Ashesi Bank limited: ".$this-> acc_name.", Please here is your account number: ".$this-> acc_numb ."<br>";

		#code
	}
	/**
	*@return This function displays the the account
	*/

	public function Checkbalance(){
		echo"Your balance is:" .$this-> acc_bal."<br>";
	}

	/**
	*@return This function display the deposit done by the the user
	*@param  take in the amount to be deposited and update the balance
	*/
	public function deposit($bal){
		$this-> acc_bal += /**$this-> acc_bal +*/ $bal;

		echo"You have desposited: " .$bal."<br>";
	}

	/**
	*@param takes amountout of account and update  balance
	*withdrawal
	*/

	public function act_withdraw($amt){

		$avail_bal = $this-> acc_bal - $this-> acc_min_bal;
		echo $avail_bal."<br>";
		if ($avail_bal > $amt) {
			$this-> acc_bal = $this-> acc_bal - $amt;
			echo "you just withdrawn:".$amt."<br> you are left with:".$this-> acc_bal."<br>";
			# code...
		} else {
			echo "Sorry insufficient funds <br>";
			# code...
		}
	}


	//Methods

	//withdraw
	//deposit
	//check Account


}
?>