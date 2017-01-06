<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Class TrueType.
 * 
 * @method TrueType setValue($value)
 */
class TrueType extends BooleanType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/True';
	}
}