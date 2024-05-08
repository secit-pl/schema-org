<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * The drug or supplement's legal status, including any controlled substance schedules that apply.
 * 
 * @method LegalStatusProperty setValue($value)
 */
class LegalStatusProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/legalStatus';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\DrugLegalStatusType || $value instanceof Type\MedicalEnumerationType || $value instanceof DataType\TextType;
	}
}