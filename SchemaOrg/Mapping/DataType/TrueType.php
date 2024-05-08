<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * The boolean value true.
 * 
 * @method TrueType setValue($value)
 */
class TrueType extends DataType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/True';
	}
}