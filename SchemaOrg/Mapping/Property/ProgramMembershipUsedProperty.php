<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
 * 
 * @method ProgramMembershipUsedProperty setValue($value)
 */
class ProgramMembershipUsedProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/programMembershipUsed';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\ProgramMembershipType;
	}
}