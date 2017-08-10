<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Map.
 */
class Map {

	/**
	 */
	private $id;

	/**
	 * @var Property\MapType
	 */
	private $mapType;

	/**
	 * Map constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
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
	 * Get map type.
	 * 
	 * @return Property\MapType
	 */
	public function getMapType() {
		return $this->mapType;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Map';
	}

	/**
	 * Set map type.
	 * 
	 * @param Property\MapType $mapType
	 * @return Map
	 */
	public function setMapType(Property\MapType $mapType) {
		$this->mapType = $mapType;

		return $this;
	}
}