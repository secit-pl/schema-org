<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * This links to a node or nodes indicating the exact quantity of the products included in an Offer or ProductCollection.
 * 
 * @method IncludesObjectProperty setValue($value)
 */
class IncludesObjectProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/includesObject';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\TypeAndQuantityNodeType;
	}
}