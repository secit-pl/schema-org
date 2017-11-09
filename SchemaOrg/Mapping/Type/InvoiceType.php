<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InvoiceType.
 * 
 * @method InvoiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InvoiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InvoiceType setDescription(Property\DescriptionProperty $description)
 * @method InvoiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InvoiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InvoiceType setImage(Property\ImageProperty $image)
 * @method InvoiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InvoiceType setName(Property\NameProperty $name)
 * @method InvoiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InvoiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method InvoiceType setUrl(Property\UrlProperty $url)
 */
class InvoiceType extends IntangibleType {

	/**
	 * @var Property\AccountIdProperty
	 */
	private $accountId;

	/**
	 * @var Property\BillingPeriodProperty
	 */
	private $billingPeriod;

	/**
	 * @var Property\BrokerProperty
	 */
	private $broker;

	/**
	 * @var Property\CategoryProperty
	 */
	private $category;

	/**
	 * @var Property\ConfirmationNumberProperty
	 */
	private $confirmationNumber;

	/**
	 * @var Property\CustomerProperty
	 */
	private $customer;

	/**
	 * @var Property\MinimumPaymentDueProperty
	 */
	private $minimumPaymentDue;

	/**
	 * @var Property\PaymentDueDateProperty
	 */
	private $paymentDueDate;

	/**
	 * @var Property\PaymentMethodProperty
	 */
	private $paymentMethod;

	/**
	 * @var Property\PaymentMethodIdProperty
	 */
	private $paymentMethodId;

	/**
	 * @var Property\PaymentStatusProperty
	 */
	private $paymentStatus;

	/**
	 * @var Property\ProviderProperty
	 */
	private $provider;

	/**
	 * @var Property\ReferencesOrderProperty
	 */
	private $referencesOrder;

	/**
	 * @var Property\ScheduledPaymentDateProperty
	 */
	private $scheduledPaymentDate;

	/**
	 * @var Property\TotalPaymentDueProperty
	 */
	private $totalPaymentDue;

	/**
	 * Get account id.
	 * 
	 * @return Property\AccountIdProperty
	 */
	public function getAccountId() {
		return $this->accountId;
	}

	/**
	 * Get billing period.
	 * 
	 * @return Property\BillingPeriodProperty
	 */
	public function getBillingPeriod() {
		return $this->billingPeriod;
	}

	/**
	 * Get broker.
	 * 
	 * @return Property\BrokerProperty
	 */
	public function getBroker() {
		return $this->broker;
	}

	/**
	 * Get category.
	 * 
	 * @return Property\CategoryProperty
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Get confirmation number.
	 * 
	 * @return Property\ConfirmationNumberProperty
	 */
	public function getConfirmationNumber() {
		return $this->confirmationNumber;
	}

	/**
	 * Get customer.
	 * 
	 * @return Property\CustomerProperty
	 */
	public function getCustomer() {
		return $this->customer;
	}

	/**
	 * Get minimum payment due.
	 * 
	 * @return Property\MinimumPaymentDueProperty
	 */
	public function getMinimumPaymentDue() {
		return $this->minimumPaymentDue;
	}

	/**
	 * Get payment due date.
	 * 
	 * @return Property\PaymentDueDateProperty
	 */
	public function getPaymentDueDate() {
		return $this->paymentDueDate;
	}

	/**
	 * Get payment method.
	 * 
	 * @return Property\PaymentMethodProperty
	 */
	public function getPaymentMethod() {
		return $this->paymentMethod;
	}

	/**
	 * Get payment method id.
	 * 
	 * @return Property\PaymentMethodIdProperty
	 */
	public function getPaymentMethodId() {
		return $this->paymentMethodId;
	}

	/**
	 * Get payment status.
	 * 
	 * @return Property\PaymentStatusProperty
	 */
	public function getPaymentStatus() {
		return $this->paymentStatus;
	}

	/**
	 * Get provider.
	 * 
	 * @return Property\ProviderProperty
	 */
	public function getProvider() {
		return $this->provider;
	}

	/**
	 * Get references order.
	 * 
	 * @return Property\ReferencesOrderProperty
	 */
	public function getReferencesOrder() {
		return $this->referencesOrder;
	}

	/**
	 * Get scheduled payment date.
	 * 
	 * @return Property\ScheduledPaymentDateProperty
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
	 * @return Property\TotalPaymentDueProperty
	 */
	public function getTotalPaymentDue() {
		return $this->totalPaymentDue;
	}

	/**
	 * Set account id.
	 * 
	 * @param Property\AccountIdProperty $accountId
	 * @return InvoiceType
	 */
	public function setAccountId(Property\AccountIdProperty $accountId) {
		$this->accountId = $accountId;

		return $this;
	}

	/**
	 * Set billing period.
	 * 
	 * @param Property\BillingPeriodProperty $billingPeriod
	 * @return InvoiceType
	 */
	public function setBillingPeriod(Property\BillingPeriodProperty $billingPeriod) {
		$this->billingPeriod = $billingPeriod;

		return $this;
	}

	/**
	 * Set broker.
	 * 
	 * @param Property\BrokerProperty $broker
	 * @return InvoiceType
	 */
	public function setBroker(Property\BrokerProperty $broker) {
		$this->broker = $broker;

		return $this;
	}

	/**
	 * Set category.
	 * 
	 * @param Property\CategoryProperty $category
	 * @return InvoiceType
	 */
	public function setCategory(Property\CategoryProperty $category) {
		$this->category = $category;

		return $this;
	}

	/**
	 * Set confirmation number.
	 * 
	 * @param Property\ConfirmationNumberProperty $confirmationNumber
	 * @return InvoiceType
	 */
	public function setConfirmationNumber(Property\ConfirmationNumberProperty $confirmationNumber) {
		$this->confirmationNumber = $confirmationNumber;

		return $this;
	}

	/**
	 * Set customer.
	 * 
	 * @param Property\CustomerProperty $customer
	 * @return InvoiceType
	 */
	public function setCustomer(Property\CustomerProperty $customer) {
		$this->customer = $customer;

		return $this;
	}

	/**
	 * Set minimum payment due.
	 * 
	 * @param Property\MinimumPaymentDueProperty $minimumPaymentDue
	 * @return InvoiceType
	 */
	public function setMinimumPaymentDue(Property\MinimumPaymentDueProperty $minimumPaymentDue) {
		$this->minimumPaymentDue = $minimumPaymentDue;

		return $this;
	}

	/**
	 * Set payment due date.
	 * 
	 * @param Property\PaymentDueDateProperty $paymentDueDate
	 * @return InvoiceType
	 */
	public function setPaymentDueDate(Property\PaymentDueDateProperty $paymentDueDate) {
		$this->paymentDueDate = $paymentDueDate;

		return $this;
	}

	/**
	 * Set payment method.
	 * 
	 * @param Property\PaymentMethodProperty $paymentMethod
	 * @return InvoiceType
	 */
	public function setPaymentMethod(Property\PaymentMethodProperty $paymentMethod) {
		$this->paymentMethod = $paymentMethod;

		return $this;
	}

	/**
	 * Set payment method id.
	 * 
	 * @param Property\PaymentMethodIdProperty $paymentMethodId
	 * @return InvoiceType
	 */
	public function setPaymentMethodId(Property\PaymentMethodIdProperty $paymentMethodId) {
		$this->paymentMethodId = $paymentMethodId;

		return $this;
	}

	/**
	 * Set payment status.
	 * 
	 * @param Property\PaymentStatusProperty $paymentStatus
	 * @return InvoiceType
	 */
	public function setPaymentStatus(Property\PaymentStatusProperty $paymentStatus) {
		$this->paymentStatus = $paymentStatus;

		return $this;
	}

	/**
	 * Set provider.
	 * 
	 * @param Property\ProviderProperty $provider
	 * @return InvoiceType
	 */
	public function setProvider(Property\ProviderProperty $provider) {
		$this->provider = $provider;

		return $this;
	}

	/**
	 * Set references order.
	 * 
	 * @param Property\ReferencesOrderProperty $referencesOrder
	 * @return InvoiceType
	 */
	public function setReferencesOrder(Property\ReferencesOrderProperty $referencesOrder) {
		$this->referencesOrder = $referencesOrder;

		return $this;
	}

	/**
	 * Set scheduled payment date.
	 * 
	 * @param Property\ScheduledPaymentDateProperty $scheduledPaymentDate
	 * @return InvoiceType
	 */
	public function setScheduledPaymentDate(Property\ScheduledPaymentDateProperty $scheduledPaymentDate) {
		$this->scheduledPaymentDate = $scheduledPaymentDate;

		return $this;
	}

	/**
	 * Set total payment due.
	 * 
	 * @param Property\TotalPaymentDueProperty $totalPaymentDue
	 * @return InvoiceType
	 */
	public function setTotalPaymentDue(Property\TotalPaymentDueProperty $totalPaymentDue) {
		$this->totalPaymentDue = $totalPaymentDue;

		return $this;
	}
}