<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Data type: Text.
 * 
 * @method TextType setValue($value)
 */
class TextType extends DataType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Text';
	}
}