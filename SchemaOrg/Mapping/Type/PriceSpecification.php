<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PriceSpecification.
 * 
 * @method PriceSpecification setAdditionalType(Property\AdditionalType $additionalType)
 * @method PriceSpecification setAlternateName(Property\AlternateName $alternateName)
 * @method PriceSpecification setDescription(Property\Description $description)
 * @method PriceSpecification setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PriceSpecification setImage(Property\Image $image)
 * @method PriceSpecification setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PriceSpecification setName(Property\Name $name)
 * @method PriceSpecification setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PriceSpecification setSameAs(Property\SameAs $sameAs)
 * @method PriceSpecification setUrl(Property\Url $url)
 */
class PriceSpecification extends StructuredValue {

	/**
	 * @var Property\EligibleQuantity
	 */
	private $eligibleQuantity;

	/**
	 * @var Property\EligibleTransactionVolume
	 */
	private $eligibleTransactionVolume;

	/**
	 * @var Property\MaxPrice
	 */
	private $maxPrice;

	/**
	 * @var Property\MinPrice
	 */
	private $minPrice;

	/**
	 * @var Property\Price
	 */
	private $price;

	/**
	 * @var Property\PriceCurrency
	 */
	private $priceCurrency;

	/**
	 * @var Property\ValidFrom
	 */
	private $validFrom;

	/**
	 * @var Property\ValidThrough
	 */
	private $validThrough;

	/**
	 * @var Property\ValueAddedTaxIncluded
	 */
	private $valueAddedTaxIncluded;

	/**
	 * Get eligible quantity.
	 * 
	 * @return Property\EligibleQuantity
	 */
	public function getEligibleQuantity() {
		return $this->eligibleQuantity;
	}

	/**
	 * Get eligible transaction volume.
	 * 
	 * @return Property\EligibleTransactionVolume
	 */
	public function getEligibleTransactionVolume() {
		return $this->eligibleTransactionVolume;
	}

	/**
	 * Get max price.
	 * 
	 * @return Property\MaxPrice
	 */
	public function getMaxPrice() {
		return $this->maxPrice;
	}

	/**
	 * Get min price.
	 * 
	 * @return Property\MinPrice
	 */
	public function getMinPrice() {
		return $this->minPrice;
	}

	/**
	 * Get price.
	 * 
	 * @return Property\Price
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Get price currency.
	 * 
	 * @return Property\PriceCurrency
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
	 * @return Property\ValidFrom
	 */
	public function getValidFrom() {
		return $this->validFrom;
	}

	/**
	 * Get valid through.
	 * 
	 * @return Property\ValidThrough
	 */
	public function getValidThrough() {
		return $this->validThrough;
	}

	/**
	 * Get value added tax included.
	 * 
	 * @return Property\ValueAddedTaxIncluded
	 */
	public function getValueAddedTaxIncluded() {
		return $this->valueAddedTaxIncluded;
	}

	/**
	 * Set eligible quantity.
	 * 
	 * @param Property\EligibleQuantity $eligibleQuantity
	 * @return PriceSpecification
	 */
	public function setEligibleQuantity(Property\EligibleQuantity $eligibleQuantity) {
		$this->eligibleQuantity = $eligibleQuantity;

		return $this;
	}

	/**
	 * Set eligible transaction volume.
	 * 
	 * @param Property\EligibleTransactionVolume $eligibleTransactionVolume
	 * @return PriceSpecification
	 */
	public function setEligibleTransactionVolume(Property\EligibleTransactionVolume $eligibleTransactionVolume) {
		$this->eligibleTransactionVolume = $eligibleTransactionVolume;

		return $this;
	}

	/**
	 * Set max price.
	 * 
	 * @param Property\MaxPrice $maxPrice
	 * @return PriceSpecification
	 */
	public function setMaxPrice(Property\MaxPrice $maxPrice) {
		$this->maxPrice = $maxPrice;

		return $this;
	}

	/**
	 * Set min price.
	 * 
	 * @param Property\MinPrice $minPrice
	 * @return PriceSpecification
	 */
	public function setMinPrice(Property\MinPrice $minPrice) {
		$this->minPrice = $minPrice;

		return $this;
	}

	/**
	 * Set price.
	 * 
	 * @param Property\Price $price
	 * @return PriceSpecification
	 */
	public function setPrice(Property\Price $price) {
		$this->price = $price;

		return $this;
	}

	/**
	 * Set price currency.
	 * 
	 * @param Property\PriceCurrency $priceCurrency
	 * @return PriceSpecification
	 */
	public function setPriceCurrency(Property\PriceCurrency $priceCurrency) {
		$this->priceCurrency = $priceCurrency;

		return $this;
	}

	/**
	 * Set valid from.
	 * 
	 * @param Property\ValidFrom $validFrom
	 * @return PriceSpecification
	 */
	public function setValidFrom(Property\ValidFrom $validFrom) {
		$this->validFrom = $validFrom;

		return $this;
	}

	/**
	 * Set valid through.
	 * 
	 * @param Property\ValidThrough $validThrough
	 * @return PriceSpecification
	 */
	public function setValidThrough(Property\ValidThrough $validThrough) {
		$this->validThrough = $validThrough;

		return $this;
	}

	/**
	 * Set value added tax included.
	 * 
	 * @param Property\ValueAddedTaxIncluded $valueAddedTaxIncluded
	 * @return PriceSpecification
	 */
	public function setValueAddedTaxIncluded(Property\ValueAddedTaxIncluded $valueAddedTaxIncluded) {
		$this->valueAddedTaxIncluded = $valueAddedTaxIncluded;

		return $this;
	}
}