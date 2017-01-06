<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PropertyValueSpecification.
 * 
 * @method PropertyValueSpecification setAdditionalType(Property\AdditionalType $additionalType)
 * @method PropertyValueSpecification setAlternateName(Property\AlternateName $alternateName)
 * @method PropertyValueSpecification setDescription(Property\Description $description)
 * @method PropertyValueSpecification setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PropertyValueSpecification setImage(Property\Image $image)
 * @method PropertyValueSpecification setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PropertyValueSpecification setName(Property\Name $name)
 * @method PropertyValueSpecification setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PropertyValueSpecification setSameAs(Property\SameAs $sameAs)
 * @method PropertyValueSpecification setUrl(Property\Url $url)
 */
class PropertyValueSpecification extends Intangible {

	/**
	 * @var Property\DefaultValue
	 */
	private $defaultValue;

	/**
	 * @var Property\MaxValue
	 */
	private $maxValue;

	/**
	 * @var Property\MinValue
	 */
	private $minValue;

	/**
	 * @var Property\MultipleValues
	 */
	private $multipleValues;

	/**
	 * @var Property\ReadonlyValue
	 */
	private $readonlyValue;

	/**
	 * @var Property\StepValue
	 */
	private $stepValue;

	/**
	 * @var Property\ValueMaxLength
	 */
	private $valueMaxLength;

	/**
	 * @var Property\ValueMinLength
	 */
	private $valueMinLength;

	/**
	 * @var Property\ValueName
	 */
	private $valueName;

	/**
	 * @var Property\ValuePattern
	 */
	private $valuePattern;

	/**
	 * @var Property\ValueRequired
	 */
	private $valueRequired;

	/**
	 * Get default value.
	 * 
	 * @return Property\DefaultValue
	 */
	public function getDefaultValue() {
		return $this->defaultValue;
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
	 * Get multiple values.
	 * 
	 * @return Property\MultipleValues
	 */
	public function getMultipleValues() {
		return $this->multipleValues;
	}

	/**
	 * Get readonly value.
	 * 
	 * @return Property\ReadonlyValue
	 */
	public function getReadonlyValue() {
		return $this->readonlyValue;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PropertyValueSpecification';
	}

	/**
	 * Get step value.
	 * 
	 * @return Property\StepValue
	 */
	public function getStepValue() {
		return $this->stepValue;
	}

	/**
	 * Get value max length.
	 * 
	 * @return Property\ValueMaxLength
	 */
	public function getValueMaxLength() {
		return $this->valueMaxLength;
	}

	/**
	 * Get value min length.
	 * 
	 * @return Property\ValueMinLength
	 */
	public function getValueMinLength() {
		return $this->valueMinLength;
	}

	/**
	 * Get value name.
	 * 
	 * @return Property\ValueName
	 */
	public function getValueName() {
		return $this->valueName;
	}

	/**
	 * Get value pattern.
	 * 
	 * @return Property\ValuePattern
	 */
	public function getValuePattern() {
		return $this->valuePattern;
	}

	/**
	 * Get value required.
	 * 
	 * @return Property\ValueRequired
	 */
	public function getValueRequired() {
		return $this->valueRequired;
	}

	/**
	 * Set default value.
	 * 
	 * @param Property\DefaultValue $defaultValue
	 * @return PropertyValueSpecification
	 */
	public function setDefaultValue(Property\DefaultValue $defaultValue) {
		$this->defaultValue = $defaultValue;

		return $this;
	}

	/**
	 * Set max value.
	 * 
	 * @param Property\MaxValue $maxValue
	 * @return PropertyValueSpecification
	 */
	public function setMaxValue(Property\MaxValue $maxValue) {
		$this->maxValue = $maxValue;

		return $this;
	}

	/**
	 * Set min value.
	 * 
	 * @param Property\MinValue $minValue
	 * @return PropertyValueSpecification
	 */
	public function setMinValue(Property\MinValue $minValue) {
		$this->minValue = $minValue;

		return $this;
	}

	/**
	 * Set multiple values.
	 * 
	 * @param Property\MultipleValues $multipleValues
	 * @return PropertyValueSpecification
	 */
	public function setMultipleValues(Property\MultipleValues $multipleValues) {
		$this->multipleValues = $multipleValues;

		return $this;
	}

	/**
	 * Set readonly value.
	 * 
	 * @param Property\ReadonlyValue $readonlyValue
	 * @return PropertyValueSpecification
	 */
	public function setReadonlyValue(Property\ReadonlyValue $readonlyValue) {
		$this->readonlyValue = $readonlyValue;

		return $this;
	}

	/**
	 * Set step value.
	 * 
	 * @param Property\StepValue $stepValue
	 * @return PropertyValueSpecification
	 */
	public function setStepValue(Property\StepValue $stepValue) {
		$this->stepValue = $stepValue;

		return $this;
	}

	/**
	 * Set value max length.
	 * 
	 * @param Property\ValueMaxLength $valueMaxLength
	 * @return PropertyValueSpecification
	 */
	public function setValueMaxLength(Property\ValueMaxLength $valueMaxLength) {
		$this->valueMaxLength = $valueMaxLength;

		return $this;
	}

	/**
	 * Set value min length.
	 * 
	 * @param Property\ValueMinLength $valueMinLength
	 * @return PropertyValueSpecification
	 */
	public function setValueMinLength(Property\ValueMinLength $valueMinLength) {
		$this->valueMinLength = $valueMinLength;

		return $this;
	}

	/**
	 * Set value name.
	 * 
	 * @param Property\ValueName $valueName
	 * @return PropertyValueSpecification
	 */
	public function setValueName(Property\ValueName $valueName) {
		$this->valueName = $valueName;

		return $this;
	}

	/**
	 * Set value pattern.
	 * 
	 * @param Property\ValuePattern $valuePattern
	 * @return PropertyValueSpecification
	 */
	public function setValuePattern(Property\ValuePattern $valuePattern) {
		$this->valuePattern = $valuePattern;

		return $this;
	}

	/**
	 * Set value required.
	 * 
	 * @param Property\ValueRequired $valueRequired
	 * @return PropertyValueSpecification
	 */
	public function setValueRequired(Property\ValueRequired $valueRequired) {
		$this->valueRequired = $valueRequired;

		return $this;
	}
}