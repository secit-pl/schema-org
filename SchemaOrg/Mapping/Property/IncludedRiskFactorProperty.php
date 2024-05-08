<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * A modifiable or non-modifiable risk factor included in the calculation, e.g. age, coexisting condition.
 * 
 * @method IncludedRiskFactorProperty setValue($value)
 */
class IncludedRiskFactorProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/includedRiskFactor';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\MedicalRiskFactorType;
	}
}