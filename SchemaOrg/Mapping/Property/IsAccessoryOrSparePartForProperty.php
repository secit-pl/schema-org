<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
 * 
 * @method IsAccessoryOrSparePartForProperty setValue($value)
 */
class IsAccessoryOrSparePartForProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/isAccessoryOrSparePartFor';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\ProductType;
	}
}