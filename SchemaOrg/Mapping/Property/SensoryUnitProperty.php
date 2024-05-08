<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
 * 
 * @method SensoryUnitProperty setValue($value)
 */
class SensoryUnitProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/sensoryUnit';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\AnatomicalStructureType || $value instanceof Type\SuperficialAnatomyType;
	}
}