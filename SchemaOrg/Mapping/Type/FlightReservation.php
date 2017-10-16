<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FlightReservation.
 */
class FlightReservation {

	/**
	 * @var Property\BoardingGroup
	 */
	private $boardingGroup;

	/**
	 */
	private $id;

	/**
	 * @var Property\PassengerPriorityStatus
	 */
	private $passengerPriorityStatus;

	/**
	 * @var Property\PassengerSequenceNumber
	 */
	private $passengerSequenceNumber;

	/**
	 * @var Property\SecurityScreening
	 */
	private $securityScreening;

	/**
	 * FlightReservation constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get boarding group.
	 * 
	 * @return Property\BoardingGroup
	 */
	public function getBoardingGroup() {
		return $this->boardingGroup;
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
	 * Get passenger priority status.
	 * 
	 * @return Property\PassengerPriorityStatus
	 */
	public function getPassengerPriorityStatus() {
		return $this->passengerPriorityStatus;
	}

	/**
	 * Get passenger sequence number.
	 * 
	 * @return Property\PassengerSequenceNumber
	 */
	public function getPassengerSequenceNumber() {
		return $this->passengerSequenceNumber;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FlightReservation';
	}

	/**
	 * Get security screening.
	 * 
	 * @return Property\SecurityScreening
	 */
	public function getSecurityScreening() {
		return $this->securityScreening;
	}

	/**
	 * Set boarding group.
	 * 
	 * @param Property\BoardingGroup $boardingGroup
	 * @return FlightReservation
	 */
	public function setBoardingGroup(Property\BoardingGroup $boardingGroup) {
		$this->boardingGroup = $boardingGroup;

		return $this;
	}

	/**
	 * Set passenger priority status.
	 * 
	 * @param Property\PassengerPriorityStatus $passengerPriorityStatus
	 * @return FlightReservation
	 */
	public function setPassengerPriorityStatus(Property\PassengerPriorityStatus $passengerPriorityStatus) {
		$this->passengerPriorityStatus = $passengerPriorityStatus;

		return $this;
	}

	/**
	 * Set passenger sequence number.
	 * 
	 * @param Property\PassengerSequenceNumber $passengerSequenceNumber
	 * @return FlightReservation
	 */
	public function setPassengerSequenceNumber(Property\PassengerSequenceNumber $passengerSequenceNumber) {
		$this->passengerSequenceNumber = $passengerSequenceNumber;

		return $this;
	}

	/**
	 * Set security screening.
	 * 
	 * @param Property\SecurityScreening $securityScreening
	 * @return FlightReservation
	 */
	public function setSecurityScreening(Property\SecurityScreening $securityScreening) {
		$this->securityScreening = $securityScreening;

		return $this;
	}
}