<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The price asked for a given offer by the respective organization or person.
 * 
 * @method UnitPriceSpecificationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UnitPriceSpecificationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UnitPriceSpecificationType setDescription(Property\DescriptionProperty $description)
 * @method UnitPriceSpecificationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UnitPriceSpecificationType setEligibleQuantity(Property\EligibleQuantityProperty $eligibleQuantity)
 * @method UnitPriceSpecificationType setEligibleTransactionVolume(Property\EligibleTransactionVolumeProperty $eligibleTransactionVolume)
 * @method UnitPriceSpecificationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UnitPriceSpecificationType setImage(Property\ImageProperty $image)
 * @method UnitPriceSpecificationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UnitPriceSpecificationType setMaxPrice(Property\MaxPriceProperty $maxPrice)
 * @method UnitPriceSpecificationType setMinPrice(Property\MinPriceProperty $minPrice)
 * @method UnitPriceSpecificationType setName(Property\NameProperty $name)
 * @method UnitPriceSpecificationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UnitPriceSpecificationType setPrice(Property\PriceProperty $price)
 * @method UnitPriceSpecificationType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method UnitPriceSpecificationType setSameAs(Property\SameAsProperty $sameAs)
 * @method UnitPriceSpecificationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UnitPriceSpecificationType setUrl(Property\UrlProperty $url)
 * @method UnitPriceSpecificationType setValidFrom(Property\ValidFromProperty $validFrom)
 * @method UnitPriceSpecificationType setValidThrough(Property\ValidThroughProperty $validThrough)
 * @method UnitPriceSpecificationType setValueAddedTaxIncluded(Property\ValueAddedTaxIncludedProperty $valueAddedTaxIncluded)
 */
class UnitPriceSpecificationType extends PriceSpecificationType {

	/**
	 * @var Property\BillingIncrementProperty
	 */
	private $billingIncrement;

	/**
	 * @var Property\PriceTypeProperty
	 */
	private $priceType;

	/**
	 * @var Property\ReferenceQuantityProperty
	 */
	private $referenceQuantity;

	/**
	 * @var Property\UnitCodeProperty
	 */
	private $unitCode;

	/**
	 * @var Property\UnitTextProperty
	 */
	private $unitText;

	/**
	 * Get billing increment.
	 *
	 * @return Property\BillingIncrementProperty
	 */
	public function getBillingIncrement() {
		return $this->billingIncrement;
	}

	/**
	 * Get price type.
	 *
	 * @return Property\PriceTypeProperty
	 */
	public function getPriceType() {
		return $this->priceType;
	}

	/**
	 * Get reference quantity.
	 *
	 * @return Property\ReferenceQuantityProperty
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
	 * Set billing increment.
	 *
	 * @param Property\BillingIncrementProperty $billingIncrement
	 * @return UnitPriceSpecificationType
	 */
	public function setBillingIncrement(Property\BillingIncrementProperty $billingIncrement) {
		$this->billingIncrement = $billingIncrement;

		return $this;
	}

	/**
	 * Set price type.
	 *
	 * @param Property\PriceTypeProperty $priceType
	 * @return UnitPriceSpecificationType
	 */
	public function setPriceType(Property\PriceTypeProperty $priceType) {
		$this->priceType = $priceType;

		return $this;
	}

	/**
	 * Set reference quantity.
	 *
	 * @param Property\ReferenceQuantityProperty $referenceQuantity
	 * @return UnitPriceSpecificationType
	 */
	public function setReferenceQuantity(Property\ReferenceQuantityProperty $referenceQuantity) {
		$this->referenceQuantity = $referenceQuantity;

		return $this;
	}

	/**
	 * Set unit code.
	 *
	 * @param Property\UnitCodeProperty $unitCode
	 * @return UnitPriceSpecificationType
	 */
	public function setUnitCode(Property\UnitCodeProperty $unitCode) {
		$this->unitCode = $unitCode;

		return $this;
	}

	/**
	 * Set unit text.
	 *
	 * @param Property\UnitTextProperty $unitText
	 * @return UnitPriceSpecificationType
	 */
	public function setUnitText(Property\UnitTextProperty $unitText) {
		$this->unitText = $unitText;

		return $this;
	}
}