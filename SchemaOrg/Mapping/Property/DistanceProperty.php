<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The distance travelled, e.g. exercising or travelling.
 * 
 * @method DistanceProperty setValue($value)
 */
class DistanceProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/distance';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\DistanceType;
	}
}