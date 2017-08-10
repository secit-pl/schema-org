<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EngineSpecification.
 */
class EngineSpecification extends StructuredValue {

	/**
	 * @var Property\FuelType
	 */
	private $fuelType;

	/**
	 * Get fuel type.
	 * 
	 * @return Property\FuelType
	 */
	public function getFuelType() {
		return $this->fuelType;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EngineSpecification';
	}

	/**
	 * Set fuel type.
	 * 
	 * @param Property\FuelType $fuelType
	 * @return EngineSpecification
	 */
	public function setFuelType(Property\FuelType $fuelType) {
		$this->fuelType = $fuelType;

		return $this;
	}
}