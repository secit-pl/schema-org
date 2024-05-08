<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A PerformanceRole is a Role that some entity places with regard to a theatrical performance, e.g. in a Movie, TVSeries etc.
 * 
 * @method PerformanceRoleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PerformanceRoleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PerformanceRoleType setDescription(Property\DescriptionProperty $description)
 * @method PerformanceRoleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PerformanceRoleType setEndDate(Property\EndDateProperty $endDate)
 * @method PerformanceRoleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PerformanceRoleType setImage(Property\ImageProperty $image)
 * @method PerformanceRoleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PerformanceRoleType setName(Property\NameProperty $name)
 * @method PerformanceRoleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PerformanceRoleType setRoleName(Property\RoleNameProperty $roleName)
 * @method PerformanceRoleType setSameAs(Property\SameAsProperty $sameAs)
 * @method PerformanceRoleType setStartDate(Property\StartDateProperty $startDate)
 * @method PerformanceRoleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PerformanceRoleType setUrl(Property\UrlProperty $url)
 */
class PerformanceRoleType extends RoleType {

	/**
	 * @var Property\CharacterNameProperty
	 */
	private $characterName;

	/**
	 * Get character name.
	 *
	 * @return Property\CharacterNameProperty
	 */
	public function getCharacterName() {
		return $this->characterName;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PerformanceRole';
	}

	/**
	 * Set character name.
	 *
	 * @param Property\CharacterNameProperty $characterName
	 * @return PerformanceRoleType
	 */
	public function setCharacterName(Property\CharacterNameProperty $characterName) {
		$this->characterName = $characterName;

		return $this;
	}
}