<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The number of milligrams of cholesterol.
 * 
 * @method CholesterolContentProperty setValue($value)
 */
class CholesterolContentProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/cholesterolContent';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\MassType;
	}
}