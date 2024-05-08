<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * The geographic area where a service or offered item is provided.
 * 
 * @method AreaServedProperty setValue($value)
 */
class AreaServedProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/areaServed';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\AdministrativeAreaType || $value instanceof Type\GeoShapeType || $value instanceof Type\PlaceType || $value instanceof DataType\TextType;
	}
}