<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Order.
 */
class Order extends Intangible {

	/**
	 * @var Property\AcceptedOffer
	 */
	private $acceptedOffer;

	/**
	 * @var Property\BillingAddress
	 */
	private $billingAddress;

	/**
	 * @var Property\Broker
	 */
	private $broker;

	/**
	 * @var Property\ConfirmationNumber
	 */
	private $confirmationNumber;

	/**
	 * @var Property\Customer
	 */
	private $customer;

	/**
	 * @var Property\Discount
	 */
	private $discount;

	/**
	 * @var Property\DiscountCode
	 */
	private $discountCode;

	/**
	 * @var Property\DiscountCurrency
	 */
	private $discountCurrency;

	/**
	 * @var Property\IsGift
	 */
	private $isGift;

	/**
	 * @var Property\OrderDate
	 */
	private $orderDate;

	/**
	 * @var Property\OrderDelivery
	 */
	private $orderDelivery;

	/**
	 * @var Property\OrderedItem
	 */
	private $orderedItem;

	/**
	 * @var Property\OrderNumber
	 */
	private $orderNumber;

	/**
	 * @var Property\OrderStatus
	 */
	private $orderStatus;

	/**
	 * @var Property\PartOfInvoice
	 */
	private $partOfInvoice;

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
	 * @var Property\PaymentUrl
	 */
	private $paymentUrl;

	/**
	 * @var Property\Seller
	 */
	private $seller;

	/**
	 * Get accepted offer.
	 * 
	 * @return Property\AcceptedOffer
	 */
	public function getAcceptedOffer() {
		return $this->acceptedOffer;
	}

	/**
	 * Get billing address.
	 * 
	 * @return Property\BillingAddress
	 */
	public function getBillingAddress() {
		return $this->billingAddress;
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
	 * Get discount.
	 * 
	 * @return Property\Discount
	 */
	public function getDiscount() {
		return $this->discount;
	}

	/**
	 * Get discount code.
	 * 
	 * @return Property\DiscountCode
	 */
	public function getDiscountCode() {
		return $this->discountCode;
	}

	/**
	 * Get discount currency.
	 * 
	 * @return Property\DiscountCurrency
	 */
	public function getDiscountCurrency() {
		return $this->discountCurrency;
	}

	/**
	 * Get is gift.
	 * 
	 * @return Property\IsGift
	 */
	public function getIsGift() {
		return $this->isGift;
	}

	/**
	 * Get order date.
	 * 
	 * @return Property\OrderDate
	 */
	public function getOrderDate() {
		return $this->orderDate;
	}

	/**
	 * Get order delivery.
	 * 
	 * @return Property\OrderDelivery
	 */
	public function getOrderDelivery() {
		return $this->orderDelivery;
	}

	/**
	 * Get ordered item.
	 * 
	 * @return Property\OrderedItem
	 */
	public function getOrderedItem() {
		return $this->orderedItem;
	}

	/**
	 * Get order number.
	 * 
	 * @return Property\OrderNumber
	 */
	public function getOrderNumber() {
		return $this->orderNumber;
	}

	/**
	 * Get order status.
	 * 
	 * @return Property\OrderStatus
	 */
	public function getOrderStatus() {
		return $this->orderStatus;
	}

	/**
	 * Get part of invoice.
	 * 
	 * @return Property\PartOfInvoice
	 */
	public function getPartOfInvoice() {
		return $this->partOfInvoice;
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
	 * Get payment url.
	 * 
	 * @return Property\PaymentUrl
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
	 * @return Property\Seller
	 */
	public function getSeller() {
		return $this->seller;
	}

	/**
	 * Set accepted offer.
	 * 
	 * @param Property\AcceptedOffer $acceptedOffer
	 * @return Order
	 */
	public function setAcceptedOffer(Property\AcceptedOffer $acceptedOffer) {
		$this->acceptedOffer = $acceptedOffer;

		return $this;
	}

	/**
	 * Set billing address.
	 * 
	 * @param Property\BillingAddress $billingAddress
	 * @return Order
	 */
	public function setBillingAddress(Property\BillingAddress $billingAddress) {
		$this->billingAddress = $billingAddress;

		return $this;
	}

	/**
	 * Set broker.
	 * 
	 * @param Property\Broker $broker
	 * @return Order
	 */
	public function setBroker(Property\Broker $broker) {
		$this->broker = $broker;

		return $this;
	}

	/**
	 * Set confirmation number.
	 * 
	 * @param Property\ConfirmationNumber $confirmationNumber
	 * @return Order
	 */
	public function setConfirmationNumber(Property\ConfirmationNumber $confirmationNumber) {
		$this->confirmationNumber = $confirmationNumber;

		return $this;
	}

	/**
	 * Set customer.
	 * 
	 * @param Property\Customer $customer
	 * @return Order
	 */
	public function setCustomer(Property\Customer $customer) {
		$this->customer = $customer;

		return $this;
	}

	/**
	 * Set discount.
	 * 
	 * @param Property\Discount $discount
	 * @return Order
	 */
	public function setDiscount(Property\Discount $discount) {
		$this->discount = $discount;

		return $this;
	}

	/**
	 * Set discount code.
	 * 
	 * @param Property\DiscountCode $discountCode
	 * @return Order
	 */
	public function setDiscountCode(Property\DiscountCode $discountCode) {
		$this->discountCode = $discountCode;

		return $this;
	}

	/**
	 * Set discount currency.
	 * 
	 * @param Property\DiscountCurrency $discountCurrency
	 * @return Order
	 */
	public function setDiscountCurrency(Property\DiscountCurrency $discountCurrency) {
		$this->discountCurrency = $discountCurrency;

		return $this;
	}

	/**
	 * Set is gift.
	 * 
	 * @param Property\IsGift $isGift
	 * @return Order
	 */
	public function setIsGift(Property\IsGift $isGift) {
		$this->isGift = $isGift;

		return $this;
	}

	/**
	 * Set order date.
	 * 
	 * @param Property\OrderDate $orderDate
	 * @return Order
	 */
	public function setOrderDate(Property\OrderDate $orderDate) {
		$this->orderDate = $orderDate;

		return $this;
	}

	/**
	 * Set order delivery.
	 * 
	 * @param Property\OrderDelivery $orderDelivery
	 * @return Order
	 */
	public function setOrderDelivery(Property\OrderDelivery $orderDelivery) {
		$this->orderDelivery = $orderDelivery;

		return $this;
	}

	/**
	 * Set ordered item.
	 * 
	 * @param Property\OrderedItem $orderedItem
	 * @return Order
	 */
	public function setOrderedItem(Property\OrderedItem $orderedItem) {
		$this->orderedItem = $orderedItem;

		return $this;
	}

	/**
	 * Set order number.
	 * 
	 * @param Property\OrderNumber $orderNumber
	 * @return Order
	 */
	public function setOrderNumber(Property\OrderNumber $orderNumber) {
		$this->orderNumber = $orderNumber;

		return $this;
	}

	/**
	 * Set order status.
	 * 
	 * @param Property\OrderStatus $orderStatus
	 * @return Order
	 */
	public function setOrderStatus(Property\OrderStatus $orderStatus) {
		$this->orderStatus = $orderStatus;

		return $this;
	}

	/**
	 * Set part of invoice.
	 * 
	 * @param Property\PartOfInvoice $partOfInvoice
	 * @return Order
	 */
	public function setPartOfInvoice(Property\PartOfInvoice $partOfInvoice) {
		$this->partOfInvoice = $partOfInvoice;

		return $this;
	}

	/**
	 * Set payment due date.
	 * 
	 * @param Property\PaymentDueDate $paymentDueDate
	 * @return Order
	 */
	public function setPaymentDueDate(Property\PaymentDueDate $paymentDueDate) {
		$this->paymentDueDate = $paymentDueDate;

		return $this;
	}

	/**
	 * Set payment method.
	 * 
	 * @param Property\PaymentMethod $paymentMethod
	 * @return Order
	 */
	public function setPaymentMethod(Property\PaymentMethod $paymentMethod) {
		$this->paymentMethod = $paymentMethod;

		return $this;
	}

	/**
	 * Set payment method id.
	 * 
	 * @param Property\PaymentMethodId $paymentMethodId
	 * @return Order
	 */
	public function setPaymentMethodId(Property\PaymentMethodId $paymentMethodId) {
		$this->paymentMethodId = $paymentMethodId;

		return $this;
	}

	/**
	 * Set payment url.
	 * 
	 * @param Property\PaymentUrl $paymentUrl
	 * @return Order
	 */
	public function setPaymentUrl(Property\PaymentUrl $paymentUrl) {
		$this->paymentUrl = $paymentUrl;

		return $this;
	}

	/**
	 * Set seller.
	 * 
	 * @param Property\Seller $seller
	 * @return Order
	 */
	public function setSeller(Property\Seller $seller) {
		$this->seller = $seller;

		return $this;
	}
}