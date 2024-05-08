<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
 * 
 * @method AddressCountryProperty setValue($value)
 */
class AddressCountryProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/addressCountry';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\CountryType || $value instanceof DataType\TextType;
	}
}