<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class SingleRelease.
 */
class SingleRelease extends MusicAlbumReleaseType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SingleRelease';
	}
}