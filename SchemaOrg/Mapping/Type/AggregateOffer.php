<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AggregateOffer.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\AggregateOfferType instead.
 * 
 * @method AggregateOffer setAcceptedPaymentMethod(Property\AcceptedPaymentMethod $acceptedPaymentMethod)
 * @method AggregateOffer setAddOn(Property\AddOn $addOn)
 * @method AggregateOffer setAdditionalType(Property\AdditionalType $additionalType)
 * @method AggregateOffer setAdvanceBookingRequirement(Property\AdvanceBookingRequirement $advanceBookingRequirement)
 * @method AggregateOffer setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AggregateOffer setAlternateName(Property\AlternateName $alternateName)
 * @method AggregateOffer setAreaServed(Property\AreaServed $areaServed)
 * @method AggregateOffer setAvailability(Property\Availability $availability)
 * @method AggregateOffer setAvailabilityEnds(Property\AvailabilityEnds $availabilityEnds)
 * @method AggregateOffer setAvailabilityStarts(Property\AvailabilityStarts $availabilityStarts)
 * @method AggregateOffer setAvailableAtOrFrom(Property\AvailableAtOrFrom $availableAtOrFrom)
 * @method AggregateOffer setAvailableDeliveryMethod(Property\AvailableDeliveryMethod $availableDeliveryMethod)
 * @method AggregateOffer setBusinessFunction(Property\BusinessFunction $businessFunction)
 * @method AggregateOffer setCategory(Property\Category $category)
 * @method AggregateOffer setDeliveryLeadTime(Property\DeliveryLeadTime $deliveryLeadTime)
 * @method AggregateOffer setDescription(Property\Description $description)
 * @method AggregateOffer setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AggregateOffer setEligibleCustomerType(Property\EligibleCustomerType $eligibleCustomerType)
 * @method AggregateOffer setEligibleDuration(Property\EligibleDuration $eligibleDuration)
 * @method AggregateOffer setEligibleQuantity(Property\EligibleQuantity $eligibleQuantity)
 * @method AggregateOffer setEligibleRegion(Property\EligibleRegion $eligibleRegion)
 * @method AggregateOffer setEligibleTransactionVolume(Property\EligibleTransactionVolume $eligibleTransactionVolume)
 * @method AggregateOffer setGtin12(Property\Gtin12 $gtin12)
 * @method AggregateOffer setGtin13(Property\Gtin13 $gtin13)
 * @method AggregateOffer setGtin14(Property\Gtin14 $gtin14)
 * @method AggregateOffer setGtin8(Property\Gtin8 $gtin8)
 * @method AggregateOffer setIdentifier(Property\Identifier $identifier)
 * @method AggregateOffer setImage(Property\Image $image)
 * @method AggregateOffer setIncludesObject(Property\IncludesObject $includesObject)
 * @method AggregateOffer setIneligibleRegion(Property\IneligibleRegion $ineligibleRegion)
 * @method AggregateOffer setInventoryLevel(Property\InventoryLevel $inventoryLevel)
 * @method AggregateOffer setItemCondition(Property\ItemCondition $itemCondition)
 * @method AggregateOffer setItemOffered(Property\ItemOffered $itemOffered)
 * @method AggregateOffer setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AggregateOffer setMpn(Property\Mpn $mpn)
 * @method AggregateOffer setName(Property\Name $name)
 * @method AggregateOffer setOfferedBy(Property\OfferedBy $offeredBy)
 * @method AggregateOffer setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AggregateOffer setPrice(Property\Price $price)
 * @method AggregateOffer setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method AggregateOffer setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method AggregateOffer setPriceValidUntil(Property\PriceValidUntil $priceValidUntil)
 * @method AggregateOffer setReview(Property\Review $review)
 * @method AggregateOffer setSameAs(Property\SameAs $sameAs)
 * @method AggregateOffer setSeller(Property\Seller $seller)
 * @method AggregateOffer setSerialNumber(Property\SerialNumber $serialNumber)
 * @method AggregateOffer setSku(Property\Sku $sku)
 * @method AggregateOffer setUrl(Property\Url $url)
 * @method AggregateOffer setValidFrom(Property\ValidFrom $validFrom)
 * @method AggregateOffer setValidThrough(Property\ValidThrough $validThrough)
 * @method AggregateOffer setWarranty(Property\Warranty $warranty)
 */
class AggregateOffer extends Offer {

	/**
	 * @var Property\HighPrice
	 */
	private $highPrice;

	/**
	 * @var Property\LowPrice
	 */
	private $lowPrice;

	/**
	 * @var Property\OfferCount
	 */
	private $offerCount;

	/**
	 * @var Property\Offers
	 */
	private $offers;

	/**
	 * Get high price.
	 * 
	 * @return Property\HighPrice
	 */
	public function getHighPrice() {
		return $this->highPrice;
	}

	/**
	 * Get low price.
	 * 
	 * @return Property\LowPrice
	 */
	public function getLowPrice() {
		return $this->lowPrice;
	}

	/**
	 * Get offer count.
	 * 
	 * @return Property\OfferCount
	 */
	public function getOfferCount() {
		return $this->offerCount;
	}

	/**
	 * Get offers.
	 * 
	 * @return Property\Offers
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
	 * @param Property\HighPrice $highPrice
	 * @return AggregateOffer
	 */
	public function setHighPrice(Property\HighPrice $highPrice) {
		$this->highPrice = $highPrice;

		return $this;
	}

	/**
	 * Set low price.
	 * 
	 * @param Property\LowPrice $lowPrice
	 * @return AggregateOffer
	 */
	public function setLowPrice(Property\LowPrice $lowPrice) {
		$this->lowPrice = $lowPrice;

		return $this;
	}

	/**
	 * Set offer count.
	 * 
	 * @param Property\OfferCount $offerCount
	 * @return AggregateOffer
	 */
	public function setOfferCount(Property\OfferCount $offerCount) {
		$this->offerCount = $offerCount;

		return $this;
	}

	/**
	 * Set offers.
	 * 
	 * @param Property\Offers $offers
	 * @return AggregateOffer
	 */
	public function setOffers(Property\Offers $offers) {
		$this->offers = $offers;

		return $this;
	}
}