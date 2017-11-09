<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class QuantitativeValueType.
 * 
 * @method QuantitativeValueType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method QuantitativeValueType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method QuantitativeValueType setDescription(Property\DescriptionProperty $description)
 * @method QuantitativeValueType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method QuantitativeValueType setIdentifier(Property\IdentifierProperty $identifier)
 * @method QuantitativeValueType setImage(Property\ImageProperty $image)
 * @method QuantitativeValueType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method QuantitativeValueType setName(Property\NameProperty $name)
 * @method QuantitativeValueType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method QuantitativeValueType setSameAs(Property\SameAsProperty $sameAs)
 * @method QuantitativeValueType setUrl(Property\UrlProperty $url)
 */
class QuantitativeValueType extends StructuredValueType {

	/**
	 * @var Property\AdditionalProperty
	 */
	private $additionalProperty;

	/**
	 * @var Property\MaxValueProperty
	 */
	private $maxValue;

	/**
	 * @var Property\MinValueProperty
	 */
	private $minValue;

	/**
	 * @var Property\UnitCodeProperty
	 */
	private $unitCode;

	/**
	 * @var Property\UnitTextProperty
	 */
	private $unitText;

	/**
	 * @var Property\ValueProperty
	 */
	private $value;

	/**
	 * @var Property\ValueReferenceProperty
	 */
	private $valueReference;

	/**
	 * Get additional property.
	 * 
	 * @return Property\AdditionalProperty
	 */
	public function getAdditionalProperty() {
		return $this->additionalProperty;
	}

	/**
	 * Get max value.
	 * 
	 * @return Property\MaxValueProperty
	 */
	public function getMaxValue() {
		return $this->maxValue;
	}

	/**
	 * Get min value.
	 * 
	 * @return Property\MinValueProperty
	 */
	public function getMinValue() {
		return $this->minValue;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/QuantitativeValue';
	}

	/**
	 * Get unit code.
	 * 
	 * @return Property\UnitCodeProperty
	 */
	public function getUnitCode() {
		return $this->unitCode;
	}

	/**
	 * Get unit text.
	 * 
	 * @return Property\UnitTextProperty
	 */
	public function getUnitText() {
		return $this->unitText;
	}

	/**
	 * Get value.
	 * 
	 * @return Property\ValueProperty
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Get value reference.
	 * 
	 * @return Property\ValueReferenceProperty
	 */
	public function getValueReference() {
		return $this->valueReference;
	}

	/**
	 * Set additional property.
	 * 
	 * @param Property\AdditionalProperty $additionalProperty
	 * @return QuantitativeValueType
	 */
	public function setAdditionalProperty(Property\AdditionalProperty $additionalProperty) {
		$this->additionalProperty = $additionalProperty;

		return $this;
	}

	/**
	 * Set max value.
	 * 
	 * @param Property\MaxValueProperty $maxValue
	 * @return QuantitativeValueType
	 */
	public function setMaxValue(Property\MaxValueProperty $maxValue) {
		$this->maxValue = $maxValue;

		return $this;
	}

	/**
	 * Set min value.
	 * 
	 * @param Property\MinValueProperty $minValue
	 * @return QuantitativeValueType
	 */
	public function setMinValue(Property\MinValueProperty $minValue) {
		$this->minValue = $minValue;

		return $this;
	}

	/**
	 * Set unit code.
	 * 
	 * @param Property\UnitCodeProperty $unitCode
	 * @return QuantitativeValueType
	 */
	public function setUnitCode(Property\UnitCodeProperty $unitCode) {
		$this->unitCode = $unitCode;

		return $this;
	}

	/**
	 * Set unit text.
	 * 
	 * @param Property\UnitTextProperty $unitText
	 * @return QuantitativeValueType
	 */
	public function setUnitText(Property\UnitTextProperty $unitText) {
		$this->unitText = $unitText;

		return $this;
	}

	/**
	 * Set value.
	 * 
	 * @param Property\ValueProperty $value
	 * @return QuantitativeValueType
	 */
	public function setValue(Property\ValueProperty $value) {
		$this->value = $value;

		return $this;
	}

	/**
	 * Set value reference.
	 * 
	 * @param Property\ValueReferenceProperty $valueReference
	 * @return QuantitativeValueType
	 */
	public function setValueReference(Property\ValueReferenceProperty $valueReference) {
		$this->valueReference = $valueReference;

		return $this;
	}
}