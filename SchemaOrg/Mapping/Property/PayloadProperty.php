<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The permitted weight of passengers and cargo, EXCLUDING the weight of the empty vehicle. Typical unit code(s): KGM for kilogram, LBR for pound Note 1: Many databases specify the permitted TOTAL weight instead, which is the sum of weight and payload Note 2: You can indicate additional information in the name of the QuantitativeValue node. Note 3: You may also link to a QualitativeValue node that provides additional information using valueReference. Note 4: Note that you can use minValue and maxValue to indicate ranges.
 * 
 * @method PayloadProperty setValue($value)
 */
class PayloadProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/payload';
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