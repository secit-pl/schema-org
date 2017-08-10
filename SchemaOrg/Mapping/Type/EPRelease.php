<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class EPRelease.
 */
class EPRelease extends MusicAlbumReleaseType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EPRelease';
	}
}