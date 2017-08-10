<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class CDFormat.
 */
class CDFormat extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CDFormat';
	}
}