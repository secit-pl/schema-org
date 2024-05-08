<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).
 * 
 * @method AvailableChannelProperty setValue($value)
 */
class AvailableChannelProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/availableChannel';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\ServiceChannelType;
	}
}