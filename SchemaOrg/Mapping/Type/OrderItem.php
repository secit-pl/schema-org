<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderItem.
 * 
 * @method OrderItem setAdditionalType(Property\AdditionalType $additionalType)
 * @method OrderItem setAlternateName(Property\AlternateName $alternateName)
 * @method OrderItem setDescription(Property\Description $description)
 * @method OrderItem setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OrderItem setImage(Property\Image $image)
 * @method OrderItem setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OrderItem setName(Property\Name $name)
 * @method OrderItem setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OrderItem setSameAs(Property\SameAs $sameAs)
 * @method OrderItem setUrl(Property\Url $url)
 */
class OrderItem extends Intangible {

	/**
	 * @var Property\OrderDelivery
	 */
	private $orderDelivery;

	/**
	 * @var Property\OrderedItem
	 */
	private $orderedItem;

	/**
	 * @var Property\OrderItemNumber
	 */
	private $orderItemNumber;

	/**
	 * @var Property\OrderItemStatus
	 */
	private $orderItemStatus;

	/**
	 * @var Property\OrderQuantity
	 */
	private $orderQuantity;

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
	 * Get order item number.
	 * 
	 * @return Property\OrderItemNumber
	 */
	public function getOrderItemNumber() {
		return $this->orderItemNumber;
	}

	/**
	 * Get order item status.
	 * 
	 * @return Property\OrderItemStatus
	 */
	public function getOrderItemStatus() {
		return $this->orderItemStatus;
	}

	/**
	 * Get order quantity.
	 * 
	 * @return Property\OrderQuantity
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
	 * @param Property\OrderDelivery $orderDelivery
	 * @return OrderItem
	 */
	public function setOrderDelivery(Property\OrderDelivery $orderDelivery) {
		$this->orderDelivery = $orderDelivery;

		return $this;
	}

	/**
	 * Set ordered item.
	 * 
	 * @param Property\OrderedItem $orderedItem
	 * @return OrderItem
	 */
	public function setOrderedItem(Property\OrderedItem $orderedItem) {
		$this->orderedItem = $orderedItem;

		return $this;
	}

	/**
	 * Set order item number.
	 * 
	 * @param Property\OrderItemNumber $orderItemNumber
	 * @return OrderItem
	 */
	public function setOrderItemNumber(Property\OrderItemNumber $orderItemNumber) {
		$this->orderItemNumber = $orderItemNumber;

		return $this;
	}

	/**
	 * Set order item status.
	 * 
	 * @param Property\OrderItemStatus $orderItemStatus
	 * @return OrderItem
	 */
	public function setOrderItemStatus(Property\OrderItemStatus $orderItemStatus) {
		$this->orderItemStatus = $orderItemStatus;

		return $this;
	}

	/**
	 * Set order quantity.
	 * 
	 * @param Property\OrderQuantity $orderQuantity
	 * @return OrderItem
	 */
	public function setOrderQuantity(Property\OrderQuantity $orderQuantity) {
		$this->orderQuantity = $orderQuantity;

		return $this;
	}
}