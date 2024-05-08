<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An order item is a line of an order. It includes the quantity and shipping details of a bought offer.
 * 
 * @method OrderItemType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OrderItemType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OrderItemType setDescription(Property\DescriptionProperty $description)
 * @method OrderItemType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OrderItemType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OrderItemType setImage(Property\ImageProperty $image)
 * @method OrderItemType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OrderItemType setName(Property\NameProperty $name)
 * @method OrderItemType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OrderItemType setSameAs(Property\SameAsProperty $sameAs)
 * @method OrderItemType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OrderItemType setUrl(Property\UrlProperty $url)
 */
class OrderItemType extends IntangibleType {

	/**
	 * @var Property\OrderDeliveryProperty
	 */
	private $orderDelivery;

	/**
	 * @var Property\OrderedItemProperty
	 */
	private $orderedItem;

	/**
	 * @var Property\OrderItemNumberProperty
	 */
	private $orderItemNumber;

	/**
	 * @var Property\OrderItemStatusProperty
	 */
	private $orderItemStatus;

	/**
	 * @var Property\OrderQuantityProperty
	 */
	private $orderQuantity;

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
	 * Get order item number.
	 *
	 * @return Property\OrderItemNumberProperty
	 */
	public function getOrderItemNumber() {
		return $this->orderItemNumber;
	}

	/**
	 * Get order item status.
	 *
	 * @return Property\OrderItemStatusProperty
	 */
	public function getOrderItemStatus() {
		return $this->orderItemStatus;
	}

	/**
	 * Get order quantity.
	 *
	 * @return Property\OrderQuantityProperty
	 */
	public function getOrderQuantity() {
		return $this->orderQuantity;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderItem';
	}

	/**
	 * Set order delivery.
	 *
	 * @param Property\OrderDeliveryProperty $orderDelivery
	 * @return OrderItemType
	 */
	public function setOrderDelivery(Property\OrderDeliveryProperty $orderDelivery) {
		$this->orderDelivery = $orderDelivery;

		return $this;
	}

	/**
	 * Set ordered item.
	 *
	 * @param Property\OrderedItemProperty $orderedItem
	 * @return OrderItemType
	 */
	public function setOrderedItem(Property\OrderedItemProperty $orderedItem) {
		$this->orderedItem = $orderedItem;

		return $this;
	}

	/**
	 * Set order item number.
	 *
	 * @param Property\OrderItemNumberProperty $orderItemNumber
	 * @return OrderItemType
	 */
	public function setOrderItemNumber(Property\OrderItemNumberProperty $orderItemNumber) {
		$this->orderItemNumber = $orderItemNumber;

		return $this;
	}

	/**
	 * Set order item status.
	 *
	 * @param Property\OrderItemStatusProperty $orderItemStatus
	 * @return OrderItemType
	 */
	public function setOrderItemStatus(Property\OrderItemStatusProperty $orderItemStatus) {
		$this->orderItemStatus = $orderItemStatus;

		return $this;
	}

	/**
	 * Set order quantity.
	 *
	 * @param Property\OrderQuantityProperty $orderQuantity
	 * @return OrderItemType
	 */
	public function setOrderQuantity(Property\OrderQuantityProperty $orderQuantity) {
		$this->orderQuantity = $orderQuantity;

		return $this;
	}
}