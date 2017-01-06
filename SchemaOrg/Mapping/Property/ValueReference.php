<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * ValueReference class.
 * 
 * @method ValueReference setValue($value)
 */
class ValueReference extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/valueReference';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\Enumeration || $value instanceof Type\PropertyValue || $value instanceof Type\QualitativeValue || $value instanceof Type\QuantitativeValue || $value instanceof Type\StructuredValue;
	}
}