<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class DigitalFormat.
 */
class DigitalFormat extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DigitalFormat';
	}
}