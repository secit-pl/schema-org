<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * An offering of the course at a specific time and place or through specific media or mode of study or to a specific section of students.
 * 
 * @method HasCourseInstanceProperty setValue($value)
 */
class HasCourseInstanceProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/hasCourseInstance';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\CourseInstanceType;
	}
}