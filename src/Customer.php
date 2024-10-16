<?php

namespace Digistorm\SchoolEasyPay;

use Carbon\Carbon;
use Digistorm\SchoolEasyPay\Enums\NotificationMethod;
use Digistorm\SchoolEasyPay\Enums\PaymentFrequency;
use Digistorm\SchoolEasyPay\Enums\PaymentOption;
use Digistorm\SchoolEasyPay\Exceptions\SchoolEasyPayException;
use Digistorm\SchoolEasyPay\Traits\HasCarbonDates;
use Digistorm\SchoolEasyPay\Traits\HasPaymentAmount;

/**
 * Class Customer
 *
 * @package Digistorm\SchoolEasyPay
 * @link https://api.schooleasypay.com.au/swagger/ui/index#/Customers
 */
class Customer extends Base
{
    use HasPaymentAmount;
    use HasCarbonDates;

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

    protected string $customerReference;

    protected string $title;

    protected string $firstName;

    protected string $lastName;

    protected string $customerCompanyName;

    protected string $abn;

    protected string $merchantStaffMember;

    protected Address $address;

    protected string $email;

    protected string $mobile;

    protected string $phone;

    protected string $fax;

    protected Carbon $dateOfBirth;

    protected string $promotionCode;

    protected PaymentOption $paymentOption;

    protected PaymentFrequency $paymentFrequency;

    protected Carbon $paymentStartDate;

    protected Carbon $paymentEndDate;

    protected NotificationMethod $notificationMethod;

    /** @var Reference[] $additionalReferences */
    protected array $additionalReferences;

    protected BankAccount $bankAccount;

    protected Card $card;

    protected bool $enableBPayOption;

    protected bool $sendWelcomeEmail;

    protected PaymentAccountProxy $paymentAccountProxy;

    protected function getEndpoint(): string
    {
        return '/customers';
    }

    public function getCustomerReference(): string
    {
        return $this->customerReference;
    }

    public function setCustomerReference(string $customerReference): self
    {
        $this->customerReference = $customerReference;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getPaymentFrequency(): PaymentFrequency
    {
        return $this->paymentFrequency;
    }

    public function setPaymentFrequency(PaymentFrequency $paymentFrequency): self
    {
        $this->paymentFrequency = $paymentFrequency;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getCustomerCompanyName(): string
    {
        return $this->customerCompanyName;
    }

    public function setCustomerCompanyName(mixed $customerCompanyName): self
    {
        $this->customerCompanyName = $customerCompanyName;

        return $this;
    }

    public function getAbn(): string
    {
        return $this->abn;
    }

    public function setAbn(string $abn): self
    {
        $this->abn = $abn;

        return $this;
    }

    public function getMerchantStaffMember(): string
    {
        return $this->merchantStaffMember;
    }

    public function setMerchantStaffMember(string $merchantStaffMember): self
    {
        $this->merchantStaffMember = $merchantStaffMember;

        return $this;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(mixed $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMobile(): string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getFax(): string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getDateOfBirth(): string
    {
        return $this->castCarbonToString($this->dateOfBirth);
    }

    /**
     * @throws SchoolEasyPayException
     */
    public function setDateOfBirth(string $dateOfBirth): self
    {
        $this->dateOfBirth = $this->castStringToCarbon($dateOfBirth);

        return $this;
    }

    public function getPromotionCode(): string
    {
        return $this->promotionCode;
    }

    public function setPromotionCode(mixed $promotionCode): self
    {
        $this->promotionCode = $promotionCode;

        return $this;
    }

    public function getPaymentOption(): PaymentOption
    {
        return $this->paymentOption;
    }

    public function setPaymentOption(PaymentOption $paymentOption): self
    {
        $this->paymentOption = $paymentOption;

        return $this;
    }

    public function getPaymentStartDate(): string
    {
        return $this->castCarbonToString($this->paymentStartDate);
    }

    /**
     * @throws SchoolEasyPayException
     */
    public function setPaymentStartDate(string $paymentStartDate): self
    {
        $this->paymentStartDate = $this->castStringToCarbon($paymentStartDate);

        return $this;
    }

    public function getPaymentEndDate(): string
    {
        return $this->castCarbonToString($this->paymentEndDate);
    }

    /**
     * @throws SchoolEasyPayException
     */
    public function setPaymentEndDate(string $paymentEndDate): self
    {
        $this->paymentEndDate = $this->castStringToCarbon($paymentEndDate);

        return $this;
    }

    public function getNotificationMethod(): NotificationMethod
    {
        return $this->notificationMethod;
    }

    public function setNotificationMethod(NotificationMethod $notificationMethod): self
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
     */
    public function setAdditionalReferences(array $additionalReferences): self
    {
        $this->additionalReferences = $additionalReferences;

        return $this;
    }

    public function getBankAccount(): BankAccount
    {
        return $this->bankAccount;
    }

    public function setBankAccount(BankAccount $bankAccount): self
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    public function getCard(): Card
    {
        return $this->card;
    }

    public function setCard(Card $card): self
    {
        $this->card = $card;

        return $this;
    }

    public function isEnableBPayOption(): bool
    {
        return $this->enableBPayOption;
    }

    public function setEnableBPayOption(bool $enableBPayOption): self
    {
        $this->enableBPayOption = $enableBPayOption;

        return $this;
    }

    public function isSendWelcomeEmail(): bool
    {
        return $this->sendWelcomeEmail;
    }

    public function setSendWelcomeEmail(bool $sendWelcomeEmail): self
    {
        $this->sendWelcomeEmail = $sendWelcomeEmail;

        return $this;
    }

    public function getPaymentAccountProxy(): PaymentAccountProxy
    {
        return $this->paymentAccountProxy;
    }

    public function setPaymentAccountProxy(PaymentAccountProxy $paymentAccountProxy): self
    {
        $this->paymentAccountProxy = $paymentAccountProxy;

        return $this;
    }
}