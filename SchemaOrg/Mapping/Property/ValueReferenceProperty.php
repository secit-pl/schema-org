<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * ValueReferenceProperty class.
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
		return $value instanceof Type\EnumerationType || $value instanceof Type\PropertyValueType || $value instanceof Type\QualitativeValueType || $value instanceof Type\QuantitativeValueType || $value instanceof Type\StructuredValueType;
	}
}