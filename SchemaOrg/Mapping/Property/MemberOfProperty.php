<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * MemberOfProperty class.
 * 
 * @method MemberOfProperty setValue($value)
 */
class MemberOfProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/memberOf';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\OrganizationType || $value instanceof Type\ProgramMembershipType;
	}
}