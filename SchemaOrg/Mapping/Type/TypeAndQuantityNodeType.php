<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A structured value indicating the quantity, unit of measurement, and business function of goods included in a bundle offer.
 * 
 * @method TypeAndQuantityNodeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TypeAndQuantityNodeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TypeAndQuantityNodeType setDescription(Property\DescriptionProperty $description)
 * @method TypeAndQuantityNodeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TypeAndQuantityNodeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TypeAndQuantityNodeType setImage(Property\ImageProperty $image)
 * @method TypeAndQuantityNodeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TypeAndQuantityNodeType setName(Property\NameProperty $name)
 * @method TypeAndQuantityNodeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TypeAndQuantityNodeType setSameAs(Property\SameAsProperty $sameAs)
 * @method TypeAndQuantityNodeType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TypeAndQuantityNodeType setUrl(Property\UrlProperty $url)
 */
class TypeAndQuantityNodeType extends StructuredValueType {

	/**
	 * @var Property\AmountOfThisGoodProperty
	 */
	private $amountOfThisGood;

	/**
	 * @var Property\BusinessFunctionProperty
	 */
	private $businessFunction;

	/**
	 * @var Property\TypeOfGoodProperty
	 */
	private $typeOfGood;

	/**
	 * @var Property\UnitCodeProperty
	 */
	private $unitCode;

	/**
	 * @var Property\UnitTextProperty
	 */
	private $unitText;

	/**
	 * Get amount of this good.
	 *
	 * @return Property\AmountOfThisGoodProperty
	 */
	public function getAmountOfThisGood() {
		return $this->amountOfThisGood;
	}

	/**
	 * Get business function.
	 *
	 * @return Property\BusinessFunctionProperty
	 */
	public function getBusinessFunction() {
		return $this->businessFunction;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TypeAndQuantityNode';
	}

	/**
	 * Get type of good.
	 *
	 * @return Property\TypeOfGoodProperty
	 */
	public function getTypeOfGood() {
		return $this->typeOfGood;
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
	 * Set amount of this good.
	 *
	 * @param Property\AmountOfThisGoodProperty $amountOfThisGood
	 * @return TypeAndQuantityNodeType
	 */
	public function setAmountOfThisGood(Property\AmountOfThisGoodProperty $amountOfThisGood) {
		$this->amountOfThisGood = $amountOfThisGood;

		return $this;
	}

	/**
	 * Set business function.
	 *
	 * @param Property\BusinessFunctionProperty $businessFunction
	 * @return TypeAndQuantityNodeType
	 */
	public function setBusinessFunction(Property\BusinessFunctionProperty $businessFunction) {
		$this->businessFunction = $businessFunction;

		return $this;
	}

	/**
	 * Set type of good.
	 *
	 * @param Property\TypeOfGoodProperty $typeOfGood
	 * @return TypeAndQuantityNodeType
	 */
	public function setTypeOfGood(Property\TypeOfGoodProperty $typeOfGood) {
		$this->typeOfGood = $typeOfGood;

		return $this;
	}

	/**
	 * Set unit code.
	 *
	 * @param Property\UnitCodeProperty $unitCode
	 * @return TypeAndQuantityNodeType
	 */
	public function setUnitCode(Property\UnitCodeProperty $unitCode) {
		$this->unitCode = $unitCode;

		return $this;
	}

	/**
	 * Set unit text.
	 *
	 * @param Property\UnitTextProperty $unitText
	 * @return TypeAndQuantityNodeType
	 */
	public function setUnitText(Property\UnitTextProperty $unitText) {
		$this->unitText = $unitText;

		return $this;
	}
}