<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * Indicates the approximate radius of a GeoCircle (metres unless indicated otherwise via Distance notation).
 * 
 * @method GeoRadiusProperty setValue($value)
 */
class GeoRadiusProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/geoRadius';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\DistanceType || $value instanceof DataType\NumberType || $value instanceof DataType\TextType;
	}
}