<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class OnlineOnly.
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