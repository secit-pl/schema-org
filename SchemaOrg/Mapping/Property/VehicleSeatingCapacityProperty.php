<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * VehicleSeatingCapacityProperty class.
 * 
 * @method VehicleSeatingCapacityProperty setValue($value)
 */
class VehicleSeatingCapacityProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/vehicleSeatingCapacity';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof DataType\NumberType || $value instanceof Type\QuantitativeValueType;
	}
}