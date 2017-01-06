<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PerformanceRole.
 * 
 * @method PerformanceRole setAdditionalType(Property\AdditionalType $additionalType)
 * @method PerformanceRole setAlternateName(Property\AlternateName $alternateName)
 * @method PerformanceRole setDescription(Property\Description $description)
 * @method PerformanceRole setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PerformanceRole setEndDate(Property\EndDate $endDate)
 * @method PerformanceRole setImage(Property\Image $image)
 * @method PerformanceRole setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PerformanceRole setName(Property\Name $name)
 * @method PerformanceRole setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PerformanceRole setRoleName(Property\RoleName $roleName)
 * @method PerformanceRole setSameAs(Property\SameAs $sameAs)
 * @method PerformanceRole setStartDate(Property\StartDate $startDate)
 * @method PerformanceRole setUrl(Property\Url $url)
 */
class PerformanceRole extends Role {

	/**
	 * @var Property\CharacterName
	 */
	private $characterName;

	/**
	 * Get character name.
	 * 
	 * @return Property\CharacterName
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
	 * @param Property\CharacterName $characterName
	 * @return PerformanceRole
	 */
	public function setCharacterName(Property\CharacterName $characterName) {
		$this->characterName = $characterName;

		return $this;
	}
}