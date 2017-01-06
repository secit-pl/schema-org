<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Class NumberType.
 * 
 * @method NumberType setValue($value)
 */
class NumberType extends DataType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Number';
	}
}