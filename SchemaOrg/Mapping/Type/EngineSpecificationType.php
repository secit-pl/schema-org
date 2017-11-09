<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EngineSpecificationType.
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
 * @method EngineSpecificationType setUrl(Property\UrlProperty $url)
 */
class EngineSpecificationType extends StructuredValueType {

	/**
	 * @var Property\FuelTypeProperty
	 */
	private $fuelType;

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
	 * Set fuel type.
	 * 
	 * @param Property\FuelTypeProperty $fuelType
	 * @return EngineSpecificationType
	 */
	public function setFuelType(Property\FuelTypeProperty $fuelType) {
		$this->fuelType = $fuelType;

		return $this;
	}
}