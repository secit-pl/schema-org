<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Class URLType.
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