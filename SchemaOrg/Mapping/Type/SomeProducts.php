<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SomeProducts.
 */
class SomeProducts {

	/**
	 */
	private $id;

	/**
	 * @var Property\InventoryLevel
	 */
	private $inventoryLevel;

	/**
	 * SomeProducts constructor.
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
	 * Get inventory level.
	 * 
	 * @return Property\InventoryLevel
	 */
	public function getInventoryLevel() {
		return $this->inventoryLevel;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SomeProducts';
	}

	/**
	 * Set inventory level.
	 * 
	 * @param Property\InventoryLevel $inventoryLevel
	 * @return SomeProducts
	 */
	public function setInventoryLevel(Property\InventoryLevel $inventoryLevel) {
		$this->inventoryLevel = $inventoryLevel;

		return $this;
	}
}