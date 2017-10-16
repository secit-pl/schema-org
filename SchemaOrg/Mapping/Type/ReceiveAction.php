<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReceiveAction.
 */
class ReceiveAction {

	/**
	 * @var Property\DeliveryMethod
	 */
	private $deliveryMethod;

	/**
	 */
	private $id;

	/**
	 * @var Property\Sender
	 */
	private $sender;

	/**
	 * ReceiveAction constructor.
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
		return 'https://schema.org/ReceiveAction';
	}

	/**
	 * Get sender.
	 * 
	 * @return Property\Sender
	 */
	public function getSender() {
		return $this->sender;
	}

	/**
	 * Set delivery method.
	 * 
	 * @param Property\DeliveryMethod $deliveryMethod
	 * @return ReceiveAction
	 */
	public function setDeliveryMethod(Property\DeliveryMethod $deliveryMethod) {
		$this->deliveryMethod = $deliveryMethod;

		return $this;
	}

	/**
	 * Set sender.
	 * 
	 * @param Property\Sender $sender
	 * @return ReceiveAction
	 */
	public function setSender(Property\Sender $sender) {
		$this->sender = $sender;

		return $this;
	}
}