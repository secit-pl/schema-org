<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * The suggested gender of the intended person or audience, for example "male", "female", or "unisex".
 * 
 * @method SuggestedGenderProperty setValue($value)
 */
class SuggestedGenderProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/suggestedGender';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\GenderType || $value instanceof DataType\TextType;
	}
}