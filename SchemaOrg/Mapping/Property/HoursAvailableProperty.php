<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * HoursAvailableProperty class.
 * 
 * @method HoursAvailableProperty setValue($value)
 */
class HoursAvailableProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/hoursAvailable';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\OpeningHoursSpecificationType;
	}
}