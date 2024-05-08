<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * The boolean value false.
 * 
 * @method FalseType setValue($value)
 */
class FalseType extends DataType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/False';
	}
}