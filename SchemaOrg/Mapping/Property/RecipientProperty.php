<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * A sub property of participant. The participant who is at the receiving end of the action.
 * 
 * @method RecipientProperty setValue($value)
 */
class RecipientProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/recipient';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\AudienceType || $value instanceof Type\ContactPointType || $value instanceof Type\OrganizationType || $value instanceof Type\PersonType;
	}
}