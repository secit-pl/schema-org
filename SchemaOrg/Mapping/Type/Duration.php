<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class Duration.
 */
class Duration extends Quantity {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Duration';
	}
}