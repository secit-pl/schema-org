<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * Indicates the design and body style of the vehicle (e.g. station wagon, hatchback, etc.).
 * 
 * @method BodyTypeProperty setValue($value)
 */
class BodyTypeProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/bodyType';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\QualitativeValueType || $value instanceof DataType\TextType || $value instanceof DataType\URLType;
	}
}