<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Specifies a location feature by providing a structured value representing a feature of an accommodation as a property-value pair of varying degrees of formality.
 * 
 * @method LocationFeatureSpecificationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LocationFeatureSpecificationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LocationFeatureSpecificationType setDescription(Property\DescriptionProperty $description)
 * @method LocationFeatureSpecificationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LocationFeatureSpecificationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LocationFeatureSpecificationType setImage(Property\ImageProperty $image)
 * @method LocationFeatureSpecificationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LocationFeatureSpecificationType setMaxValue(Property\MaxValueProperty $maxValue)
 * @method LocationFeatureSpecificationType setMinValue(Property\MinValueProperty $minValue)
 * @method LocationFeatureSpecificationType setName(Property\NameProperty $name)
 * @method LocationFeatureSpecificationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LocationFeatureSpecificationType setPropertyID(Property\PropertyIDProperty $propertyID)
 * @method LocationFeatureSpecificationType setSameAs(Property\SameAsProperty $sameAs)
 * @method LocationFeatureSpecificationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LocationFeatureSpecificationType setUnitCode(Property\UnitCodeProperty $unitCode)
 * @method LocationFeatureSpecificationType setUnitText(Property\UnitTextProperty $unitText)
 * @method LocationFeatureSpecificationType setUrl(Property\UrlProperty $url)
 * @method LocationFeatureSpecificationType setValue(Property\ValueProperty $value)
 * @method LocationFeatureSpecificationType setValueReference(Property\ValueReferenceProperty $valueReference)
 */
class LocationFeatureSpecificationType extends PropertyValueType {

	/**
	 * @var Property\HoursAvailableProperty
	 */
	private $hoursAvailable;

	/**
	 * @var Property\ValidFromProperty
	 */
	private $validFrom;

	/**
	 * @var Property\ValidThroughProperty
	 */
	private $validThrough;

	/**
	 * Get hours available.
	 *
	 * @return Property\HoursAvailableProperty
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
	 * @return Property\ValidFromProperty
	 */
	public function getValidFrom() {
		return $this->validFrom;
	}

	/**
	 * Get valid through.
	 *
	 * @return Property\ValidThroughProperty
	 */
	public function getValidThrough() {
		return $this->validThrough;
	}

	/**
	 * Set hours available.
	 *
	 * @param Property\HoursAvailableProperty $hoursAvailable
	 * @return LocationFeatureSpecificationType
	 */
	public function setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable) {
		$this->hoursAvailable = $hoursAvailable;

		return $this;
	}

	/**
	 * Set valid from.
	 *
	 * @param Property\ValidFromProperty $validFrom
	 * @return LocationFeatureSpecificationType
	 */
	public function setValidFrom(Property\ValidFromProperty $validFrom) {
		$this->validFrom = $validFrom;

		return $this;
	}

	/**
	 * Set valid through.
	 *
	 * @param Property\ValidThroughProperty $validThrough
	 * @return LocationFeatureSpecificationType
	 */
	public function setValidThrough(Property\ValidThroughProperty $validThrough) {
		$this->validThrough = $validThrough;

		return $this;
	}
}