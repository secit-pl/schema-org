<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * ProvidesBroadcastServiceProperty class.
 * 
 * @method ProvidesBroadcastServiceProperty setValue($value)
 */
class ProvidesBroadcastServiceProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/providesBroadcastService';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\BroadcastServiceType;
	}
}