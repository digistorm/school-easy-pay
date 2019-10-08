<?php

namespace Digistorm\SchoolEasyPay;

use Digistorm\SchoolEasyPay\Enums\NotificationMethod;
use Digistorm\SchoolEasyPay\Enums\PaymentFrequency;
use Digistorm\SchoolEasyPay\Enums\PaymentOption;

/**
 * Class Customer
 *
 * @package Digistorm\SchoolEasyPay
 * @link https://api.schooleasypay.com.au/swagger/ui/index#/Customers
 */
class Customer extends Base
{
    const REQUIRED = [
        'customerReference',
        'firstName',
        'lastName',
        'email',
        'mobile',
        'dateOfBirth',
        'paymentOption',
        'paymentAmount',
        'paymentFrequency',
        'paymentStartDate',
        'notificationMethod',
    ];

    protected $customerReference;

    protected $title;

    protected $firstName;

    protected $lastName;

    protected $customerCompanyName;

    protected $abn;

    protected $merchantStaffMember;

    /** @var \Digistorm\SchoolEasyPay\Address $address */
    protected $address;

    protected $email;

    protected $mobile;

    protected $phone;

    protected $fax;

    protected $dateOfBirth;

    protected $promotionCode;

    /** @var PaymentOption $paymentOption */
    protected $paymentOption;

    protected $paymentAmount;
    /** @var PaymentFrequency $paymentFrequency */
    protected $paymentFrequency;

    protected $paymentStartDate;

    protected $paymentEndDate;

    /** @var \Digistorm\SchoolEasyPay\Enums\NotificationMethod $notificationMethod */
    protected $notificationMethod;

    /** @var \Digistorm\SchoolEasyPay\Reference[] $additionalReferences */
    protected $additionalReferences;

    /** @var \Digistorm\SchoolEasyPay\BankAccount $bankAccount */
    protected $bankAccount;

    /** @var \Digistorm\SchoolEasyPay\Card */
    protected $card;

    /** @var Bool $enableBPayOption */
    protected $enableBPayOption;

    /** @var Bool $sendWelcomeEmail */
    protected $sendWelcomeEmail;

    /** @var \Digistorm\SchoolEasyPay\PaymentAccountProxy $paymentAccountProxy */
    protected $paymentAccountProxy;

    protected function getEndpoint()
    {
        return '/customers';
    }

    /**
     * @return mixed
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @param mixed $customerReference
     * @return Customer
     */
    public function setCustomerReference(string $customerReference)
    {
        $this->customerReference = $customerReference;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Customer
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     * @return Customer
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentFrequency()
    {
        return $this->paymentFrequency;
    }

    /**
     * @param mixed $paymentFrequency
     * @return Customer
     */
    public function setPaymentFrequency(PaymentFrequency $paymentFrequency)
    {
        $this->paymentFrequency = $paymentFrequency;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @return Customer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomerCompanyName()
    {
        return $this->customerCompanyName;
    }

    /**
     * @param mixed $customerCompanyName
     * @return Customer
     */
    public function setCustomerCompanyName($customerCompanyName)
    {
        $this->customerCompanyName = $customerCompanyName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAbn()
    {
        return $this->abn;
    }

    /**
     * @param mixed $abn
     * @return Customer
     */
    public function setAbn($abn)
    {
        $this->abn = $abn;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMerchantStaffMember()
    {
        return $this->merchantStaffMember;
    }

    /**
     * @param mixed $merchantStaffMember
     * @return Customer
     */
    public function setMerchantStaffMember($merchantStaffMember)
    {
        $this->merchantStaffMember = $merchantStaffMember;

        return $this;
    }

    /**
     * @return \Digistorm\SchoolEasyPay\Address
     */
    public function getAddress(): \Digistorm\SchoolEasyPay\Address
    {
        return $this->address;
    }

    /**
     * @param \Digistorm\SchoolEasyPay\Address $address
     * @return Customer
     */
    public function setAddress(\Digistorm\SchoolEasyPay\Address $address): Customer
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     * @return Customer
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     * @return Customer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     * @return Customer
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     * @return Customer
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * @param mixed $promotionCode
     * @return Customer
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentOption()
    {
        return $this->paymentOption;
    }

    /**
     * @param mixed $paymentOption
     * @return Customer
     */
    public function setPaymentOption(PaymentOption $paymentOption)
    {
        $this->paymentOption = $paymentOption;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * @param mixed $paymentAmount
     * @return Customer
     */
    public function setPaymentAmount($paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentStartDate()
    {
        return $this->paymentStartDate;
    }

    /**
     * @param mixed $paymentStartDate
     * @return Customer
     */
    public function setPaymentStartDate($paymentStartDate)
    {
        $this->paymentStartDate = $paymentStartDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentEndDate()
    {
        return $this->paymentEndDate;
    }

    /**
     * @param mixed $paymentEndDate
     * @return Customer
     */
    public function setPaymentEndDate($paymentEndDate)
    {
        $this->paymentEndDate = $paymentEndDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotificationMethod()
    {
        return $this->notificationMethod;
    }

    /**
     * @param mixed $notificationMethod
     * @return Customer
     */
    public function setNotificationMethod(NotificationMethod $notificationMethod)
    {
        $this->notificationMethod = $notificationMethod;

        return $this;
    }

    /**
     * @return \Digistorm\SchoolEasyPay\Reference[]
     */
    public function getAdditionalReferences(): array
    {
        return $this->additionalReferences;
    }

    /**
     * @param \Digistorm\SchoolEasyPay\Reference[] $additionalReferences
     * @return Customer
     */
    public function setAdditionalReferences(array $additionalReferences): Customer
    {
        $this->additionalReferences = $additionalReferences;

        return $this;
    }

    /**
     * @return \Digistorm\SchoolEasyPay\BankAccount
     */
    public function getBankAccount(): \Digistorm\SchoolEasyPay\BankAccount
    {
        return $this->bankAccount;
    }

    /**
     * @param \Digistorm\SchoolEasyPay\BankAccount $bankAccount
     * @return Customer
     */
    public function setBankAccount(\Digistorm\SchoolEasyPay\BankAccount $bankAccount): Customer
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * @return \Digistorm\SchoolEasyPay\Card
     */
    public function getCard(): \Digistorm\SchoolEasyPay\Card
    {
        return $this->card;
    }

    /**
     * @param \Digistorm\SchoolEasyPay\Card $card
     * @return Customer
     */
    public function setCard(\Digistorm\SchoolEasyPay\Card $card): Customer
    {
        $this->card = $card;

        return $this;
    }

    /**
     * @return bool
     */
    public function isEnableBPayOption(): bool
    {
        return $this->enableBPayOption;
    }

    /**
     * @param bool $enableBPayOption
     * @return Customer
     */
    public function setEnableBPayOption(bool $enableBPayOption): Customer
    {
        $this->enableBPayOption = $enableBPayOption;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSendWelcomeEmail(): bool
    {
        return $this->sendWelcomeEmail;
    }

    /**
     * @param bool $sendWelcomeEmail
     * @return Customer
     */
    public function setSendWelcomeEmail(bool $sendWelcomeEmail): Customer
    {
        $this->sendWelcomeEmail = $sendWelcomeEmail;

        return $this;
    }

    /**
     * @return \Digistorm\SchoolEasyPay\PaymentAccountProxy
     */
    public function getPaymentAccountProxy(): \Digistorm\SchoolEasyPay\PaymentAccountProxy
    {
        return $this->paymentAccountProxy;
    }

    /**
     * @param \Digistorm\SchoolEasyPay\PaymentAccountProxy $paymentAccountProxy
     * @return Customer
     */
    public function setPaymentAccountProxy(\Digistorm\SchoolEasyPay\PaymentAccountProxy $paymentAccountProxy): Customer
    {
        $this->paymentAccountProxy = $paymentAccountProxy;

        return $this;
    }
}