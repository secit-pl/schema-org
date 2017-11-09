<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * EligibleTransactionVolumeProperty class.
 * 
 * @method EligibleTransactionVolumeProperty setValue($value)
 */
class EligibleTransactionVolumeProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/eligibleTransactionVolume';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\PriceSpecificationType;
	}
}