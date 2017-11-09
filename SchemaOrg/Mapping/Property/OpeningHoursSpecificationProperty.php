<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * OpeningHoursSpecificationProperty class.
 * 
 * @method OpeningHoursSpecificationProperty setValue($value)
 */
class OpeningHoursSpecificationProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/openingHoursSpecification';
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