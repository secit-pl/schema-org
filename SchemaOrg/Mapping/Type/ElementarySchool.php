<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ElementarySchool.
 * 
 * @method ElementarySchool setAlumni(Property\Alumni $alumni)
 */
class ElementarySchool extends EducationalOrganization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ElementarySchool';
	}
}