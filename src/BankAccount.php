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
     * @param mixed $bsb
     * @return BankAccount
     */
    public function setBsb($bsb)
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
     * @param mixed $accountNumber
     * @return BankAccount
     */
    public function setAccountNumber($accountNumber)
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
     * @param mixed $accountName
     * @return BankAccount
     */
    public function setAccountName($accountName)
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
     * @param mixed $bankBranch
     * @return BankAccount
     */
    public function setBankBranch($bankBranch)
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
     * @param mixed $bankName
     * @return BankAccount
     */
    public function setBankName($bankName)
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
     * @param mixed $label
     * @return BankAccount
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }
}