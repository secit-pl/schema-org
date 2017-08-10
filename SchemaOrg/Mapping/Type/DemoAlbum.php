<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class DemoAlbum.
 */
class DemoAlbum extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DemoAlbum';
	}
}