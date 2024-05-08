<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The amount of fuel consumed for traveling a particular distance or temporal duration with the given vehicle (e.g. liters per 100 km). Note 1: There are unfortunately no standard unit codes for liters per 100 km. Use unitText to indicate the unit of measurement, e.g. L/100 km. Note 2: There are two ways of indicating the fuel consumption, fuelConsumption (e.g. 8 liters per 100 km) and fuelEfficiency (e.g. 30 miles per gallon). They are reciprocal. Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use valueReference to link the value for the fuel consumption to another value.
 * 
 * @method FuelConsumptionProperty setValue($value)
 */
class FuelConsumptionProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/fuelConsumption';
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