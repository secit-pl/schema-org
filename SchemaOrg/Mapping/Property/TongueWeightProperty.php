<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The permitted vertical load (TWR) of a trailer attached to the vehicle. Also referred to as Tongue Load Rating (TLR) or Vertical Load Rating (VLR). Typical unit code(s): KGM for kilogram, LBR for pound Note 1: You can indicate additional information in the name of the QuantitativeValue node. Note 2: You may also link to a QualitativeValue node that provides additional information using valueReference. Note 3: Note that you can use minValue and maxValue to indicate ranges.
 * 
 * @method TongueWeightProperty setValue($value)
 */
class TongueWeightProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/tongueWeight';
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