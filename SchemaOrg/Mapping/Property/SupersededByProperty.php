<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
 * 
 * @method SupersededByProperty setValue($value)
 */
class SupersededByProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/supersededBy';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\ClassType || $value instanceof Type\EnumerationType || $value instanceof Type\PropertyType;
	}
}