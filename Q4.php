
<?php
class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber,$initialBalance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    public function withdraw($accountNo,$amount) {
        if($this->accountNumber == $accountNo){
            if ($amount > 0 && $amount <= $this->balance) {
                $this->balance -= $amount;
                return "Withdrawn $amount. Remaining balance: $this->balance <br>";
            } else {
                return "Invalid withdrawal amount or insufficient balance <br>";
            }
        }else{
            return "Invalid account number <br>";
        }
        
    }

    public function deposit($accountNo,$amount) {
        if ($this->accountNumber == $accountNo){
            if ($amount > 0 && $amount <= $this->balance) {
                $this->balance += $amount;
                //$this->balance -= $amount;
                return "Deposited $amount. Remaining balance: $this->balance <br>";
            } else {
                return "Invalid withdrawal amount or insufficient balance <br>";
            }
        }else{
            return "Invalid account number <br>";
        }
        
}

    public function getBalance() {
        return $this->balance;
    }
}


$account = new BankAccount(123,1000); 

echo "Withdraw: " . $account->withdraw(123,1001) . "<br>";
echo "Deposit: " . $account->deposit(123,500) . "<br>";

