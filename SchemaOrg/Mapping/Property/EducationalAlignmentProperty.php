<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * An alignment to an established educational framework. This property should not be used where the nature of the alignment can be described using a simple property, for example to express that a resource teaches or assesses a competency.
 * 
 * @method EducationalAlignmentProperty setValue($value)
 */
class EducationalAlignmentProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/educationalAlignment';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\AlignmentObjectType;
	}
}