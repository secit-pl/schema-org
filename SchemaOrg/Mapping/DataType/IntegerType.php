<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Data type: Integer.
 * 
 * @method IntegerType setValue($value)
 */
class IntegerType extends NumberType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Integer';
	}
}