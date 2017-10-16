<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class VegetarianDiet.
 */
class VegetarianDiet extends RestrictedDiet {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VegetarianDiet';
	}
}