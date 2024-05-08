<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The permitted total weight of the loaded vehicle, including passengers and cargo and the weight of the empty vehicle. Typical unit code(s): KGM for kilogram, LBR for pound Note 1: You can indicate additional information in the name of the QuantitativeValue node. Note 2: You may also link to a QualitativeValue node that provides additional information using valueReference. Note 3: Note that you can use minValue and maxValue to indicate ranges.
 * 
 * @method WeightTotalProperty setValue($value)
 */
class WeightTotalProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/weightTotal';
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