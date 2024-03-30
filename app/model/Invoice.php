<?php

namespace Model;

use DateTime;
use DateTimeZone;

class Invoice
{
    private int $InvoiceID;

    private string $PaymentDateTime;

    private string $PaymentMethod;

    private string $InvoiceDateTime;

    private string $OrderID;

    private string $CustomerName;

    private string $Email;

    private string $PhoneNumber;

    private string $BillingAddress;

    private float $TotalAmount;

    private float $Tax;

    private string $Currency;

    public function getTotalAmount(): float
    {
        return number_format($this->TotalAmount, 2);
    }

    public function setTotalAmount($TotalAmount): void
    {
        $this->TotalAmount = $TotalAmount;
    }

    public function getTax(): float
    {
        return number_format($this->Tax, 2);
    }

    public function setTax(float $Tax): void
    {
        $this->Tax = $Tax;
    }

    public function getCurrency(): string
    {
        return $this->Currency;
    }

    public function setCurrency(string $Currency): void
    {
        $this->Currency = $Currency;
    }

    public function getInvoiceID(): int
    {
        return $this->InvoiceID;
    }

    public function setInvoiceID(int $InvoiceID): void
    {
        $this->InvoiceID = $InvoiceID;
    }

    public function getPaymentDateTime(): string
    {
        return $this->PaymentDateTime;
    }

    public function setPaymentDateTime(string $PaymentDateTime): void
    {
        $this->PaymentDateTime = $PaymentDateTime;
    }

    public function getPaymentMethod(): string
    {
        return $this->PaymentMethod;
    }

    public function setPaymentMethod(string $PaymentMethod): void
    {
        $this->PaymentMethod = $PaymentMethod;
    }

    public function getInvoiceDateTime(): string
    {
        return $this->InvoiceDateTime;
    }

    public function setInvoiceDateTime(string $InvoiceDateTime): void
    {
        $this->InvoiceDateTime = $InvoiceDateTime;
    }

    public function getOrderID(): string
    {
        return $this->OrderID;
    }

    public function setOrderID(string $OrderID): void
    {
        $this->OrderID = $OrderID;
    }

    public function getCustomerName(): string
    {
        return $this->CustomerName;
    }

    public function setCustomerName(string $CustomerName): void
    {
        $this->CustomerName = $CustomerName;
    }

    public function getEmail(): string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): void
    {
        $this->Email = $Email;
    }

    public function getPhoneNumber(): string
    {
        return $this->PhoneNumber;
    }

    public function setPhoneNumber(string $PhoneNumber): void
    {
        $this->PhoneNumber = $PhoneNumber;
    }

    public function getBillingAddress(): string
    {
        return $this->BillingAddress;
    }

    public function setBillingAddress(string $BillingAddress): void
    {
        $this->BillingAddress = $BillingAddress;
    }
}