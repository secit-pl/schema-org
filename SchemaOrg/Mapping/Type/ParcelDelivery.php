<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ParcelDelivery.
 * 
 * @method ParcelDelivery setAdditionalType(Property\AdditionalType $additionalType)
 * @method ParcelDelivery setAlternateName(Property\AlternateName $alternateName)
 * @method ParcelDelivery setDescription(Property\Description $description)
 * @method ParcelDelivery setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ParcelDelivery setIdentifier(Property\Identifier $identifier)
 * @method ParcelDelivery setImage(Property\Image $image)
 * @method ParcelDelivery setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ParcelDelivery setName(Property\Name $name)
 * @method ParcelDelivery setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ParcelDelivery setSameAs(Property\SameAs $sameAs)
 * @method ParcelDelivery setUrl(Property\Url $url)
 */
class ParcelDelivery extends Intangible {

	/**
	 * @var Property\DeliveryAddress
	 */
	private $deliveryAddress;

	/**
	 * @var Property\DeliveryStatus
	 */
	private $deliveryStatus;

	/**
	 * @var Property\ExpectedArrivalFrom
	 */
	private $expectedArrivalFrom;

	/**
	 * @var Property\ExpectedArrivalUntil
	 */
	private $expectedArrivalUntil;

	/**
	 * @var Property\HasDeliveryMethod
	 */
	private $hasDeliveryMethod;

	/**
	 * @var Property\ItemShipped
	 */
	private $itemShipped;

	/**
	 * @var Property\OriginAddress
	 */
	private $originAddress;

	/**
	 * @var Property\PartOfOrder
	 */
	private $partOfOrder;

	/**
	 * @var Property\Provider
	 */
	private $provider;

	/**
	 * @var Property\TrackingNumber
	 */
	private $trackingNumber;

	/**
	 * @var Property\TrackingUrl
	 */
	private $trackingUrl;

	/**
	 * Get delivery address.
	 * 
	 * @return Property\DeliveryAddress
	 */
	public function getDeliveryAddress() {
		return $this->deliveryAddress;
	}

	/**
	 * Get delivery status.
	 * 
	 * @return Property\DeliveryStatus
	 */
	public function getDeliveryStatus() {
		return $this->deliveryStatus;
	}

	/**
	 * Get expected arrival from.
	 * 
	 * @return Property\ExpectedArrivalFrom
	 */
	public function getExpectedArrivalFrom() {
		return $this->expectedArrivalFrom;
	}

	/**
	 * Get expected arrival until.
	 * 
	 * @return Property\ExpectedArrivalUntil
	 */
	public function getExpectedArrivalUntil() {
		return $this->expectedArrivalUntil;
	}

	/**
	 * Get has delivery method.
	 * 
	 * @return Property\HasDeliveryMethod
	 */
	public function getHasDeliveryMethod() {
		return $this->hasDeliveryMethod;
	}

	/**
	 * Get item shipped.
	 * 
	 * @return Property\ItemShipped
	 */
	public function getItemShipped() {
		return $this->itemShipped;
	}

	/**
	 * Get origin address.
	 * 
	 * @return Property\OriginAddress
	 */
	public function getOriginAddress() {
		return $this->originAddress;
	}

	/**
	 * Get part of order.
	 * 
	 * @return Property\PartOfOrder
	 */
	public function getPartOfOrder() {
		return $this->partOfOrder;
	}

	/**
	 * Get provider.
	 * 
	 * @return Property\Provider
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
	 * @return Property\TrackingNumber
	 */
	public function getTrackingNumber() {
		return $this->trackingNumber;
	}

	/**
	 * Get tracking url.
	 * 
	 * @return Property\TrackingUrl
	 */
	public function getTrackingUrl() {
		return $this->trackingUrl;
	}

	/**
	 * Set delivery address.
	 * 
	 * @param Property\DeliveryAddress $deliveryAddress
	 * @return ParcelDelivery
	 */
	public function setDeliveryAddress(Property\DeliveryAddress $deliveryAddress) {
		$this->deliveryAddress = $deliveryAddress;

		return $this;
	}

	/**
	 * Set delivery status.
	 * 
	 * @param Property\DeliveryStatus $deliveryStatus
	 * @return ParcelDelivery
	 */
	public function setDeliveryStatus(Property\DeliveryStatus $deliveryStatus) {
		$this->deliveryStatus = $deliveryStatus;

		return $this;
	}

	/**
	 * Set expected arrival from.
	 * 
	 * @param Property\ExpectedArrivalFrom $expectedArrivalFrom
	 * @return ParcelDelivery
	 */
	public function setExpectedArrivalFrom(Property\ExpectedArrivalFrom $expectedArrivalFrom) {
		$this->expectedArrivalFrom = $expectedArrivalFrom;

		return $this;
	}

	/**
	 * Set expected arrival until.
	 * 
	 * @param Property\ExpectedArrivalUntil $expectedArrivalUntil
	 * @return ParcelDelivery
	 */
	public function setExpectedArrivalUntil(Property\ExpectedArrivalUntil $expectedArrivalUntil) {
		$this->expectedArrivalUntil = $expectedArrivalUntil;

		return $this;
	}

	/**
	 * Set has delivery method.
	 * 
	 * @param Property\HasDeliveryMethod $hasDeliveryMethod
	 * @return ParcelDelivery
	 */
	public function setHasDeliveryMethod(Property\HasDeliveryMethod $hasDeliveryMethod) {
		$this->hasDeliveryMethod = $hasDeliveryMethod;

		return $this;
	}

	/**
	 * Set item shipped.
	 * 
	 * @param Property\ItemShipped $itemShipped
	 * @return ParcelDelivery
	 */
	public function setItemShipped(Property\ItemShipped $itemShipped) {
		$this->itemShipped = $itemShipped;

		return $this;
	}

	/**
	 * Set origin address.
	 * 
	 * @param Property\OriginAddress $originAddress
	 * @return ParcelDelivery
	 */
	public function setOriginAddress(Property\OriginAddress $originAddress) {
		$this->originAddress = $originAddress;

		return $this;
	}

	/**
	 * Set part of order.
	 * 
	 * @param Property\PartOfOrder $partOfOrder
	 * @return ParcelDelivery
	 */
	public function setPartOfOrder(Property\PartOfOrder $partOfOrder) {
		$this->partOfOrder = $partOfOrder;

		return $this;
	}

	/**
	 * Set provider.
	 * 
	 * @param Property\Provider $provider
	 * @return ParcelDelivery
	 */
	public function setProvider(Property\Provider $provider) {
		$this->provider = $provider;

		return $this;
	}

	/**
	 * Set tracking number.
	 * 
	 * @param Property\TrackingNumber $trackingNumber
	 * @return ParcelDelivery
	 */
	public function setTrackingNumber(Property\TrackingNumber $trackingNumber) {
		$this->trackingNumber = $trackingNumber;

		return $this;
	}

	/**
	 * Set tracking url.
	 * 
	 * @param Property\TrackingUrl $trackingUrl
	 * @return ParcelDelivery
	 */
	public function setTrackingUrl(Property\TrackingUrl $trackingUrl) {
		$this->trackingUrl = $trackingUrl;

		return $this;
	}
}