<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TaxiReservation.
 */
class TaxiReservation {

	/**
	 */
	private $id;

	/**
	 * @var Property\PartySize
	 */
	private $partySize;

	/**
	 * @var Property\PickupLocation
	 */
	private $pickupLocation;

	/**
	 * @var Property\PickupTime
	 */
	private $pickupTime;

	/**
	 * TaxiReservation constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get party size.
	 * 
	 * @return Property\PartySize
	 */
	public function getPartySize() {
		return $this->partySize;
	}

	/**
	 * Get pickup location.
	 * 
	 * @return Property\PickupLocation
	 */
	public function getPickupLocation() {
		return $this->pickupLocation;
	}

	/**
	 * Get pickup time.
	 * 
	 * @return Property\PickupTime
	 */
	public function getPickupTime() {
		return $this->pickupTime;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TaxiReservation';
	}

	/**
	 * Set party size.
	 * 
	 * @param Property\PartySize $partySize
	 * @return TaxiReservation
	 */
	public function setPartySize(Property\PartySize $partySize) {
		$this->partySize = $partySize;

		return $this;
	}

	/**
	 * Set pickup location.
	 * 
	 * @param Property\PickupLocation $pickupLocation
	 * @return TaxiReservation
	 */
	public function setPickupLocation(Property\PickupLocation $pickupLocation) {
		$this->pickupLocation = $pickupLocation;

		return $this;
	}

	/**
	 * Set pickup time.
	 * 
	 * @param Property\PickupTime $pickupTime
	 * @return TaxiReservation
	 */
	public function setPickupTime(Property\PickupTime $pickupTime) {
		$this->pickupTime = $pickupTime;

		return $this;
	}
}