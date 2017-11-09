<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PeopleAudienceType.
 * 
 * @method PeopleAudienceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PeopleAudienceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PeopleAudienceType setAudienceType(Property\AudienceTypeProperty $audienceType)
 * @method PeopleAudienceType setDescription(Property\DescriptionProperty $description)
 * @method PeopleAudienceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PeopleAudienceType setGeographicArea(Property\GeographicAreaProperty $geographicArea)
 * @method PeopleAudienceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PeopleAudienceType setImage(Property\ImageProperty $image)
 * @method PeopleAudienceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PeopleAudienceType setName(Property\NameProperty $name)
 * @method PeopleAudienceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PeopleAudienceType setSameAs(Property\SameAsProperty $sameAs)
 * @method PeopleAudienceType setUrl(Property\UrlProperty $url)
 */
class PeopleAudienceType extends AudienceType {

	/**
	 * @var Property\RequiredGenderProperty
	 */
	private $requiredGender;

	/**
	 * @var Property\RequiredMaxAgeProperty
	 */
	private $requiredMaxAge;

	/**
	 * @var Property\RequiredMinAgeProperty
	 */
	private $requiredMinAge;

	/**
	 * @var Property\SuggestedGenderProperty
	 */
	private $suggestedGender;

	/**
	 * @var Property\SuggestedMaxAgeProperty
	 */
	private $suggestedMaxAge;

	/**
	 * @var Property\SuggestedMinAgeProperty
	 */
	private $suggestedMinAge;

	/**
	 * Get required gender.
	 * 
	 * @return Property\RequiredGenderProperty
	 */
	public function getRequiredGender() {
		return $this->requiredGender;
	}

	/**
	 * Get required max age.
	 * 
	 * @return Property\RequiredMaxAgeProperty
	 */
	public function getRequiredMaxAge() {
		return $this->requiredMaxAge;
	}

	/**
	 * Get required min age.
	 * 
	 * @return Property\RequiredMinAgeProperty
	 */
	public function getRequiredMinAge() {
		return $this->requiredMinAge;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PeopleAudience';
	}

	/**
	 * Get suggested gender.
	 * 
	 * @return Property\SuggestedGenderProperty
	 */
	public function getSuggestedGender() {
		return $this->suggestedGender;
	}

	/**
	 * Get suggested max age.
	 * 
	 * @return Property\SuggestedMaxAgeProperty
	 */
	public function getSuggestedMaxAge() {
		return $this->suggestedMaxAge;
	}

	/**
	 * Get suggested min age.
	 * 
	 * @return Property\SuggestedMinAgeProperty
	 */
	public function getSuggestedMinAge() {
		return $this->suggestedMinAge;
	}

	/**
	 * Set required gender.
	 * 
	 * @param Property\RequiredGenderProperty $requiredGender
	 * @return PeopleAudienceType
	 */
	public function setRequiredGender(Property\RequiredGenderProperty $requiredGender) {
		$this->requiredGender = $requiredGender;

		return $this;
	}

	/**
	 * Set required max age.
	 * 
	 * @param Property\RequiredMaxAgeProperty $requiredMaxAge
	 * @return PeopleAudienceType
	 */
	public function setRequiredMaxAge(Property\RequiredMaxAgeProperty $requiredMaxAge) {
		$this->requiredMaxAge = $requiredMaxAge;

		return $this;
	}

	/**
	 * Set required min age.
	 * 
	 * @param Property\RequiredMinAgeProperty $requiredMinAge
	 * @return PeopleAudienceType
	 */
	public function setRequiredMinAge(Property\RequiredMinAgeProperty $requiredMinAge) {
		$this->requiredMinAge = $requiredMinAge;

		return $this;
	}

	/**
	 * Set suggested gender.
	 * 
	 * @param Property\SuggestedGenderProperty $suggestedGender
	 * @return PeopleAudienceType
	 */
	public function setSuggestedGender(Property\SuggestedGenderProperty $suggestedGender) {
		$this->suggestedGender = $suggestedGender;

		return $this;
	}

	/**
	 * Set suggested max age.
	 * 
	 * @param Property\SuggestedMaxAgeProperty $suggestedMaxAge
	 * @return PeopleAudienceType
	 */
	public function setSuggestedMaxAge(Property\SuggestedMaxAgeProperty $suggestedMaxAge) {
		$this->suggestedMaxAge = $suggestedMaxAge;

		return $this;
	}

	/**
	 * Set suggested min age.
	 * 
	 * @param Property\SuggestedMinAgeProperty $suggestedMinAge
	 * @return PeopleAudienceType
	 */
	public function setSuggestedMinAge(Property\SuggestedMinAgeProperty $suggestedMinAge) {
		$this->suggestedMinAge = $suggestedMinAge;

		return $this;
	}
}