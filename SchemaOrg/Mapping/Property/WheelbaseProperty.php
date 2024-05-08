<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The distance between the centers of the front and rear wheels. Typical unit code(s): CMT for centimeters, MTR for meters, INH for inches, FOT for foot/feet.
 * 
 * @method WheelbaseProperty setValue($value)
 */
class WheelbaseProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/wheelbase';
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