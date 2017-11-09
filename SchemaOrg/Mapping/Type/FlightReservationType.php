<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FlightReservationType.
 * 
 * @method FlightReservationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FlightReservationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FlightReservationType setBookingTime(Property\BookingTimeProperty $bookingTime)
 * @method FlightReservationType setBroker(Property\BrokerProperty $broker)
 * @method FlightReservationType setDescription(Property\DescriptionProperty $description)
 * @method FlightReservationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FlightReservationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FlightReservationType setImage(Property\ImageProperty $image)
 * @method FlightReservationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FlightReservationType setModifiedTime(Property\ModifiedTimeProperty $modifiedTime)
 * @method FlightReservationType setName(Property\NameProperty $name)
 * @method FlightReservationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FlightReservationType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method FlightReservationType setProgramMembershipUsed(Property\ProgramMembershipUsedProperty $programMembershipUsed)
 * @method FlightReservationType setProvider(Property\ProviderProperty $provider)
 * @method FlightReservationType setReservationFor(Property\ReservationForProperty $reservationFor)
 * @method FlightReservationType setReservationId(Property\ReservationIdProperty $reservationId)
 * @method FlightReservationType setReservationStatus(Property\ReservationStatusProperty $reservationStatus)
 * @method FlightReservationType setReservedTicket(Property\ReservedTicketProperty $reservedTicket)
 * @method FlightReservationType setSameAs(Property\SameAsProperty $sameAs)
 * @method FlightReservationType setTotalPrice(Property\TotalPriceProperty $totalPrice)
 * @method FlightReservationType setUnderName(Property\UnderNameProperty $underName)
 * @method FlightReservationType setUrl(Property\UrlProperty $url)
 */
class FlightReservationType extends ReservationType {

	/**
	 * @var Property\BoardingGroupProperty
	 */
	private $boardingGroup;

	/**
	 * @var Property\PassengerPriorityStatusProperty
	 */
	private $passengerPriorityStatus;

	/**
	 * @var Property\PassengerSequenceNumberProperty
	 */
	private $passengerSequenceNumber;

	/**
	 * @var Property\SecurityScreeningProperty
	 */
	private $securityScreening;

	/**
	 * Get boarding group.
	 * 
	 * @return Property\BoardingGroupProperty
	 */
	public function getBoardingGroup() {
		return $this->boardingGroup;
	}

	/**
	 * Get passenger priority status.
	 * 
	 * @return Property\PassengerPriorityStatusProperty
	 */
	public function getPassengerPriorityStatus() {
		return $this->passengerPriorityStatus;
	}

	/**
	 * Get passenger sequence number.
	 * 
	 * @return Property\PassengerSequenceNumberProperty
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
	 * @return Property\SecurityScreeningProperty
	 */
	public function getSecurityScreening() {
		return $this->securityScreening;
	}

	/**
	 * Set boarding group.
	 * 
	 * @param Property\BoardingGroupProperty $boardingGroup
	 * @return FlightReservationType
	 */
	public function setBoardingGroup(Property\BoardingGroupProperty $boardingGroup) {
		$this->boardingGroup = $boardingGroup;

		return $this;
	}

	/**
	 * Set passenger priority status.
	 * 
	 * @param Property\PassengerPriorityStatusProperty $passengerPriorityStatus
	 * @return FlightReservationType
	 */
	public function setPassengerPriorityStatus(Property\PassengerPriorityStatusProperty $passengerPriorityStatus) {
		$this->passengerPriorityStatus = $passengerPriorityStatus;

		return $this;
	}

	/**
	 * Set passenger sequence number.
	 * 
	 * @param Property\PassengerSequenceNumberProperty $passengerSequenceNumber
	 * @return FlightReservationType
	 */
	public function setPassengerSequenceNumber(Property\PassengerSequenceNumberProperty $passengerSequenceNumber) {
		$this->passengerSequenceNumber = $passengerSequenceNumber;

		return $this;
	}

	/**
	 * Set security screening.
	 * 
	 * @param Property\SecurityScreeningProperty $securityScreening
	 * @return FlightReservationType
	 */
	public function setSecurityScreening(Property\SecurityScreeningProperty $securityScreening) {
		$this->securityScreening = $securityScreening;

		return $this;
	}
}