<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EducationalAudience.
 * 
 * @method EducationalAudience setAudienceType(Property\AudienceType $audienceType)
 * @method EducationalAudience setGeographicArea(Property\GeographicArea $geographicArea)
 */
class EducationalAudience extends Audience {

	/**
	 * @var Property\EducationalRole
	 */
	private $educationalRole;

	/**
	 * Get educational role.
	 * 
	 * @return Property\EducationalRole
	 */
	public function getEducationalRole() {
		return $this->educationalRole;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EducationalAudience';
	}

	/**
	 * Set educational role.
	 * 
	 * @param Property\EducationalRole $educationalRole
	 * @return EducationalAudience
	 */
	public function setEducationalRole(Property\EducationalRole $educationalRole) {
		$this->educationalRole = $educationalRole;

		return $this;
	}
}