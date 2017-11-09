<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * TotalPaymentDueProperty class.
 * 
 * @method TotalPaymentDueProperty setValue($value)
 */
class TotalPaymentDueProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/totalPaymentDue';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\MonetaryAmountType || $value instanceof Type\PriceSpecificationType;
	}
}