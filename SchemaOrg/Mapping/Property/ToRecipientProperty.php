<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * A sub property of recipient. The recipient who was directly sent the message.
 * 
 * @method ToRecipientProperty setValue($value)
 */
class ToRecipientProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/toRecipient';
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