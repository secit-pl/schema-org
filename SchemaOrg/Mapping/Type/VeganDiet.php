<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class VeganDiet.
 */
class VeganDiet extends RestrictedDiet {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VeganDiet';
	}
}