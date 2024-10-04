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

    /** @var Address $address */
    protected $address;

    protected $email;

    protected $mobile;

    protected $phone;

    protected $fax;

    protected $dateOfBirth;

    protected $promotionCode;

    /** @var CustomerPaymentOption $paymentOption */
    protected $paymentOption;

    protected $paymentAmount;
    /** @var PaymentFrequency $paymentFrequency */
    protected $paymentFrequency;

    protected $paymentStartDate;

    protected $paymentEndDate;

    /** @var NotificationMethod $notificationMethod */
    protected $notificationMethod;

    /** @var Reference[] $additionalReferences */
    protected $additionalReferences;

    /** @var BankAccount $bankAccount */
    protected $bankAccount;

    /** @var Card */
    protected $card;

    /** @var Bool $enableBPayOption */
    protected $enableBPayOption;

    /** @var Bool $sendWelcomeEmail */
    protected $sendWelcomeEmail;

    /** @var PaymentAccountProxy $paymentAccountProxy */
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
     * @return Customer
     */
    public function setLastName(mixed $lastName)
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
     * @return Customer
     */
    public function setCustomerCompanyName(mixed $customerCompanyName)
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
     * @return Customer
     */
    public function setAbn(mixed $abn)
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
     * @return Customer
     */
    public function setMerchantStaffMember(mixed $merchantStaffMember)
    {
        $this->merchantStaffMember = $merchantStaffMember;

        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return Customer
     */
    public function setAddress(Address $address): Customer
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
     * @return Customer
     */
    public function setEmail(mixed $email)
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
     * @return Customer
     */
    public function setMobile(mixed $mobile)
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
     * @return Customer
     */
    public function setPhone(mixed $phone)
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
     * @return Customer
     */
    public function setFax(mixed $fax)
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
     * @return Customer
     */
    public function setDateOfBirth(mixed $dateOfBirth)
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
     * @return Customer
     */
    public function setPromotionCode(mixed $promotionCode)
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
     * @return Customer
     */
    public function setPaymentAmount(mixed $paymentAmount)
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
     * @return Customer
     */
    public function setPaymentStartDate(mixed $paymentStartDate)
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
     * @return Customer
     */
    public function setPaymentEndDate(mixed $paymentEndDate)
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
     * @return Reference[]
     */
    public function getAdditionalReferences(): array
    {
        return $this->additionalReferences;
    }

    /**
     * @param Reference[] $additionalReferences
     * @return Customer
     */
    public function setAdditionalReferences(array $additionalReferences): Customer
    {
        $this->additionalReferences = $additionalReferences;

        return $this;
    }

    /**
     * @return BankAccount
     */
    public function getBankAccount(): BankAccount
    {
        return $this->bankAccount;
    }

    /**
     * @param BankAccount $bankAccount
     * @return Customer
     */
    public function setBankAccount(BankAccount $bankAccount): Customer
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * @return Card
     */
    public function getCard(): Card
    {
        return $this->card;
    }

    /**
     * @param Card $card
     * @return Customer
     */
    public function setCard(Card $card): Customer
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
     * @return PaymentAccountProxy
     */
    public function getPaymentAccountProxy(): PaymentAccountProxy
    {
        return $this->paymentAccountProxy;
    }

    /**
     * @param PaymentAccountProxy $paymentAccountProxy
     * @return Customer
     */
    public function setPaymentAccountProxy(PaymentAccountProxy $paymentAccountProxy): Customer
    {
        $this->paymentAccountProxy = $paymentAccountProxy;

        return $this;
    }
}