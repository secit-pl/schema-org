<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A structured value representing a price or price range. Typically, only the subclasses of this type are used for markup. It is recommended to use MonetaryAmount to describe independent amounts of money such as a salary, credit card limits, etc.
 * 
 * @method PriceSpecificationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PriceSpecificationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PriceSpecificationType setDescription(Property\DescriptionProperty $description)
 * @method PriceSpecificationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PriceSpecificationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PriceSpecificationType setImage(Property\ImageProperty $image)
 * @method PriceSpecificationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PriceSpecificationType setName(Property\NameProperty $name)
 * @method PriceSpecificationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PriceSpecificationType setSameAs(Property\SameAsProperty $sameAs)
 * @method PriceSpecificationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PriceSpecificationType setUrl(Property\UrlProperty $url)
 */
class PriceSpecificationType extends StructuredValueType {

	/**
	 * @var Property\EligibleQuantityProperty
	 */
	private $eligibleQuantity;

	/**
	 * @var Property\EligibleTransactionVolumeProperty
	 */
	private $eligibleTransactionVolume;

	/**
	 * @var Property\MaxPriceProperty
	 */
	private $maxPrice;

	/**
	 * @var Property\MinPriceProperty
	 */
	private $minPrice;

	/**
	 * @var Property\PriceProperty
	 */
	private $price;

	/**
	 * @var Property\PriceCurrencyProperty
	 */
	private $priceCurrency;

	/**
	 * @var Property\ValidFromProperty
	 */
	private $validFrom;

	/**
	 * @var Property\ValidThroughProperty
	 */
	private $validThrough;

	/**
	 * @var Property\ValueAddedTaxIncludedProperty
	 */
	private $valueAddedTaxIncluded;

	/**
	 * Get eligible quantity.
	 *
	 * @return Property\EligibleQuantityProperty
	 */
	public function getEligibleQuantity() {
		return $this->eligibleQuantity;
	}

	/**
	 * Get eligible transaction volume.
	 *
	 * @return Property\EligibleTransactionVolumeProperty
	 */
	public function getEligibleTransactionVolume() {
		return $this->eligibleTransactionVolume;
	}

	/**
	 * Get max price.
	 *
	 * @return Property\MaxPriceProperty
	 */
	public function getMaxPrice() {
		return $this->maxPrice;
	}

	/**
	 * Get min price.
	 *
	 * @return Property\MinPriceProperty
	 */
	public function getMinPrice() {
		return $this->minPrice;
	}

	/**
	 * Get price.
	 *
	 * @return Property\PriceProperty
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Get price currency.
	 *
	 * @return Property\PriceCurrencyProperty
	 */
	public function getPriceCurrency() {
		return $this->priceCurrency;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PriceSpecification';
	}

	/**
	 * Get valid from.
	 *
	 * @return Property\ValidFromProperty
	 */
	public function getValidFrom() {
		return $this->validFrom;
	}

	/**
	 * Get valid through.
	 *
	 * @return Property\ValidThroughProperty
	 */
	public function getValidThrough() {
		return $this->validThrough;
	}

	/**
	 * Get value added tax included.
	 *
	 * @return Property\ValueAddedTaxIncludedProperty
	 */
	public function getValueAddedTaxIncluded() {
		return $this->valueAddedTaxIncluded;
	}

	/**
	 * Set eligible quantity.
	 *
	 * @param Property\EligibleQuantityProperty $eligibleQuantity
	 * @return PriceSpecificationType
	 */
	public function setEligibleQuantity(Property\EligibleQuantityProperty $eligibleQuantity) {
		$this->eligibleQuantity = $eligibleQuantity;

		return $this;
	}

	/**
	 * Set eligible transaction volume.
	 *
	 * @param Property\EligibleTransactionVolumeProperty $eligibleTransactionVolume
	 * @return PriceSpecificationType
	 */
	public function setEligibleTransactionVolume(Property\EligibleTransactionVolumeProperty $eligibleTransactionVolume) {
		$this->eligibleTransactionVolume = $eligibleTransactionVolume;

		return $this;
	}

	/**
	 * Set max price.
	 *
	 * @param Property\MaxPriceProperty $maxPrice
	 * @return PriceSpecificationType
	 */
	public function setMaxPrice(Property\MaxPriceProperty $maxPrice) {
		$this->maxPrice = $maxPrice;

		return $this;
	}

	/**
	 * Set min price.
	 *
	 * @param Property\MinPriceProperty $minPrice
	 * @return PriceSpecificationType
	 */
	public function setMinPrice(Property\MinPriceProperty $minPrice) {
		$this->minPrice = $minPrice;

		return $this;
	}

	/**
	 * Set price.
	 *
	 * @param Property\PriceProperty $price
	 * @return PriceSpecificationType
	 */
	public function setPrice(Property\PriceProperty $price) {
		$this->price = $price;

		return $this;
	}

	/**
	 * Set price currency.
	 *
	 * @param Property\PriceCurrencyProperty $priceCurrency
	 * @return PriceSpecificationType
	 */
	public function setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency) {
		$this->priceCurrency = $priceCurrency;

		return $this;
	}

	/**
	 * Set valid from.
	 *
	 * @param Property\ValidFromProperty $validFrom
	 * @return PriceSpecificationType
	 */
	public function setValidFrom(Property\ValidFromProperty $validFrom) {
		$this->validFrom = $validFrom;

		return $this;
	}

	/**
	 * Set valid through.
	 *
	 * @param Property\ValidThroughProperty $validThrough
	 * @return PriceSpecificationType
	 */
	public function setValidThrough(Property\ValidThroughProperty $validThrough) {
		$this->validThrough = $validThrough;

		return $this;
	}

	/**
	 * Set value added tax included.
	 *
	 * @param Property\ValueAddedTaxIncludedProperty $valueAddedTaxIncluded
	 * @return PriceSpecificationType
	 */
	public function setValueAddedTaxIncluded(Property\ValueAddedTaxIncludedProperty $valueAddedTaxIncluded) {
		$this->valueAddedTaxIncluded = $valueAddedTaxIncluded;

		return $this;
	}
}