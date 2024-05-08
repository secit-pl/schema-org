<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential diagnosis.
 * 
 * @method DistinguishingSignProperty setValue($value)
 */
class DistinguishingSignProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/distinguishingSign';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\MedicalSignOrSymptomType;
	}
}