<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderType.
 * 
 * @method OrderType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OrderType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OrderType setDescription(Property\DescriptionProperty $description)
 * @method OrderType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OrderType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OrderType setImage(Property\ImageProperty $image)
 * @method OrderType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OrderType setName(Property\NameProperty $name)
 * @method OrderType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OrderType setSameAs(Property\SameAsProperty $sameAs)
 * @method OrderType setUrl(Property\UrlProperty $url)
 */
class OrderType extends IntangibleType {

	/**
	 * @var Property\AcceptedOfferProperty
	 */
	private $acceptedOffer;

	/**
	 * @var Property\BillingAddressProperty
	 */
	private $billingAddress;

	/**
	 * @var Property\BrokerProperty
	 */
	private $broker;

	/**
	 * @var Property\ConfirmationNumberProperty
	 */
	private $confirmationNumber;

	/**
	 * @var Property\CustomerProperty
	 */
	private $customer;

	/**
	 * @var Property\DiscountProperty
	 */
	private $discount;

	/**
	 * @var Property\DiscountCodeProperty
	 */
	private $discountCode;

	/**
	 * @var Property\DiscountCurrencyProperty
	 */
	private $discountCurrency;

	/**
	 * @var Property\IsGiftProperty
	 */
	private $isGift;

	/**
	 * @var Property\OrderDateProperty
	 */
	private $orderDate;

	/**
	 * @var Property\OrderDeliveryProperty
	 */
	private $orderDelivery;

	/**
	 * @var Property\OrderedItemProperty
	 */
	private $orderedItem;

	/**
	 * @var Property\OrderNumberProperty
	 */
	private $orderNumber;

	/**
	 * @var Property\OrderStatusProperty
	 */
	private $orderStatus;

	/**
	 * @var Property\PartOfInvoiceProperty
	 */
	private $partOfInvoice;

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
	 * @var Property\PaymentUrlProperty
	 */
	private $paymentUrl;

	/**
	 * @var Property\SellerProperty
	 */
	private $seller;

	/**
	 * Get accepted offer.
	 * 
	 * @return Property\AcceptedOfferProperty
	 */
	public function getAcceptedOffer() {
		return $this->acceptedOffer;
	}

	/**
	 * Get billing address.
	 * 
	 * @return Property\BillingAddressProperty
	 */
	public function getBillingAddress() {
		return $this->billingAddress;
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
	 * Get discount.
	 * 
	 * @return Property\DiscountProperty
	 */
	public function getDiscount() {
		return $this->discount;
	}

	/**
	 * Get discount code.
	 * 
	 * @return Property\DiscountCodeProperty
	 */
	public function getDiscountCode() {
		return $this->discountCode;
	}

	/**
	 * Get discount currency.
	 * 
	 * @return Property\DiscountCurrencyProperty
	 */
	public function getDiscountCurrency() {
		return $this->discountCurrency;
	}

	/**
	 * Get is gift.
	 * 
	 * @return Property\IsGiftProperty
	 */
	public function getIsGift() {
		return $this->isGift;
	}

	/**
	 * Get order date.
	 * 
	 * @return Property\OrderDateProperty
	 */
	public function getOrderDate() {
		return $this->orderDate;
	}

	/**
	 * Get order delivery.
	 * 
	 * @return Property\OrderDeliveryProperty
	 */
	public function getOrderDelivery() {
		return $this->orderDelivery;
	}

	/**
	 * Get ordered item.
	 * 
	 * @return Property\OrderedItemProperty
	 */
	public function getOrderedItem() {
		return $this->orderedItem;
	}

	/**
	 * Get order number.
	 * 
	 * @return Property\OrderNumberProperty
	 */
	public function getOrderNumber() {
		return $this->orderNumber;
	}

	/**
	 * Get order status.
	 * 
	 * @return Property\OrderStatusProperty
	 */
	public function getOrderStatus() {
		return $this->orderStatus;
	}

	/**
	 * Get part of invoice.
	 * 
	 * @return Property\PartOfInvoiceProperty
	 */
	public function getPartOfInvoice() {
		return $this->partOfInvoice;
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
	 * Get payment url.
	 * 
	 * @return Property\PaymentUrlProperty
	 */
	public function getPaymentUrl() {
		return $this->paymentUrl;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Order';
	}

	/**
	 * Get seller.
	 * 
	 * @return Property\SellerProperty
	 */
	public function getSeller() {
		return $this->seller;
	}

	/**
	 * Set accepted offer.
	 * 
	 * @param Property\AcceptedOfferProperty $acceptedOffer
	 * @return OrderType
	 */
	public function setAcceptedOffer(Property\AcceptedOfferProperty $acceptedOffer) {
		$this->acceptedOffer = $acceptedOffer;

		return $this;
	}

	/**
	 * Set billing address.
	 * 
	 * @param Property\BillingAddressProperty $billingAddress
	 * @return OrderType
	 */
	public function setBillingAddress(Property\BillingAddressProperty $billingAddress) {
		$this->billingAddress = $billingAddress;

		return $this;
	}

	/**
	 * Set broker.
	 * 
	 * @param Property\BrokerProperty $broker
	 * @return OrderType
	 */
	public function setBroker(Property\BrokerProperty $broker) {
		$this->broker = $broker;

		return $this;
	}

	/**
	 * Set confirmation number.
	 * 
	 * @param Property\ConfirmationNumberProperty $confirmationNumber
	 * @return OrderType
	 */
	public function setConfirmationNumber(Property\ConfirmationNumberProperty $confirmationNumber) {
		$this->confirmationNumber = $confirmationNumber;

		return $this;
	}

	/**
	 * Set customer.
	 * 
	 * @param Property\CustomerProperty $customer
	 * @return OrderType
	 */
	public function setCustomer(Property\CustomerProperty $customer) {
		$this->customer = $customer;

		return $this;
	}

	/**
	 * Set discount.
	 * 
	 * @param Property\DiscountProperty $discount
	 * @return OrderType
	 */
	public function setDiscount(Property\DiscountProperty $discount) {
		$this->discount = $discount;

		return $this;
	}

	/**
	 * Set discount code.
	 * 
	 * @param Property\DiscountCodeProperty $discountCode
	 * @return OrderType
	 */
	public function setDiscountCode(Property\DiscountCodeProperty $discountCode) {
		$this->discountCode = $discountCode;

		return $this;
	}

	/**
	 * Set discount currency.
	 * 
	 * @param Property\DiscountCurrencyProperty $discountCurrency
	 * @return OrderType
	 */
	public function setDiscountCurrency(Property\DiscountCurrencyProperty $discountCurrency) {
		$this->discountCurrency = $discountCurrency;

		return $this;
	}

	/**
	 * Set is gift.
	 * 
	 * @param Property\IsGiftProperty $isGift
	 * @return OrderType
	 */
	public function setIsGift(Property\IsGiftProperty $isGift) {
		$this->isGift = $isGift;

		return $this;
	}

	/**
	 * Set order date.
	 * 
	 * @param Property\OrderDateProperty $orderDate
	 * @return OrderType
	 */
	public function setOrderDate(Property\OrderDateProperty $orderDate) {
		$this->orderDate = $orderDate;

		return $this;
	}

	/**
	 * Set order delivery.
	 * 
	 * @param Property\OrderDeliveryProperty $orderDelivery
	 * @return OrderType
	 */
	public function setOrderDelivery(Property\OrderDeliveryProperty $orderDelivery) {
		$this->orderDelivery = $orderDelivery;

		return $this;
	}

	/**
	 * Set ordered item.
	 * 
	 * @param Property\OrderedItemProperty $orderedItem
	 * @return OrderType
	 */
	public function setOrderedItem(Property\OrderedItemProperty $orderedItem) {
		$this->orderedItem = $orderedItem;

		return $this;
	}

	/**
	 * Set order number.
	 * 
	 * @param Property\OrderNumberProperty $orderNumber
	 * @return OrderType
	 */
	public function setOrderNumber(Property\OrderNumberProperty $orderNumber) {
		$this->orderNumber = $orderNumber;

		return $this;
	}

	/**
	 * Set order status.
	 * 
	 * @param Property\OrderStatusProperty $orderStatus
	 * @return OrderType
	 */
	public function setOrderStatus(Property\OrderStatusProperty $orderStatus) {
		$this->orderStatus = $orderStatus;

		return $this;
	}

	/**
	 * Set part of invoice.
	 * 
	 * @param Property\PartOfInvoiceProperty $partOfInvoice
	 * @return OrderType
	 */
	public function setPartOfInvoice(Property\PartOfInvoiceProperty $partOfInvoice) {
		$this->partOfInvoice = $partOfInvoice;

		return $this;
	}

	/**
	 * Set payment due date.
	 * 
	 * @param Property\PaymentDueDateProperty $paymentDueDate
	 * @return OrderType
	 */
	public function setPaymentDueDate(Property\PaymentDueDateProperty $paymentDueDate) {
		$this->paymentDueDate = $paymentDueDate;

		return $this;
	}

	/**
	 * Set payment method.
	 * 
	 * @param Property\PaymentMethodProperty $paymentMethod
	 * @return OrderType
	 */
	public function setPaymentMethod(Property\PaymentMethodProperty $paymentMethod) {
		$this->paymentMethod = $paymentMethod;

		return $this;
	}

	/**
	 * Set payment method id.
	 * 
	 * @param Property\PaymentMethodIdProperty $paymentMethodId
	 * @return OrderType
	 */
	public function setPaymentMethodId(Property\PaymentMethodIdProperty $paymentMethodId) {
		$this->paymentMethodId = $paymentMethodId;

		return $this;
	}

	/**
	 * Set payment url.
	 * 
	 * @param Property\PaymentUrlProperty $paymentUrl
	 * @return OrderType
	 */
	public function setPaymentUrl(Property\PaymentUrlProperty $paymentUrl) {
		$this->paymentUrl = $paymentUrl;

		return $this;
	}

	/**
	 * Set seller.
	 * 
	 * @param Property\SellerProperty $seller
	 * @return OrderType
	 */
	public function setSeller(Property\SellerProperty $seller) {
		$this->seller = $seller;

		return $this;
	}
}