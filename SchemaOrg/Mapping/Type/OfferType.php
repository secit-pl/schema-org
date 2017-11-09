<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OfferType.
 * 
 * @method OfferType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OfferType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OfferType setDescription(Property\DescriptionProperty $description)
 * @method OfferType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OfferType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OfferType setImage(Property\ImageProperty $image)
 * @method OfferType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OfferType setName(Property\NameProperty $name)
 * @method OfferType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OfferType setSameAs(Property\SameAsProperty $sameAs)
 * @method OfferType setUrl(Property\UrlProperty $url)
 */
class OfferType extends IntangibleType {

	/**
	 * @var Property\AcceptedPaymentMethodProperty
	 */
	private $acceptedPaymentMethod;

	/**
	 * @var Property\AddOnProperty
	 */
	private $addOn;

	/**
	 * @var Property\AdvanceBookingRequirementProperty
	 */
	private $advanceBookingRequirement;

	/**
	 * @var Property\AggregateRatingProperty
	 */
	private $aggregateRating;

	/**
	 * @var Property\AreaServedProperty
	 */
	private $areaServed;

	/**
	 * @var Property\AvailabilityProperty
	 */
	private $availability;

	/**
	 * @var Property\AvailabilityEndsProperty
	 */
	private $availabilityEnds;

	/**
	 * @var Property\AvailabilityStartsProperty
	 */
	private $availabilityStarts;

	/**
	 * @var Property\AvailableAtOrFromProperty
	 */
	private $availableAtOrFrom;

	/**
	 * @var Property\AvailableDeliveryMethodProperty
	 */
	private $availableDeliveryMethod;

	/**
	 * @var Property\BusinessFunctionProperty
	 */
	private $businessFunction;

	/**
	 * @var Property\CategoryProperty
	 */
	private $category;

	/**
	 * @var Property\DeliveryLeadTimeProperty
	 */
	private $deliveryLeadTime;

	/**
	 * @var Property\EligibleCustomerTypeProperty
	 */
	private $eligibleCustomerType;

	/**
	 * @var Property\EligibleDurationProperty
	 */
	private $eligibleDuration;

	/**
	 * @var Property\EligibleQuantityProperty
	 */
	private $eligibleQuantity;

	/**
	 * @var Property\EligibleRegionProperty
	 */
	private $eligibleRegion;

	/**
	 * @var Property\EligibleTransactionVolumeProperty
	 */
	private $eligibleTransactionVolume;

	/**
	 * @var Property\Gtin12Property
	 */
	private $gtin12;

	/**
	 * @var Property\Gtin13Property
	 */
	private $gtin13;

	/**
	 * @var Property\Gtin14Property
	 */
	private $gtin14;

	/**
	 * @var Property\Gtin8Property
	 */
	private $gtin8;

	/**
	 * @var Property\IncludesObjectProperty
	 */
	private $includesObject;

	/**
	 * @var Property\IneligibleRegionProperty
	 */
	private $ineligibleRegion;

	/**
	 * @var Property\InventoryLevelProperty
	 */
	private $inventoryLevel;

	/**
	 * @var Property\ItemConditionProperty
	 */
	private $itemCondition;

	/**
	 * @var Property\ItemOfferedProperty
	 */
	private $itemOffered;

	/**
	 * @var Property\MpnProperty
	 */
	private $mpn;

	/**
	 * @var Property\OfferedByProperty
	 */
	private $offeredBy;

	/**
	 * @var Property\PriceProperty
	 */
	private $price;

	/**
	 * @var Property\PriceCurrencyProperty
	 */
	private $priceCurrency;

	/**
	 * @var Property\PriceSpecificationProperty
	 */
	private $priceSpecification;

	/**
	 * @var Property\PriceValidUntilProperty
	 */
	private $priceValidUntil;

	/**
	 * @var Property\ReviewProperty
	 */
	private $review;

	/**
	 * @var Property\SellerProperty
	 */
	private $seller;

	/**
	 * @var Property\SerialNumberProperty
	 */
	private $serialNumber;

	/**
	 * @var Property\SkuProperty
	 */
	private $sku;

	/**
	 * @var Property\ValidFromProperty
	 */
	private $validFrom;

	/**
	 * @var Property\ValidThroughProperty
	 */
	private $validThrough;

	/**
	 * @var Property\WarrantyProperty
	 */
	private $warranty;

	/**
	 * Get accepted payment method.
	 * 
	 * @return Property\AcceptedPaymentMethodProperty
	 */
	public function getAcceptedPaymentMethod() {
		return $this->acceptedPaymentMethod;
	}

	/**
	 * Get add on.
	 * 
	 * @return Property\AddOnProperty
	 */
	public function getAddOn() {
		return $this->addOn;
	}

	/**
	 * Get advance booking requirement.
	 * 
	 * @return Property\AdvanceBookingRequirementProperty
	 */
	public function getAdvanceBookingRequirement() {
		return $this->advanceBookingRequirement;
	}

	/**
	 * Get aggregate rating.
	 * 
	 * @return Property\AggregateRatingProperty
	 */
	public function getAggregateRating() {
		return $this->aggregateRating;
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
	 * Get availability.
	 * 
	 * @return Property\AvailabilityProperty
	 */
	public function getAvailability() {
		return $this->availability;
	}

	/**
	 * Get availability ends.
	 * 
	 * @return Property\AvailabilityEndsProperty
	 */
	public function getAvailabilityEnds() {
		return $this->availabilityEnds;
	}

	/**
	 * Get availability starts.
	 * 
	 * @return Property\AvailabilityStartsProperty
	 */
	public function getAvailabilityStarts() {
		return $this->availabilityStarts;
	}

	/**
	 * Get available at or from.
	 * 
	 * @return Property\AvailableAtOrFromProperty
	 */
	public function getAvailableAtOrFrom() {
		return $this->availableAtOrFrom;
	}

	/**
	 * Get available delivery method.
	 * 
	 * @return Property\AvailableDeliveryMethodProperty
	 */
	public function getAvailableDeliveryMethod() {
		return $this->availableDeliveryMethod;
	}

	/**
	 * Get business function.
	 * 
	 * @return Property\BusinessFunctionProperty
	 */
	public function getBusinessFunction() {
		return $this->businessFunction;
	}

	/**
	 * Get category.
	 * 
	 * @return Property\CategoryProperty
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Get delivery lead time.
	 * 
	 * @return Property\DeliveryLeadTimeProperty
	 */
	public function getDeliveryLeadTime() {
		return $this->deliveryLeadTime;
	}

	/**
	 * Get eligible customer type.
	 * 
	 * @return Property\EligibleCustomerTypeProperty
	 */
	public function getEligibleCustomerType() {
		return $this->eligibleCustomerType;
	}

	/**
	 * Get eligible duration.
	 * 
	 * @return Property\EligibleDurationProperty
	 */
	public function getEligibleDuration() {
		return $this->eligibleDuration;
	}

	/**
	 * Get eligible quantity.
	 * 
	 * @return Property\EligibleQuantityProperty
	 */
	public function getEligibleQuantity() {
		return $this->eligibleQuantity;
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
	 * Get eligible transaction volume.
	 * 
	 * @return Property\EligibleTransactionVolumeProperty
	 */
	public function getEligibleTransactionVolume() {
		return $this->eligibleTransactionVolume;
	}

	/**
	 * Get gtin12.
	 * 
	 * @return Property\Gtin12Property
	 */
	public function getGtin12() {
		return $this->gtin12;
	}

	/**
	 * Get gtin13.
	 * 
	 * @return Property\Gtin13Property
	 */
	public function getGtin13() {
		return $this->gtin13;
	}

	/**
	 * Get gtin14.
	 * 
	 * @return Property\Gtin14Property
	 */
	public function getGtin14() {
		return $this->gtin14;
	}

	/**
	 * Get gtin8.
	 * 
	 * @return Property\Gtin8Property
	 */
	public function getGtin8() {
		return $this->gtin8;
	}

	/**
	 * Get includes object.
	 * 
	 * @return Property\IncludesObjectProperty
	 */
	public function getIncludesObject() {
		return $this->includesObject;
	}

	/**
	 * Get ineligible region.
	 * 
	 * @return Property\IneligibleRegionProperty
	 */
	public function getIneligibleRegion() {
		return $this->ineligibleRegion;
	}

	/**
	 * Get inventory level.
	 * 
	 * @return Property\InventoryLevelProperty
	 */
	public function getInventoryLevel() {
		return $this->inventoryLevel;
	}

	/**
	 * Get item condition.
	 * 
	 * @return Property\ItemConditionProperty
	 */
	public function getItemCondition() {
		return $this->itemCondition;
	}

	/**
	 * Get item offered.
	 * 
	 * @return Property\ItemOfferedProperty
	 */
	public function getItemOffered() {
		return $this->itemOffered;
	}

	/**
	 * Get mpn.
	 * 
	 * @return Property\MpnProperty
	 */
	public function getMpn() {
		return $this->mpn;
	}

	/**
	 * Get offered by.
	 * 
	 * @return Property\OfferedByProperty
	 */
	public function getOfferedBy() {
		return $this->offeredBy;
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
	 * Get price specification.
	 * 
	 * @return Property\PriceSpecificationProperty
	 */
	public function getPriceSpecification() {
		return $this->priceSpecification;
	}

	/**
	 * Get price valid until.
	 * 
	 * @return Property\PriceValidUntilProperty
	 */
	public function getPriceValidUntil() {
		return $this->priceValidUntil;
	}

	/**
	 * Get review.
	 * 
	 * @return Property\ReviewProperty
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
	 * @return Property\SellerProperty
	 */
	public function getSeller() {
		return $this->seller;
	}

	/**
	 * Get serial number.
	 * 
	 * @return Property\SerialNumberProperty
	 */
	public function getSerialNumber() {
		return $this->serialNumber;
	}

	/**
	 * Get sku.
	 * 
	 * @return Property\SkuProperty
	 */
	public function getSku() {
		return $this->sku;
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
	 * Get warranty.
	 * 
	 * @return Property\WarrantyProperty
	 */
	public function getWarranty() {
		return $this->warranty;
	}

	/**
	 * Set accepted payment method.
	 * 
	 * @param Property\AcceptedPaymentMethodProperty $acceptedPaymentMethod
	 * @return OfferType
	 */
	public function setAcceptedPaymentMethod(Property\AcceptedPaymentMethodProperty $acceptedPaymentMethod) {
		$this->acceptedPaymentMethod = $acceptedPaymentMethod;

		return $this;
	}

	/**
	 * Set add on.
	 * 
	 * @param Property\AddOnProperty $addOn
	 * @return OfferType
	 */
	public function setAddOn(Property\AddOnProperty $addOn) {
		$this->addOn = $addOn;

		return $this;
	}

	/**
	 * Set advance booking requirement.
	 * 
	 * @param Property\AdvanceBookingRequirementProperty $advanceBookingRequirement
	 * @return OfferType
	 */
	public function setAdvanceBookingRequirement(Property\AdvanceBookingRequirementProperty $advanceBookingRequirement) {
		$this->advanceBookingRequirement = $advanceBookingRequirement;

		return $this;
	}

	/**
	 * Set aggregate rating.
	 * 
	 * @param Property\AggregateRatingProperty $aggregateRating
	 * @return OfferType
	 */
	public function setAggregateRating(Property\AggregateRatingProperty $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set area served.
	 * 
	 * @param Property\AreaServedProperty $areaServed
	 * @return OfferType
	 */
	public function setAreaServed(Property\AreaServedProperty $areaServed) {
		$this->areaServed = $areaServed;

		return $this;
	}

	/**
	 * Set availability.
	 * 
	 * @param Property\AvailabilityProperty $availability
	 * @return OfferType
	 */
	public function setAvailability(Property\AvailabilityProperty $availability) {
		$this->availability = $availability;

		return $this;
	}

	/**
	 * Set availability ends.
	 * 
	 * @param Property\AvailabilityEndsProperty $availabilityEnds
	 * @return OfferType
	 */
	public function setAvailabilityEnds(Property\AvailabilityEndsProperty $availabilityEnds) {
		$this->availabilityEnds = $availabilityEnds;

		return $this;
	}

	/**
	 * Set availability starts.
	 * 
	 * @param Property\AvailabilityStartsProperty $availabilityStarts
	 * @return OfferType
	 */
	public function setAvailabilityStarts(Property\AvailabilityStartsProperty $availabilityStarts) {
		$this->availabilityStarts = $availabilityStarts;

		return $this;
	}

	/**
	 * Set available at or from.
	 * 
	 * @param Property\AvailableAtOrFromProperty $availableAtOrFrom
	 * @return OfferType
	 */
	public function setAvailableAtOrFrom(Property\AvailableAtOrFromProperty $availableAtOrFrom) {
		$this->availableAtOrFrom = $availableAtOrFrom;

		return $this;
	}

	/**
	 * Set available delivery method.
	 * 
	 * @param Property\AvailableDeliveryMethodProperty $availableDeliveryMethod
	 * @return OfferType
	 */
	public function setAvailableDeliveryMethod(Property\AvailableDeliveryMethodProperty $availableDeliveryMethod) {
		$this->availableDeliveryMethod = $availableDeliveryMethod;

		return $this;
	}

	/**
	 * Set business function.
	 * 
	 * @param Property\BusinessFunctionProperty $businessFunction
	 * @return OfferType
	 */
	public function setBusinessFunction(Property\BusinessFunctionProperty $businessFunction) {
		$this->businessFunction = $businessFunction;

		return $this;
	}

	/**
	 * Set category.
	 * 
	 * @param Property\CategoryProperty $category
	 * @return OfferType
	 */
	public function setCategory(Property\CategoryProperty $category) {
		$this->category = $category;

		return $this;
	}

	/**
	 * Set delivery lead time.
	 * 
	 * @param Property\DeliveryLeadTimeProperty $deliveryLeadTime
	 * @return OfferType
	 */
	public function setDeliveryLeadTime(Property\DeliveryLeadTimeProperty $deliveryLeadTime) {
		$this->deliveryLeadTime = $deliveryLeadTime;

		return $this;
	}

	/**
	 * Set eligible customer type.
	 * 
	 * @param Property\EligibleCustomerTypeProperty $eligibleCustomerType
	 * @return OfferType
	 */
	public function setEligibleCustomerType(Property\EligibleCustomerTypeProperty $eligibleCustomerType) {
		$this->eligibleCustomerType = $eligibleCustomerType;

		return $this;
	}

	/**
	 * Set eligible duration.
	 * 
	 * @param Property\EligibleDurationProperty $eligibleDuration
	 * @return OfferType
	 */
	public function setEligibleDuration(Property\EligibleDurationProperty $eligibleDuration) {
		$this->eligibleDuration = $eligibleDuration;

		return $this;
	}

	/**
	 * Set eligible quantity.
	 * 
	 * @param Property\EligibleQuantityProperty $eligibleQuantity
	 * @return OfferType
	 */
	public function setEligibleQuantity(Property\EligibleQuantityProperty $eligibleQuantity) {
		$this->eligibleQuantity = $eligibleQuantity;

		return $this;
	}

	/**
	 * Set eligible region.
	 * 
	 * @param Property\EligibleRegionProperty $eligibleRegion
	 * @return OfferType
	 */
	public function setEligibleRegion(Property\EligibleRegionProperty $eligibleRegion) {
		$this->eligibleRegion = $eligibleRegion;

		return $this;
	}

	/**
	 * Set eligible transaction volume.
	 * 
	 * @param Property\EligibleTransactionVolumeProperty $eligibleTransactionVolume
	 * @return OfferType
	 */
	public function setEligibleTransactionVolume(Property\EligibleTransactionVolumeProperty $eligibleTransactionVolume) {
		$this->eligibleTransactionVolume = $eligibleTransactionVolume;

		return $this;
	}

	/**
	 * Set gtin12.
	 * 
	 * @param Property\Gtin12Property $gtin12
	 * @return OfferType
	 */
	public function setGtin12(Property\Gtin12Property $gtin12) {
		$this->gtin12 = $gtin12;

		return $this;
	}

	/**
	 * Set gtin13.
	 * 
	 * @param Property\Gtin13Property $gtin13
	 * @return OfferType
	 */
	public function setGtin13(Property\Gtin13Property $gtin13) {
		$this->gtin13 = $gtin13;

		return $this;
	}

	/**
	 * Set gtin14.
	 * 
	 * @param Property\Gtin14Property $gtin14
	 * @return OfferType
	 */
	public function setGtin14(Property\Gtin14Property $gtin14) {
		$this->gtin14 = $gtin14;

		return $this;
	}

	/**
	 * Set gtin8.
	 * 
	 * @param Property\Gtin8Property $gtin8
	 * @return OfferType
	 */
	public function setGtin8(Property\Gtin8Property $gtin8) {
		$this->gtin8 = $gtin8;

		return $this;
	}

	/**
	 * Set includes object.
	 * 
	 * @param Property\IncludesObjectProperty $includesObject
	 * @return OfferType
	 */
	public function setIncludesObject(Property\IncludesObjectProperty $includesObject) {
		$this->includesObject = $includesObject;

		return $this;
	}

	/**
	 * Set ineligible region.
	 * 
	 * @param Property\IneligibleRegionProperty $ineligibleRegion
	 * @return OfferType
	 */
	public function setIneligibleRegion(Property\IneligibleRegionProperty $ineligibleRegion) {
		$this->ineligibleRegion = $ineligibleRegion;

		return $this;
	}

	/**
	 * Set inventory level.
	 * 
	 * @param Property\InventoryLevelProperty $inventoryLevel
	 * @return OfferType
	 */
	public function setInventoryLevel(Property\InventoryLevelProperty $inventoryLevel) {
		$this->inventoryLevel = $inventoryLevel;

		return $this;
	}

	/**
	 * Set item condition.
	 * 
	 * @param Property\ItemConditionProperty $itemCondition
	 * @return OfferType
	 */
	public function setItemCondition(Property\ItemConditionProperty $itemCondition) {
		$this->itemCondition = $itemCondition;

		return $this;
	}

	/**
	 * Set item offered.
	 * 
	 * @param Property\ItemOfferedProperty $itemOffered
	 * @return OfferType
	 */
	public function setItemOffered(Property\ItemOfferedProperty $itemOffered) {
		$this->itemOffered = $itemOffered;

		return $this;
	}

	/**
	 * Set mpn.
	 * 
	 * @param Property\MpnProperty $mpn
	 * @return OfferType
	 */
	public function setMpn(Property\MpnProperty $mpn) {
		$this->mpn = $mpn;

		return $this;
	}

	/**
	 * Set offered by.
	 * 
	 * @param Property\OfferedByProperty $offeredBy
	 * @return OfferType
	 */
	public function setOfferedBy(Property\OfferedByProperty $offeredBy) {
		$this->offeredBy = $offeredBy;

		return $this;
	}

	/**
	 * Set price.
	 * 
	 * @param Property\PriceProperty $price
	 * @return OfferType
	 */
	public function setPrice(Property\PriceProperty $price) {
		$this->price = $price;

		return $this;
	}

	/**
	 * Set price currency.
	 * 
	 * @param Property\PriceCurrencyProperty $priceCurrency
	 * @return OfferType
	 */
	public function setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency) {
		$this->priceCurrency = $priceCurrency;

		return $this;
	}

	/**
	 * Set price specification.
	 * 
	 * @param Property\PriceSpecificationProperty $priceSpecification
	 * @return OfferType
	 */
	public function setPriceSpecification(Property\PriceSpecificationProperty $priceSpecification) {
		$this->priceSpecification = $priceSpecification;

		return $this;
	}

	/**
	 * Set price valid until.
	 * 
	 * @param Property\PriceValidUntilProperty $priceValidUntil
	 * @return OfferType
	 */
	public function setPriceValidUntil(Property\PriceValidUntilProperty $priceValidUntil) {
		$this->priceValidUntil = $priceValidUntil;

		return $this;
	}

	/**
	 * Set review.
	 * 
	 * @param Property\ReviewProperty $review
	 * @return OfferType
	 */
	public function setReview(Property\ReviewProperty $review) {
		$this->review = $review;

		return $this;
	}

	/**
	 * Set seller.
	 * 
	 * @param Property\SellerProperty $seller
	 * @return OfferType
	 */
	public function setSeller(Property\SellerProperty $seller) {
		$this->seller = $seller;

		return $this;
	}

	/**
	 * Set serial number.
	 * 
	 * @param Property\SerialNumberProperty $serialNumber
	 * @return OfferType
	 */
	public function setSerialNumber(Property\SerialNumberProperty $serialNumber) {
		$this->serialNumber = $serialNumber;

		return $this;
	}

	/**
	 * Set sku.
	 * 
	 * @param Property\SkuProperty $sku
	 * @return OfferType
	 */
	public function setSku(Property\SkuProperty $sku) {
		$this->sku = $sku;

		return $this;
	}

	/**
	 * Set valid from.
	 * 
	 * @param Property\ValidFromProperty $validFrom
	 * @return OfferType
	 */
	public function setValidFrom(Property\ValidFromProperty $validFrom) {
		$this->validFrom = $validFrom;

		return $this;
	}

	/**
	 * Set valid through.
	 * 
	 * @param Property\ValidThroughProperty $validThrough
	 * @return OfferType
	 */
	public function setValidThrough(Property\ValidThroughProperty $validThrough) {
		$this->validThrough = $validThrough;

		return $this;
	}

	/**
	 * Set warranty.
	 * 
	 * @param Property\WarrantyProperty $warranty
	 * @return OfferType
	 */
	public function setWarranty(Property\WarrantyProperty $warranty) {
		$this->warranty = $warranty;

		return $this;
	}
}