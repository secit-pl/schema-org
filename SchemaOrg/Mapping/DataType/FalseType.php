<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Class FalseType.
 * 
 * @method FalseType setValue($value)
 */
class FalseType extends BooleanType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/False';
	}
}