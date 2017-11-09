<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ParentAudience.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ParentAudienceType instead.
 * 
 * @method ParentAudience setAdditionalType(Property\AdditionalType $additionalType)
 * @method ParentAudience setAlternateName(Property\AlternateName $alternateName)
 * @method ParentAudience setAudienceType(Property\AudienceType $audienceType)
 * @method ParentAudience setDescription(Property\Description $description)
 * @method ParentAudience setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ParentAudience setGeographicArea(Property\GeographicArea $geographicArea)
 * @method ParentAudience setIdentifier(Property\Identifier $identifier)
 * @method ParentAudience setImage(Property\Image $image)
 * @method ParentAudience setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ParentAudience setName(Property\Name $name)
 * @method ParentAudience setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ParentAudience setRequiredGender(Property\RequiredGender $requiredGender)
 * @method ParentAudience setRequiredMaxAge(Property\RequiredMaxAge $requiredMaxAge)
 * @method ParentAudience setRequiredMinAge(Property\RequiredMinAge $requiredMinAge)
 * @method ParentAudience setSameAs(Property\SameAs $sameAs)
 * @method ParentAudience setSuggestedGender(Property\SuggestedGender $suggestedGender)
 * @method ParentAudience setSuggestedMaxAge(Property\SuggestedMaxAge $suggestedMaxAge)
 * @method ParentAudience setSuggestedMinAge(Property\SuggestedMinAge $suggestedMinAge)
 * @method ParentAudience setUrl(Property\Url $url)
 */
class ParentAudience extends PeopleAudience {

	/**
	 * @var Property\ChildMaxAge
	 */
	private $childMaxAge;

	/**
	 * @var Property\ChildMinAge
	 */
	private $childMinAge;

	/**
	 * Get child max age.
	 * 
	 * @return Property\ChildMaxAge
	 */
	public function getChildMaxAge() {
		return $this->childMaxAge;
	}

	/**
	 * Get child min age.
	 * 
	 * @return Property\ChildMinAge
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
	 * @param Property\ChildMaxAge $childMaxAge
	 * @return ParentAudience
	 */
	public function setChildMaxAge(Property\ChildMaxAge $childMaxAge) {
		$this->childMaxAge = $childMaxAge;

		return $this;
	}

	/**
	 * Set child min age.
	 * 
	 * @param Property\ChildMinAge $childMinAge
	 * @return ParentAudience
	 */
	public function setChildMinAge(Property\ChildMinAge $childMinAge) {
		$this->childMinAge = $childMinAge;

		return $this;
	}
}