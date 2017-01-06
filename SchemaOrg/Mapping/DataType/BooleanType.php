<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Class BooleanType.
 * 
 * @method BooleanType setValue($value)
 */
class BooleanType extends DataType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Boolean';
	}
}