<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class OnlineOnly.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\OnlineOnlyType instead.
 */
class OnlineOnly extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OnlineOnly';
	}
}