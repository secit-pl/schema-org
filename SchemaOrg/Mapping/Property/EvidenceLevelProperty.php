<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * Strength of evidence of the data used to formulate the guideline (enumerated).
 * 
 * @method EvidenceLevelProperty setValue($value)
 */
class EvidenceLevelProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/evidenceLevel';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\MedicalEvidenceLevelType;
	}
}