<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ParentAudienceType.
 * 
 * @method ParentAudienceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ParentAudienceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ParentAudienceType setAudienceType(Property\AudienceTypeProperty $audienceType)
 * @method ParentAudienceType setDescription(Property\DescriptionProperty $description)
 * @method ParentAudienceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ParentAudienceType setGeographicArea(Property\GeographicAreaProperty $geographicArea)
 * @method ParentAudienceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ParentAudienceType setImage(Property\ImageProperty $image)
 * @method ParentAudienceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ParentAudienceType setName(Property\NameProperty $name)
 * @method ParentAudienceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ParentAudienceType setRequiredGender(Property\RequiredGenderProperty $requiredGender)
 * @method ParentAudienceType setRequiredMaxAge(Property\RequiredMaxAgeProperty $requiredMaxAge)
 * @method ParentAudienceType setRequiredMinAge(Property\RequiredMinAgeProperty $requiredMinAge)
 * @method ParentAudienceType setSameAs(Property\SameAsProperty $sameAs)
 * @method ParentAudienceType setSuggestedGender(Property\SuggestedGenderProperty $suggestedGender)
 * @method ParentAudienceType setSuggestedMaxAge(Property\SuggestedMaxAgeProperty $suggestedMaxAge)
 * @method ParentAudienceType setSuggestedMinAge(Property\SuggestedMinAgeProperty $suggestedMinAge)
 * @method ParentAudienceType setUrl(Property\UrlProperty $url)
 */
class ParentAudienceType extends PeopleAudienceType {

	/**
	 * @var Property\ChildMaxAgeProperty
	 */
	private $childMaxAge;

	/**
	 * @var Property\ChildMinAgeProperty
	 */
	private $childMinAge;

	/**
	 * Get child max age.
	 * 
	 * @return Property\ChildMaxAgeProperty
	 */
	public function getChildMaxAge() {
		return $this->childMaxAge;
	}

	/**
	 * Get child min age.
	 * 
	 * @return Property\ChildMinAgeProperty
	 */
	public function getChildMinAge() {
		return $this->childMinAge;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ParentAudience';
	}

	/**
	 * Set child max age.
	 * 
	 * @param Property\ChildMaxAgeProperty $childMaxAge
	 * @return ParentAudienceType
	 */
	public function setChildMaxAge(Property\ChildMaxAgeProperty $childMaxAge) {
		$this->childMaxAge = $childMaxAge;

		return $this;
	}

	/**
	 * Set child min age.
	 * 
	 * @param Property\ChildMinAgeProperty $childMinAge
	 * @return ParentAudienceType
	 */
	public function setChildMinAge(Property\ChildMinAgeProperty $childMinAge) {
		$this->childMinAge = $childMinAge;

		return $this;
	}
}