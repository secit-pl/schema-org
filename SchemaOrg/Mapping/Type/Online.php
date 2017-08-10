<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class Online.
 */
class Online extends GameServerStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Online';
	}
}