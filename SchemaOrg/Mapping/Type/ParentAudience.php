<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ParentAudience.
 * 
 * @method ParentAudience setAudienceType(Property\AudienceType $audienceType)
 * @method ParentAudience setGeographicArea(Property\GeographicArea $geographicArea)
 * @method ParentAudience setRequiredGender(Property\RequiredGender $requiredGender)
 * @method ParentAudience setRequiredMaxAge(Property\RequiredMaxAge $requiredMaxAge)
 * @method ParentAudience setRequiredMinAge(Property\RequiredMinAge $requiredMinAge)
 * @method ParentAudience setSuggestedGender(Property\SuggestedGender $suggestedGender)
 * @method ParentAudience setSuggestedMaxAge(Property\SuggestedMaxAge $suggestedMaxAge)
 * @method ParentAudience setSuggestedMinAge(Property\SuggestedMinAge $suggestedMinAge)
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