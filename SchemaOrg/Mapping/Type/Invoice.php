<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Invoice.
 */
class Invoice extends Intangible {

	/**
	 * @var Property\AccountId
	 */
	private $accountId;

	/**
	 * @var Property\BillingPeriod
	 */
	private $billingPeriod;

	/**
	 * @var Property\Broker
	 */
	private $broker;

	/**
	 * @var Property\Category
	 */
	private $category;

	/**
	 * @var Property\ConfirmationNumber
	 */
	private $confirmationNumber;

	/**
	 * @var Property\Customer
	 */
	private $customer;

	/**
	 * @var Property\MinimumPaymentDue
	 */
	private $minimumPaymentDue;

	/**
	 * @var Property\PaymentDueDate
	 */
	private $paymentDueDate;

	/**
	 * @var Property\PaymentMethod
	 */
	private $paymentMethod;

	/**
	 * @var Property\PaymentMethodId
	 */
	private $paymentMethodId;

	/**
	 * @var Property\PaymentStatus
	 */
	private $paymentStatus;

	/**
	 * @var Property\Provider
	 */
	private $provider;

	/**
	 * @var Property\ReferencesOrder
	 */
	private $referencesOrder;

	/**
	 * @var Property\ScheduledPaymentDate
	 */
	private $scheduledPaymentDate;

	/**
	 * @var Property\TotalPaymentDue
	 */
	private $totalPaymentDue;

	/**
	 * Get account id.
	 * 
	 * @return Property\AccountId
	 */
	public function getAccountId() {
		return $this->accountId;
	}

	/**
	 * Get billing period.
	 * 
	 * @return Property\BillingPeriod
	 */
	public function getBillingPeriod() {
		return $this->billingPeriod;
	}

	/**
	 * Get broker.
	 * 
	 * @return Property\Broker
	 */
	public function getBroker() {
		return $this->broker;
	}

	/**
	 * Get category.
	 * 
	 * @return Property\Category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Get confirmation number.
	 * 
	 * @return Property\ConfirmationNumber
	 */
	public function getConfirmationNumber() {
		return $this->confirmationNumber;
	}

	/**
	 * Get customer.
	 * 
	 * @return Property\Customer
	 */
	public function getCustomer() {
		return $this->customer;
	}

	/**
	 * Get minimum payment due.
	 * 
	 * @return Property\MinimumPaymentDue
	 */
	public function getMinimumPaymentDue() {
		return $this->minimumPaymentDue;
	}

	/**
	 * Get payment due date.
	 * 
	 * @return Property\PaymentDueDate
	 */
	public function getPaymentDueDate() {
		return $this->paymentDueDate;
	}

	/**
	 * Get payment method.
	 * 
	 * @return Property\PaymentMethod
	 */
	public function getPaymentMethod() {
		return $this->paymentMethod;
	}

	/**
	 * Get payment method id.
	 * 
	 * @return Property\PaymentMethodId
	 */
	public function getPaymentMethodId() {
		return $this->paymentMethodId;
	}

	/**
	 * Get payment status.
	 * 
	 * @return Property\PaymentStatus
	 */
	public function getPaymentStatus() {
		return $this->paymentStatus;
	}

	/**
	 * Get provider.
	 * 
	 * @return Property\Provider
	 */
	public function getProvider() {
		return $this->provider;
	}

	/**
	 * Get references order.
	 * 
	 * @return Property\ReferencesOrder
	 */
	public function getReferencesOrder() {
		return $this->referencesOrder;
	}

	/**
	 * Get scheduled payment date.
	 * 
	 * @return Property\ScheduledPaymentDate
	 */
	public function getScheduledPaymentDate() {
		return $this->scheduledPaymentDate;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Invoice';
	}

	/**
	 * Get total payment due.
	 * 
	 * @return Property\TotalPaymentDue
	 */
	public function getTotalPaymentDue() {
		return $this->totalPaymentDue;
	}

	/**
	 * Set account id.
	 * 
	 * @param Property\AccountId $accountId
	 * @return Invoice
	 */
	public function setAccountId(Property\AccountId $accountId) {
		$this->accountId = $accountId;

		return $this;
	}

	/**
	 * Set billing period.
	 * 
	 * @param Property\BillingPeriod $billingPeriod
	 * @return Invoice
	 */
	public function setBillingPeriod(Property\BillingPeriod $billingPeriod) {
		$this->billingPeriod = $billingPeriod;

		return $this;
	}

	/**
	 * Set broker.
	 * 
	 * @param Property\Broker $broker
	 * @return Invoice
	 */
	public function setBroker(Property\Broker $broker) {
		$this->broker = $broker;

		return $this;
	}

	/**
	 * Set category.
	 * 
	 * @param Property\Category $category
	 * @return Invoice
	 */
	public function setCategory(Property\Category $category) {
		$this->category = $category;

		return $this;
	}

	/**
	 * Set confirmation number.
	 * 
	 * @param Property\ConfirmationNumber $confirmationNumber
	 * @return Invoice
	 */
	public function setConfirmationNumber(Property\ConfirmationNumber $confirmationNumber) {
		$this->confirmationNumber = $confirmationNumber;

		return $this;
	}

	/**
	 * Set customer.
	 * 
	 * @param Property\Customer $customer
	 * @return Invoice
	 */
	public function setCustomer(Property\Customer $customer) {
		$this->customer = $customer;

		return $this;
	}

	/**
	 * Set minimum payment due.
	 * 
	 * @param Property\MinimumPaymentDue $minimumPaymentDue
	 * @return Invoice
	 */
	public function setMinimumPaymentDue(Property\MinimumPaymentDue $minimumPaymentDue) {
		$this->minimumPaymentDue = $minimumPaymentDue;

		return $this;
	}

	/**
	 * Set payment due date.
	 * 
	 * @param Property\PaymentDueDate $paymentDueDate
	 * @return Invoice
	 */
	public function setPaymentDueDate(Property\PaymentDueDate $paymentDueDate) {
		$this->paymentDueDate = $paymentDueDate;

		return $this;
	}

	/**
	 * Set payment method.
	 * 
	 * @param Property\PaymentMethod $paymentMethod
	 * @return Invoice
	 */
	public function setPaymentMethod(Property\PaymentMethod $paymentMethod) {
		$this->paymentMethod = $paymentMethod;

		return $this;
	}

	/**
	 * Set payment method id.
	 * 
	 * @param Property\PaymentMethodId $paymentMethodId
	 * @return Invoice
	 */
	public function setPaymentMethodId(Property\PaymentMethodId $paymentMethodId) {
		$this->paymentMethodId = $paymentMethodId;

		return $this;
	}

	/**
	 * Set payment status.
	 * 
	 * @param Property\PaymentStatus $paymentStatus
	 * @return Invoice
	 */
	public function setPaymentStatus(Property\PaymentStatus $paymentStatus) {
		$this->paymentStatus = $paymentStatus;

		return $this;
	}

	/**
	 * Set provider.
	 * 
	 * @param Property\Provider $provider
	 * @return Invoice
	 */
	public function setProvider(Property\Provider $provider) {
		$this->provider = $provider;

		return $this;
	}

	/**
	 * Set references order.
	 * 
	 * @param Property\ReferencesOrder $referencesOrder
	 * @return Invoice
	 */
	public function setReferencesOrder(Property\ReferencesOrder $referencesOrder) {
		$this->referencesOrder = $referencesOrder;

		return $this;
	}

	/**
	 * Set scheduled payment date.
	 * 
	 * @param Property\ScheduledPaymentDate $scheduledPaymentDate
	 * @return Invoice
	 */
	public function setScheduledPaymentDate(Property\ScheduledPaymentDate $scheduledPaymentDate) {
		$this->scheduledPaymentDate = $scheduledPaymentDate;

		return $this;
	}

	/**
	 * Set total payment due.
	 * 
	 * @param Property\TotalPaymentDue $totalPaymentDue
	 * @return Invoice
	 */
	public function setTotalPaymentDue(Property\TotalPaymentDue $totalPaymentDue) {
		$this->totalPaymentDue = $totalPaymentDue;

		return $this;
	}
}