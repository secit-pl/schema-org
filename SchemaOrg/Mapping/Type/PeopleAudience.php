<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PeopleAudience.
 * 
 * @method PeopleAudience setAdditionalType(Property\AdditionalType $additionalType)
 * @method PeopleAudience setAlternateName(Property\AlternateName $alternateName)
 * @method PeopleAudience setAudienceType(Property\AudienceType $audienceType)
 * @method PeopleAudience setDescription(Property\Description $description)
 * @method PeopleAudience setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PeopleAudience setGeographicArea(Property\GeographicArea $geographicArea)
 * @method PeopleAudience setImage(Property\Image $image)
 * @method PeopleAudience setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PeopleAudience setName(Property\Name $name)
 * @method PeopleAudience setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PeopleAudience setSameAs(Property\SameAs $sameAs)
 * @method PeopleAudience setUrl(Property\Url $url)
 */
class PeopleAudience extends Audience {

	/**
	 * @var Property\RequiredGender
	 */
	private $requiredGender;

	/**
	 * @var Property\RequiredMaxAge
	 */
	private $requiredMaxAge;

	/**
	 * @var Property\RequiredMinAge
	 */
	private $requiredMinAge;

	/**
	 * @var Property\SuggestedGender
	 */
	private $suggestedGender;

	/**
	 * @var Property\SuggestedMaxAge
	 */
	private $suggestedMaxAge;

	/**
	 * @var Property\SuggestedMinAge
	 */
	private $suggestedMinAge;

	/**
	 * Get required gender.
	 * 
	 * @return Property\RequiredGender
	 */
	public function getRequiredGender() {
		return $this->requiredGender;
	}

	/**
	 * Get required max age.
	 * 
	 * @return Property\RequiredMaxAge
	 */
	public function getRequiredMaxAge() {
		return $this->requiredMaxAge;
	}

	/**
	 * Get required min age.
	 * 
	 * @return Property\RequiredMinAge
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
	 * @return Property\SuggestedGender
	 */
	public function getSuggestedGender() {
		return $this->suggestedGender;
	}

	/**
	 * Get suggested max age.
	 * 
	 * @return Property\SuggestedMaxAge
	 */
	public function getSuggestedMaxAge() {
		return $this->suggestedMaxAge;
	}

	/**
	 * Get suggested min age.
	 * 
	 * @return Property\SuggestedMinAge
	 */
	public function getSuggestedMinAge() {
		return $this->suggestedMinAge;
	}

	/**
	 * Set required gender.
	 * 
	 * @param Property\RequiredGender $requiredGender
	 * @return PeopleAudience
	 */
	public function setRequiredGender(Property\RequiredGender $requiredGender) {
		$this->requiredGender = $requiredGender;

		return $this;
	}

	/**
	 * Set required max age.
	 * 
	 * @param Property\RequiredMaxAge $requiredMaxAge
	 * @return PeopleAudience
	 */
	public function setRequiredMaxAge(Property\RequiredMaxAge $requiredMaxAge) {
		$this->requiredMaxAge = $requiredMaxAge;

		return $this;
	}

	/**
	 * Set required min age.
	 * 
	 * @param Property\RequiredMinAge $requiredMinAge
	 * @return PeopleAudience
	 */
	public function setRequiredMinAge(Property\RequiredMinAge $requiredMinAge) {
		$this->requiredMinAge = $requiredMinAge;

		return $this;
	}

	/**
	 * Set suggested gender.
	 * 
	 * @param Property\SuggestedGender $suggestedGender
	 * @return PeopleAudience
	 */
	public function setSuggestedGender(Property\SuggestedGender $suggestedGender) {
		$this->suggestedGender = $suggestedGender;

		return $this;
	}

	/**
	 * Set suggested max age.
	 * 
	 * @param Property\SuggestedMaxAge $suggestedMaxAge
	 * @return PeopleAudience
	 */
	public function setSuggestedMaxAge(Property\SuggestedMaxAge $suggestedMaxAge) {
		$this->suggestedMaxAge = $suggestedMaxAge;

		return $this;
	}

	/**
	 * Set suggested min age.
	 * 
	 * @param Property\SuggestedMinAge $suggestedMinAge
	 * @return PeopleAudience
	 */
	public function setSuggestedMinAge(Property\SuggestedMinAge $suggestedMinAge) {
		$this->suggestedMinAge = $suggestedMinAge;

		return $this;
	}
}