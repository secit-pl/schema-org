<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LocationFeatureSpecification.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\LocationFeatureSpecificationType instead.
 * 
 * @method LocationFeatureSpecification setAdditionalType(Property\AdditionalType $additionalType)
 * @method LocationFeatureSpecification setAlternateName(Property\AlternateName $alternateName)
 * @method LocationFeatureSpecification setDescription(Property\Description $description)
 * @method LocationFeatureSpecification setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LocationFeatureSpecification setIdentifier(Property\Identifier $identifier)
 * @method LocationFeatureSpecification setImage(Property\Image $image)
 * @method LocationFeatureSpecification setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LocationFeatureSpecification setMaxValue(Property\MaxValue $maxValue)
 * @method LocationFeatureSpecification setMinValue(Property\MinValue $minValue)
 * @method LocationFeatureSpecification setName(Property\Name $name)
 * @method LocationFeatureSpecification setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LocationFeatureSpecification setPropertyID(Property\PropertyID $propertyID)
 * @method LocationFeatureSpecification setSameAs(Property\SameAs $sameAs)
 * @method LocationFeatureSpecification setUnitCode(Property\UnitCode $unitCode)
 * @method LocationFeatureSpecification setUnitText(Property\UnitText $unitText)
 * @method LocationFeatureSpecification setUrl(Property\Url $url)
 * @method LocationFeatureSpecification setValue(Property\Value $value)
 * @method LocationFeatureSpecification setValueReference(Property\ValueReference $valueReference)
 */
class LocationFeatureSpecification extends PropertyValue {

	/**
	 * @var Property\HoursAvailable
	 */
	private $hoursAvailable;

	/**
	 * @var Property\ValidFrom
	 */
	private $validFrom;

	/**
	 * @var Property\ValidThrough
	 */
	private $validThrough;

	/**
	 * Get hours available.
	 * 
	 * @return Property\HoursAvailable
	 */
	public function getHoursAvailable() {
		return $this->hoursAvailable;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LocationFeatureSpecification';
	}

	/**
	 * Get valid from.
	 * 
	 * @return Property\ValidFrom
	 */
	public function getValidFrom() {
		return $this->validFrom;
	}

	/**
	 * Get valid through.
	 * 
	 * @return Property\ValidThrough
	 */
	public function getValidThrough() {
		return $this->validThrough;
	}

	/**
	 * Set hours available.
	 * 
	 * @param Property\HoursAvailable $hoursAvailable
	 * @return LocationFeatureSpecification
	 */
	public function setHoursAvailable(Property\HoursAvailable $hoursAvailable) {
		$this->hoursAvailable = $hoursAvailable;

		return $this;
	}

	/**
	 * Set valid from.
	 * 
	 * @param Property\ValidFrom $validFrom
	 * @return LocationFeatureSpecification
	 */
	public function setValidFrom(Property\ValidFrom $validFrom) {
		$this->validFrom = $validFrom;

		return $this;
	}

	/**
	 * Set valid through.
	 * 
	 * @param Property\ValidThrough $validThrough
	 * @return LocationFeatureSpecification
	 */
	public function setValidThrough(Property\ValidThrough $validThrough) {
		$this->validThrough = $validThrough;

		return $this;
	}
}