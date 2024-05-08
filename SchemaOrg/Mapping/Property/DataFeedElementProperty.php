<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * An item within a data feed. Data feeds may have many elements.
 * 
 * @method DataFeedElementProperty setValue($value)
 */
class DataFeedElementProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/dataFeedElement';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\DataFeedItemType || $value instanceof DataType\TextType || $value instanceof Type\ThingType;
	}
}