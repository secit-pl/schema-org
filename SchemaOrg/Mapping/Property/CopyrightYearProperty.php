<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;

/**
 * The year during which the claimed copyright for the CreativeWork was first asserted.
 * 
 * @method CopyrightYearProperty setValue($value)
 */
class CopyrightYearProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/copyrightYear';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof DataType\NumberType;
	}
}