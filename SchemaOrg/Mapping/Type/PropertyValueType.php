<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PropertyValueType.
 * 
 * @method PropertyValueType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PropertyValueType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PropertyValueType setDescription(Property\DescriptionProperty $description)
 * @method PropertyValueType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PropertyValueType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PropertyValueType setImage(Property\ImageProperty $image)
 * @method PropertyValueType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PropertyValueType setName(Property\NameProperty $name)
 * @method PropertyValueType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PropertyValueType setSameAs(Property\SameAsProperty $sameAs)
 * @method PropertyValueType setUrl(Property\UrlProperty $url)
 */
class PropertyValueType extends StructuredValueType {

	/**
	 * @var Property\MaxValueProperty
	 */
	private $maxValue;

	/**
	 * @var Property\MinValueProperty
	 */
	private $minValue;

	/**
	 * @var Property\PropertyIDProperty
	 */
	private $propertyID;

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
	 * Get propertyid.
	 * 
	 * @return Property\PropertyIDProperty
	 */
	public function getPropertyID() {
		return $this->propertyID;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PropertyValue';
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
	 * Set max value.
	 * 
	 * @param Property\MaxValueProperty $maxValue
	 * @return PropertyValueType
	 */
	public function setMaxValue(Property\MaxValueProperty $maxValue) {
		$this->maxValue = $maxValue;

		return $this;
	}

	/**
	 * Set min value.
	 * 
	 * @param Property\MinValueProperty $minValue
	 * @return PropertyValueType
	 */
	public function setMinValue(Property\MinValueProperty $minValue) {
		$this->minValue = $minValue;

		return $this;
	}

	/**
	 * Set propertyid.
	 * 
	 * @param Property\PropertyIDProperty $propertyID
	 * @return PropertyValueType
	 */
	public function setPropertyID(Property\PropertyIDProperty $propertyID) {
		$this->propertyID = $propertyID;

		return $this;
	}

	/**
	 * Set unit code.
	 * 
	 * @param Property\UnitCodeProperty $unitCode
	 * @return PropertyValueType
	 */
	public function setUnitCode(Property\UnitCodeProperty $unitCode) {
		$this->unitCode = $unitCode;

		return $this;
	}

	/**
	 * Set unit text.
	 * 
	 * @param Property\UnitTextProperty $unitText
	 * @return PropertyValueType
	 */
	public function setUnitText(Property\UnitTextProperty $unitText) {
		$this->unitText = $unitText;

		return $this;
	}

	/**
	 * Set value.
	 * 
	 * @param Property\ValueProperty $value
	 * @return PropertyValueType
	 */
	public function setValue(Property\ValueProperty $value) {
		$this->value = $value;

		return $this;
	}

	/**
	 * Set value reference.
	 * 
	 * @param Property\ValueReferenceProperty $valueReference
	 * @return PropertyValueType
	 */
	public function setValueReference(Property\ValueReferenceProperty $valueReference) {
		$this->valueReference = $valueReference;

		return $this;
	}
}