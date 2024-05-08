<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
 * 
 * @method WorkloadProperty setValue($value)
 */
class WorkloadProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/workload';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\EnergyType || $value instanceof Type\QuantitativeValueType;
	}
}