<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Data type: Floating number.
 * 
 * @method FloatType setValue($value)
 */
class FloatType extends NumberType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Float';
	}
}