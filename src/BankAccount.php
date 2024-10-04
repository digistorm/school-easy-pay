<?php

namespace Digistorm\SchoolEasyPay;

class BankAccount
{
    protected $bsb;
    protected $accountNumber;
    protected $accountName;
    protected $bankBranch;
    protected $bankName;
    protected $label;

    /**
     * @return mixed
     */
    public function getBsb()
    {
        return $this->bsb;
    }

    /**
     * @return BankAccount
     */
    public function setBsb(mixed $bsb)
    {
        $this->bsb = $bsb;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @return BankAccount
     */
    public function setAccountNumber(mixed $accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @return BankAccount
     */
    public function setAccountName(mixed $accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankBranch()
    {
        return $this->bankBranch;
    }

    /**
     * @return BankAccount
     */
    public function setBankBranch(mixed $bankBranch)
    {
        $this->bankBranch = $bankBranch;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @return BankAccount
     */
    public function setBankName(mixed $bankName)
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return BankAccount
     */
    public function setLabel(mixed $label)
    {
        $this->label = $label;

        return $this;
    }
}