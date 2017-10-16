<?php

namespace SecIT\SchemaOrg\Mapping\Property;

/**
 * Error class.
 * 
 * @method Error setValue($value)
 */
class Error extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/error';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return true;
	}
}