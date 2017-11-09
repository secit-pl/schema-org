<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;

/**
 * AcceptsReservationsProperty class.
 * 
 * @method AcceptsReservationsProperty setValue($value)
 */
class AcceptsReservationsProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/acceptsReservations';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof DataType\BooleanType || $value instanceof DataType\TextType || $value instanceof DataType\URLType;
	}
}