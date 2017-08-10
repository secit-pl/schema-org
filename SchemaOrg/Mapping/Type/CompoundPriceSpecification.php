<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CompoundPriceSpecification.
 * 
 * @method CompoundPriceSpecification setEligibleQuantity(Property\EligibleQuantity $eligibleQuantity)
 * @method CompoundPriceSpecification setEligibleTransactionVolume(Property\EligibleTransactionVolume $eligibleTransactionVolume)
 * @method CompoundPriceSpecification setMaxPrice(Property\MaxPrice $maxPrice)
 * @method CompoundPriceSpecification setMinPrice(Property\MinPrice $minPrice)
 * @method CompoundPriceSpecification setPrice(Property\Price $price)
 * @method CompoundPriceSpecification setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method CompoundPriceSpecification setValidFrom(Property\ValidFrom $validFrom)
 * @method CompoundPriceSpecification setValidThrough(Property\ValidThrough $validThrough)
 * @method CompoundPriceSpecification setValueAddedTaxIncluded(Property\ValueAddedTaxIncluded $valueAddedTaxIncluded)
 */
class CompoundPriceSpecification extends PriceSpecification {

	/**
	 * @var Property\PriceComponent
	 */
	private $priceComponent;

	/**
	 * Get price component.
	 * 
	 * @return Property\PriceComponent
	 */
	public function getPriceComponent() {
		return $this->priceComponent;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CompoundPriceSpecification';
	}

	/**
	 * Set price component.
	 * 
	 * @param Property\PriceComponent $priceComponent
	 * @return CompoundPriceSpecification
	 */
	public function setPriceComponent(Property\PriceComponent $priceComponent) {
		$this->priceComponent = $priceComponent;

		return $this;
	}
}