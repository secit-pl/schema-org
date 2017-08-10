<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DeliveryEvent.
 */
class DeliveryEvent {

	/**
	 * @var Property\AccessCode
	 */
	private $accessCode;

	/**
	 * @var Property\AvailableFrom
	 */
	private $availableFrom;

	/**
	 * @var Property\AvailableThrough
	 */
	private $availableThrough;

	/**
	 * @var Property\HasDeliveryMethod
	 */
	private $hasDeliveryMethod;

	/**
	 */
	private $id;

	/**
	 * DeliveryEvent constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get access code.
	 * 
	 * @return Property\AccessCode
	 */
	public function getAccessCode() {
		return $this->accessCode;
	}

	/**
	 * Get available from.
	 * 
	 * @return Property\AvailableFrom
	 */
	public function getAvailableFrom() {
		return $this->availableFrom;
	}

	/**
	 * Get available through.
	 * 
	 * @return Property\AvailableThrough
	 */
	public function getAvailableThrough() {
		return $this->availableThrough;
	}

	/**
	 * Get has delivery method.
	 * 
	 * @return Property\HasDeliveryMethod
	 */
	public function getHasDeliveryMethod() {
		return $this->hasDeliveryMethod;
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
		return 'https://schema.org/DeliveryEvent';
	}

	/**
	 * Set access code.
	 * 
	 * @param Property\AccessCode $accessCode
	 * @return DeliveryEvent
	 */
	public function setAccessCode(Property\AccessCode $accessCode) {
		$this->accessCode = $accessCode;

		return $this;
	}

	/**
	 * Set available from.
	 * 
	 * @param Property\AvailableFrom $availableFrom
	 * @return DeliveryEvent
	 */
	public function setAvailableFrom(Property\AvailableFrom $availableFrom) {
		$this->availableFrom = $availableFrom;

		return $this;
	}

	/**
	 * Set available through.
	 * 
	 * @param Property\AvailableThrough $availableThrough
	 * @return DeliveryEvent
	 */
	public function setAvailableThrough(Property\AvailableThrough $availableThrough) {
		$this->availableThrough = $availableThrough;

		return $this;
	}

	/**
	 * Set has delivery method.
	 * 
	 * @param Property\HasDeliveryMethod $hasDeliveryMethod
	 * @return DeliveryEvent
	 */
	public function setHasDeliveryMethod(Property\HasDeliveryMethod $hasDeliveryMethod) {
		$this->hasDeliveryMethod = $hasDeliveryMethod;

		return $this;
	}
}