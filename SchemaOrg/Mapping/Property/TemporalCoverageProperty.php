<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;

/**
 * TemporalCoverageProperty class.
 * 
 * @method TemporalCoverageProperty setValue($value)
 */
class TemporalCoverageProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/temporalCoverage';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof DataType\DateTimeType || $value instanceof DataType\TextType || $value instanceof DataType\URLType;
	}
}