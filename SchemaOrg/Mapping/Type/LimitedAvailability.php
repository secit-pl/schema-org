<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class LimitedAvailability.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\LimitedAvailabilityType instead.
 */
class LimitedAvailability extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LimitedAvailability';
	}
}