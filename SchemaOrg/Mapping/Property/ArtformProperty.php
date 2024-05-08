<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;

/**
 * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
 * 
 * @method ArtformProperty setValue($value)
 */
class ArtformProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/artform';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof DataType\TextType || $value instanceof DataType\URLType;
	}
}