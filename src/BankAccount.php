<?php

namespace Digistorm\SchoolEasyPay;

class BankAccount
{
    protected string $bsb;
    protected string $accountNumber;
    protected string $accountName;
    protected string $bankBranch;
    protected string $bankName;
    protected string $label;

    public function getBsb(): string
    {
        return $this->bsb;
    }

    public function setBsb(string|int $bsb): self
    {
        $this->bsb = (string) $bsb;

        return $this;
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(string|int $accountNumber): self
    {
        $this->accountNumber = (string) $accountNumber;

        return $this;
    }

    public function getAccountName(): string
    {
        return $this->accountName;
    }

    public function setAccountName(string $accountName): self
    {
        $this->accountName = $accountName;

        return $this;
    }

    public function getBankBranch(): string
    {
        return $this->bankBranch;
    }

    public function setBankBranch(string $bankBranch): self
    {
        $this->bankBranch = $bankBranch;

        return $this;
    }

    public function getBankName(): string
    {
        return $this->bankName;
    }

    public function setBankName(string $bankName): self
    {
        $this->bankName = $bankName;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }
}