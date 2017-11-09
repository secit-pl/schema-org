<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ParcelDeliveryType.
 * 
 * @method ParcelDeliveryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ParcelDeliveryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ParcelDeliveryType setDescription(Property\DescriptionProperty $description)
 * @method ParcelDeliveryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ParcelDeliveryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ParcelDeliveryType setImage(Property\ImageProperty $image)
 * @method ParcelDeliveryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ParcelDeliveryType setName(Property\NameProperty $name)
 * @method ParcelDeliveryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ParcelDeliveryType setSameAs(Property\SameAsProperty $sameAs)
 * @method ParcelDeliveryType setUrl(Property\UrlProperty $url)
 */
class ParcelDeliveryType extends IntangibleType {

	/**
	 * @var Property\DeliveryAddressProperty
	 */
	private $deliveryAddress;

	/**
	 * @var Property\DeliveryStatusProperty
	 */
	private $deliveryStatus;

	/**
	 * @var Property\ExpectedArrivalFromProperty
	 */
	private $expectedArrivalFrom;

	/**
	 * @var Property\ExpectedArrivalUntilProperty
	 */
	private $expectedArrivalUntil;

	/**
	 * @var Property\HasDeliveryMethodProperty
	 */
	private $hasDeliveryMethod;

	/**
	 * @var Property\ItemShippedProperty
	 */
	private $itemShipped;

	/**
	 * @var Property\OriginAddressProperty
	 */
	private $originAddress;

	/**
	 * @var Property\PartOfOrderProperty
	 */
	private $partOfOrder;

	/**
	 * @var Property\ProviderProperty
	 */
	private $provider;

	/**
	 * @var Property\TrackingNumberProperty
	 */
	private $trackingNumber;

	/**
	 * @var Property\TrackingUrlProperty
	 */
	private $trackingUrl;

	/**
	 * Get delivery address.
	 * 
	 * @return Property\DeliveryAddressProperty
	 */
	public function getDeliveryAddress() {
		return $this->deliveryAddress;
	}

	/**
	 * Get delivery status.
	 * 
	 * @return Property\DeliveryStatusProperty
	 */
	public function getDeliveryStatus() {
		return $this->deliveryStatus;
	}

	/**
	 * Get expected arrival from.
	 * 
	 * @return Property\ExpectedArrivalFromProperty
	 */
	public function getExpectedArrivalFrom() {
		return $this->expectedArrivalFrom;
	}

	/**
	 * Get expected arrival until.
	 * 
	 * @return Property\ExpectedArrivalUntilProperty
	 */
	public function getExpectedArrivalUntil() {
		return $this->expectedArrivalUntil;
	}

	/**
	 * Get has delivery method.
	 * 
	 * @return Property\HasDeliveryMethodProperty
	 */
	public function getHasDeliveryMethod() {
		return $this->hasDeliveryMethod;
	}

	/**
	 * Get item shipped.
	 * 
	 * @return Property\ItemShippedProperty
	 */
	public function getItemShipped() {
		return $this->itemShipped;
	}

	/**
	 * Get origin address.
	 * 
	 * @return Property\OriginAddressProperty
	 */
	public function getOriginAddress() {
		return $this->originAddress;
	}

	/**
	 * Get part of order.
	 * 
	 * @return Property\PartOfOrderProperty
	 */
	public function getPartOfOrder() {
		return $this->partOfOrder;
	}

	/**
	 * Get provider.
	 * 
	 * @return Property\ProviderProperty
	 */
	public function getProvider() {
		return $this->provider;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ParcelDelivery';
	}

	/**
	 * Get tracking number.
	 * 
	 * @return Property\TrackingNumberProperty
	 */
	public function getTrackingNumber() {
		return $this->trackingNumber;
	}

	/**
	 * Get tracking url.
	 * 
	 * @return Property\TrackingUrlProperty
	 */
	public function getTrackingUrl() {
		return $this->trackingUrl;
	}

	/**
	 * Set delivery address.
	 * 
	 * @param Property\DeliveryAddressProperty $deliveryAddress
	 * @return ParcelDeliveryType
	 */
	public function setDeliveryAddress(Property\DeliveryAddressProperty $deliveryAddress) {
		$this->deliveryAddress = $deliveryAddress;

		return $this;
	}

	/**
	 * Set delivery status.
	 * 
	 * @param Property\DeliveryStatusProperty $deliveryStatus
	 * @return ParcelDeliveryType
	 */
	public function setDeliveryStatus(Property\DeliveryStatusProperty $deliveryStatus) {
		$this->deliveryStatus = $deliveryStatus;

		return $this;
	}

	/**
	 * Set expected arrival from.
	 * 
	 * @param Property\ExpectedArrivalFromProperty $expectedArrivalFrom
	 * @return ParcelDeliveryType
	 */
	public function setExpectedArrivalFrom(Property\ExpectedArrivalFromProperty $expectedArrivalFrom) {
		$this->expectedArrivalFrom = $expectedArrivalFrom;

		return $this;
	}

	/**
	 * Set expected arrival until.
	 * 
	 * @param Property\ExpectedArrivalUntilProperty $expectedArrivalUntil
	 * @return ParcelDeliveryType
	 */
	public function setExpectedArrivalUntil(Property\ExpectedArrivalUntilProperty $expectedArrivalUntil) {
		$this->expectedArrivalUntil = $expectedArrivalUntil;

		return $this;
	}

	/**
	 * Set has delivery method.
	 * 
	 * @param Property\HasDeliveryMethodProperty $hasDeliveryMethod
	 * @return ParcelDeliveryType
	 */
	public function setHasDeliveryMethod(Property\HasDeliveryMethodProperty $hasDeliveryMethod) {
		$this->hasDeliveryMethod = $hasDeliveryMethod;

		return $this;
	}

	/**
	 * Set item shipped.
	 * 
	 * @param Property\ItemShippedProperty $itemShipped
	 * @return ParcelDeliveryType
	 */
	public function setItemShipped(Property\ItemShippedProperty $itemShipped) {
		$this->itemShipped = $itemShipped;

		return $this;
	}

	/**
	 * Set origin address.
	 * 
	 * @param Property\OriginAddressProperty $originAddress
	 * @return ParcelDeliveryType
	 */
	public function setOriginAddress(Property\OriginAddressProperty $originAddress) {
		$this->originAddress = $originAddress;

		return $this;
	}

	/**
	 * Set part of order.
	 * 
	 * @param Property\PartOfOrderProperty $partOfOrder
	 * @return ParcelDeliveryType
	 */
	public function setPartOfOrder(Property\PartOfOrderProperty $partOfOrder) {
		$this->partOfOrder = $partOfOrder;

		return $this;
	}

	/**
	 * Set provider.
	 * 
	 * @param Property\ProviderProperty $provider
	 * @return ParcelDeliveryType
	 */
	public function setProvider(Property\ProviderProperty $provider) {
		$this->provider = $provider;

		return $this;
	}

	/**
	 * Set tracking number.
	 * 
	 * @param Property\TrackingNumberProperty $trackingNumber
	 * @return ParcelDeliveryType
	 */
	public function setTrackingNumber(Property\TrackingNumberProperty $trackingNumber) {
		$this->trackingNumber = $trackingNumber;

		return $this;
	}

	/**
	 * Set tracking url.
	 * 
	 * @param Property\TrackingUrlProperty $trackingUrl
	 * @return ParcelDeliveryType
	 */
	public function setTrackingUrl(Property\TrackingUrlProperty $trackingUrl) {
		$this->trackingUrl = $trackingUrl;

		return $this;
	}
}