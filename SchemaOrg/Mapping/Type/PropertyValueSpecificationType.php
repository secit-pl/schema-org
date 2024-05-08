<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A Property value specification.
 * 
 * @method PropertyValueSpecificationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PropertyValueSpecificationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PropertyValueSpecificationType setDescription(Property\DescriptionProperty $description)
 * @method PropertyValueSpecificationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PropertyValueSpecificationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PropertyValueSpecificationType setImage(Property\ImageProperty $image)
 * @method PropertyValueSpecificationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PropertyValueSpecificationType setName(Property\NameProperty $name)
 * @method PropertyValueSpecificationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PropertyValueSpecificationType setSameAs(Property\SameAsProperty $sameAs)
 * @method PropertyValueSpecificationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PropertyValueSpecificationType setUrl(Property\UrlProperty $url)
 */
class PropertyValueSpecificationType extends IntangibleType {

	/**
	 * @var Property\DefaultValueProperty
	 */
	private $defaultValue;

	/**
	 * @var Property\MaxValueProperty
	 */
	private $maxValue;

	/**
	 * @var Property\MinValueProperty
	 */
	private $minValue;

	/**
	 * @var Property\MultipleValuesProperty
	 */
	private $multipleValues;

	/**
	 * @var Property\ReadonlyValueProperty
	 */
	private $readonlyValue;

	/**
	 * @var Property\StepValueProperty
	 */
	private $stepValue;

	/**
	 * @var Property\ValueMaxLengthProperty
	 */
	private $valueMaxLength;

	/**
	 * @var Property\ValueMinLengthProperty
	 */
	private $valueMinLength;

	/**
	 * @var Property\ValueNameProperty
	 */
	private $valueName;

	/**
	 * @var Property\ValuePatternProperty
	 */
	private $valuePattern;

	/**
	 * @var Property\ValueRequiredProperty
	 */
	private $valueRequired;

	/**
	 * Get default value.
	 *
	 * @return Property\DefaultValueProperty
	 */
	public function getDefaultValue() {
		return $this->defaultValue;
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
	 * Get multiple values.
	 *
	 * @return Property\MultipleValuesProperty
	 */
	public function getMultipleValues() {
		return $this->multipleValues;
	}

	/**
	 * Get readonly value.
	 *
	 * @return Property\ReadonlyValueProperty
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
	 * @return Property\StepValueProperty
	 */
	public function getStepValue() {
		return $this->stepValue;
	}

	/**
	 * Get value max length.
	 *
	 * @return Property\ValueMaxLengthProperty
	 */
	public function getValueMaxLength() {
		return $this->valueMaxLength;
	}

	/**
	 * Get value min length.
	 *
	 * @return Property\ValueMinLengthProperty
	 */
	public function getValueMinLength() {
		return $this->valueMinLength;
	}

	/**
	 * Get value name.
	 *
	 * @return Property\ValueNameProperty
	 */
	public function getValueName() {
		return $this->valueName;
	}

	/**
	 * Get value pattern.
	 *
	 * @return Property\ValuePatternProperty
	 */
	public function getValuePattern() {
		return $this->valuePattern;
	}

	/**
	 * Get value required.
	 *
	 * @return Property\ValueRequiredProperty
	 */
	public function getValueRequired() {
		return $this->valueRequired;
	}

	/**
	 * Set default value.
	 *
	 * @param Property\DefaultValueProperty $defaultValue
	 * @return PropertyValueSpecificationType
	 */
	public function setDefaultValue(Property\DefaultValueProperty $defaultValue) {
		$this->defaultValue = $defaultValue;

		return $this;
	}

	/**
	 * Set max value.
	 *
	 * @param Property\MaxValueProperty $maxValue
	 * @return PropertyValueSpecificationType
	 */
	public function setMaxValue(Property\MaxValueProperty $maxValue) {
		$this->maxValue = $maxValue;

		return $this;
	}

	/**
	 * Set min value.
	 *
	 * @param Property\MinValueProperty $minValue
	 * @return PropertyValueSpecificationType
	 */
	public function setMinValue(Property\MinValueProperty $minValue) {
		$this->minValue = $minValue;

		return $this;
	}

	/**
	 * Set multiple values.
	 *
	 * @param Property\MultipleValuesProperty $multipleValues
	 * @return PropertyValueSpecificationType
	 */
	public function setMultipleValues(Property\MultipleValuesProperty $multipleValues) {
		$this->multipleValues = $multipleValues;

		return $this;
	}

	/**
	 * Set readonly value.
	 *
	 * @param Property\ReadonlyValueProperty $readonlyValue
	 * @return PropertyValueSpecificationType
	 */
	public function setReadonlyValue(Property\ReadonlyValueProperty $readonlyValue) {
		$this->readonlyValue = $readonlyValue;

		return $this;
	}

	/**
	 * Set step value.
	 *
	 * @param Property\StepValueProperty $stepValue
	 * @return PropertyValueSpecificationType
	 */
	public function setStepValue(Property\StepValueProperty $stepValue) {
		$this->stepValue = $stepValue;

		return $this;
	}

	/**
	 * Set value max length.
	 *
	 * @param Property\ValueMaxLengthProperty $valueMaxLength
	 * @return PropertyValueSpecificationType
	 */
	public function setValueMaxLength(Property\ValueMaxLengthProperty $valueMaxLength) {
		$this->valueMaxLength = $valueMaxLength;

		return $this;
	}

	/**
	 * Set value min length.
	 *
	 * @param Property\ValueMinLengthProperty $valueMinLength
	 * @return PropertyValueSpecificationType
	 */
	public function setValueMinLength(Property\ValueMinLengthProperty $valueMinLength) {
		$this->valueMinLength = $valueMinLength;

		return $this;
	}

	/**
	 * Set value name.
	 *
	 * @param Property\ValueNameProperty $valueName
	 * @return PropertyValueSpecificationType
	 */
	public function setValueName(Property\ValueNameProperty $valueName) {
		$this->valueName = $valueName;

		return $this;
	}

	/**
	 * Set value pattern.
	 *
	 * @param Property\ValuePatternProperty $valuePattern
	 * @return PropertyValueSpecificationType
	 */
	public function setValuePattern(Property\ValuePatternProperty $valuePattern) {
		$this->valuePattern = $valuePattern;

		return $this;
	}

	/**
	 * Set value required.
	 *
	 * @param Property\ValueRequiredProperty $valueRequired
	 * @return PropertyValueSpecificationType
	 */
	public function setValueRequired(Property\ValueRequiredProperty $valueRequired) {
		$this->valueRequired = $valueRequired;

		return $this;
	}
}