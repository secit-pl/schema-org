<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * AcceptedPaymentMethodProperty class.
 * 
 * @method AcceptedPaymentMethodProperty setValue($value)
 */
class AcceptedPaymentMethodProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/acceptedPaymentMethod';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\LoanOrCreditType || $value instanceof Type\PaymentMethodType;
	}
}