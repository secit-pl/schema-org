<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class VinylFormat.
 */
class VinylFormat extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VinylFormat';
	}
}