<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * GameLocationProperty class.
 * 
 * @method GameLocationProperty setValue($value)
 */
class GameLocationProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/gameLocation';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\PlaceType || $value instanceof Type\PostalAddressType || $value instanceof DataType\URLType;
	}
}