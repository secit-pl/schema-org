<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class UnitPriceSpecification.
 */
class UnitPriceSpecification {

	/**
	 * @var Property\BillingIncrement
	 */
	private $billingIncrement;

	/**
	 */
	private $id;

	/**
	 * @var Property\PriceType
	 */
	private $priceType;

	/**
	 * @var Property\ReferenceQuantity
	 */
	private $referenceQuantity;

	/**
	 * @var Property\UnitCode
	 */
	private $unitCode;

	/**
	 * @var Property\UnitText
	 */
	private $unitText;

	/**
	 * UnitPriceSpecification constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get billing increment.
	 * 
	 * @return Property\BillingIncrement
	 */
	public function getBillingIncrement() {
		return $this->billingIncrement;
	}

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get price type.
	 * 
	 * @return Property\PriceType
	 */
	public function getPriceType() {
		return $this->priceType;
	}

	/**
	 * Get reference quantity.
	 * 
	 * @return Property\ReferenceQuantity
	 */
	public function getReferenceQuantity() {
		return $this->referenceQuantity;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UnitPriceSpecification';
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
	 * Set billing increment.
	 * 
	 * @param Property\BillingIncrement $billingIncrement
	 * @return UnitPriceSpecification
	 */
	public function setBillingIncrement(Property\BillingIncrement $billingIncrement) {
		$this->billingIncrement = $billingIncrement;

		return $this;
	}

	/**
	 * Set price type.
	 * 
	 * @param Property\PriceType $priceType
	 * @return UnitPriceSpecification
	 */
	public function setPriceType(Property\PriceType $priceType) {
		$this->priceType = $priceType;

		return $this;
	}

	/**
	 * Set reference quantity.
	 * 
	 * @param Property\ReferenceQuantity $referenceQuantity
	 * @return UnitPriceSpecification
	 */
	public function setReferenceQuantity(Property\ReferenceQuantity $referenceQuantity) {
		$this->referenceQuantity = $referenceQuantity;

		return $this;
	}

	/**
	 * Set unit code.
	 * 
	 * @param Property\UnitCode $unitCode
	 * @return UnitPriceSpecification
	 */
	public function setUnitCode(Property\UnitCode $unitCode) {
		$this->unitCode = $unitCode;

		return $this;
	}

	/**
	 * Set unit text.
	 * 
	 * @param Property\UnitText $unitText
	 * @return UnitPriceSpecification
	 */
	public function setUnitText(Property\UnitText $unitText) {
		$this->unitText = $unitText;

		return $this;
	}
}