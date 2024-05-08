<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Describes a reservation for travel, dining or an event. Some reservations require tickets. Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, restaurant reservations, flights, or rental cars, use Offer.
 * 
 * @method ReservationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReservationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReservationType setDescription(Property\DescriptionProperty $description)
 * @method ReservationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReservationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReservationType setImage(Property\ImageProperty $image)
 * @method ReservationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReservationType setName(Property\NameProperty $name)
 * @method ReservationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReservationType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReservationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ReservationType setUrl(Property\UrlProperty $url)
 */
class ReservationType extends IntangibleType {

	/**
	 * @var Property\BookingTimeProperty
	 */
	private $bookingTime;

	/**
	 * @var Property\BrokerProperty
	 */
	private $broker;

	/**
	 * @var Property\ModifiedTimeProperty
	 */
	private $modifiedTime;

	/**
	 * @var Property\PriceCurrencyProperty
	 */
	private $priceCurrency;

	/**
	 * @var Property\ProgramMembershipUsedProperty
	 */
	private $programMembershipUsed;

	/**
	 * @var Property\ReservationForProperty
	 */
	private $reservationFor;

	/**
	 * @var Property\ReservationIdProperty
	 */
	private $reservationId;

	/**
	 * @var Property\ReservationStatusProperty
	 */
	private $reservationStatus;

	/**
	 * @var Property\ReservedTicketProperty
	 */
	private $reservedTicket;

	/**
	 * @var Property\TotalPriceProperty
	 */
	private $totalPrice;

	/**
	 * @var Property\UnderNameProperty
	 */
	private $underName;

	/**
	 * Get booking time.
	 *
	 * @return Property\BookingTimeProperty
	 */
	public function getBookingTime() {
		return $this->bookingTime;
	}

	/**
	 * Get broker.
	 *
	 * @return Property\BrokerProperty
	 */
	public function getBroker() {
		return $this->broker;
	}

	/**
	 * Get modified time.
	 *
	 * @return Property\ModifiedTimeProperty
	 */
	public function getModifiedTime() {
		return $this->modifiedTime;
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
	 * Get program membership used.
	 *
	 * @return Property\ProgramMembershipUsedProperty
	 */
	public function getProgramMembershipUsed() {
		return $this->programMembershipUsed;
	}

	/**
	 * Get reservation for.
	 *
	 * @return Property\ReservationForProperty
	 */
	public function getReservationFor() {
		return $this->reservationFor;
	}

	/**
	 * Get reservation id.
	 *
	 * @return Property\ReservationIdProperty
	 */
	public function getReservationId() {
		return $this->reservationId;
	}

	/**
	 * Get reservation status.
	 *
	 * @return Property\ReservationStatusProperty
	 */
	public function getReservationStatus() {
		return $this->reservationStatus;
	}

	/**
	 * Get reserved ticket.
	 *
	 * @return Property\ReservedTicketProperty
	 */
	public function getReservedTicket() {
		return $this->reservedTicket;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Reservation';
	}

	/**
	 * Get total price.
	 *
	 * @return Property\TotalPriceProperty
	 */
	public function getTotalPrice() {
		return $this->totalPrice;
	}

	/**
	 * Get under name.
	 *
	 * @return Property\UnderNameProperty
	 */
	public function getUnderName() {
		return $this->underName;
	}

	/**
	 * Set booking time.
	 *
	 * @param Property\BookingTimeProperty $bookingTime
	 * @return ReservationType
	 */
	public function setBookingTime(Property\BookingTimeProperty $bookingTime) {
		$this->bookingTime = $bookingTime;

		return $this;
	}

	/**
	 * Set broker.
	 *
	 * @param Property\BrokerProperty $broker
	 * @return ReservationType
	 */
	public function setBroker(Property\BrokerProperty $broker) {
		$this->broker = $broker;

		return $this;
	}

	/**
	 * Set modified time.
	 *
	 * @param Property\ModifiedTimeProperty $modifiedTime
	 * @return ReservationType
	 */
	public function setModifiedTime(Property\ModifiedTimeProperty $modifiedTime) {
		$this->modifiedTime = $modifiedTime;

		return $this;
	}

	/**
	 * Set price currency.
	 *
	 * @param Property\PriceCurrencyProperty $priceCurrency
	 * @return ReservationType
	 */
	public function setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency) {
		$this->priceCurrency = $priceCurrency;

		return $this;
	}

	/**
	 * Set program membership used.
	 *
	 * @param Property\ProgramMembershipUsedProperty $programMembershipUsed
	 * @return ReservationType
	 */
	public function setProgramMembershipUsed(Property\ProgramMembershipUsedProperty $programMembershipUsed) {
		$this->programMembershipUsed = $programMembershipUsed;

		return $this;
	}

	/**
	 * Set reservation for.
	 *
	 * @param Property\ReservationForProperty $reservationFor
	 * @return ReservationType
	 */
	public function setReservationFor(Property\ReservationForProperty $reservationFor) {
		$this->reservationFor = $reservationFor;

		return $this;
	}

	/**
	 * Set reservation id.
	 *
	 * @param Property\ReservationIdProperty $reservationId
	 * @return ReservationType
	 */
	public function setReservationId(Property\ReservationIdProperty $reservationId) {
		$this->reservationId = $reservationId;

		return $this;
	}

	/**
	 * Set reservation status.
	 *
	 * @param Property\ReservationStatusProperty $reservationStatus
	 * @return ReservationType
	 */
	public function setReservationStatus(Property\ReservationStatusProperty $reservationStatus) {
		$this->reservationStatus = $reservationStatus;

		return $this;
	}

	/**
	 * Set reserved ticket.
	 *
	 * @param Property\ReservedTicketProperty $reservedTicket
	 * @return ReservationType
	 */
	public function setReservedTicket(Property\ReservedTicketProperty $reservedTicket) {
		$this->reservedTicket = $reservedTicket;

		return $this;
	}

	/**
	 * Set total price.
	 *
	 * @param Property\TotalPriceProperty $totalPrice
	 * @return ReservationType
	 */
	public function setTotalPrice(Property\TotalPriceProperty $totalPrice) {
		$this->totalPrice = $totalPrice;

		return $this;
	}

	/**
	 * Set under name.
	 *
	 * @param Property\UnderNameProperty $underName
	 * @return ReservationType
	 */
	public function setUnderName(Property\UnderNameProperty $underName) {
		$this->underName = $underName;

		return $this;
	}
}