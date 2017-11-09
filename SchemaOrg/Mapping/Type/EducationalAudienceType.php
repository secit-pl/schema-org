<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EducationalAudienceType.
 * 
 * @method EducationalAudienceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EducationalAudienceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EducationalAudienceType setAudienceType(Property\AudienceTypeProperty $audienceType)
 * @method EducationalAudienceType setDescription(Property\DescriptionProperty $description)
 * @method EducationalAudienceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EducationalAudienceType setGeographicArea(Property\GeographicAreaProperty $geographicArea)
 * @method EducationalAudienceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EducationalAudienceType setImage(Property\ImageProperty $image)
 * @method EducationalAudienceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EducationalAudienceType setName(Property\NameProperty $name)
 * @method EducationalAudienceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EducationalAudienceType setSameAs(Property\SameAsProperty $sameAs)
 * @method EducationalAudienceType setUrl(Property\UrlProperty $url)
 */
class EducationalAudienceType extends AudienceType {

	/**
	 * @var Property\EducationalRoleProperty
	 */
	private $educationalRole;

	/**
	 * Get educational role.
	 * 
	 * @return Property\EducationalRoleProperty
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
	 * @param Property\EducationalRoleProperty $educationalRole
	 * @return EducationalAudienceType
	 */
	public function setEducationalRole(Property\EducationalRoleProperty $educationalRole) {
		$this->educationalRole = $educationalRole;

		return $this;
	}
}