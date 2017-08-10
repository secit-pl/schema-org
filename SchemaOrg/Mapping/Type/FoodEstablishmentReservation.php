<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FoodEstablishmentReservation.
 */
class FoodEstablishmentReservation {

	/**
	 * @var Property\EndTime
	 */
	private $endTime;

	/**
	 */
	private $id;

	/**
	 * @var Property\PartySize
	 */
	private $partySize;

	/**
	 * @var Property\StartTime
	 */
	private $startTime;

	/**
	 * FoodEstablishmentReservation constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get end time.
	 * 
	 * @return Property\EndTime
	 */
	public function getEndTime() {
		return $this->endTime;
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
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FoodEstablishmentReservation';
	}

	/**
	 * Get start time.
	 * 
	 * @return Property\StartTime
	 */
	public function getStartTime() {
		return $this->startTime;
	}

	/**
	 * Set end time.
	 * 
	 * @param Property\EndTime $endTime
	 * @return FoodEstablishmentReservation
	 */
	public function setEndTime(Property\EndTime $endTime) {
		$this->endTime = $endTime;

		return $this;
	}

	/**
	 * Set party size.
	 * 
	 * @param Property\PartySize $partySize
	 * @return FoodEstablishmentReservation
	 */
	public function setPartySize(Property\PartySize $partySize) {
		$this->partySize = $partySize;

		return $this;
	}

	/**
	 * Set start time.
	 * 
	 * @param Property\StartTime $startTime
	 * @return FoodEstablishmentReservation
	 */
	public function setStartTime(Property\StartTime $startTime) {
		$this->startTime = $startTime;

		return $this;
	}
}