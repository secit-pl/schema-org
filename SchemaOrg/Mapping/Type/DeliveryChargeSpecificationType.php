<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The price for the delivery of an offer using a particular delivery method.
 * 
 * @method DeliveryChargeSpecificationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DeliveryChargeSpecificationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DeliveryChargeSpecificationType setDescription(Property\DescriptionProperty $description)
 * @method DeliveryChargeSpecificationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DeliveryChargeSpecificationType setEligibleQuantity(Property\EligibleQuantityProperty $eligibleQuantity)
 * @method DeliveryChargeSpecificationType setEligibleTransactionVolume(Property\EligibleTransactionVolumeProperty $eligibleTransactionVolume)
 * @method DeliveryChargeSpecificationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DeliveryChargeSpecificationType setImage(Property\ImageProperty $image)
 * @method DeliveryChargeSpecificationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DeliveryChargeSpecificationType setMaxPrice(Property\MaxPriceProperty $maxPrice)
 * @method DeliveryChargeSpecificationType setMinPrice(Property\MinPriceProperty $minPrice)
 * @method DeliveryChargeSpecificationType setName(Property\NameProperty $name)
 * @method DeliveryChargeSpecificationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DeliveryChargeSpecificationType setPrice(Property\PriceProperty $price)
 * @method DeliveryChargeSpecificationType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method DeliveryChargeSpecificationType setSameAs(Property\SameAsProperty $sameAs)
 * @method DeliveryChargeSpecificationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DeliveryChargeSpecificationType setUrl(Property\UrlProperty $url)
 * @method DeliveryChargeSpecificationType setValidFrom(Property\ValidFromProperty $validFrom)
 * @method DeliveryChargeSpecificationType setValidThrough(Property\ValidThroughProperty $validThrough)
 * @method DeliveryChargeSpecificationType setValueAddedTaxIncluded(Property\ValueAddedTaxIncludedProperty $valueAddedTaxIncluded)
 */
class DeliveryChargeSpecificationType extends PriceSpecificationType {

	/**
	 * @var Property\AppliesToDeliveryMethodProperty
	 */
	private $appliesToDeliveryMethod;

	/**
	 * @var Property\AreaServedProperty
	 */
	private $areaServed;

	/**
	 * @var Property\EligibleRegionProperty
	 */
	private $eligibleRegion;

	/**
	 * Get applies to delivery method.
	 *
	 * @return Property\AppliesToDeliveryMethodProperty
	 */
	public function getAppliesToDeliveryMethod() {
		return $this->appliesToDeliveryMethod;
	}

	/**
	 * Get area served.
	 *
	 * @return Property\AreaServedProperty
	 */
	public function getAreaServed() {
		return $this->areaServed;
	}

	/**
	 * Get eligible region.
	 *
	 * @return Property\EligibleRegionProperty
	 */
	public function getEligibleRegion() {
		return $this->eligibleRegion;
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
	 * @param Property\AppliesToDeliveryMethodProperty $appliesToDeliveryMethod
	 * @return DeliveryChargeSpecificationType
	 */
	public function setAppliesToDeliveryMethod(Property\AppliesToDeliveryMethodProperty $appliesToDeliveryMethod) {
		$this->appliesToDeliveryMethod = $appliesToDeliveryMethod;

		return $this;
	}

	/**
	 * Set area served.
	 *
	 * @param Property\AreaServedProperty $areaServed
	 * @return DeliveryChargeSpecificationType
	 */
	public function setAreaServed(Property\AreaServedProperty $areaServed) {
		$this->areaServed = $areaServed;

		return $this;
	}

	/**
	 * Set eligible region.
	 *
	 * @param Property\EligibleRegionProperty $eligibleRegion
	 * @return DeliveryChargeSpecificationType
	 */
	public function setEligibleRegion(Property\EligibleRegionProperty $eligibleRegion) {
		$this->eligibleRegion = $eligibleRegion;

		return $this;
	}
}