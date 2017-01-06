<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EngineSpecification.
 * 
 * @method EngineSpecification setAdditionalType(Property\AdditionalType $additionalType)
 * @method EngineSpecification setAlternateName(Property\AlternateName $alternateName)
 * @method EngineSpecification setDescription(Property\Description $description)
 * @method EngineSpecification setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EngineSpecification setImage(Property\Image $image)
 * @method EngineSpecification setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EngineSpecification setName(Property\Name $name)
 * @method EngineSpecification setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EngineSpecification setSameAs(Property\SameAs $sameAs)
 * @method EngineSpecification setUrl(Property\Url $url)
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