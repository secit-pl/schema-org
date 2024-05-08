<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * Anatomical systems or structures that relate to the superficial anatomy.
 * 
 * @method RelatedAnatomyProperty setValue($value)
 */
class RelatedAnatomyProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/relatedAnatomy';
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