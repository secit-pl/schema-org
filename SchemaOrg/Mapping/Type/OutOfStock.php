<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class OutOfStock.
 */
class OutOfStock extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OutOfStock';
	}
}