<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * AvailableDeliveryMethodProperty class.
 * 
 * @method AvailableDeliveryMethodProperty setValue($value)
 */
class AvailableDeliveryMethodProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/availableDeliveryMethod';
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