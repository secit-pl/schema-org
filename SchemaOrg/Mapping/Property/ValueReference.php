<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * ValueReference class.
 * 
 * @method ValueReference setValue($value)
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Property\ValueReferenceProperty instead.
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