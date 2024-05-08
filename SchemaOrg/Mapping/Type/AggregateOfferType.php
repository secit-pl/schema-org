<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * When a single product is associated with multiple offers (for example, the same pair of shoes is offered by different merchants), then AggregateOffer can be used. Note: AggregateOffers are normally expected to associate multiple offers that all share the same defined businessFunction value, or default to http://purl.org/goodrelations/v1#Sell if businessFunction is not explicitly defined.
 * 
 * @method AggregateOfferType setAcceptedPaymentMethod(Property\AcceptedPaymentMethodProperty $acceptedPaymentMethod)
 * @method AggregateOfferType setAddOn(Property\AddOnProperty $addOn)
 * @method AggregateOfferType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AggregateOfferType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AggregateOfferType setAdvanceBookingRequirement(Property\AdvanceBookingRequirementProperty $advanceBookingRequirement)
 * @method AggregateOfferType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AggregateOfferType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AggregateOfferType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method AggregateOfferType setAvailability(Property\AvailabilityProperty $availability)
 * @method AggregateOfferType setAvailabilityEnds(Property\AvailabilityEndsProperty $availabilityEnds)
 * @method AggregateOfferType setAvailabilityStarts(Property\AvailabilityStartsProperty $availabilityStarts)
 * @method AggregateOfferType setAvailableAtOrFrom(Property\AvailableAtOrFromProperty $availableAtOrFrom)
 * @method AggregateOfferType setAvailableDeliveryMethod(Property\AvailableDeliveryMethodProperty $availableDeliveryMethod)
 * @method AggregateOfferType setBusinessFunction(Property\BusinessFunctionProperty $businessFunction)
 * @method AggregateOfferType setCategory(Property\CategoryProperty $category)
 * @method AggregateOfferType setDeliveryLeadTime(Property\DeliveryLeadTimeProperty $deliveryLeadTime)
 * @method AggregateOfferType setDescription(Property\DescriptionProperty $description)
 * @method AggregateOfferType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AggregateOfferType setEligibleCustomerType(Property\EligibleCustomerTypeProperty $eligibleCustomerType)
 * @method AggregateOfferType setEligibleDuration(Property\EligibleDurationProperty $eligibleDuration)
 * @method AggregateOfferType setEligibleQuantity(Property\EligibleQuantityProperty $eligibleQuantity)
 * @method AggregateOfferType setEligibleRegion(Property\EligibleRegionProperty $eligibleRegion)
 * @method AggregateOfferType setEligibleTransactionVolume(Property\EligibleTransactionVolumeProperty $eligibleTransactionVolume)
 * @method AggregateOfferType setGtin12(Property\Gtin12Property $gtin12)
 * @method AggregateOfferType setGtin13(Property\Gtin13Property $gtin13)
 * @method AggregateOfferType setGtin14(Property\Gtin14Property $gtin14)
 * @method AggregateOfferType setGtin8(Property\Gtin8Property $gtin8)
 * @method AggregateOfferType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AggregateOfferType setImage(Property\ImageProperty $image)
 * @method AggregateOfferType setIncludesObject(Property\IncludesObjectProperty $includesObject)
 * @method AggregateOfferType setInventoryLevel(Property\InventoryLevelProperty $inventoryLevel)
 * @method AggregateOfferType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method AggregateOfferType setItemCondition(Property\ItemConditionProperty $itemCondition)
 * @method AggregateOfferType setItemOffered(Property\ItemOfferedProperty $itemOffered)
 * @method AggregateOfferType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AggregateOfferType setMpn(Property\MpnProperty $mpn)
 * @method AggregateOfferType setName(Property\NameProperty $name)
 * @method AggregateOfferType setOfferedBy(Property\OfferedByProperty $offeredBy)
 * @method AggregateOfferType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AggregateOfferType setPrice(Property\PriceProperty $price)
 * @method AggregateOfferType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method AggregateOfferType setPriceSpecification(Property\PriceSpecificationProperty $priceSpecification)
 * @method AggregateOfferType setPriceValidUntil(Property\PriceValidUntilProperty $priceValidUntil)
 * @method AggregateOfferType setReview(Property\ReviewProperty $review)
 * @method AggregateOfferType setSameAs(Property\SameAsProperty $sameAs)
 * @method AggregateOfferType setSeller(Property\SellerProperty $seller)
 * @method AggregateOfferType setSerialNumber(Property\SerialNumberProperty $serialNumber)
 * @method AggregateOfferType setSku(Property\SkuProperty $sku)
 * @method AggregateOfferType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AggregateOfferType setUrl(Property\UrlProperty $url)
 * @method AggregateOfferType setValidFrom(Property\ValidFromProperty $validFrom)
 * @method AggregateOfferType setValidThrough(Property\ValidThroughProperty $validThrough)
 * @method AggregateOfferType setWarranty(Property\WarrantyProperty $warranty)
 */
class AggregateOfferType extends OfferType {

	/**
	 * @var Property\HighPriceProperty
	 */
	private $highPrice;

	/**
	 * @var Property\LowPriceProperty
	 */
	private $lowPrice;

	/**
	 * @var Property\OfferCountProperty
	 */
	private $offerCount;

	/**
	 * @var Property\OffersProperty
	 */
	private $offers;

	/**
	 * Get high price.
	 *
	 * @return Property\HighPriceProperty
	 */
	public function getHighPrice() {
		return $this->highPrice;
	}

	/**
	 * Get low price.
	 *
	 * @return Property\LowPriceProperty
	 */
	public function getLowPrice() {
		return $this->lowPrice;
	}

	/**
	 * Get offer count.
	 *
	 * @return Property\OfferCountProperty
	 */
	public function getOfferCount() {
		return $this->offerCount;
	}

	/**
	 * Get offers.
	 *
	 * @return Property\OffersProperty
	 */
	public function getOffers() {
		return $this->offers;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AggregateOffer';
	}

	/**
	 * Set high price.
	 *
	 * @param Property\HighPriceProperty $highPrice
	 * @return AggregateOfferType
	 */
	public function setHighPrice(Property\HighPriceProperty $highPrice) {
		$this->highPrice = $highPrice;

		return $this;
	}

	/**
	 * Set low price.
	 *
	 * @param Property\LowPriceProperty $lowPrice
	 * @return AggregateOfferType
	 */
	public function setLowPrice(Property\LowPriceProperty $lowPrice) {
		$this->lowPrice = $lowPrice;

		return $this;
	}

	/**
	 * Set offer count.
	 *
	 * @param Property\OfferCountProperty $offerCount
	 * @return AggregateOfferType
	 */
	public function setOfferCount(Property\OfferCountProperty $offerCount) {
		$this->offerCount = $offerCount;

		return $this;
	}

	/**
	 * Set offers.
	 *
	 * @param Property\OffersProperty $offers
	 * @return AggregateOfferType
	 */
	public function setOffers(Property\OffersProperty $offers) {
		$this->offers = $offers;

		return $this;
	}
}