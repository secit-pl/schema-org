<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * ExpectsAcceptanceOfProperty class.
 * 
 * @method ExpectsAcceptanceOfProperty setValue($value)
 */
class ExpectsAcceptanceOfProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/expectsAcceptanceOf';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\OfferType;
	}
}