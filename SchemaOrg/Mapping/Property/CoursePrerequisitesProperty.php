<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * CoursePrerequisitesProperty class.
 * 
 * @method CoursePrerequisitesProperty setValue($value)
 */
class CoursePrerequisitesProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/coursePrerequisites';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\AlignmentObjectType || $value instanceof Type\CourseType || $value instanceof DataType\TextType;
	}
}