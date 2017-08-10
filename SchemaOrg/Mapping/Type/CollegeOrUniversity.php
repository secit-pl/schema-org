<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CollegeOrUniversity.
 * 
 * @method CollegeOrUniversity setAlumni(Property\Alumni $alumni)
 */
class CollegeOrUniversity extends EducationalOrganization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CollegeOrUniversity';
	}
}