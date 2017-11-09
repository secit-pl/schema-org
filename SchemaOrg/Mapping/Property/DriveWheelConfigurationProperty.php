<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * DriveWheelConfigurationProperty class.
 * 
 * @method DriveWheelConfigurationProperty setValue($value)
 */
class DriveWheelConfigurationProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/driveWheelConfiguration';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\DriveWheelConfigurationValueType || $value instanceof DataType\TextType;
	}
}