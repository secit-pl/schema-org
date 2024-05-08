<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
 * 
 * @method BrandProperty setValue($value)
 */
class BrandProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/brand';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\BrandType || $value instanceof Type\OrganizationType;
	}
}