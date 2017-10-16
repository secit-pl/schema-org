<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Demand.
 * 
 * @method Demand setAdditionalType(Property\AdditionalType $additionalType)
 * @method Demand setAlternateName(Property\AlternateName $alternateName)
 * @method Demand setDescription(Property\Description $description)
 * @method Demand setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Demand setIdentifier(Property\Identifier $identifier)
 * @method Demand setImage(Property\Image $image)
 * @method Demand setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Demand setName(Property\Name $name)
 * @method Demand setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Demand setSameAs(Property\SameAs $sameAs)
 * @method Demand setUrl(Property\Url $url)
 */
class Demand extends Intangible {

	/**
	 * @var Property\AcceptedPaymentMethod
	 */
	private $acceptedPaymentMethod;

	/**
	 * @var Property\AdvanceBookingRequirement
	 */
	private $advanceBookingRequirement;

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
	 * @var Property\PriceSpecification
	 */
	private $priceSpecification;

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
	 * Get advance booking requirement.
	 * 
	 * @return Property\AdvanceBookingRequirement
	 */
	public function getAdvanceBookingRequirement() {
		return $this->advanceBookingRequirement;
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
	 * Get price specification.
	 * 
	 * @return Property\PriceSpecification
	 */
	public function getPriceSpecification() {
		return $this->priceSpecification;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Demand';
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
	 * @return Demand
	 */
	public function setAcceptedPaymentMethod(Property\AcceptedPaymentMethod $acceptedPaymentMethod) {
		$this->acceptedPaymentMethod = $acceptedPaymentMethod;

		return $this;
	}

	/**
	 * Set advance booking requirement.
	 * 
	 * @param Property\AdvanceBookingRequirement $advanceBookingRequirement
	 * @return Demand
	 */
	public function setAdvanceBookingRequirement(Property\AdvanceBookingRequirement $advanceBookingRequirement) {
		$this->advanceBookingRequirement = $advanceBookingRequirement;

		return $this;
	}

	/**
	 * Set area served.
	 * 
	 * @param Property\AreaServed $areaServed
	 * @return Demand
	 */
	public function setAreaServed(Property\AreaServed $areaServed) {
		$this->areaServed = $areaServed;

		return $this;
	}

	/**
	 * Set availability.
	 * 
	 * @param Property\Availability $availability
	 * @return Demand
	 */
	public function setAvailability(Property\Availability $availability) {
		$this->availability = $availability;

		return $this;
	}

	/**
	 * Set availability ends.
	 * 
	 * @param Property\AvailabilityEnds $availabilityEnds
	 * @return Demand
	 */
	public function setAvailabilityEnds(Property\AvailabilityEnds $availabilityEnds) {
		$this->availabilityEnds = $availabilityEnds;

		return $this;
	}

	/**
	 * Set availability starts.
	 * 
	 * @param Property\AvailabilityStarts $availabilityStarts
	 * @return Demand
	 */
	public function setAvailabilityStarts(Property\AvailabilityStarts $availabilityStarts) {
		$this->availabilityStarts = $availabilityStarts;

		return $this;
	}

	/**
	 * Set available at or from.
	 * 
	 * @param Property\AvailableAtOrFrom $availableAtOrFrom
	 * @return Demand
	 */
	public function setAvailableAtOrFrom(Property\AvailableAtOrFrom $availableAtOrFrom) {
		$this->availableAtOrFrom = $availableAtOrFrom;

		return $this;
	}

	/**
	 * Set available delivery method.
	 * 
	 * @param Property\AvailableDeliveryMethod $availableDeliveryMethod
	 * @return Demand
	 */
	public function setAvailableDeliveryMethod(Property\AvailableDeliveryMethod $availableDeliveryMethod) {
		$this->availableDeliveryMethod = $availableDeliveryMethod;

		return $this;
	}

	/**
	 * Set business function.
	 * 
	 * @param Property\BusinessFunction $businessFunction
	 * @return Demand
	 */
	public function setBusinessFunction(Property\BusinessFunction $businessFunction) {
		$this->businessFunction = $businessFunction;

		return $this;
	}

	/**
	 * Set delivery lead time.
	 * 
	 * @param Property\DeliveryLeadTime $deliveryLeadTime
	 * @return Demand
	 */
	public function setDeliveryLeadTime(Property\DeliveryLeadTime $deliveryLeadTime) {
		$this->deliveryLeadTime = $deliveryLeadTime;

		return $this;
	}

	/**
	 * Set eligible customer type.
	 * 
	 * @param Property\EligibleCustomerType $eligibleCustomerType
	 * @return Demand
	 */
	public function setEligibleCustomerType(Property\EligibleCustomerType $eligibleCustomerType) {
		$this->eligibleCustomerType = $eligibleCustomerType;

		return $this;
	}

	/**
	 * Set eligible duration.
	 * 
	 * @param Property\EligibleDuration $eligibleDuration
	 * @return Demand
	 */
	public function setEligibleDuration(Property\EligibleDuration $eligibleDuration) {
		$this->eligibleDuration = $eligibleDuration;

		return $this;
	}

	/**
	 * Set eligible quantity.
	 * 
	 * @param Property\EligibleQuantity $eligibleQuantity
	 * @return Demand
	 */
	public function setEligibleQuantity(Property\EligibleQuantity $eligibleQuantity) {
		$this->eligibleQuantity = $eligibleQuantity;

		return $this;
	}

	/**
	 * Set eligible region.
	 * 
	 * @param Property\EligibleRegion $eligibleRegion
	 * @return Demand
	 */
	public function setEligibleRegion(Property\EligibleRegion $eligibleRegion) {
		$this->eligibleRegion = $eligibleRegion;

		return $this;
	}

	/**
	 * Set eligible transaction volume.
	 * 
	 * @param Property\EligibleTransactionVolume $eligibleTransactionVolume
	 * @return Demand
	 */
	public function setEligibleTransactionVolume(Property\EligibleTransactionVolume $eligibleTransactionVolume) {
		$this->eligibleTransactionVolume = $eligibleTransactionVolume;

		return $this;
	}

	/**
	 * Set gtin12.
	 * 
	 * @param Property\Gtin12 $gtin12
	 * @return Demand
	 */
	public function setGtin12(Property\Gtin12 $gtin12) {
		$this->gtin12 = $gtin12;

		return $this;
	}

	/**
	 * Set gtin13.
	 * 
	 * @param Property\Gtin13 $gtin13
	 * @return Demand
	 */
	public function setGtin13(Property\Gtin13 $gtin13) {
		$this->gtin13 = $gtin13;

		return $this;
	}

	/**
	 * Set gtin14.
	 * 
	 * @param Property\Gtin14 $gtin14
	 * @return Demand
	 */
	public function setGtin14(Property\Gtin14 $gtin14) {
		$this->gtin14 = $gtin14;

		return $this;
	}

	/**
	 * Set gtin8.
	 * 
	 * @param Property\Gtin8 $gtin8
	 * @return Demand
	 */
	public function setGtin8(Property\Gtin8 $gtin8) {
		$this->gtin8 = $gtin8;

		return $this;
	}

	/**
	 * Set includes object.
	 * 
	 * @param Property\IncludesObject $includesObject
	 * @return Demand
	 */
	public function setIncludesObject(Property\IncludesObject $includesObject) {
		$this->includesObject = $includesObject;

		return $this;
	}

	/**
	 * Set ineligible region.
	 * 
	 * @param Property\IneligibleRegion $ineligibleRegion
	 * @return Demand
	 */
	public function setIneligibleRegion(Property\IneligibleRegion $ineligibleRegion) {
		$this->ineligibleRegion = $ineligibleRegion;

		return $this;
	}

	/**
	 * Set inventory level.
	 * 
	 * @param Property\InventoryLevel $inventoryLevel
	 * @return Demand
	 */
	public function setInventoryLevel(Property\InventoryLevel $inventoryLevel) {
		$this->inventoryLevel = $inventoryLevel;

		return $this;
	}

	/**
	 * Set item condition.
	 * 
	 * @param Property\ItemCondition $itemCondition
	 * @return Demand
	 */
	public function setItemCondition(Property\ItemCondition $itemCondition) {
		$this->itemCondition = $itemCondition;

		return $this;
	}

	/**
	 * Set item offered.
	 * 
	 * @param Property\ItemOffered $itemOffered
	 * @return Demand
	 */
	public function setItemOffered(Property\ItemOffered $itemOffered) {
		$this->itemOffered = $itemOffered;

		return $this;
	}

	/**
	 * Set mpn.
	 * 
	 * @param Property\Mpn $mpn
	 * @return Demand
	 */
	public function setMpn(Property\Mpn $mpn) {
		$this->mpn = $mpn;

		return $this;
	}

	/**
	 * Set price specification.
	 * 
	 * @param Property\PriceSpecification $priceSpecification
	 * @return Demand
	 */
	public function setPriceSpecification(Property\PriceSpecification $priceSpecification) {
		$this->priceSpecification = $priceSpecification;

		return $this;
	}

	/**
	 * Set seller.
	 * 
	 * @param Property\Seller $seller
	 * @return Demand
	 */
	public function setSeller(Property\Seller $seller) {
		$this->seller = $seller;

		return $this;
	}

	/**
	 * Set serial number.
	 * 
	 * @param Property\SerialNumber $serialNumber
	 * @return Demand
	 */
	public function setSerialNumber(Property\SerialNumber $serialNumber) {
		$this->serialNumber = $serialNumber;

		return $this;
	}

	/**
	 * Set sku.
	 * 
	 * @param Property\Sku $sku
	 * @return Demand
	 */
	public function setSku(Property\Sku $sku) {
		$this->sku = $sku;

		return $this;
	}

	/**
	 * Set valid from.
	 * 
	 * @param Property\ValidFrom $validFrom
	 * @return Demand
	 */
	public function setValidFrom(Property\ValidFrom $validFrom) {
		$this->validFrom = $validFrom;

		return $this;
	}

	/**
	 * Set valid through.
	 * 
	 * @param Property\ValidThrough $validThrough
	 * @return Demand
	 */
	public function setValidThrough(Property\ValidThrough $validThrough) {
		$this->validThrough = $validThrough;

		return $this;
	}

	/**
	 * Set warranty.
	 * 
	 * @param Property\Warranty $warranty
	 * @return Demand
	 */
	public function setWarranty(Property\Warranty $warranty) {
		$this->warranty = $warranty;

		return $this;
	}
}