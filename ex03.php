<?php
// abstract (inherit to other classes) Account class
abstract class Account
{
    protected $agency;
    protected $account;
    protected $balance;

    //constructor method
    public function __construct($agency, $account, $balance)
    {
        $this->agency = $agency;
        $this->account = $account;
        $this->balance = $balance;
    }

    //Details function
    public function getDetails()
    {
        return "Agency: {$this->agency} <br />
                Account: {$this->account} <br /> 
                Balance: {$this->balance}";
    }

    //Deposit function
    public function deposit($value)
    {
        $this->balance += $value;
        echo "Cash withdrawal: {$value}. Current balance: {$this->balance} <br />";
    }
}

//class savings inherit from account class [extends]
//inherit the attributes [agency, account, balance]
//final don't inherit to other classes
//savings account
final class Savings extends Account
{
    public function withdrawal($value)
    {
        if ($this->balance >= $value) :
            $this->balance -= $value;
        echo "Cash withdrawal: {$value}. Current balance: {$this->balance} <br />";
        else :
            echo "Unauthorized withdrawal! Current balance: {$this->balance} <br />";
        endif;
    }
}

//checking account
final class Checking extends Account
{
    protected $limit;

    public function __construct($agency, $account, $balance, $limit)
    {
        parent::__construct($agency, $account, $balance); //parent construct [Account]
        $this->limit = $limit;
    }

    public function withdrawal($value)
    {
        if (($this->balance + $this->limit) >= $value) :
            $this->balance -= $value;
        echo "Cash withdrawal: {$value}. Current balance: {$this->balance} <br />";
        else :
            echo "Unauthorized withdrawal! Current balance: {$this->balance}. My limit is: {$this->limit} <br />";
        endif;
    }
}

//checking account
$checking1 = new Checking(3, 3, 100, 500);
$checking1->deposit(300);
$checking1->withdrawal(200);
$checking1->withdrawal(900);
echo $checking1->getDetails();


//account details
//$account1 = new Account(1, 1, 100);
//$savings1 = new Savings(2, 2, 200);
//$savings1->deposit(5000);
//$savings1->withdrawal(500000);

//deposit
//$account1->deposit(254);
//show
//echo $account1->getDetails();
//echo $savings1->getDetails();