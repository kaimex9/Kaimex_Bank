<?php
namespace ComBank\Bank;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/27/24
 * Time: 7:25 PM
 */

use ComBank\Exceptions\BankAccountException;
use ComBank\Exceptions\InvalidArgsException;
use ComBank\Exceptions\ZeroAmountException;
use ComBank\OverdraftStrategy\NoOverdraft;
use ComBank\Bank\Contracts\BackAccountInterface;
use ComBank\Exceptions\FailedTransactionException;
use ComBank\Exceptions\InvalidOverdraftFundsException;
use ComBank\OverdraftStrategy\Contracts\OverdraftInterface;
use ComBank\Support\Traits\AmountValidationTrait;
use ComBank\Transactions\Contracts\BankTransactionInterface;

class BankAccount
{
private $balance;
private $status;
private $overdraft;

public function getBalance()
{
return $this->balance;
}

public function setBalance($balance)
{
$this->balance = $balance;

return $this;
}

public function getStatus()
{
return $this->status;
}

public function setStatus($status)
{
$this->status = $status;

return $this;
}

public function getOverdraft()
{
return $this->overdraft;
}

public function setOverdraft($overdraft)
{
$this->overdraft = $overdraft;

return $this;
}
}
