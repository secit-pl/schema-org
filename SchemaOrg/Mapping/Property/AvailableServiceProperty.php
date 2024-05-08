<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * A medical service available from this provider.
 * 
 * @method AvailableServiceProperty setValue($value)
 */
class AvailableServiceProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/availableService';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\MedicalProcedureType || $value instanceof Type\MedicalTestType || $value instanceof Type\MedicalTherapyType;
	}
}