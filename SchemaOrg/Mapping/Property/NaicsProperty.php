<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;

/**
 * The North American Industry Classification System (NAICS) code for a particular organization or business person.
 * 
 * @method NaicsProperty setValue($value)
 */
class NaicsProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/naics';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof DataType\TextType;
	}
}