<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
 * 
 * @method DiagnosisProperty setValue($value)
 */
class DiagnosisProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/diagnosis';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\MedicalConditionType;
	}
}