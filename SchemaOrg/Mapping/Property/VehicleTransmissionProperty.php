<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * VehicleTransmissionProperty class.
 * 
 * @method VehicleTransmissionProperty setValue($value)
 */
class VehicleTransmissionProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/vehicleTransmission';
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