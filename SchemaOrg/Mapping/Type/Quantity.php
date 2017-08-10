<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class Quantity.
 */
class Quantity extends Intangible {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Quantity';
	}
}