<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class InStock.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\InStockType instead.
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