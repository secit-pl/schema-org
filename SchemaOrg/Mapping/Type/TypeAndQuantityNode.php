<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TypeAndQuantityNode.
 */
class TypeAndQuantityNode extends StructuredValue {

	/**
	 * @var Property\AmountOfThisGood
	 */
	private $amountOfThisGood;

	/**
	 * @var Property\BusinessFunction
	 */
	private $businessFunction;

	/**
	 * @var Property\TypeOfGood
	 */
	private $typeOfGood;

	/**
	 * @var Property\UnitCode
	 */
	private $unitCode;

	/**
	 * @var Property\UnitText
	 */
	private $unitText;

	/**
	 * Get amount of this good.
	 * 
	 * @return Property\AmountOfThisGood
	 */
	public function getAmountOfThisGood() {
		return $this->amountOfThisGood;
	}

	/**
	 * Get business function.
	 * 
	 * @return Property\BusinessFunction
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
	 * @return Property\TypeOfGood
	 */
	public function getTypeOfGood() {
		return $this->typeOfGood;
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
	 * Set amount of this good.
	 * 
	 * @param Property\AmountOfThisGood $amountOfThisGood
	 * @return TypeAndQuantityNode
	 */
	public function setAmountOfThisGood(Property\AmountOfThisGood $amountOfThisGood) {
		$this->amountOfThisGood = $amountOfThisGood;

		return $this;
	}

	/**
	 * Set business function.
	 * 
	 * @param Property\BusinessFunction $businessFunction
	 * @return TypeAndQuantityNode
	 */
	public function setBusinessFunction(Property\BusinessFunction $businessFunction) {
		$this->businessFunction = $businessFunction;

		return $this;
	}

	/**
	 * Set type of good.
	 * 
	 * @param Property\TypeOfGood $typeOfGood
	 * @return TypeAndQuantityNode
	 */
	public function setTypeOfGood(Property\TypeOfGood $typeOfGood) {
		$this->typeOfGood = $typeOfGood;

		return $this;
	}

	/**
	 * Set unit code.
	 * 
	 * @param Property\UnitCode $unitCode
	 * @return TypeAndQuantityNode
	 */
	public function setUnitCode(Property\UnitCode $unitCode) {
		$this->unitCode = $unitCode;

		return $this;
	}

	/**
	 * Set unit text.
	 * 
	 * @param Property\UnitText $unitText
	 * @return TypeAndQuantityNode
	 */
	public function setUnitText(Property\UnitText $unitText) {
		$this->unitText = $unitText;

		return $this;
	}
}