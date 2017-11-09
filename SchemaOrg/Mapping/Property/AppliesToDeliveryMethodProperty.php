<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * AppliesToDeliveryMethodProperty class.
 * 
 * @method AppliesToDeliveryMethodProperty setValue($value)
 */
class AppliesToDeliveryMethodProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/appliesToDeliveryMethod';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\DeliveryMethodType;
	}
}