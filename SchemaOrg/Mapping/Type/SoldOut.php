<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class SoldOut.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\SoldOutType instead.
 */
class SoldOut extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SoldOut';
	}
}