<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RentalCarReservation.
 */
class RentalCarReservation {

	/**
	 * @var Property\DropoffLocation
	 */
	private $dropoffLocation;

	/**
	 * @var Property\DropoffTime
	 */
	private $dropoffTime;

	/**
	 */
	private $id;

	/**
	 * @var Property\PickupLocation
	 */
	private $pickupLocation;

	/**
	 * @var Property\PickupTime
	 */
	private $pickupTime;

	/**
	 * RentalCarReservation constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get dropoff location.
	 * 
	 * @return Property\DropoffLocation
	 */
	public function getDropoffLocation() {
		return $this->dropoffLocation;
	}

	/**
	 * Get dropoff time.
	 * 
	 * @return Property\DropoffTime
	 */
	public function getDropoffTime() {
		return $this->dropoffTime;
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
		return 'https://schema.org/RentalCarReservation';
	}

	/**
	 * Set dropoff location.
	 * 
	 * @param Property\DropoffLocation $dropoffLocation
	 * @return RentalCarReservation
	 */
	public function setDropoffLocation(Property\DropoffLocation $dropoffLocation) {
		$this->dropoffLocation = $dropoffLocation;

		return $this;
	}

	/**
	 * Set dropoff time.
	 * 
	 * @param Property\DropoffTime $dropoffTime
	 * @return RentalCarReservation
	 */
	public function setDropoffTime(Property\DropoffTime $dropoffTime) {
		$this->dropoffTime = $dropoffTime;

		return $this;
	}

	/**
	 * Set pickup location.
	 * 
	 * @param Property\PickupLocation $pickupLocation
	 * @return RentalCarReservation
	 */
	public function setPickupLocation(Property\PickupLocation $pickupLocation) {
		$this->pickupLocation = $pickupLocation;

		return $this;
	}

	/**
	 * Set pickup time.
	 * 
	 * @param Property\PickupTime $pickupTime
	 * @return RentalCarReservation
	 */
	public function setPickupTime(Property\PickupTime $pickupTime) {
		$this->pickupTime = $pickupTime;

		return $this;
	}
}