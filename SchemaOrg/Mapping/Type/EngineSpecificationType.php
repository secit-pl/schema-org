<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Information about the engine of the vehicle. A vehicle can have multiple engines represented by multiple engine specification entities.
 * 
 * @method EngineSpecificationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EngineSpecificationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EngineSpecificationType setDescription(Property\DescriptionProperty $description)
 * @method EngineSpecificationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EngineSpecificationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EngineSpecificationType setImage(Property\ImageProperty $image)
 * @method EngineSpecificationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EngineSpecificationType setName(Property\NameProperty $name)
 * @method EngineSpecificationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EngineSpecificationType setSameAs(Property\SameAsProperty $sameAs)
 * @method EngineSpecificationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EngineSpecificationType setUrl(Property\UrlProperty $url)
 */
class EngineSpecificationType extends StructuredValueType {

	/**
	 * @var Property\EngineDisplacementProperty
	 */
	private $engineDisplacement;

	/**
	 * @var Property\EnginePowerProperty
	 */
	private $enginePower;

	/**
	 * @var Property\EngineTypeProperty
	 */
	private $engineType;

	/**
	 * @var Property\FuelTypeProperty
	 */
	private $fuelType;

	/**
	 * @var Property\TorqueProperty
	 */
	private $torque;

	/**
	 * Get engine displacement.
	 *
	 * @return Property\EngineDisplacementProperty
	 */
	public function getEngineDisplacement() {
		return $this->engineDisplacement;
	}

	/**
	 * Get engine power.
	 *
	 * @return Property\EnginePowerProperty
	 */
	public function getEnginePower() {
		return $this->enginePower;
	}

	/**
	 * Get engine type.
	 *
	 * @return Property\EngineTypeProperty
	 */
	public function getEngineType() {
		return $this->engineType;
	}

	/**
	 * Get fuel type.
	 *
	 * @return Property\FuelTypeProperty
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
	 * Get torque.
	 *
	 * @return Property\TorqueProperty
	 */
	public function getTorque() {
		return $this->torque;
	}

	/**
	 * Set engine displacement.
	 *
	 * @param Property\EngineDisplacementProperty $engineDisplacement
	 * @return EngineSpecificationType
	 */
	public function setEngineDisplacement(Property\EngineDisplacementProperty $engineDisplacement) {
		$this->engineDisplacement = $engineDisplacement;

		return $this;
	}

	/**
	 * Set engine power.
	 *
	 * @param Property\EnginePowerProperty $enginePower
	 * @return EngineSpecificationType
	 */
	public function setEnginePower(Property\EnginePowerProperty $enginePower) {
		$this->enginePower = $enginePower;

		return $this;
	}

	/**
	 * Set engine type.
	 *
	 * @param Property\EngineTypeProperty $engineType
	 * @return EngineSpecificationType
	 */
	public function setEngineType(Property\EngineTypeProperty $engineType) {
		$this->engineType = $engineType;

		return $this;
	}

	/**
	 * Set fuel type.
	 *
	 * @param Property\FuelTypeProperty $fuelType
	 * @return EngineSpecificationType
	 */
	public function setFuelType(Property\FuelTypeProperty $fuelType) {
		$this->fuelType = $fuelType;

		return $this;
	}

	/**
	 * Set torque.
	 *
	 * @param Property\TorqueProperty $torque
	 * @return EngineSpecificationType
	 */
	public function setTorque(Property\TorqueProperty $torque) {
		$this->torque = $torque;

		return $this;
	}
}