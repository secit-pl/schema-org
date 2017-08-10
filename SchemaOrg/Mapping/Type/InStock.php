<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class InStock.
 */
class InStock extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InStock';
	}
}