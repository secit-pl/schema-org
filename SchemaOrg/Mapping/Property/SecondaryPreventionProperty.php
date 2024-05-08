<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
 * 
 * @method SecondaryPreventionProperty setValue($value)
 */
class SecondaryPreventionProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/secondaryPrevention';
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