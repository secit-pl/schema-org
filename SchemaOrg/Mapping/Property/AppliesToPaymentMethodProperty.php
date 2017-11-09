<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * AppliesToPaymentMethodProperty class.
 * 
 * @method AppliesToPaymentMethodProperty setValue($value)
 */
class AppliesToPaymentMethodProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/appliesToPaymentMethod';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\PaymentMethodType;
	}
}