<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class UnitPriceSpecification.
 * 
 * @method UnitPriceSpecification setAdditionalType(Property\AdditionalType $additionalType)
 * @method UnitPriceSpecification setAlternateName(Property\AlternateName $alternateName)
 * @method UnitPriceSpecification setDescription(Property\Description $description)
 * @method UnitPriceSpecification setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method UnitPriceSpecification setEligibleQuantity(Property\EligibleQuantity $eligibleQuantity)
 * @method UnitPriceSpecification setEligibleTransactionVolume(Property\EligibleTransactionVolume $eligibleTransactionVolume)
 * @method UnitPriceSpecification setImage(Property\Image $image)
 * @method UnitPriceSpecification setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method UnitPriceSpecification setMaxPrice(Property\MaxPrice $maxPrice)
 * @method UnitPriceSpecification setMinPrice(Property\MinPrice $minPrice)
 * @method UnitPriceSpecification setName(Property\Name $name)
 * @method UnitPriceSpecification setPotentialAction(Property\PotentialAction $potentialAction)
 * @method UnitPriceSpecification setPrice(Property\Price $price)
 * @method UnitPriceSpecification setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method UnitPriceSpecification setSameAs(Property\SameAs $sameAs)
 * @method UnitPriceSpecification setUrl(Property\Url $url)
 * @method UnitPriceSpecification setValidFrom(Property\ValidFrom $validFrom)
 * @method UnitPriceSpecification setValidThrough(Property\ValidThrough $validThrough)
 * @method UnitPriceSpecification setValueAddedTaxIncluded(Property\ValueAddedTaxIncluded $valueAddedTaxIncluded)
 */
class UnitPriceSpecification extends PriceSpecification {

	/**
	 * @var Property\BillingIncrement
	 */
	private $billingIncrement;

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
	 * Get billing increment.
	 * 
	 * @return Property\BillingIncrement
	 */
	public function getBillingIncrement() {
		return $this->billingIncrement;
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