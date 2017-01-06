<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * HasDigitalDocumentPermission class.
 * 
 * @method HasDigitalDocumentPermission setValue($value)
 */
class HasDigitalDocumentPermission extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/hasDigitalDocumentPermission';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\DigitalDocumentPermission;
	}
}