<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The torque (turning force) of the vehicle's engine. Typical unit code(s): NU for newton metre (N m), F17 for pound-force per foot, or F48 for pound-force per inch Note 1: You can link to information about how the given value has been determined (e.g. reference RPM) using the valueReference property. Note 2: You can use minValue and maxValue to indicate ranges.
 * 
 * @method TorqueProperty setValue($value)
 */
class TorqueProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/torque';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\QuantitativeValueType;
	}
}