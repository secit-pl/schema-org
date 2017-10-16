<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderAction.
 */
class OrderAction {

	/**
	 * @var Property\DeliveryMethod
	 */
	private $deliveryMethod;

	/**
	 */
	private $id;

	/**
	 * OrderAction constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get delivery method.
	 * 
	 * @return Property\DeliveryMethod
	 */
	public function getDeliveryMethod() {
		return $this->deliveryMethod;
	}

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderAction';
	}

	/**
	 * Set delivery method.
	 * 
	 * @param Property\DeliveryMethod $deliveryMethod
	 * @return OrderAction
	 */
	public function setDeliveryMethod(Property\DeliveryMethod $deliveryMethod) {
		$this->deliveryMethod = $deliveryMethod;

		return $this;
	}
}