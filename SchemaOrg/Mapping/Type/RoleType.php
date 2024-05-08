<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Represents additional information about a relationship or property. For example a Role can be used to say that a 'member' role linking some SportsTeam to a player occurred during a particular time period. Or that a Person's 'actor' role in a Movie was for some particular characterName. Such properties can be attached to a Role entity, which is then associated with the main entities using ordinary properties like 'member' or 'actor'. See also blog post.
 * 
 * @method RoleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RoleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RoleType setDescription(Property\DescriptionProperty $description)
 * @method RoleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RoleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RoleType setImage(Property\ImageProperty $image)
 * @method RoleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RoleType setName(Property\NameProperty $name)
 * @method RoleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RoleType setSameAs(Property\SameAsProperty $sameAs)
 * @method RoleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RoleType setUrl(Property\UrlProperty $url)
 */
class RoleType extends IntangibleType {

	/**
	 * @var Property\EndDateProperty
	 */
	private $endDate;

	/**
	 * @var Property\RoleNameProperty
	 */
	private $roleName;

	/**
	 * @var Property\StartDateProperty
	 */
	private $startDate;

	/**
	 * Get end date.
	 *
	 * @return Property\EndDateProperty
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * Get role name.
	 *
	 * @return Property\RoleNameProperty
	 */
	public function getRoleName() {
		return $this->roleName;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Role';
	}

	/**
	 * Get start date.
	 *
	 * @return Property\StartDateProperty
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * Set end date.
	 *
	 * @param Property\EndDateProperty $endDate
	 * @return RoleType
	 */
	public function setEndDate(Property\EndDateProperty $endDate) {
		$this->endDate = $endDate;

		return $this;
	}

	/**
	 * Set role name.
	 *
	 * @param Property\RoleNameProperty $roleName
	 * @return RoleType
	 */
	public function setRoleName(Property\RoleNameProperty $roleName) {
		$this->roleName = $roleName;

		return $this;
	}

	/**
	 * Set start date.
	 *
	 * @param Property\StartDateProperty $startDate
	 * @return RoleType
	 */
	public function setStartDate(Property\StartDateProperty $startDate) {
		$this->startDate = $startDate;

		return $this;
	}
}