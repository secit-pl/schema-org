<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class CompilationAlbum.
 */
class CompilationAlbum extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CompilationAlbum';
	}
}