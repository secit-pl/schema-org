<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class QuantitativeValue.
 * 
 * @method QuantitativeValue setAdditionalType(Property\AdditionalType $additionalType)
 * @method QuantitativeValue setAlternateName(Property\AlternateName $alternateName)
 * @method QuantitativeValue setDescription(Property\Description $description)
 * @method QuantitativeValue setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method QuantitativeValue setImage(Property\Image $image)
 * @method QuantitativeValue setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method QuantitativeValue setName(Property\Name $name)
 * @method QuantitativeValue setPotentialAction(Property\PotentialAction $potentialAction)
 * @method QuantitativeValue setSameAs(Property\SameAs $sameAs)
 * @method QuantitativeValue setUrl(Property\Url $url)
 */
class QuantitativeValue extends StructuredValue {

	/**
	 * @var Property\AdditionalProperty
	 */
	private $additionalProperty;

	/**
	 * @var Property\MaxValue
	 */
	private $maxValue;

	/**
	 * @var Property\MinValue
	 */
	private $minValue;

	/**
	 * @var Property\UnitCode
	 */
	private $unitCode;

	/**
	 * @var Property\UnitText
	 */
	private $unitText;

	/**
	 * @var Property\Value
	 */
	private $value;

	/**
	 * @var Property\ValueReference
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
	 * @return Property\MaxValue
	 */
	public function getMaxValue() {
		return $this->maxValue;
	}

	/**
	 * Get min value.
	 * 
	 * @return Property\MinValue
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
	 * @return Property\UnitCode
	 */
	public function getUnitCode() {
		return $this->unitCode;
	}

	/**
	 * Get unit text.
	 * 
	 * @return Property\UnitText
	 */
	public function getUnitText() {
		return $this->unitText;
	}

	/**
	 * Get value.
	 * 
	 * @return Property\Value
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Get value reference.
	 * 
	 * @return Property\ValueReference
	 */
	public function getValueReference() {
		return $this->valueReference;
	}

	/**
	 * Set additional property.
	 * 
	 * @param Property\AdditionalProperty $additionalProperty
	 * @return QuantitativeValue
	 */
	public function setAdditionalProperty(Property\AdditionalProperty $additionalProperty) {
		$this->additionalProperty = $additionalProperty;

		return $this;
	}

	/**
	 * Set max value.
	 * 
	 * @param Property\MaxValue $maxValue
	 * @return QuantitativeValue
	 */
	public function setMaxValue(Property\MaxValue $maxValue) {
		$this->maxValue = $maxValue;

		return $this;
	}

	/**
	 * Set min value.
	 * 
	 * @param Property\MinValue $minValue
	 * @return QuantitativeValue
	 */
	public function setMinValue(Property\MinValue $minValue) {
		$this->minValue = $minValue;

		return $this;
	}

	/**
	 * Set unit code.
	 * 
	 * @param Property\UnitCode $unitCode
	 * @return QuantitativeValue
	 */
	public function setUnitCode(Property\UnitCode $unitCode) {
		$this->unitCode = $unitCode;

		return $this;
	}

	/**
	 * Set unit text.
	 * 
	 * @param Property\UnitText $unitText
	 * @return QuantitativeValue
	 */
	public function setUnitText(Property\UnitText $unitText) {
		$this->unitText = $unitText;

		return $this;
	}

	/**
	 * Set value.
	 * 
	 * @param Property\Value $value
	 * @return QuantitativeValue
	 */
	public function setValue(Property\Value $value) {
		$this->value = $value;

		return $this;
	}

	/**
	 * Set value reference.
	 * 
	 * @param Property\ValueReference $valueReference
	 * @return QuantitativeValue
	 */
	public function setValueReference(Property\ValueReference $valueReference) {
		$this->valueReference = $valueReference;

		return $this;
	}
}