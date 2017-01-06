<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DeliveryChargeSpecification.
 * 
 * @method DeliveryChargeSpecification setAdditionalType(Property\AdditionalType $additionalType)
 * @method DeliveryChargeSpecification setAlternateName(Property\AlternateName $alternateName)
 * @method DeliveryChargeSpecification setDescription(Property\Description $description)
 * @method DeliveryChargeSpecification setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DeliveryChargeSpecification setEligibleQuantity(Property\EligibleQuantity $eligibleQuantity)
 * @method DeliveryChargeSpecification setEligibleTransactionVolume(Property\EligibleTransactionVolume $eligibleTransactionVolume)
 * @method DeliveryChargeSpecification setImage(Property\Image $image)
 * @method DeliveryChargeSpecification setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DeliveryChargeSpecification setMaxPrice(Property\MaxPrice $maxPrice)
 * @method DeliveryChargeSpecification setMinPrice(Property\MinPrice $minPrice)
 * @method DeliveryChargeSpecification setName(Property\Name $name)
 * @method DeliveryChargeSpecification setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DeliveryChargeSpecification setPrice(Property\Price $price)
 * @method DeliveryChargeSpecification setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method DeliveryChargeSpecification setSameAs(Property\SameAs $sameAs)
 * @method DeliveryChargeSpecification setUrl(Property\Url $url)
 * @method DeliveryChargeSpecification setValidFrom(Property\ValidFrom $validFrom)
 * @method DeliveryChargeSpecification setValidThrough(Property\ValidThrough $validThrough)
 * @method DeliveryChargeSpecification setValueAddedTaxIncluded(Property\ValueAddedTaxIncluded $valueAddedTaxIncluded)
 */
class DeliveryChargeSpecification extends PriceSpecification {

	/**
	 * @var Property\AppliesToDeliveryMethod
	 */
	private $appliesToDeliveryMethod;

	/**
	 * @var Property\AreaServed
	 */
	private $areaServed;

	/**
	 * @var Property\EligibleRegion
	 */
	private $eligibleRegion;

	/**
	 * @var Property\IneligibleRegion
	 */
	private $ineligibleRegion;

	/**
	 * Get applies to delivery method.
	 * 
	 * @return Property\AppliesToDeliveryMethod
	 */
	public function getAppliesToDeliveryMethod() {
		return $this->appliesToDeliveryMethod;
	}

	/**
	 * Get area served.
	 * 
	 * @return Property\AreaServed
	 */
	public function getAreaServed() {
		return $this->areaServed;
	}

	/**
	 * Get eligible region.
	 * 
	 * @return Property\EligibleRegion
	 */
	public function getEligibleRegion() {
		return $this->eligibleRegion;
	}

	/**
	 * Get ineligible region.
	 * 
	 * @return Property\IneligibleRegion
	 */
	public function getIneligibleRegion() {
		return $this->ineligibleRegion;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DeliveryChargeSpecification';
	}

	/**
	 * Set applies to delivery method.
	 * 
	 * @param Property\AppliesToDeliveryMethod $appliesToDeliveryMethod
	 * @return DeliveryChargeSpecification
	 */
	public function setAppliesToDeliveryMethod(Property\AppliesToDeliveryMethod $appliesToDeliveryMethod) {
		$this->appliesToDeliveryMethod = $appliesToDeliveryMethod;

		return $this;
	}

	/**
	 * Set area served.
	 * 
	 * @param Property\AreaServed $areaServed
	 * @return DeliveryChargeSpecification
	 */
	public function setAreaServed(Property\AreaServed $areaServed) {
		$this->areaServed = $areaServed;

		return $this;
	}

	/**
	 * Set eligible region.
	 * 
	 * @param Property\EligibleRegion $eligibleRegion
	 * @return DeliveryChargeSpecification
	 */
	public function setEligibleRegion(Property\EligibleRegion $eligibleRegion) {
		$this->eligibleRegion = $eligibleRegion;

		return $this;
	}

	/**
	 * Set ineligible region.
	 * 
	 * @param Property\IneligibleRegion $ineligibleRegion
	 * @return DeliveryChargeSpecification
	 */
	public function setIneligibleRegion(Property\IneligibleRegion $ineligibleRegion) {
		$this->ineligibleRegion = $ineligibleRegion;

		return $this;
	}
}