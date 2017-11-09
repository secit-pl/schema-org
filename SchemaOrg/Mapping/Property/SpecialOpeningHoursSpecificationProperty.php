<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * SpecialOpeningHoursSpecificationProperty class.
 * 
 * @method SpecialOpeningHoursSpecificationProperty setValue($value)
 */
class SpecialOpeningHoursSpecificationProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/specialOpeningHoursSpecification';
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