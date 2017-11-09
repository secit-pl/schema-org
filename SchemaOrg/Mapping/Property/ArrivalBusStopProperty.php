<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * ArrivalBusStopProperty class.
 * 
 * @method ArrivalBusStopProperty setValue($value)
 */
class ArrivalBusStopProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/arrivalBusStop';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\BusStationType || $value instanceof Type\BusStopType;
	}
}