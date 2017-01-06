<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Class FloatType.
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