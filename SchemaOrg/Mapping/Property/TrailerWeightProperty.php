<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The permitted weight of a trailer attached to the vehicle. Typical unit code(s): KGM for kilogram, LBR for pound * Note 1: You can indicate additional information in the name of the QuantitativeValue node. * Note 2: You may also link to a QualitativeValue node that provides additional information using valueReference. * Note 3: Note that you can use minValue and maxValue to indicate ranges.
 * 
 * @method TrailerWeightProperty setValue($value)
 */
class TrailerWeightProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/trailerWeight';
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