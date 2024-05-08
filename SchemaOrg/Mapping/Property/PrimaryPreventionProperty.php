<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
 * 
 * @method PrimaryPreventionProperty setValue($value)
 */
class PrimaryPreventionProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/primaryPrevention';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\MedicalTherapyType;
	}
}