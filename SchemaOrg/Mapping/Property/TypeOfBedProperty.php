<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * The type of bed to which the BedDetail refers, i.e. the type of bed available in the quantity indicated by quantity.
 * 
 * @method TypeOfBedProperty setValue($value)
 */
class TypeOfBedProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/typeOfBed';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\BedType || $value instanceof DataType\TextType;
	}
}