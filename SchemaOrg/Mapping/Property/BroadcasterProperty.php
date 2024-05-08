<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The organization owning or operating the broadcast service.
 * 
 * @method BroadcasterProperty setValue($value)
 */
class BroadcasterProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/broadcaster';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\OrganizationType;
	}
}