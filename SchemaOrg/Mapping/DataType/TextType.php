<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Class TextType.
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