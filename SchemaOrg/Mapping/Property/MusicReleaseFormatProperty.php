<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * Format of this release (the type of recording media used, i.e. compact disc, digital media, LP, etc.).
 * 
 * @method MusicReleaseFormatProperty setValue($value)
 */
class MusicReleaseFormatProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/musicReleaseFormat';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\MusicReleaseFormatType;
	}
}