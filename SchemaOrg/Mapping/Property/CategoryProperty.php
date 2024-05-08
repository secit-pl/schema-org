<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
 * 
 * @method CategoryProperty setValue($value)
 */
class CategoryProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/category';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\PhysicalActivityCategoryType || $value instanceof DataType\TextType || $value instanceof Type\ThingType || $value instanceof DataType\URLType;
	}
}