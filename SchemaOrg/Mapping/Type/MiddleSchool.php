<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MiddleSchool.
 * 
 * @method MiddleSchool setAlumni(Property\Alumni $alumni)
 */
class MiddleSchool extends EducationalOrganization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MiddleSchool';
	}
}