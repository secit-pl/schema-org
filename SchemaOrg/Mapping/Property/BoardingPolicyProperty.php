<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The type of boarding policy used by the airline (e.g. zone-based or group-based).
 * 
 * @method BoardingPolicyProperty setValue($value)
 */
class BoardingPolicyProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/boardingPolicy';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\BoardingPolicyType;
	}
}