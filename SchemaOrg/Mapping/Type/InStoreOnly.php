<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class InStoreOnly.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\InStoreOnlyType instead.
 */
class InStoreOnly extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InStoreOnly';
	}
}