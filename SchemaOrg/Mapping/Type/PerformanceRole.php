<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PerformanceRole.
 */
class PerformanceRole {

	/**
	 * @var Property\CharacterName
	 */
	private $characterName;

	/**
	 */
	private $id;

	/**
	 * PerformanceRole constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get character name.
	 * 
	 * @return Property\CharacterName
	 */
	public function getCharacterName() {
		return $this->characterName;
	}

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
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