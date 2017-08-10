<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class LegislativeBuilding.
 */
class LegislativeBuilding extends GovernmentBuilding {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LegislativeBuilding';
	}
}