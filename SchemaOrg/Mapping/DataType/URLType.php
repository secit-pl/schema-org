<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Data type: URL.
 * 
 * @method URLType setValue($value)
 */
class URLType extends TextType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/URL';
	}
}