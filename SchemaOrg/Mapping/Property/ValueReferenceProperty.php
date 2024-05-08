<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
 * 
 * @method ValueReferenceProperty setValue($value)
 */
class ValueReferenceProperty extends AbstractProperty {

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
		return $value instanceof Type\EnumerationType || $value instanceof Type\PropertyValueType || $value instanceof Type\QualitativeValueType || $value instanceof Type\QuantitativeValueType || $value instanceof Type\StructuredValueType || $value instanceof DataType\TextType;
	}
}