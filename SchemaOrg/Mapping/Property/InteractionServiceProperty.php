<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * InteractionServiceProperty class.
 * 
 * @method InteractionServiceProperty setValue($value)
 */
class InteractionServiceProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/interactionService';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\SoftwareApplicationType || $value instanceof Type\WebSiteType;
	}
}