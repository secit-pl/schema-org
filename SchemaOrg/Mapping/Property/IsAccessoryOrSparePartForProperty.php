<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * IsAccessoryOrSparePartForProperty class.
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