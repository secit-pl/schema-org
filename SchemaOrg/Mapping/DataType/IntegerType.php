<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Class IntegerType.
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