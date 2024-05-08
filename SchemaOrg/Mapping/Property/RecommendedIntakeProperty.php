<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
 * 
 * @method RecommendedIntakeProperty setValue($value)
 */
class RecommendedIntakeProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/recommendedIntake';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\RecommendedDoseScheduleType;
	}
}