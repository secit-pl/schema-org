<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentChargeSpecification.
 */
class PaymentChargeSpecification {

	/**
	 * @var Property\AppliesToDeliveryMethod
	 */
	private $appliesToDeliveryMethod;

	/**
	 * @var Property\AppliesToPaymentMethod
	 */
	private $appliesToPaymentMethod;

	/**
	 */
	private $id;

	/**
	 * PaymentChargeSpecification constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get applies to delivery method.
	 * 
	 * @return Property\AppliesToDeliveryMethod
	 */
	public function getAppliesToDeliveryMethod() {
		return $this->appliesToDeliveryMethod;
	}

	/**
	 * Get applies to payment method.
	 * 
	 * @return Property\AppliesToPaymentMethod
	 */
	public function getAppliesToPaymentMethod() {
		return $this->appliesToPaymentMethod;
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
		return 'https://schema.org/PaymentChargeSpecification';
	}

	/**
	 * Set applies to delivery method.
	 * 
	 * @param Property\AppliesToDeliveryMethod $appliesToDeliveryMethod
	 * @return PaymentChargeSpecification
	 */
	public function setAppliesToDeliveryMethod(Property\AppliesToDeliveryMethod $appliesToDeliveryMethod) {
		$this->appliesToDeliveryMethod = $appliesToDeliveryMethod;

		return $this;
	}

	/**
	 * Set applies to payment method.
	 * 
	 * @param Property\AppliesToPaymentMethod $appliesToPaymentMethod
	 * @return PaymentChargeSpecification
	 */
	public function setAppliesToPaymentMethod(Property\AppliesToPaymentMethod $appliesToPaymentMethod) {
		$this->appliesToPaymentMethod = $appliesToPaymentMethod;

		return $this;
	}
}