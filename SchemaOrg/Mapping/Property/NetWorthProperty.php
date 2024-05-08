<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The total financial value of the person as calculated by subtracting assets from liabilities.
 * 
 * @method NetWorthProperty setValue($value)
 */
class NetWorthProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/netWorth';
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