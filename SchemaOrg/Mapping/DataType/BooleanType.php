<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Boolean: True or False.
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