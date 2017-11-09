<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * FoodEstablishmentProperty class.
 * 
 * @method FoodEstablishmentProperty setValue($value)
 */
class FoodEstablishmentProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/foodEstablishment';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\FoodEstablishmentType || $value instanceof Type\PlaceType;
	}
}