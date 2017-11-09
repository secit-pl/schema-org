<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Offer.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\OfferType instead.
 * 
 * @method Offer setAdditionalType(Property\AdditionalType $additionalType)
 * @method Offer setAlternateName(Property\AlternateName $alternateName)
 * @method Offer setDescription(Property\Description $description)
 * @method Offer setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Offer setIdentifier(Property\Identifier $identifier)
 * @method Offer setImage(Property\Image $image)
 * @method Offer setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Offer setName(Property\Name $name)
 * @method Offer setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Offer setSameAs(Property\SameAs $sameAs)
 * @method Offer setUrl(Property\Url $url)
 */
class Offer extends Intangible {

	/**
	 * @var Property\AcceptedPaymentMethod
	 */
	private $acceptedPaymentMethod;

	/**
	 * @var Property\AddOn
	 */
	private $addOn;

	/**
	 * @var Property\AdvanceBookingRequirement
	 */
	private $advanceBookingRequirement;

	/**
	 * @var Property\AggregateRating
	 */
	private $aggregateRating;

	/**
	 * @var Property\AreaServed
	 */
	private $areaServed;

	/**
	 * @var Property\Availability
	 */
	private $availability;

	/**
	 * @var Property\AvailabilityEnds
	 */
	private $availabilityEnds;

	/**
	 * @var Property\AvailabilityStarts
	 */
	private $availabilityStarts;

	/**
	 * @var Property\AvailableAtOrFrom
	 */
	private $availableAtOrFrom;

	/**
	 * @var Property\AvailableDeliveryMethod
	 */
	private $availableDeliveryMethod;

	/**
	 * @var Property\BusinessFunction
	 */
	private $businessFunction;

	/**
	 * @var Property\Category
	 */
	private $category;

	/**
	 * @var Property\DeliveryLeadTime
	 */
	private $deliveryLeadTime;

	/**
	 * @var Property\EligibleCustomerType
	 */
	private $eligibleCustomerType;

	/**
	 * @var Property\EligibleDuration
	 */
	private $eligibleDuration;

	/**
	 * @var Property\EligibleQuantity
	 */
	private $eligibleQuantity;

	/**
	 * @var Property\EligibleRegion
	 */
	private $eligibleRegion;

	/**
	 * @var Property\EligibleTransactionVolume
	 */
	private $eligibleTransactionVolume;

	/**
	 * @var Property\Gtin12
	 */
	private $gtin12;

	/**
	 * @var Property\Gtin13
	 */
	private $gtin13;

	/**
	 * @var Property\Gtin14
	 */
	private $gtin14;

	/**
	 * @var Property\Gtin8
	 */
	private $gtin8;

	/**
	 * @var Property\IncludesObject
	 */
	private $includesObject;

	/**
	 * @var Property\IneligibleRegion
	 */
	private $ineligibleRegion;

	/**
	 * @var Property\InventoryLevel
	 */
	private $inventoryLevel;

	/**
	 * @var Property\ItemCondition
	 */
	private $itemCondition;

	/**
	 * @var Property\ItemOffered
	 */
	private $itemOffered;

	/**
	 * @var Property\Mpn
	 */
	private $mpn;

	/**
	 * @var Property\OfferedBy
	 */
	private $offeredBy;

	/**
	 * @var Property\Price
	 */
	private $price;

	/**
	 * @var Property\PriceCurrency
	 */
	private $priceCurrency;

	/**
	 * @var Property\PriceSpecification
	 */
	private $priceSpecification;

	/**
	 * @var Property\PriceValidUntil
	 */
	private $priceValidUntil;

	/**
	 * @var Property\Review
	 */
	private $review;

	/**
	 * @var Property\Seller
	 */
	private $seller;

	/**
	 * @var Property\SerialNumber
	 */
	private $serialNumber;

	/**
	 * @var Property\Sku
	 */
	private $sku;

	/**
	 * @var Property\ValidFrom
	 */
	private $validFrom;

	/**
	 * @var Property\ValidThrough
	 */
	private $validThrough;

	/**
	 * @var Property\Warranty
	 */
	private $warranty;

	/**
	 * Get accepted payment method.
	 * 
	 * @return Property\AcceptedPaymentMethod
	 */
	public function getAcceptedPaymentMethod() {
		return $this->acceptedPaymentMethod;
	}

	/**
	 * Get add on.
	 * 
	 * @return Property\AddOn
	 */
	public function getAddOn() {
		return $this->addOn;
	}

	/**
	 * Get advance booking requirement.
	 * 
	 * @return Property\AdvanceBookingRequirement
	 */
	public function getAdvanceBookingRequirement() {
		return $this->advanceBookingRequirement;
	}

	/**
	 * Get aggregate rating.
	 * 
	 * @return Property\AggregateRating
	 */
	public function getAggregateRating() {
		return $this->aggregateRating;
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
	 * Get availability.
	 * 
	 * @return Property\Availability
	 */
	public function getAvailability() {
		return $this->availability;
	}

	/**
	 * Get availability ends.
	 * 
	 * @return Property\AvailabilityEnds
	 */
	public function getAvailabilityEnds() {
		return $this->availabilityEnds;
	}

	/**
	 * Get availability starts.
	 * 
	 * @return Property\AvailabilityStarts
	 */
	public function getAvailabilityStarts() {
		return $this->availabilityStarts;
	}

	/**
	 * Get available at or from.
	 * 
	 * @return Property\AvailableAtOrFrom
	 */
	public function getAvailableAtOrFrom() {
		return $this->availableAtOrFrom;
	}

	/**
	 * Get available delivery method.
	 * 
	 * @return Property\AvailableDeliveryMethod
	 */
	public function getAvailableDeliveryMethod() {
		return $this->availableDeliveryMethod;
	}

	/**
	 * Get business function.
	 * 
	 * @return Property\BusinessFunction
	 */
	public function getBusinessFunction() {
		return $this->businessFunction;
	}

	/**
	 * Get category.
	 * 
	 * @return Property\Category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Get delivery lead time.
	 * 
	 * @return Property\DeliveryLeadTime
	 */
	public function getDeliveryLeadTime() {
		return $this->deliveryLeadTime;
	}

	/**
	 * Get eligible customer type.
	 * 
	 * @return Property\EligibleCustomerType
	 */
	public function getEligibleCustomerType() {
		return $this->eligibleCustomerType;
	}

	/**
	 * Get eligible duration.
	 * 
	 * @return Property\EligibleDuration
	 */
	public function getEligibleDuration() {
		return $this->eligibleDuration;
	}

	/**
	 * Get eligible quantity.
	 * 
	 * @return Property\EligibleQuantity
	 */
	public function getEligibleQuantity() {
		return $this->eligibleQuantity;
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
	 * Get eligible transaction volume.
	 * 
	 * @return Property\EligibleTransactionVolume
	 */
	public function getEligibleTransactionVolume() {
		return $this->eligibleTransactionVolume;
	}

	/**
	 * Get gtin12.
	 * 
	 * @return Property\Gtin12
	 */
	public function getGtin12() {
		return $this->gtin12;
	}

	/**
	 * Get gtin13.
	 * 
	 * @return Property\Gtin13
	 */
	public function getGtin13() {
		return $this->gtin13;
	}

	/**
	 * Get gtin14.
	 * 
	 * @return Property\Gtin14
	 */
	public function getGtin14() {
		return $this->gtin14;
	}

	/**
	 * Get gtin8.
	 * 
	 * @return Property\Gtin8
	 */
	public function getGtin8() {
		return $this->gtin8;
	}

	/**
	 * Get includes object.
	 * 
	 * @return Property\IncludesObject
	 */
	public function getIncludesObject() {
		return $this->includesObject;
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
	 * Get inventory level.
	 * 
	 * @return Property\InventoryLevel
	 */
	public function getInventoryLevel() {
		return $this->inventoryLevel;
	}

	/**
	 * Get item condition.
	 * 
	 * @return Property\ItemCondition
	 */
	public function getItemCondition() {
		return $this->itemCondition;
	}

	/**
	 * Get item offered.
	 * 
	 * @return Property\ItemOffered
	 */
	public function getItemOffered() {
		return $this->itemOffered;
	}

	/**
	 * Get mpn.
	 * 
	 * @return Property\Mpn
	 */
	public function getMpn() {
		return $this->mpn;
	}

	/**
	 * Get offered by.
	 * 
	 * @return Property\OfferedBy
	 */
	public function getOfferedBy() {
		return $this->offeredBy;
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
	 * Get price specification.
	 * 
	 * @return Property\PriceSpecification
	 */
	public function getPriceSpecification() {
		return $this->priceSpecification;
	}

	/**
	 * Get price valid until.
	 * 
	 * @return Property\PriceValidUntil
	 */
	public function getPriceValidUntil() {
		return $this->priceValidUntil;
	}

	/**
	 * Get review.
	 * 
	 * @return Property\Review
	 */
	public function getReview() {
		return $this->review;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Offer';
	}

	/**
	 * Get seller.
	 * 
	 * @return Property\Seller
	 */
	public function getSeller() {
		return $this->seller;
	}

	/**
	 * Get serial number.
	 * 
	 * @return Property\SerialNumber
	 */
	public function getSerialNumber() {
		return $this->serialNumber;
	}

	/**
	 * Get sku.
	 * 
	 * @return Property\Sku
	 */
	public function getSku() {
		return $this->sku;
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
	 * Get warranty.
	 * 
	 * @return Property\Warranty
	 */
	public function getWarranty() {
		return $this->warranty;
	}

	/**
	 * Set accepted payment method.
	 * 
	 * @param Property\AcceptedPaymentMethod $acceptedPaymentMethod
	 * @return Offer
	 */
	public function setAcceptedPaymentMethod(Property\AcceptedPaymentMethod $acceptedPaymentMethod) {
		$this->acceptedPaymentMethod = $acceptedPaymentMethod;

		return $this;
	}

	/**
	 * Set add on.
	 * 
	 * @param Property\AddOn $addOn
	 * @return Offer
	 */
	public function setAddOn(Property\AddOn $addOn) {
		$this->addOn = $addOn;

		return $this;
	}

	/**
	 * Set advance booking requirement.
	 * 
	 * @param Property\AdvanceBookingRequirement $advanceBookingRequirement
	 * @return Offer
	 */
	public function setAdvanceBookingRequirement(Property\AdvanceBookingRequirement $advanceBookingRequirement) {
		$this->advanceBookingRequirement = $advanceBookingRequirement;

		return $this;
	}

	/**
	 * Set aggregate rating.
	 * 
	 * @param Property\AggregateRating $aggregateRating
	 * @return Offer
	 */
	public function setAggregateRating(Property\AggregateRating $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set area served.
	 * 
	 * @param Property\AreaServed $areaServed
	 * @return Offer
	 */
	public function setAreaServed(Property\AreaServed $areaServed) {
		$this->areaServed = $areaServed;

		return $this;
	}

	/**
	 * Set availability.
	 * 
	 * @param Property\Availability $availability
	 * @return Offer
	 */
	public function setAvailability(Property\Availability $availability) {
		$this->availability = $availability;

		return $this;
	}

	/**
	 * Set availability ends.
	 * 
	 * @param Property\AvailabilityEnds $availabilityEnds
	 * @return Offer
	 */
	public function setAvailabilityEnds(Property\AvailabilityEnds $availabilityEnds) {
		$this->availabilityEnds = $availabilityEnds;

		return $this;
	}

	/**
	 * Set availability starts.
	 * 
	 * @param Property\AvailabilityStarts $availabilityStarts
	 * @return Offer
	 */
	public function setAvailabilityStarts(Property\AvailabilityStarts $availabilityStarts) {
		$this->availabilityStarts = $availabilityStarts;

		return $this;
	}

	/**
	 * Set available at or from.
	 * 
	 * @param Property\AvailableAtOrFrom $availableAtOrFrom
	 * @return Offer
	 */
	public function setAvailableAtOrFrom(Property\AvailableAtOrFrom $availableAtOrFrom) {
		$this->availableAtOrFrom = $availableAtOrFrom;

		return $this;
	}

	/**
	 * Set available delivery method.
	 * 
	 * @param Property\AvailableDeliveryMethod $availableDeliveryMethod
	 * @return Offer
	 */
	public function setAvailableDeliveryMethod(Property\AvailableDeliveryMethod $availableDeliveryMethod) {
		$this->availableDeliveryMethod = $availableDeliveryMethod;

		return $this;
	}

	/**
	 * Set business function.
	 * 
	 * @param Property\BusinessFunction $businessFunction
	 * @return Offer
	 */
	public function setBusinessFunction(Property\BusinessFunction $businessFunction) {
		$this->businessFunction = $businessFunction;

		return $this;
	}

	/**
	 * Set category.
	 * 
	 * @param Property\Category $category
	 * @return Offer
	 */
	public function setCategory(Property\Category $category) {
		$this->category = $category;

		return $this;
	}

	/**
	 * Set delivery lead time.
	 * 
	 * @param Property\DeliveryLeadTime $deliveryLeadTime
	 * @return Offer
	 */
	public function setDeliveryLeadTime(Property\DeliveryLeadTime $deliveryLeadTime) {
		$this->deliveryLeadTime = $deliveryLeadTime;

		return $this;
	}

	/**
	 * Set eligible customer type.
	 * 
	 * @param Property\EligibleCustomerType $eligibleCustomerType
	 * @return Offer
	 */
	public function setEligibleCustomerType(Property\EligibleCustomerType $eligibleCustomerType) {
		$this->eligibleCustomerType = $eligibleCustomerType;

		return $this;
	}

	/**
	 * Set eligible duration.
	 * 
	 * @param Property\EligibleDuration $eligibleDuration
	 * @return Offer
	 */
	public function setEligibleDuration(Property\EligibleDuration $eligibleDuration) {
		$this->eligibleDuration = $eligibleDuration;

		return $this;
	}

	/**
	 * Set eligible quantity.
	 * 
	 * @param Property\EligibleQuantity $eligibleQuantity
	 * @return Offer
	 */
	public function setEligibleQuantity(Property\EligibleQuantity $eligibleQuantity) {
		$this->eligibleQuantity = $eligibleQuantity;

		return $this;
	}

	/**
	 * Set eligible region.
	 * 
	 * @param Property\EligibleRegion $eligibleRegion
	 * @return Offer
	 */
	public function setEligibleRegion(Property\EligibleRegion $eligibleRegion) {
		$this->eligibleRegion = $eligibleRegion;

		return $this;
	}

	/**
	 * Set eligible transaction volume.
	 * 
	 * @param Property\EligibleTransactionVolume $eligibleTransactionVolume
	 * @return Offer
	 */
	public function setEligibleTransactionVolume(Property\EligibleTransactionVolume $eligibleTransactionVolume) {
		$this->eligibleTransactionVolume = $eligibleTransactionVolume;

		return $this;
	}

	/**
	 * Set gtin12.
	 * 
	 * @param Property\Gtin12 $gtin12
	 * @return Offer
	 */
	public function setGtin12(Property\Gtin12 $gtin12) {
		$this->gtin12 = $gtin12;

		return $this;
	}

	/**
	 * Set gtin13.
	 * 
	 * @param Property\Gtin13 $gtin13
	 * @return Offer
	 */
	public function setGtin13(Property\Gtin13 $gtin13) {
		$this->gtin13 = $gtin13;

		return $this;
	}

	/**
	 * Set gtin14.
	 * 
	 * @param Property\Gtin14 $gtin14
	 * @return Offer
	 */
	public function setGtin14(Property\Gtin14 $gtin14) {
		$this->gtin14 = $gtin14;

		return $this;
	}

	/**
	 * Set gtin8.
	 * 
	 * @param Property\Gtin8 $gtin8
	 * @return Offer
	 */
	public function setGtin8(Property\Gtin8 $gtin8) {
		$this->gtin8 = $gtin8;

		return $this;
	}

	/**
	 * Set includes object.
	 * 
	 * @param Property\IncludesObject $includesObject
	 * @return Offer
	 */
	public function setIncludesObject(Property\IncludesObject $includesObject) {
		$this->includesObject = $includesObject;

		return $this;
	}

	/**
	 * Set ineligible region.
	 * 
	 * @param Property\IneligibleRegion $ineligibleRegion
	 * @return Offer
	 */
	public function setIneligibleRegion(Property\IneligibleRegion $ineligibleRegion) {
		$this->ineligibleRegion = $ineligibleRegion;

		return $this;
	}

	/**
	 * Set inventory level.
	 * 
	 * @param Property\InventoryLevel $inventoryLevel
	 * @return Offer
	 */
	public function setInventoryLevel(Property\InventoryLevel $inventoryLevel) {
		$this->inventoryLevel = $inventoryLevel;

		return $this;
	}

	/**
	 * Set item condition.
	 * 
	 * @param Property\ItemCondition $itemCondition
	 * @return Offer
	 */
	public function setItemCondition(Property\ItemCondition $itemCondition) {
		$this->itemCondition = $itemCondition;

		return $this;
	}

	/**
	 * Set item offered.
	 * 
	 * @param Property\ItemOffered $itemOffered
	 * @return Offer
	 */
	public function setItemOffered(Property\ItemOffered $itemOffered) {
		$this->itemOffered = $itemOffered;

		return $this;
	}

	/**
	 * Set mpn.
	 * 
	 * @param Property\Mpn $mpn
	 * @return Offer
	 */
	public function setMpn(Property\Mpn $mpn) {
		$this->mpn = $mpn;

		return $this;
	}

	/**
	 * Set offered by.
	 * 
	 * @param Property\OfferedBy $offeredBy
	 * @return Offer
	 */
	public function setOfferedBy(Property\OfferedBy $offeredBy) {
		$this->offeredBy = $offeredBy;

		return $this;
	}

	/**
	 * Set price.
	 * 
	 * @param Property\Price $price
	 * @return Offer
	 */
	public function setPrice(Property\Price $price) {
		$this->price = $price;

		return $this;
	}

	/**
	 * Set price currency.
	 * 
	 * @param Property\PriceCurrency $priceCurrency
	 * @return Offer
	 */
	public function setPriceCurrency(Property\PriceCurrency $priceCurrency) {
		$this->priceCurrency = $priceCurrency;

		return $this;
	}

	/**
	 * Set price specification.
	 * 
	 * @param Property\PriceSpecification $priceSpecification
	 * @return Offer
	 */
	public function setPriceSpecification(Property\PriceSpecification $priceSpecification) {
		$this->priceSpecification = $priceSpecification;

		return $this;
	}

	/**
	 * Set price valid until.
	 * 
	 * @param Property\PriceValidUntil $priceValidUntil
	 * @return Offer
	 */
	public function setPriceValidUntil(Property\PriceValidUntil $priceValidUntil) {
		$this->priceValidUntil = $priceValidUntil;

		return $this;
	}

	/**
	 * Set review.
	 * 
	 * @param Property\Review $review
	 * @return Offer
	 */
	public function setReview(Property\Review $review) {
		$this->review = $review;

		return $this;
	}

	/**
	 * Set seller.
	 * 
	 * @param Property\Seller $seller
	 * @return Offer
	 */
	public function setSeller(Property\Seller $seller) {
		$this->seller = $seller;

		return $this;
	}

	/**
	 * Set serial number.
	 * 
	 * @param Property\SerialNumber $serialNumber
	 * @return Offer
	 */
	public function setSerialNumber(Property\SerialNumber $serialNumber) {
		$this->serialNumber = $serialNumber;

		return $this;
	}

	/**
	 * Set sku.
	 * 
	 * @param Property\Sku $sku
	 * @return Offer
	 */
	public function setSku(Property\Sku $sku) {
		$this->sku = $sku;

		return $this;
	}

	/**
	 * Set valid from.
	 * 
	 * @param Property\ValidFrom $validFrom
	 * @return Offer
	 */
	public function setValidFrom(Property\ValidFrom $validFrom) {
		$this->validFrom = $validFrom;

		return $this;
	}

	/**
	 * Set valid through.
	 * 
	 * @param Property\ValidThrough $validThrough
	 * @return Offer
	 */
	public function setValidThrough(Property\ValidThrough $validThrough) {
		$this->validThrough = $validThrough;

		return $this;
	}

	/**
	 * Set warranty.
	 * 
	 * @param Property\Warranty $warranty
	 * @return Offer
	 */
	public function setWarranty(Property\Warranty $warranty) {
		$this->warranty = $warranty;

		return $this;
	}
}