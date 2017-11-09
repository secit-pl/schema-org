<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class Discontinued.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\DiscontinuedType instead.
 */
class Discontinued extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Discontinued';
	}
}