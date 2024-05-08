<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * This property links to all UnitPriceSpecification nodes that apply in parallel for the CompoundPriceSpecification node.
 * 
 * @method PriceComponentProperty setValue($value)
 */
class PriceComponentProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/priceComponent';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\UnitPriceSpecificationType;
	}
}