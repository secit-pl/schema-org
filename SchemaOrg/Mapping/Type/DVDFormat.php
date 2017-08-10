<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class DVDFormat.
 */
class DVDFormat extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DVDFormat';
	}
}