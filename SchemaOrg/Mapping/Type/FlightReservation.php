<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FlightReservation.
 * 
 * @method FlightReservation setAdditionalType(Property\AdditionalType $additionalType)
 * @method FlightReservation setAlternateName(Property\AlternateName $alternateName)
 * @method FlightReservation setBookingTime(Property\BookingTime $bookingTime)
 * @method FlightReservation setBroker(Property\Broker $broker)
 * @method FlightReservation setDescription(Property\Description $description)
 * @method FlightReservation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method FlightReservation setIdentifier(Property\Identifier $identifier)
 * @method FlightReservation setImage(Property\Image $image)
 * @method FlightReservation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method FlightReservation setModifiedTime(Property\ModifiedTime $modifiedTime)
 * @method FlightReservation setName(Property\Name $name)
 * @method FlightReservation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method FlightReservation setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method FlightReservation setProgramMembershipUsed(Property\ProgramMembershipUsed $programMembershipUsed)
 * @method FlightReservation setProvider(Property\Provider $provider)
 * @method FlightReservation setReservationFor(Property\ReservationFor $reservationFor)
 * @method FlightReservation setReservationId(Property\ReservationId $reservationId)
 * @method FlightReservation setReservationStatus(Property\ReservationStatus $reservationStatus)
 * @method FlightReservation setReservedTicket(Property\ReservedTicket $reservedTicket)
 * @method FlightReservation setSameAs(Property\SameAs $sameAs)
 * @method FlightReservation setTotalPrice(Property\TotalPrice $totalPrice)
 * @method FlightReservation setUnderName(Property\UnderName $underName)
 * @method FlightReservation setUrl(Property\Url $url)
 */
class FlightReservation extends Reservation {

	/**
	 * @var Property\BoardingGroup
	 */
	private $boardingGroup;

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
	 * Get boarding group.
	 * 
	 * @return Property\BoardingGroup
	 */
	public function getBoardingGroup() {
		return $this->boardingGroup;
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