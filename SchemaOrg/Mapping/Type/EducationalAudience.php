<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EducationalAudience.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\EducationalAudienceType instead.
 * 
 * @method EducationalAudience setAdditionalType(Property\AdditionalType $additionalType)
 * @method EducationalAudience setAlternateName(Property\AlternateName $alternateName)
 * @method EducationalAudience setAudienceType(Property\AudienceType $audienceType)
 * @method EducationalAudience setDescription(Property\Description $description)
 * @method EducationalAudience setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EducationalAudience setGeographicArea(Property\GeographicArea $geographicArea)
 * @method EducationalAudience setIdentifier(Property\Identifier $identifier)
 * @method EducationalAudience setImage(Property\Image $image)
 * @method EducationalAudience setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EducationalAudience setName(Property\Name $name)
 * @method EducationalAudience setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EducationalAudience setSameAs(Property\SameAs $sameAs)
 * @method EducationalAudience setUrl(Property\Url $url)
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