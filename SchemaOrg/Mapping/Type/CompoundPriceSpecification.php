<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CompoundPriceSpecification.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\CompoundPriceSpecificationType instead.
 * 
 * @method CompoundPriceSpecification setAdditionalType(Property\AdditionalType $additionalType)
 * @method CompoundPriceSpecification setAlternateName(Property\AlternateName $alternateName)
 * @method CompoundPriceSpecification setDescription(Property\Description $description)
 * @method CompoundPriceSpecification setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CompoundPriceSpecification setEligibleQuantity(Property\EligibleQuantity $eligibleQuantity)
 * @method CompoundPriceSpecification setEligibleTransactionVolume(Property\EligibleTransactionVolume $eligibleTransactionVolume)
 * @method CompoundPriceSpecification setIdentifier(Property\Identifier $identifier)
 * @method CompoundPriceSpecification setImage(Property\Image $image)
 * @method CompoundPriceSpecification setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CompoundPriceSpecification setMaxPrice(Property\MaxPrice $maxPrice)
 * @method CompoundPriceSpecification setMinPrice(Property\MinPrice $minPrice)
 * @method CompoundPriceSpecification setName(Property\Name $name)
 * @method CompoundPriceSpecification setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CompoundPriceSpecification setPrice(Property\Price $price)
 * @method CompoundPriceSpecification setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method CompoundPriceSpecification setSameAs(Property\SameAs $sameAs)
 * @method CompoundPriceSpecification setUrl(Property\Url $url)
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