<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The power of the vehicle's engine. Typical unit code(s): KWT for kilowatt, BHP for brake horsepower, N12 for metric horsepower (PS, with 1 PS = 735,49875 W) Note 1: There are many different ways of measuring an engine's power. For an overview, see http://en.wikipedia.org/wiki/Horsepower#Engine_power_test_codes. Note 2: You can link to information about how the given value has been determined using the valueReference property. Note 3: You can use minValue and maxValue to indicate ranges.
 * 
 * @method EnginePowerProperty setValue($value)
 */
class EnginePowerProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/enginePower';
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