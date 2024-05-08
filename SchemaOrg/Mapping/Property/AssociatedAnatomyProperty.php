<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The anatomy of the underlying organ system or structures associated with this entity.
 * 
 * @method AssociatedAnatomyProperty setValue($value)
 */
class AssociatedAnatomyProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/associatedAnatomy';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\AnatomicalStructureType || $value instanceof Type\AnatomicalSystemType || $value instanceof Type\SuperficialAnatomyType;
	}
}