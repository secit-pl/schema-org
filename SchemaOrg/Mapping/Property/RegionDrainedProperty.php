<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
 * 
 * @method RegionDrainedProperty setValue($value)
 */
class RegionDrainedProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/regionDrained';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\AnatomicalStructureType || $value instanceof Type\AnatomicalSystemType;
	}
}