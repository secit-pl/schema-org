<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class BroadcastRelease.
 */
class BroadcastRelease extends MusicAlbumReleaseType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BroadcastRelease';
	}
}