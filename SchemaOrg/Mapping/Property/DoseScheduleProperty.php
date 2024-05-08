<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
 * 
 * @method DoseScheduleProperty setValue($value)
 */
class DoseScheduleProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/doseSchedule';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\DoseScheduleType;
	}
}