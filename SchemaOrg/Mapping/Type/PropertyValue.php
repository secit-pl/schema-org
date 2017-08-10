<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PropertyValue.
 */
class PropertyValue extends StructuredValue {

	/**
	 * @var Property\MaxValue
	 */
	private $maxValue;

	/**
	 * @var Property\MinValue
	 */
	private $minValue;

	/**
	 * @var Property\PropertyID
	 */
	private $propertyID;

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
	 * Get propertyid.
	 * 
	 * @return Property\PropertyID
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
	 * Set max value.
	 * 
	 * @param Property\MaxValue $maxValue
	 * @return PropertyValue
	 */
	public function setMaxValue(Property\MaxValue $maxValue) {
		$this->maxValue = $maxValue;

		return $this;
	}

	/**
	 * Set min value.
	 * 
	 * @param Property\MinValue $minValue
	 * @return PropertyValue
	 */
	public function setMinValue(Property\MinValue $minValue) {
		$this->minValue = $minValue;

		return $this;
	}

	/**
	 * Set propertyid.
	 * 
	 * @param Property\PropertyID $propertyID
	 * @return PropertyValue
	 */
	public function setPropertyID(Property\PropertyID $propertyID) {
		$this->propertyID = $propertyID;

		return $this;
	}

	/**
	 * Set unit code.
	 * 
	 * @param Property\UnitCode $unitCode
	 * @return PropertyValue
	 */
	public function setUnitCode(Property\UnitCode $unitCode) {
		$this->unitCode = $unitCode;

		return $this;
	}

	/**
	 * Set unit text.
	 * 
	 * @param Property\UnitText $unitText
	 * @return PropertyValue
	 */
	public function setUnitText(Property\UnitText $unitText) {
		$this->unitText = $unitText;

		return $this;
	}

	/**
	 * Set value.
	 * 
	 * @param Property\Value $value
	 * @return PropertyValue
	 */
	public function setValue(Property\Value $value) {
		$this->value = $value;

		return $this;
	}

	/**
	 * Set value reference.
	 * 
	 * @param Property\ValueReference $valueReference
	 * @return PropertyValue
	 */
	public function setValueReference(Property\ValueReference $valueReference) {
		$this->valueReference = $valueReference;

		return $this;
	}
}