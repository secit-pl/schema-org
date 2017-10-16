<?php

namespace SecIT\SchemaOrg\Mapping\Property;

/**
 * ContentLocation class.
 * 
 * @method ContentLocation setValue($value)
 */
class ContentLocation extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/contentLocation';
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