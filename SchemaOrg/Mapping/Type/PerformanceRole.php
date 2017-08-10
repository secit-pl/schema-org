<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PerformanceRole.
 * 
 * @method PerformanceRole setEndDate(Property\EndDate $endDate)
 * @method PerformanceRole setRoleName(Property\RoleName $roleName)
 * @method PerformanceRole setStartDate(Property\StartDate $startDate)
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